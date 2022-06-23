<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.3/examples/sticky-footer-navbar/">

    <title>PPID</title>

    <!-- Bootstrap core CSS -->
    <link href="../asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="../asset/css/galeri.css" rel="stylesheet">
    <link rel="stylesheet" href="../asset/css/diagram.css">
    <link href="../asset/img/rsud.png" rel="shortcut icon">

    <!-- Custom styles for this template -->
    <link href="../asset/css/sticky-footer-navbar.css" rel="stylesheet">

    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    <script>
      window.OneSignal = window.OneSignal || [];
      OneSignal.push(function() {
        OneSignal.init({
          appId: "ba344aa3-7baf-48d0-9de0-413daf735be5",
        });
      });
</script>
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <ul class="nav navbar-nav">
          <!-- <li><img class="image" border="0" src="asset/img/rsud.png"  width="42px" style="margin: 1px;padding: 0px color:white;"></li> -->
        </ul>
          <a class="navbar-brand" href="#">PPID</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
          
            <li class="active"><a href="../home">Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profil <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li><a href="rsud.php?page=vm">Visi Dan Misi</a></li>
                <li><a href="rsud.php?page=struktur">Struktur Organisasi RSUD Majenang</a></li>
                <li><a href="rsud.php?page=pro_struk">Profil Pejabat Struktural</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="rsud.php?page=sk">SK TIM PPID</a></li>
                <li><a href="rsud.php?page=s_ppid">Struktur Organisasi PPID RSUD</a></li>
                <li><a href="rsud.php?page=profil2">Profil PPID RSUD</a></li>
                <li><a href="rsud.php?page=t_w">Tugas Dan Wewenang PPID RSUD</a></li>
              </ul>
            </li>
            <li><a href="rsud.php?page=di_publik">Daftar Informasi Publik</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Informasi Publik <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li><a href="rsud.php?page=berkala">Berkala</a></li>
                <li><a href="rsud.php?page=serta_merta">Serta Merta</a></li>
                <li><a href="#">Setiap Saat</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="rsud.php?page=kecuali">Dikecualikan</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Permohonan Informasi <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li><a href="rsud.php?page=p_inf">Permohonan Informasi</a></li>
                <li><a href="rsud.php?page=p_keb">Pengajuan Keberatan</a></li>
                <li><a href="#">Statistik Permohonan Informasi</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Pengaduan</a></li>
              </ul>
            </li>
            <!-- <li><a href="#contact">Contact</a></li> -->
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <?php 
    if(isset($_GET['page'])){
        $page = $_GET['page'];

        switch ($page) {
            case 'vm':
                include "profil/vm.php";
                break;
            case 'struktur':
                include "profil/struktur.php";
                break;
            case 'pro_struk':
                include "profil/pro_struk.php";
                break;
            case 'sk':
                include "profil/sk.php";
                break;
            case 's_ppid':
                include "profil/s_ppid.php";
                break;
            case 'profil2':
                include "profil/profil2.php";
                break;
            case 't_w':
                include "profil/t_w.php";
                break;
            case 'di_publik':
                include "home/di_publik.php";
                break;
            case 'berkala':
                include "inf_publik/berkala.php";
                break;
            case 'serta_merta':
                include "inf_publik/serta_merta.php";
                break;
            case 'kecuali':
                include "inf_publik/kecuali.php";
                break;
            case 'p_inf':
                include "p_informasi/p_inf.php";
                break;
            case 'p_keb':
                include "p_informasi/p_keb.php";
                break; 
            case 'lkjip':
                include "dok_view/lkjip.php";
                break;
            case 'lkjip2020':
                include "dok_view/lkjip2020.php";
                break;   
           case 'rba':
                include "dok_view/rba.php";
                break;     
            default:
                echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                break;
        }
    }else{
        include "home/rsud.php";
    }

     ?>