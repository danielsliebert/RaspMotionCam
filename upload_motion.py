#!/usr/bin/python
import sys
import pymongo
from datetime import datetime
from pytz import timezone

#this file is called whenever motion is detected, it will upload a time
def main():

  db = connectMongo()
  motions = db.motions

  dto = datetime.now(timezone('UTC'))
  dto_pacific = dto.astimezone(timezone('US/Pacific')) #.localize(dto)
  dts = datetime.strftime(dto_pacific,"%Y-%m-%d %H:%M:%S")
  
  motion = {'time': dts}
  motions.insert_one(motion)

def connectMongo():
  connection = pymongo.MongoClient("mongodb://admin:admin@ds037175.mlab.com:37175/rpi_surveillance")
  db = connection.rpi_surveillance
  return db

if __name__ == "__main__":
  main()
