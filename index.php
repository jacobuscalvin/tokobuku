<!DOCTYPE html>
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
        <li class="bold"><center><p class="flow-text">Silahkan Login Untuk Membeli Buku</p></li><br>
		
		
		
		<!--TANGGAL DAN WAKTU-->
		<center><script type='text/javascript'>
		<!--
		var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
		var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
		var date = new Date();
		var day = date.getDate();
		var month = date.getMonth();
		var thisDay = date.getDay(),
		thisDay = myDays[thisDay];
		var yy = date.getYear();
		var year = (yy < 1000) ? yy + 1900 : yy;
		document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
		//-->
		</script>
		<br>
		<br>
		<div id="clock" align=center></div>
            
		<script type="text/javascript">
		function startTime() {
		var today=new Date(),
        curr_hour=today.getHours(),
        curr_min=today.getMinutes(),
        curr_sec=today.getSeconds();
		curr_hour=checkTime(curr_hour);
		curr_min=checkTime(curr_min);
		curr_sec=checkTime(curr_sec);
		document.getElementById('clock').innerHTML=curr_hour+":"+curr_min+":"+curr_sec;
		}
		function checkTime(i) {
		if (i<10) {
        i="0" + i;
		}
		return i;
		}
		setInterval(startTime, 500);
		</script>
		
		
		
    </header>
    <main><div class="section no-pad-bot" id="index-banner">
        <div class="container">
          <h1 class="header center-on-small-only center">Perpustakaan Online</h1>
          <div class='row center'>
            <br><h4 class ="header col s12 light center">Warna Warni Masa Depan</h4>
          </div>
         
          <br>

        </div>
        <div class="github-commit">
          <div class="container">
            <div class="commit">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Silahkan Login Terlebih Dahulu:
            <a id="github-button" href="loginuser1.html" class="btn-flat right grey-text text-lighten-5 waves-effect waves-light hide-on-small-only">Login</a>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="section">

          <div class="row">
            <h3 class="col s12 light center header; color:brown darken-1;">Memudahkan anda untuk membeli buku secara online.</h3>
          </div>

          <!--   Promo Section   -->
          <div class="row">
            <div class="col s12 m4">
              <div class="center promo">
                <img class="circle responsive-img valign profile-image-login" src="images/logo.png" alt="" style="max-width: 40%; margin-top: 5rem;">
                <p class="promo-caption">Versi Terbaru</p>
                <p class="light center">Menyajikan buku-buku ter-update, berdasarkan survey terhadap penerbit langsung.</p>
              </div>
            </div>

            <div class="col s12 m4">
              <div class="center promo">
                <img class="circle responsive-img valign profile-image-login" src="images/logo.png" alt="" style="max-width: 40%; margin-top: 5rem;">
                <p class="promo-caption">Kualitas Buku</p>
                <p class="light center">Buku yang masih baru dan masih tersegel dengan baik, sehingga pembeli tidak perlu khawatir terhadap kualitas buku yang akan dibeli.</p>
              </div>
            </div>

            <div class="col s12 m4">
              <div class="center promo">
                <img class="circle responsive-img valign profile-image-login" src="images/logo.png" alt="" style="max-width: 40%; margin-top: 5rem;">
                <p class="promo-caption">Favorit</p>
                <p class="light center">Mengadakan survey terhadap masyarakat akan buku yang paling sering dibaca / laku dipasaran. Anda mencari buku yang populer? Kunjungi toko kami!</p>
              </div>
            </div>
          </div>

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
        © 2017 SMK Budaya Bangsa, Jacobus Calvin.</div>
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