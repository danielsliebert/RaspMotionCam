# RaspMotionCam

# Introduction
Our team created a motion-detecting surveillance device using a camera module attached to a Raspberry Pi. When motion is detected a script runs which uploads the current date and time to a cloud database. On our website, these times are pulled from the database and can be viewed to see trends in movement activity.

# Materials
Raspberry Pi Model 3 Model B

Raspberry Pi Camera Module V2

Raspberry Pi USB Power Supply

Camera Housing (optional)

SD Card

# Instructions

(These steps assume you have already setup your Raspberry Pi, and are able to access it remotely. For help with this, visit this link.)

1.	Make sure your packages are up to date using the rpi-update tool. Use the command “sudo apt-get install rpi-update” to achieve this

2.	Update packages with the command “sudo apt-get update” and “sudo apt-get upgrade”

3.	Open the raspi-config tool through the Terminal with the command “sudo raspi-config”, and select “Enable camera”. Hit “Enter”, then go to “Finish” to reboot

4. Install the motion package with the command “sudo apt-get install motion”

5. Configure motion with the command “sudo nano /etc/motion/motion.conf”:
daemon: set to ON
webcam_localhost: set to OFF
stream_port: set to port to stream video at
control_localhost: set to OFF
framerate: set to whatever you want the frames capture per second (make sure this is less than 5)
post_capture: set to how many frame you want capture after motion is detected

6. Run motion as a daemon service by running the command “sudo nano /etc/default/motion” and setting “start_motion_daemon=yes”

7.	Start motion with the command “sudo service motion start” (Video will now stream at [IP Address of Pi]:[stream_port])

8. Configure motion again with the command “sudo nano /etc/motion/motion.conf” and add the line “On_picture_save wput -B ./python upload_motion.py”. This will run a script to upload the current time to a mongoDB server every time motion is detected (this script can be found on our project's github, and edited to fit your server)

Your camera is now be set up to stream and detect motion. You can stream the video using the URL specified in step 7, and share/analyze motion data if you choose to upload it to your MongoDB in step 8.

# Conclusion
Through this project we enhanced our ability to work as a group, while developing our individual skills with Python, HTML/CSS/PHP, and MongoDB. Only one of us had prior experience with Python and web design, but by the end all of were able to contribute on all of these fronts.
More time would have allowed us to complete more of the planned, low-priority aspects of our project. For example, analytics regarding motion would have been fully implemented. Greater time towards presentation, such as site appearance and layout, would have been another focus.
Overall this project was an excellent learning experience for everyone involved.

# References
Thank you to Stazia Tronboll for hosting this quarterly project, and her dedication and readiness to assisting with any and all aspects of the project.
