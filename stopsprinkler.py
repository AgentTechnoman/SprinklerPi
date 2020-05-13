#!/usr/bin/python
import RPi.GPIO as GPIO
import time
import sys
import shutil
from time import localtime, strftime

GPIO.setmode(GPIO.BCM)

# init list with pin numbers

pinList = [4, 17, 27, 22, 18, 23, 24, 25]
#  3 = Garage Door Opener
#  9 = Front Yard Sprinkler
# 22 = Sprinklers by SwingSet
# 10 = Sprinklers in front of Patio
# 27 = Grapes Sprinkler

# loop through pins and set mode and state to 'low'
for i in pinList: 
    GPIO.setup(i, GPIO.OUT) 
    GPIO.output(i, GPIO.HIGH)

# main loop
#f = open("currentsprinklerstatus.php","w") #opens file with name of "test.txt"
#f.write("<?php \n $length ="+str(SprinklerTimer)+";\n $starttime="+str((time.strftime("%I:%M:%S")))+"; \n $zone='"+str(SprinklerZoneDesc)+"';?>")
#f.close()
try:

  GPIO.cleanup()
  CurrentTime = strftime("%-m/%-d/%y - %-I:%M %^p", localtime())
  f = open('history.php', 'a')
  f.write("<tr style='background-color:rgba(255,128,128,0.6)'><td>"+CurrentTime+"</td><td>Manually Stopped</td><td>&nbsp;</tr>\n")
  f.close()  

# End program cleanly with keyboard
except KeyboardInterrupt:
  print "  Quit"

# Reset GPIO settings
  GPIO.cleanup()
