import ftplib

server='212.175.166.122'
username='izmirftp'
password='Izmir2014'
ftp_connection=ftplib.FTP(server, username, password)
remote_path='TRT_IZMIR/Transfer'
ftp_connection.cwd(remote_path)
fh=open("E:/Logo/logolu/1.mxf_ logolu.mp4",'rb') 
ftp_connection.storbinary('STOR 1.mxf_ logolu.mp4', fh) 
fh=open("E:/Logo/logolu/KATIL FARELER son 30.mxf_logolu.mp4",'rb') 
ftp_connection.storbinary('STOR KATIL FARELER son 30.mxf_logolu.mp4', fh) 
fh.close()