
<?

$channel="http://m.kankanews.com/web/fakeESI?module=catchUP&info=81_2017-07-16";
$url_2=g_contents($channel);
preg_match ( '#live":"(.*?)",#', $url_2, $vn );
preg_match ( '#paras":"(.*?)",#', $url_2, $v );
$url=str_replace('\/',"/",$vn[1])."&_mode=1".$v[1];


function g_contents($url) {
        $user_agent = 'User-Agent: Mozilla/5.0 (Linux; U; Android 4.4.4; zh-CN; E653Lw Build/KTU84P) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 UCBrowser/10.9.6.736 U3/0.8.0 Mobile Safari/534.30';
        $ch = curl_init ();
        $timeout = 30;
        curl_setopt ( $ch, CURLOPT_URL, $url );
        curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
        curl_setopt ( $ch, CURLOPT_CONNECTTIMEOUT, $timeout );
        curl_setopt ( $ch, CURLOPT_USERAGENT, $user_agent );
        @ $c = curl_exec ( $ch );
        curl_close ( $ch );
        return $c;
}
$pindao=urldecode($_GET['pindao']);
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>东方卫视在线直播-乐视直播网</title>
<meta name="Keywords" content="东方卫视直播，东方卫视在线直播" />
<meta name="description" content="网络电视直播中心提供东方卫视在线直播,东方卫视直播网,东方卫视,浙江电视台,东方卫视在线观看，在线直播" /><style type="text/css">body,html,div{padding: 0;margin: 0;width:100%;height:100%;psotion:relative;"}</style>
</head>
<body>
<div id="a1" style="psotion:relative;"></div>
<script type="text/javascript" src="ckplayer/ckplayer.js" charset="utf-8"></script>
<script type="text/javascript">
    var vid='<?php echo $_GET['vid'];?>';
	var purl='<?echo $url;?>';
	var flashvars={
	    f: 'ckplayer/m3u8.swf', 		//使用swf向播放器发送视频地址进行播放
		a: encodeURIComponent(purl), 
            loaded:'loadedHandler',    
	    c: 0,		//调用 ckplayer.js 配置播放器
	    p: 1,		//自动播放视频
	    s: 4,		//flash插件形式发送视频流地址给播放器进行播放
	    lv: 1
	};
	var params={bgcolor:'#FFF',allowFullScreen:true,allowScriptAccess:'always',wmode:'transparent'};
	var isiPad = navigator.userAgent.match(/iPad|iPhone|Linux|Android|iPod/i) != null;
    if (isiPad) {
        document.getElementById('a1').innerHTML = '<video src="'+purl+'" controls="controls" autoplay="autoplay" width="100%" height="460" style="psotion:relative;""></video>'
	}else{
	    CKobject.embedSWF('ckplayer/ckplayer.swf','a1','ckplayer_a1','100%','100%',flashvars,params);
	}
  </script>
</body>
</html>
