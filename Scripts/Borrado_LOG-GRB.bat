forfiles /p "D:\Logs\Grabadora" /m Log*.* /d -90  /c "cmd /c del @file"
forfiles /p "D:\Logs\CTI" /m *CTI*.log /d -90  /c "cmd /c del @file"

forfiles /p "E:\grabaciones" /m v* /d -90  /c "cmd /c del @file"

   