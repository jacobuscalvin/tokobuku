<?php
session_start();
include "koneksi.php";

if(empty($_SESSION['username']) AND empty($_SESSION['password'])){
include "index.php";
}
else {

?>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a modern responsive CSS framework based on Material Design by Google. ">
    <title>Perpustakaan Online</title>
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <!--  Android 5 Chrome Color-->
    <meta name="theme-color" content="#EE6E73">
    <!-- CSS-->
    <link href="assest/css/prism.css" rel="stylesheet">
    <link href="assest/css/ghpages-materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="http://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script>
      window.liveSettings = {
        api_key: "a0b49b34b93844c38eaee15690d86413",
        picker: "bottom-right",
        detectlang: true,
        dynamic: true,
        autocollect: true
      };
    </script>
    <script src="//cdn.transifex.com/live.js"></script>
  </head>
  <body>
    <header>
      <div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav waves-effect waves-light circle hide-on-large-only"><i class="material-icons">menu</i></a></div>
      <ul id="nav-mobile" class="side-nav fixed">
        <li class="logo"><a id="logo-container" href="" class="brand-logo">
            <img class="circle responsive-img valign profile-image-login" src="images/logo1.jpg" alt="" style="max-width: 40%; margin-top: 1rem;"></a></li>
        <br><br><br>
        </li>
        <li class="bold"><a href="homeuser.php" class="waves-effect waves-teal; row 5m">Home</a></li>
        <li class="bold"><a href="daftarbukuuser.php" class="waves-effect waves-teal; row 5m">Daftar Buku</a></li>
        <li class="bold"><a href="logout.php" class="waves-effect waves-teal; row 5m">Logout</a></li>
		</ul>
    </header>
    <main><div class="section no-pad-bot" id="index-banner">
        <div class="container">
          <h1 class="header center-on-small-only center">Perpustakaan Online</h1>
          <div class='row center'>
            <h4 class ="header col s12 light center">Warna Warni Masa Depan</h4>
          </div>
         
          <div class="buysellads-header buysellads-homepage row center">
            <!-- CarbonAds Zone Code -->
            <script async type="text/javascript" src="//cdn.carbonads.com/carbon.js?zoneid=1673&serve=C6AILKT&placement=materializecss" id="_carbonads_js"></script>
          </div>
          <br>

        </div>
			<div class="github-commit">
            
          <div class="container">
		  <div class="commit" style="margin-left : 5rem">
		  </div>
		  
		<br><br><br>
			<div class="row">
			<div class="col s8 m4">
			<div class="card">
            <div class="card-image" align="center">
				<img src="images/3.jpg" style="width:240px ; height:300px">
				<span class="card-title"></span>
            </div>
            <div class="card-content">
				<blockquote style="color:grey">Judul Buku : <br> Hafalan Shalat Delisa</blockquote>
                <blockquote style="color:grey">Harga : Rp120.000,00</blockquote>
            </div>
            <div class="card-action" align="center">
				<a href="buku/b1.php" class="waves-effect waves-light btn purple">Lihat</a>
            </div>
			</div>
			</div>

			<div class="col s8 m4">
			<div class="card">
            <div class="card-image" align="center">
				<img src="images/2.jpg" style="width:240px ; height:300px">
				<span class="card-title"></span>
            </div>
            <div class="card-content">
				<blockquote style="color:grey">Judul Buku : <br> Filosofi Kopi</blockquote>
                <blockquote style="color:grey">Harga : Rp300.000,00</blockquote>
            </div>
            <div class="card-action" align="center">
				<a href="buku/b2.php" class="waves-effect waves-light btn purple">Lihat</a>
            </div>
			</div>
			</div>
			
			<div class="col s8 m4">
			<div class="card">
            <div class="card-image" align="center">
				<img src="images/4.jpg" style="width:240px ; height:300px">
				<span class="card-title"></span>
            </div>
            <div class="card-content">
				<blockquote style="color:grey">Judul Buku : <br> Halaman Terakhir</blockquote>
                <blockquote style="color:grey">Harga : Rp180.000,00</blockquote>
            </div>
            <div class="card-action" align="center">
				<a href="buku/b3.php" class="waves-effect waves-light btn purple">Lihat</a>
            </div>
			</div>
			</div>
			</div>
			
			<br><br>
			<div class="row">
			<div class="col s8 m4">
			<div class="card">
            <div class="card-image" align="center">
				<img src="images/6.jpg" style="width:240px ; height:300px">
				<span class="card-title"></span>
            </div>
            <div class="card-content">
				<blockquote style="color:grey">Judul Buku : <br>Kugapai Dia dengan Doa</blockquote>
                <blockquote style="color:grey">Harga : Rp90.000,00</blockquote>
            </div>
            <div class="card-action" align="center">
				<a href="buku/b4.php" class="waves-effect waves-light btn purple">Lihat</a>
            </div>
			</div>
			</div>

			<div class="col s8 m4">
			<div class="card">
            <div class="card-image" align="center">
				<img src="images/8.jpg" style="width:240px ; height:300px">
				<span class="card-title"></span>
            </div>
            <div class="card-content">
				<blockquote style="color:grey">Judul Buku : <br>Sweet Sonata</blockquote>
                <blockquote style="color:grey">Harga : Rp140.000,00</blockquote>
            </div>
            <div class="card-action" align="center">
				<a href="buku/b5.php" class="waves-effect waves-light btn purple">Lihat</a>
            </div>
			</div>
			</div>
			
			<div class="col s8 m4">
			<div class="card">
            <div class="card-image" align="center">
				<img src="images/9.jpg" style="width:240px ; height:300px">
				<span class="card-title"></span>
            </div>
            <div class="card-content">
				<blockquote style="color:grey">Judul Buku : <br>Diary of a Wimpy Kid</blockquote>
                <blockquote style="color:grey">Harga : Rp50.000,00</blockquote>
            </div>
            <div class="card-action" align="center">
				<a href="buku/b6.php" class="waves-effect waves-light btn purple">Lihat</a>
            </div>
			</div>
			</div>
			</div>

			
			
			

			</div>
			</div>
			</div>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>






    </main>    <footer class="page-footer">
      <div class="container">
        <div class="row">
          <div class="col l4 s12">
			<h5 class="white-text">Hubungi Kami</h5>
            <p class="grey-text text-lighten-4">Taman Sakura 109 A <br>Jawa Barat, Bandung<br> Indonesia<br>(022) 9999991</p>
			</div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
        © 2017 SMK Budaya Bangsa, Jacobus Calvin.
        </div>
      </div>
    </footer>

    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script>if (!window.jQuery) { document.write('<script src="bin/jquery-2.1.1.min.js"><\/script>'); }
    </script>
    <script src="assest/js/jquery.timeago.min.js"></script>
    <script src="assest/js/prism.js"></script>
    <script src="assest/jade/lunr.min.js"></script>
    <script src="assest/jade/search.js"></script>
    <script src="assest/bin/materialize.js"></script>
    <script src="assest/js/init.js"></script>
    <!-- Twitter Button -->
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

    <!-- Google Plus Button-->
    <script src="https://apis.google.com/js/platform.js" async defer></script>

    <!--  Google Analytics  -->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-56218128-1', 'auto');
    ga('require', 'displayfeatures');
    ga('send', 'pageview');
    </script>

  </body>
</html>

<?php
}
?>