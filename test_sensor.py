#!/usr/bin/python
import sys
import Adafruit_DHT
import time

while True:
  humidity, temperature = Adafruit_DHT.read_retry(22, 4)
  print 'Temp: {0:0.1f} C   Humidity: {1:0.1f} %'.format(temperature, humidity)
  time.sleep(2)

  print "ohhhhh nooooooo"
