#!/usr/bin/python
import RPi.GPIO as GPIO
import time
import sys
import shutil
from time import localtime, strftime

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

for i in pinList: 
    GPIO.setup(i, GPIO.OUT) 
    GPIO.output(i, GPIO.HIGH)

try:
  GPIO.output(25, GPIO.LOW)
  CurrentTime = strftime("%-m/%-d/%y - %-I:%M %^P", localtime())
  f = open('history.php', 'a')
  f.write('<tr><td>'+CurrentTime+'</td><td>RV Parking - ALL</td><td>'+str(SprinklerTimerMin)+"</tr>\n")
  f.close()
  time.sleep(SprinklerTimer);
  GPIO.output(25, GPIO.HIGH)
  time.sleep(1);
  
  GPIO.output(24, GPIO.LOW)
  CurrentTime = strftime("%-m/%-d/%y - %-I:%M %^P", localtime())
  f = open('history.php', 'a')
  f.write('<tr><td>'+CurrentTime+'</td><td>Driveway - ALL</td><td>'+str(SprinklerTimerMin)+"</tr>\n")
  f.close()
  time.sleep(SprinklerTimer);
  GPIO.output(24, GPIO.HIGH)
  time.sleep(1);
  
  GPIO.output(23, GPIO.LOW)
  CurrentTime = strftime("%-m/%-d/%y - %-I:%M %^P", localtime())
  f = open('history.php', 'a')
  f.write('<tr><td>'+CurrentTime+'</td><td>Front Planters - ALL</td><td>'+str(SprinklerTimerMin)+"</tr>\n")
  f.close()
  time.sleep(SprinklerTimer);
  GPIO.output(23, GPIO.HIGH)
  time.sleep(1);
  
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
