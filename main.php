<!doctype html>
<html lang="en-US">
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0">
<head>
<meta charset="utf-8">
<style>body,html{overflow:hidden;background-color:#000;margin:0;padding:0;position:relative;margin:0;padding:0;height:100%;width:100%;box-sizing:border-box}.dow-erlay{display:none;position:absolute;z-index:10;margin:10px;right:0}#player{height:100%!important;width:100%!important;position:relative;background:#000}.loader{box-sizing:border-box;border:15px solid #f3f3f3;border-top:15px solid #3498db;border-bottom:15px solid #3498db;border-radius:50%;width:70px;height:70px;animation:spin 1s linear infinite;position:absolute;top:50%;left:50%;margin:-35px}@keyframes spin{0%{transform:rotate(0)}100%{transform:rotate(360deg)}}p{color:#fff;margin-top:40vh;font-size:22px;text-align:center}.jw-rightclick{display:none!important}#bar{position:fixed;top:0;right:0;z-index:999;color:red;font-weight:700;right:1em;top:1em;display:none}#bar::before{content:' ';height:.85em;width:.85em;background:currentColor;border-radius:50%;position:absolute;top:47%!important;left:-1em;transform:translateY(-50%)}.videocontent{position:relative;color:#fff}#list-server-more{z-index:1;padding:10px 0 0 0;position:absolute;color:#fff;top:0;right:8px;text-align:right;font-family:Arial,Helvetica,sans-serif}#show-server{color:#fff;padding:5px 50px;font-size:10px;background:url(../listbaru.png) no-repeat center center}.list-server-items{margin-top:10px;background:rgba(0,0,0,.7)}.list-server-items li{cursor:pointer;padding:6px 5px 6px 15px;color:#ccc;text-align:right;list-style:none;border-top:solid 1px #20201f;font-size:13px}.list-server-items li.active,.list-server-items li:hover{color:#fff}#load-iframe{display:none;position:relative}.list-server-items li:first-child{border:0}.list-server-items a{color:#ccc;text-decoration:none}.list-server-items .active a,.list-server-items a:hover{color:#fff}
.mirrordrivestats{ padding-right: 50px!important; color: wheat!important; background-color:black!important; max-width: 100px!important; padding: 5px!important; text-align: center!important;}</style>
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
    var api           = "md.php"; //api url get playlist
    document.oncontextmenu =new Function("return false;")
</script>
<script type="text/javascript" src="https://assets.mirrordrive.club/sh/mirrordrive.min.js"></script>
</head>
<body onselectstart="return false">
<div id="bar" data-id="1">1</div>
<div id="player"><div class="loader"></div></div>
<script>
</script>
</body>
</html>
