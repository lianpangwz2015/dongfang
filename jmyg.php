<?
$url=g_contents("https://m.tvsou.com/epg/SMG");
preg_match_all( '#<span class="start">(.*?)<\/span>#', $url, $r);
preg_match_all( '#<span class="name">(.*?)<\/span>#', $url, $t);
foreach($r[0] as $k=>$v){
$lrc=iconv("UTF-8", "GB2312//IGNORE", $t[0][$k]);
$liebiao.=$v.' '.$lrc.'<br>';
}

function g_contents($url) {
        $user_agent = '360 Video App/3.1.6 Android/4.2.2 QIHU';
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
?>

<html>
<head>
<title>东方卫视节目预告-乐视直播网</title>
<style type="text/css">
body {overflow:hidden;font-size: 25px;margin: 0px;background-color: #ffffff;}
.style1 {font-size: larger}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="Keywords" content="东方卫视节目预告" />
<meta name="description" content="乐视直播网，为您提供东方卫视节目预告" />

<!-- letvlive.com Baidu tongji analytics -->
<script>
var _hmt = _hmt || [];
(function() {
var hm = document.createElement("script");
hm.src = "//hm.baidu.com/hm.js?5812ace6a2c888fd44a4de29c849f5cf";
var s = document.getElementsByTagName("script")[0];
s.parentNode.insertBefore(hm, s);
})();
</script>
</head>

<body>
<table width="100%" border="0">
  <tr>
    <td ><? echo $liebiao;?></td>
    <td>&nbsp;<script type="text/javascript">
    /*360*300 创建于 2016-01-16*/
    var cpro_id = "u2494914";
</script>
<script src="http://cpro.baidustatic.com/cpro/ui/c.js" type="text/javascript"></script>
  </tr>
  <tr>
    <td colspan="2">&nbsp;<br><br>
      <span class="style1">所有节目预告均取自于互联网，如果没有节目预告，那可能是程序没有获取到。给您带来的不便，表示深表歉意！</span></td>
  </tr>
</table>




</body>
</html>
