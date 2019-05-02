@echo off

start chrome "http://localhost/logo/robot/"




timeout /T 15 /nobreak >nul
taskkill /IM chrome.exe /F

start python "c:/xampp/htdocs/logo/robot/robot.py"