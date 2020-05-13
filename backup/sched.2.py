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
                CurrentTime = strftime("%m/%d/%y - %-I:%M %^P", localtime())
                f = open('history.php', 'a')
                f.write('<tr><td>'+CurrentTime+'</td><td>RV Parking - ALL (Scheduled)</td><td>'+str(SprinklerTimerMin)+"</tr>\n")
                f.close()
                time.sleep(SprinklerTimer);
                GPIO.output(25, GPIO.HIGH)
                time.sleep(1);

                GPIO.output(24, GPIO.LOW)
                CurrentTime = strftime("%m/%d/%y - %-I:%M %^P", localtime())
                f = open('history.php', 'a')
                f.write('<tr><td>'+CurrentTime+'</td><td>Driveway - ALL (Scheduled)</td><td>'+str(SprinklerTimerMin)+"</tr>\n")
                f.close()
                time.sleep(SprinklerTimer);
                GPIO.output(24, GPIO.HIGH)
                time.sleep(1);

#                GPIO.output(23, GPIO.LOW)
#                CurrentTime = strftime("%m/%d/%y - %-I:%M %^P", localtime())
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

if '0' in open('check.2').read():
	# Run the cycle and update the check file...
	os.system('date=$(date +%-I\:%M\:%S\ %^p\ on\ %-m\/%-d\/%y); sudo pb push "Sprinklers started at $date (Cycle 2 of 2)"')
	cycle()
        os.system("echo 1 > check.2")

elif '1' in open('check.2').read():
        # No sprinklers tonight, just update the check file...
        os.system("echo 0 > check.2")

elif '2' in open('check.2').read():
	# Run the cycle, but do not change the check file (Only used when grass is in bad shape. Start of the season, etc.)
	os.system('date=$(date +%-I\:%M\:%S\ %^p\ on\ %-m\/%-d\/%y); sudo pb push "Sprinklers started at $date (Cycle 2 of 2)"')
	cycle()

else:
        print open('check.2').read()
	os.system('var=$(cat check.2); sudo pb push "Sprinkler scheduler 2 is jacked. Expected 0 or 1, got $var"')
