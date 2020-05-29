<!doctype html>
<html lang="en-US">
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0">
<head>
<meta charset="utf-8">
<style>body,html{overflow: hidden;background-color:#000; margin: 0; padding: 0;position:relative;margin:0;padding:0;height:100%;width:100%;box-sizing:border-box}.dow-erlay{display:none;position:absolute;z-index:10;margin:10px;right:0}#player{height:100%!important;;width:100%!important;;position:relative;background:#000}.loader{box-sizing:border-box;border:15px solid #f3f3f3;border-top:15px solid #3498db;border-bottom:15px solid #3498db;border-radius:50%;width:70px;height:70px;animation:spin 1s linear infinite;position:absolute;top:50%;left:50%;margin:-35px}@keyframes spin{0%{transform:rotate(0)}100%{transform:rotate(360deg)}}p{color: #fff;margin-top: 40vh;font-size: 22px;text-align: center;}
.jw-rightclick { display: none !important; } #bar{position:fixed;top:0;right:0;z-index:999;color:red;font-weight:700;right:1em;top:1em;display:none;}#bar::before{content:' ';height:.85em;width:.85em;background:currentColor;border-radius:50%;position:absolute;top:47%!important;left:-1em;transform:translateY(-50%)}
</style>
<script type="text/javascript" src="https://assets.mirrordrive.club/node.js?v=2.9"></script>
<?php if($_GET['is_admin'] == true){
$admin = 'ya';
}else{
$admin = 'na';
} ?>
<script type="text/javascript">
    var data_hls_mp4  = "<?php echo $_GET['id']; ?>";
    var gambar_poster = "YOUR_COVER_PLAYER";
    var errortype     = 'text';
    var errurl        = null;
    var adshow        = '<?php echo $admin; ?>';
    var duit_js       = 'YOUR_ADS_XML_VAST';
	var api           = "md.php";
	document.oncontextmenu =new Function("return false;")
</script>
<script type="text/javascript" src="https://assets.mirrordrive.club/app_debug.js?v=2.5"></script>
</head>
<body onselectstart="return false">
<div id="bar" data-id="1">1</div>
<div id="player"><div class="loader"></div></div>
<script>
    </script>
</body>
</html>
