import os
import shutil

cmd=('D:/Logo/ffmpeg.exe -i "D:/Logo/logosuz/AKIL ISARET GENEL IZL INSANm.mxf" -i D:/Logo/belgesel_hd_new.png -filter_complex "[0:v][1:v] overlay=40:40"  "D:/logo/logolu/AKIL ISARET GENEL IZL INSANm.mxf_logolu.mp4"' )
os.system(cmd)

os.system('winscp.com /script=SyncToRemoteScript.txt')

MAIN=r'D:/Logo/biten/'
DIRS=r'D:/Logo/logosuz/'
for root,subdirs,files in os.walk(DIRS):
    print('root',root)
    print('subdirs',subdirs)
    print('files',files)
for file in files:
	path=os.path.join(root,file)
	shutil.move(path,MAIN)
