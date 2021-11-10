#!/usr/bin/python
import os
import RPi.GPIO as GPIO
import time
import sys
import shutil
from time import localtime, strftime

def cycle():
	for i in pinList:
                GPIO.setup(i, GPIO.OUT)
                GPIO.output(i, GPIO.HIGH)

        try:
                GPIO.output(25, GPIO.LOW)
                CurrentTime = strftime("%-m/%-d/%y - %-I:%M %^P", localtime())
                f = open('history.php', 'a')
                f.write('<tr id="sched"><td>'+CurrentTime+'</td><td>All Stations (Scheduled)</td><td>'+str(SprinklerTimerMin)+"</sched></tr>\n")
                f.close()
                time.sleep(SprinklerTimer);
                GPIO.output(25, GPIO.HIGH)
                time.sleep(1);

                GPIO.output(24, GPIO.LOW)
                time.sleep(SprinklerTimer);
                GPIO.output(24, GPIO.HIGH)
                time.sleep(1)
#                CurrentTime = strftime("%-m/%-d/%y - %-I:%M %^P", localtime())
#                f = open('history.php', 'a')
#                f.write('</td><td>All Stations (Scheduled) (Finished at '+CurrentTime+')</td><td>'+str(SprinklerTimerMin)+"</sched></tr>\n")
#                f.close();

#                GPIO.output(23, GPIO.LOW)
#                CurrentTime = strftime("%-m/%d/%y - %-I:%M %^P", localtime())
#                f = open('history.php', 'a')
#                f.write('<tr><td>'+CurrentTime+'</td><td>Front Planters - ALL (Scheduled)</td><td>'+str(SprinklerTimerMin)+"</tr>\n")
#                f.close()
#                time.sleep(SprinklerTimer);
#                GPIO.output(23, GPIO.HIGH)
#                time.sleep(1);

                # All done; shut 'er down.
                GPIO.cleanup()
                print "  Reset GPIO"
                print "  Cycle complete"

                # End program cleanly with keyboard
        except KeyboardInterrupt:
                print "  Keyboard interrupt; quitting..."
                # Reset GPIO settings
                GPIO.cleanup()
                print "  Reset GPIO"

#Grab Variable from Command Line and Assign it
SprinklerTimer = int(sys.argv[1])*60
SprinklerTimerMin = int(sys.argv[1])

#SAFEGUARD FROM SPRINKLERS RUNNING TOO LONG
if SprinklerTimer > 1200:
        SprinklerTimer = 0

# Enable GPIO for use
GPIO.setmode(GPIO.BCM)

# init list with pin numbers
pinList = [4, 17, 27, 22, 18, 23, 24, 25]

#25 = RV Parking
#24 = Driveway
#23 = Planters
if '1' in open('active').read():
	if '0' in open('check').read():	# If Summer, every two days. If Fall, every 3 days. If Winter, none days.
		if "0831" >= time.strftime("%m%d") >= "0315":							# Between 3/15 - 8/31
			if '1' in open('debug').read():
				os.system('sudo pb push "checkfile 0 to 1"')
				os.system("echo 1 > check")
			else:
				os.system("echo 1 > check")
		elif "0314" >= time.strftime("%m%d") >= "0101" or "1231" >= time.strftime("%m%d") >= "1015": 	# Between 10/15 - 12/31 and 1/1 - 3/14
			if '1' in open('debug').read():
				os.system('sudo pb push "checkfile 0 to 0"')
				os.system("echo 0 > check")
			else:
				os.system("echo 0 > check")
		else: 												# Between 9/1 - 10/14
			if '1' in open('debug').read():
				os.system('sudo pb push "checkfile 0 to 2"')
				os.system("echo 2 > check")
			else:
				os.system("echo 2 > check")

	elif '1' in open('check').read():
		if '1' in open('debug').read():
			os.system('sudo pb push "checkfile 1 to 6"')
			os.system("echo 6 > check")
		else:
			os.system("echo 6 > check")

	elif '2' in open('check').read():	# No sprinklers tonight, just update the check file... (Day 1, Cycle 1 of 2)
		if '1' in open('debug').read():
			os.system('sudo pb push "checkfile 2 to 3"')
			os.system("echo 3 > check")
		else:
			os.system("echo 3 > check")

	elif '3' in open('check').read():	# No sprinklers tonight, just update the check file... (Day 1, Cycle 2 of 2)
		if '1' in open('debug').read():
			os.system('sudo pb push "checkfile 3 to 4"')
			os.system("echo 4 > check")
		else:
			os.system("echo 4 > check")

	elif '4' in open('check').read():	# No sprinklers tonight, just update the check file... (Day 2, Cycle 1 of 2)
		if '1' in open('debug').read():
			os.system('sudo pb push "checkfile 4 to 5"')
			os.system("echo 5 > check")
		else:
			os.system("echo 5 > check")

	elif '5' in open('check').read():	# No sprinklers tonight, just update the check file... (Day 2, Cycle 2 of 2)
		if '1' in open('debug').read():
			os.system('sudo pb push "checkfile 5 to 6"')
			os.system("echo 6 > check")
		else:
			os.system("echo 6 > check")

	elif '6' in open('check').read():	# Run the first cycle and update the check file...
		if '1' in open('debug').read():
			os.system('sudo pb push "checkfile 6 to 7, run cycle 1"')
			os.system("echo 7 > check")
		else:
			os.system('date=$(date +%-I\:%M\ %^p\ on\ %-m\/%-d\/%y); sudo pb push "Sprinklers started at $date (Cycle 1 of 2)"')
			cycle()
			os.system("echo 7 > check")

	elif '7' in open('check').read():	# Run the second cycle and RESET the check file...
		if '1' in open('debug').read():
			os.system('sudo pb push "checkfile 7 to 0, run cycle 2"')
			os.system("echo 0 > check")
		else:
			os.system('date=$(date +%-I\:%M\ %^p\ on\ %-m\/%-d\/%y); sudo pb push "Sprinklers started at $date (Cycle 2 of 2)"')
			cycle()
			os.system("echo 0 > check")

	elif '8' in open('check').read():	# Run the maintenance cycle - only used when grass is in bad shape (eg. Start of the season, etc.).
		os.system('date=$(date +%-I\:%M\ %^p\ on\ %-m\/%-d\/%y); sudo pb push "Sprinklers started at $date (Maintenance Cycle)"')
		cycle()
	
	else:
		os.system("echo invalid check status")
	
elif '0' in open('active').read():
	if '0' in open('check').read():		# Seasonal Deactivation. No action taken. Check file not updated.
		os.system("echo")

	elif '1' in open('check').read():	# Disabled for repair. Remind to fix broken pipes, etc. Check file not updated.
		os.system("echo")
		os.system('sudo pb push "Sprinklers down for repair, please resolve issue(s)."')
	else:
		os.system("echo invalid check status")

else:
	print open('check').read()
	os.system('var=$(cat check); sudo pb push "Sprinkler scheduler is jacked. Expected [from (0-8, d, m, w)]; got $var"')
