
Declare @bd varchar(15)
Declare @consulta varchar(1000)
set @bd= (SELECT max(cnombrebd) FROM copia.dbo.tbcopia)

DECLARE @path VARCHAR(256) -- path for backup files 
DECLARE @fileName VARCHAR(256) -- filename for backup 
DECLARE @fileDate VARCHAR(20) -- used for file name

SET @path = 'D:\BBDD\' 

SELECT @fileDate = CONVERT(VARCHAR(20),GETDATE(),112)


       SET @fileName = @path + @bd + '.BAK' 
       BACKUP DATABASE @bd TO DISK = @fileName 

 GO  
