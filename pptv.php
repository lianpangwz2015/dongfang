<?
include 'config.php';
?>
<html>
<head>
<title>乐视直播网-<? global $title; echo $title; ?></title>
<script type="text/javascript" src="js/letvlive.js"></script> 
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="Keywords" content="乐视湖南卫视,<? global $keyword; echo $keyword;?>" />
<meta name="description" content="<? global $description; echo $description;?>" />
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



<body topmargin="0" leftmargin="0" bgcolor="#000000" scroll=no>
<embed src="http://player.pplive.cn/live/2.12.10/player4live2.swf" allowFullScreen="true"  allowScriptAccess="never" allowNetworking="internal" FlashVars="pl=pptv://<? echo $_GET['id']?>&amp;playerType=live&amp;pid=175901" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash"width="100%" height="100%"></embed>
</body>
</html>

