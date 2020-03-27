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
    <main>	<div class="section no-pad-bot" id="index-banner">
			<div class="container">
			<h1 class="header center-on-small-only center">Perpustakaan Online</h1>
			<div class='row center'><br>
            <h4 class ="header col s12 light center">Warna Warni Masa Depan</h4>
			</div>
				

          <br>
</div> 
       
        <div class="github-commit"><h6><marquee>Melayani dengan sepenuh hati.
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												Menyediakan yang Anda perlukan adalah Visi kami.
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												Kepuasan Anda adalah Misi kami.
												</marquee></h6>
            
          <div class="container">
            <div class="commit" style="margin-left : 4rem">

<br><br>
<br><br>
<br>
			
			<h3>SELAMAT DATANG DI TOKO KAMI</h3>
            </div>
          </div>
        </div>
		
      </div>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>





    </main>    
	<footer class="page-footer">
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

</body>
</html>

<?php
}
?>