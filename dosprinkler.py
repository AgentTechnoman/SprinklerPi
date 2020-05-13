#!/usr/bin/python
import RPi.GPIO as GPIO
import time
import sys
import shutil
from time import localtime, strftime



#Grab Variable from Command Line and Assign it
SprinklerZone = int(sys.argv[1])
SprinklerTimer = int(sys.argv[2])*60
SprinklerTimerMin = int(sys.argv[2])
#SprinklerTimer = 1
#SprinklerZone = 22
if SprinklerTimer > 1200:
	SprinklerTimer = 0 #SAFEGUARD FROM SPRINKLERS RUNNING TOO LONG

#if SprinklerZone == 3:
#	SprinklerZone = 27 #Safeguard the Garage Door and set to Front Lawn
print SprinklerZone

GPIO.setmode(GPIO.BCM)

# init list with pin numbers

pinList = [4, 17, 27, 22, 18, 23, 24, 25]
#3 = Garage Door Opener
#9 = Front Yard Sprinkler NOW 24
#22 = Sprinklers by SwingSet
#10 = Sprinklers in front of Patio NOW 23
#27 = Grapes Sprinkler

if SprinklerZone == 25:
	SprinklerZoneDesc = 'RV Parking (Station 1)'
	CurrentTime = strftime("%-m/%-d/%y - %-I:%M %^P", localtime())
	f = open('history.php', 'a')
	f.write('<tr><td>'+CurrentTime+'</td><td>'+SprinklerZoneDesc+'</td><td>'+str(SprinklerTimerMin)+"</tr>\n")
	f.close()
elif SprinklerZone == 24:
	SprinklerZoneDesc = 'Driveway (Station 2)'
	CurrentTime = strftime("%-m/%-d/%y - %-I:%M %^P", localtime())
	f = open('history.php', 'a')
	f.write('<tr><td>'+CurrentTime+'</td><td>'+SprinklerZoneDesc+'</td><td>'+str(SprinklerTimerMin)+"</tr>\n")
	f.close()
elif SprinklerZone == 23:
	SprinklerZoneDesc = 'Front Planters (Station 3)'
	CurrentTime = strftime("%-m/%-d/%y - %-I:%M %^P", localtime())
	f = open('history.php', 'a')
	f.write('<tr><td>'+CurrentTime+'</td><td>'+SprinklerZoneDesc+'</td><td>'+str(SprinklerTimerMin)+"</tr>\n")
	f.close()
else: 
	SprinklerZoneDesc = 'None'
	CurrentTime = strftime("%-m/%-d/%y - %-I:%M %^P", localtime())
	f = open('history.php', 'a')
	f.write("<tr><td>Error</td><td>Error</td><td>Error</tr>\n")
	f.close()
# loop through pins and set mode and state to 'low'

for i in pinList: 
    GPIO.setup(i, GPIO.OUT) 
    GPIO.output(i, GPIO.HIGH)

# main loop
#f = open("currentsprinklerstatus.php","w") #opens file with name of "test.txt"
#f.write("<?php \n $length ="+str(SprinklerTimer)+";\n $starttime="+str((time.strftime("%I:%M:%S")))+"; \n $zone='"+str(SprinklerZoneDesc)+"';?>")
#f.close()
try:
  GPIO.output(SprinklerZone, GPIO.LOW)
  
  #shutil.copy2('currentsprinklerstatus.php', 'currentsprinklerstatus1.php')
  time.sleep(SprinklerTimer);
  GPIO.cleanup()
  #f = open("currentsprinklerstatus.php","w") #opens file with name of "test.txt"
  #f.write("<?php \n $zone='None';?>")
  #f.close()

# End program cleanly with keyboard
except KeyboardInterrupt:
  print "  Quit"

  #Reset GPIO settings
  GPIO.cleanup()
