@echo off
rem -- Check if argument is INSTALL or REMOVE

if not ""%1"" == ""INSTALL"" goto remove

"D:/Bitnami/nginxstack-1.12.0-0/nginx\scripts\servicenginx.exe" install
net start nginxstackNginx > NUL

goto end

:remove
rem -- STOP SERVICE BEFORE REMOVING

net stop nginxstackNginx > NUL

"D:/Bitnami/nginxstack-1.12.0-0/nginx\scripts\servicenginx.exe" uninstall

:end
exit
