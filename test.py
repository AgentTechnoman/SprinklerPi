#!/usr/bin/python
import os
import RPi.GPIO as GPIO
import time
import sys
import shutil
from time import localtime, strftime

if "0901" >= time.strftime("%m%d") >= "0315":	# Between March 15 and Septempber 1
	os.system("echo 'in range'")
else:						# Between September 1 and October 14
	os.system("echo 'not in range'")
