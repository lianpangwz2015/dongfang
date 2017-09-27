<?
$referer = $_SERVER['HTTP_REFERER'];
$selfurl = $_SERVER['HTTP_HOST'];
if(false == strpos($referer,$selfurl)){
$url="http://dongfang.letvlive.com";
    header("location:$url");
    exit(1);
}
?>
<html >
<head>
<title>东方卫视在线直播-乐视直播网</title>
<meta name="Keywords" content="东方卫视直播，东方卫视在线直播" />
<meta name="description" content="网络电视直播中心提供东方卫视在线直播,东方卫视直播网,东方卫视,浙江电视台,东方卫视在线观看，在线直播" />
</head>

<body topmargin="0" leftmargin="0" bgcolor="#000000" scroll=no>
<div id="a1" style="psotion:relative;"></div>

<script type="text/javascript">
   
	var purl='http://hls.live.kksmg.com/live/dtv2e49416f_20f9472e8e3b8b7b226a661e/playlist.m3u8';
	
	var isiPad = navigator.userAgent.match(/iPad|iPhone|Linux|Android|iPod/i) != null;
    if (isiPad) {
        document.getElementById('a1').innerHTML = '<video src="'+purl+'" controls="controls" autoplay="autoplay" width="100%" height="100%" style="psotion:relative;""></video>'
	}else{
	    document.writeln("<embed name=\'hunantv-player-1\' class=\'\' id=\'hunantv-player-1\' src=\'http://g.alicdn.com/de/prismplayer-flash/1.2.16/PrismPlayer.swf?vurl="+purl+"\'  quality=\'best\' allowscriptaccess=\'always\' wmode=\'Opaque\' allowfullscreen=\'true\'  type=\'application/x-shockwave-flash\' pluginspage=\'http://www.macromedia.com/go/getflashplayer\' height=\'100%\' width=\'100%\'></embed>");
	}
  </script>
</body>
</html>
