#!/usr/bin/python
import RPi.GPIO as GPIO
GPIO.setmode(GPIO.BCM)
pinList = [4, 17, 27, 22, 18, 23, 24, 25]
for i in pinList:
	GPIO.setup(i, GPIO.OUT)
	GPIO.output(i, GPIO.HIGH)

GPIO.cleanup()
print " Reset GPIO"
