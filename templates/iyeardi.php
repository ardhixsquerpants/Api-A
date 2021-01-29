<?php 
session_start();

if (!$_SESSION['berhasil']) {
	header("Location: login.php");
	die();
}


 ?>
 	
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css?ver=5.4">
  <title>-•ArdhiXsquerpant'S-卂卩丨丂•-</title>
<link rel="shortcut icon" href="https://1.bp.blogspot.com/-v-pd7c8NhyA/YAoIfIoUzwI/AAAAAAAAARQ/ctpbYWqVM-Yx2tmiptLokhND-b4KJlx4gCK4BGAYYCw/s113/IMG_20201112_182051_334.jpg">
  <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
  <meta name="title" content="-•4尺り1•-">
 
  <style media="screen">
    .body {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translateX(-50%) translateY(-50%);
      text-align: center;
    }
    h3, .salam {
      font-family: 'Caveat';
      color: white;
    }
    #particles-js{
      height:100vh;
    }
    i {
      color: #dc3545!important;
    }
  </style>
</head>
  <body style="background-color: white" class="is-preload" id="div_root">
    <table>
      <tr>
        <th class="eg1">API</th>
        <th class="eg2">Description</th>
        <th class="eg4">Parameter</th>
        <th class="eg3">Usage</th>
      </tr>
        <td bgcolor="red">Instagram Image/Video Downloader</td>
        <td>Mengambil Link download dari link post Instagram.</td>
        <td>url</td>
        <td><a href="/api/ig?url=https://www.instagram.com/p/CKocXXQpyJc">Example</a></td>
      </tr>
      <tr>
        <td bgcolor="red">Instagram Stalker</td>
        <td>Menampilkan jumlah foll, jumlah post, bio, dll dari akun Instagram.</td>
        <td>username</td>
        <td><a href="/api/stalk?username=ardhixsquerpants">Example</a></td>
      </tr>
      <tr>
        <td bgcolor="red">Jadwal Sholat sesuai Daerah</td>
        <td>Mengambil Jadwal Sholat sesuai Daerah. Untuk melihat daerah-daerah yang tersedia, <a href="/daerah">lihat disini</a>.</td>
        <td>daerah</td>
        <td><a href="/api/jadwalshalat?daerah=Bogor">Example</a></td>
      </tr>
      <tr>
      	<td bgcolor="red">Informasi Cuaca</td>
      	<td>Mengambil informasi cuaca sesuai tempat/daerah/lokasi.</td>
      	<td>q</td>
      	<td><a href="/api/cuaca?q=Bogor">Example</a></td>
      </tr>
        <td bgcolor="red">Random Quotes</td>
        <td>Mengambil kutipan kutipan dari tokoh-tokoh dunia.</td>
        <td>-</td>
        <td><a href="/api/randomquotes">Example</a></td>
      </tr>
      <tr>
        <td bgcolor="red">Random Anime Quotes</td>
        <td>Mengambil kutipan kutipan dari tokoh-tokoh anime.</td>
        <td>-</td>
        <td><a href="/api/quotesnime/random">Example</a></td>
      </tr>
      <tr>
        <td bgcolor="red">Wikipedia.</td>
        <td>Mencari apapun yang ada di wikipedia.</td>
        <td>q</td>
        <td><a href="/api/wiki?q=Pisang">Example</a></td>
      </tr>
      <tr>
        <td bgcolor="red">Random Waifu</td>
        <td>Mengambil Random Waifu dari mywaifulist.moe</td>
        <td>-</td>
        <td><a href="/api/waifu">Example</a></td>
      </tr>
      <tr>
      <tr>
      	<td bgcolor="red">Info Gempa</td>
      	<td>Mengambil data gempa dari bmkg</td>
      	<td>-</td>
      	<td><a href="/api/infogempa">Example</a></td>
      </tr>
        <td bgcolor="red">Random Nekonime</td>
        <td>Mengambil Random Nekonime</td>
        <td>-</td>
        <td><a href="/api/nekonime">Example</a></td>
      </tr>
      <tr>
        <td bgcolor="red">Search Chord Guitar</td>
        <td>Mencari chord gitar dari chordindonesia.com.</td>
        <td>q</td>
        <td><a href="/api/chord?q=Mantan">Example</a></td>
      </tr>
      <tr>
        <td bgcolor="red">Dewabatch scraper</td>
        <td>Mencari info anime dari website dewabatch.com</td>
        <td>q</td>
        <td><a href="/api/dewabatch?q=Naruto">Example</a></td>
      </tr>
      <tr>
      	<td bgcolor="red">Kusonime scraper</td>
      	<td>Mencari info anime dari website kusonime.com</td>
      	<td>q</td>
      	<td><a href="/api/kuso?q=Naruto">Example</a></td>
      </tr>
      <tr>
      	<td bgcolor="red">Otakudesu scraper</td>
      	<td>Mencari info anime dari website otakudesu.tv</td>
      	<td>q</td>
      	<td><a href="/api/otakudesu?q=Naruto">Example</a></td>
   	  </tr>
   	  <tr>
   	  	<td bgcolor="red">Komiku scraper</td>
   	  	<td>Mencari info manga dari website komiku.co.id</td>
   	  	<td>q</td>
   	  	<td><a href="/api/komiku?q=kanojo+okarishimasu">Example</a></td>
   	  </tr>
   	  <tr>
   	  	<td bgcolor="red">SPAM CALL</td>
             <td>Mengirim spam OTP call</td>
   	  	<td>no</td>
   	  	<td><a href="/api/spamcall?no=88294052009">Example</a></td>
   	  </tr>
   <tr>
   	  	<td bgcolor="red">SPAM SMS</td>
   	  	<td>Mengirim spam OTP sms</td>
   	  	<td>no&jum</td>
   	  	<td><a href="/api/spamsms?no=088294052009&jum=3">Example</a></td>
   	  </tr>
    <!--<p align="center">© 2020<a href="https://www.instagram.com/ardhixsquerpants">Ardhi Xsquerpant'S</a></p>--!>
      
<style>
		body{
			background-image:url(http://ardhixsquerpants.phpnet.us/4RD1.jpg);
			background-size:cover;
			background-attachment: fixed;
		}
		p{
			color:white;
		}
	</style>
</head>

</body>
</html>