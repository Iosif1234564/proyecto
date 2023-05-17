@echo off

start sqlcmd -S 172.25.14.179\SQLEXPRESS -U usrsyscom -P usrsyscom -i c:\vcalidad\scripts\Backup_volumen.sql 



exit