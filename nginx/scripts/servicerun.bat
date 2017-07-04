@echo off
rem START or STOP PHP FPM Service
rem --------------------------------------------------------
rem Check if argument is STOP or START

if not ""%1"" == ""START"" goto stop

net start nginxstackNginx

goto end
:stop

net stop nginxstackNginx

:end
exit
