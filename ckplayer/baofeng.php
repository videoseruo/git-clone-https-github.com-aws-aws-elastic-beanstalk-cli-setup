<?php
error_reporting(0);
header("Content-Type: text/html; charset=utf-8"); 
// ����Ƿ�ֱ�ӷ��ʱ�ҳ��
if( isset($_SERVER['HTTP_REFERER']) ) {
    $url_array = explode('http://', $_SERVER['HTTP_REFERER']);
    $url = explode('/', $url_array[1]);
    if($_SERVER['SERVER_NAME'] != $url[0]) {
        // �����Ǵӱ�վ����;
        exit('Access Denied! You are not coming from the site!');
    }
} else {// ��ֱֹ�ӷ��ʴ�ҳ;
    exit('Access Denied! Please do not load this page directly.');
}
$url1 = $_GET['v']; 
$url="http://acfunfix.sinaapp.com/mama.php?url=$url1&callback=MAMA2_HTTP_JSONP_CALLBACK0";
$info=file_get_contents($url);
$info = str_replace('\/','/',$info);
$info = str_replace('http://122.72.102.81/','http://220.167.100.155/',$info);
$info = str_replace('http://122.72.102.82/','http://220.167.100.155/',$info);
$info = str_replace('http://122.72.102.83/','http://220.167.100.155/',$info);
$info = str_replace('http://122.72.102.84/','http://220.167.100.155/',$info);
$info = str_replace('http://122.72.102.85/','http://220.167.100.155/',$info);
$info = str_replace('http://122.72.102.86/','http://220.167.100.155/',$info);
$info = str_replace('http://122.72.102.87/','http://220.167.100.155/',$info);
$info = str_replace('http://122.72.102.88/','http://220.167.100.155/',$info);
$info = str_replace('http://122.72.102.89/','http://220.167.100.155/',$info);
$info = str_replace('http://122.72.102.80/','http://220.167.100.155/',$info);
preg_match('|"mp4":(.*?)}|i',$info,$m);
preg_match('|":"(.*?)"|i',$m[1],$m1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
body {
	background-color: #000;
	margin-left: 0px;
	margin-top: 0px;
}
a:link {
	color: #093;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #093;
}
a:hover {
	text-decoration: underline;
	color: #093;
}
a:active {
	text-decoration: none;
	color: #093;
}
body,td,th {
	color: #093;
}
</style>
</head>
<body>
<div id="a1"></div>
<script type="text/javascript" src="/ckplayer/ckplayer.js" charset="utf-8"></script>
<script type="text/javascript">
var h = window.parent.frames.Player.Height;
    var flashvars={
        f:'<?php echo $m1[1] ?>',
        c:0,
        p:1
    };
    var params={bgcolor:'#FFF',allowFullScreen:true,allowScriptAccess:'always',wmode:'transparent'};
    var video=['<?php echo $m1[1] ?>->video/mp4'];
    CKobject.embed('/ckplayer/ckplayer.swf','a1','ckplayer_a1','100%',h,false,flashvars,video,params);
</script>
</body>
</html>