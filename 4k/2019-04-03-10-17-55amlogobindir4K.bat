E:\Logo\ffmpeg -i "E:\Logo\logosuz\Anadolunun Gozleri 10.mxf" -vf scale=1920:1080 "E:\Logo\logolu\Anadolunun Gozleri 10.mxf_4kto1080p.mp4" 
 E:\Logo\ffmpeg -i "E:\Logo\logolu\Anadolunun Gozleri 10.mxf_4kto1080p.mp4" -i E:\Logo\belgesel_hd.png -filter_complex "[0:v][1:v] overlay=60:50"  "E:\Logo\logolu\Anadolunun Gozleri 10.mxf_logolu.mp4" 
 del "E:\Logo\logolu\Anadolunun Gozleri 10.mxf_4kto1080p.mp4" 
