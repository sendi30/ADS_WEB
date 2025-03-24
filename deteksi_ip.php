<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>Menampilkan informasi IP, jenis Browser dan jenis Perangkat kepada pengunjung situs web</title>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<link rel='stylesheet' href='css/bootstrap.min.css'>
		<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'></script>
		<script src='js/bootstrap.min.js'></script>
	</head>
<body style="margin-top: 25px; margin-left: 50px">
<?php
// deteksi IP pribadi
$ip_pribadi=$_SERVER['REMOTE_ADDR'];
// deteksi IP utama
$ip_utama = gethostbyaddr($_SERVER['REMOTE_ADDR']);
// deteksi perangkat
$deteksi_perangkat = preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
if($deteksi_perangkat) {
    $perangkat = "Handphone, Tablet atau sejenisnya";
}
else {
    $perangkat = "Komputer atau Notebook";
}
// deteksi browser
if(strpos($_SERVER['HTTP_USER_AGENT'], 'Netscape')) {
    $browser = 'Netscape';
}
else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox')) {
    $browser = 'Mozilla Firefox';
}
else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome')) {
    $browser = 'Google Chrome';
}
else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Opera')) {
    $browser = 'Opera';
}
else if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE')) {
    $browser = 'Internet Explorer';
}
else {
    $browser = 'Lainnya';
}  
?>
<!–– menampilkan informasi yang didapatkan  ––>
	<strong><?php echo "<br>IP address utama anda :</strong> ".$ip_utama;?>
	<strong><?php echo "<br>IP address anda :</strong> ".$ip_pribadi;?>
	<strong><?php echo "<br>Perangkat :</strong> ".$perangkat;?>
	<strong><?php echo "<br>Browser :</strong> ".$browser;?>
</body>
</html>