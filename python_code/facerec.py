import cv2
import numpy as np 
import face_recognition
import os
from datetime import date
from datetime import datetime
import time
#import attendancemarking
import markattendance


def findEncodings(images):
    encodeList = []
    for img in images:
        img = cv2.cvtColor(img,cv2.COLOR_BGR2RGB)
        encode = face_recognition.face_encodings(img)[0]
        encodeList.append(encode)
    return encodeList


def capture(cap, s):
    success, img = cap.read()
    imgS = cv2.resize(img, (0, 0), None, 0.25, 0.25)
    imgS = cv2.cvtColor(img, cv2.COLOR_BGR2RGB)

    facesCurFrame = face_recognition.face_locations(imgS)
    encodesCurFrame = face_recognition.face_encodings(imgS, facesCurFrame)

    for encodeFace, faceLoc in zip(encodesCurFrame, facesCurFrame):
        matches = face_recognition.compare_faces(encodeListKnown, encodeFace)
        faceDis = face_recognition.face_distance(encodeListKnown, encodeFace)
        matchIndex = np.argmin(faceDis)

        if matches[matchIndex]:
            name = classNames[matchIndex]
            y1, x2, y2, x1 = faceLoc
            cv2.rectangle(img, (x1, y1), (x2, y2), (0, 255, 0), 2)
            cv2.rectangle(img, (x1, y2 - 35), (x2, y2), (0, 255, 0), cv2.FILLED)
            cv2.putText(img, name, (x1 + 6, y2 - 6), cv2.FONT_HERSHEY_COMPLEX, 1, (255, 255, 255), 2)
            if name not in s:
                s.append(name)

    cv2.imshow('vidpic', img)
    cv2.waitKey(10)


def start1(cap, studentslist1):
    delay = 20 * 0.5  ##running 
    close_time = time.time() + delay
    while True:
        if time.time() > close_time:
            cv2.destroyAllWindows()
            break
        capture(cap, studentslist1)


def start2(cap, studentslist2):
    delay = 20 * 0.5  
    close_time = time.time() + delay
    while True:
        if time.time() > close_time:
            cv2.destroyAllWindows()
            break
        capture(cap, studentslist2)


def start3(cap, studentslist3):
    delay = 20 * 0.5  #running for 10 sec
    close_time = time.time() + delay
    while True:
        if time.time() > close_time:
            cv2.destroyAllWindows()
            break
        capture(cap, studentslist3)


def Stop(m):
    print("Attendance stopped")
    time.sleep(m)


path = 'training_images'
images = []
classNames = []
studentslist1 = []
studentslist2 = []
studentslist3 = []
myList = os.listdir(path)

for cl in myList:
    curImg = cv2.imread(f'{path}/{cl}')
    images.append(curImg)
    classNames.append(os.path.splitext(cl)[0])
print(classNames)

encodeListKnown = findEncodings(images)
print('Encoding Complete')

cap = cv2.VideoCapture(0)
print("Attendance start")
print("1st hour attendance")
start1(cap,studentslist1)
Stop(3)  ##for 30 sec
print("2nd hour attendance")
start2(cap,studentslist2)
Stop(3)
print("3rd hour attendance")
start3(cap,studentslist3)
print(studentslist1)
print(studentslist2)
print(studentslist3)
print("hello")
#attendancemarking.attendance_marking_into_database(attendancelist)

markattendance.marking_attendance_into_database(studentslist1, studentslist2, studentslist3, classNames)
