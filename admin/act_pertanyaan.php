<?php 
session_start();
if (empty($_SESSION['username'])){
	header('location:../index.html');	
} else {
	include "../koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Aplikasi Pendeteksi penyakit">
    <meta name="author" content="muhammad nizar febyansah">

    <title>PPOK</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
    
    
    <script type="text/javascript">
// 1 detik = 1000
window.setTimeout("waktu()",1000);  
function waktu() {   
	var tanggal = new Date();  
	setTimeout("waktu()",1000);  
	document.getElementById("output").innerHTML = tanggal.getHours()+":"+tanggal.getMinutes()+":"+tanggal.getSeconds();
}
</script>
<script language="JavaScript">
var tanggallengkap = new String();
var namahari = ("Minggu Senin Selasa Rabu Kamis Jumat Sabtu");
namahari = namahari.split(" ");
var namabulan = ("Januari Februari Maret April Mei Juni Juli Agustus September Oktober November Desember");
namabulan = namabulan.split(" ");
var tgl = new Date();
var hari = tgl.getDay();
var tanggal = tgl.getDate();
var bulan = tgl.getMonth();
var tahun = tgl.getFullYear();
tanggallengkap = namahari[hari] + ", " +tanggal + " " + namabulan[bulan] + " " + tahun;

	var popupWindow = null;
	function centeredPopup(url,winName,w,h,scroll){
	LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
	TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
	settings ='height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable'
	popupWindow = window.open(url,winName,settings)
}
</script>
    
  </head>
  <body>
    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Welcome to PPOK (Aplikasi Pendekteksi Penyakit Paru Obstruktif dan Kronis</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li class="active"><a href="index.php"><i class="fa fa-dashboard"></i> HOME </a></li>
            <li><a href="hasil_akhir.php"><i class="fa fa-bar-chart-o"></i> DIAGNOSA</a></li>
            <li><a href="pertanyaanreal.php"><i class="fa fa-table"></i> KONSULTASI</a></li>
            <li><a href="info.php"><i class="fa fa-table"></i> INFO</a></li>
            <li><a href="tampilpasien.php"><i class="fa fa-user"></i> DATA PASIEN</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> AKUN <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><?php echo "<a href='daftar.php'>"; ?>DAFTAR</a></li>
                <li><?php echo "<a href='login.php'>"; ?>LOGIN</a></li>
                <li><a href="../logout.php" onclick="return confirm('Apakah anda akan keluar?');">LOGOUT</a></li>
              </ul>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            <!--<li class="dropdown messages-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Messages <span class="badge">7</span> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="dropdown-header">7 New Messages</li>
                <li class="message-preview">
                  <a href="#">
                    <span class="avatar"><img src="http://placehold.it/50x50"></span>
                    <span class="name">John Smith:</span>
                    <span class="message">Hey there, I wanted to ask you something...</span>
                    <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                  </a>
                </li>
                <li class="divider"></li>
                <li class="message-preview">
                  <a href="#">
                    <span class="avatar"><img src="http://placehold.it/50x50"></span>
                    <span class="name">John Smith:</span>
                    <span class="message">Hey there, I wanted to ask you something...</span>
                    <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                  </a>
                </li>
                <li class="divider"></li>
                <li class="message-preview">
                  <a href="#">
                    <span class="avatar"><img src="http://placehold.it/50x50"></span>
                    <span class="name">John Smith:</span>
                    <span class="message">Hey there, I wanted to ask you something...</span>
                    <span class="time"><i class="fa fa-clock-o"></i> 4:34 PM</span>
                  </a>
                </li>
                <li class="divider"></li>
                <li><a href="#">View Inbox <span class="badge">7</span></a></li>
              </ul>
            </li>-->
            <!--<li class="dropdown alerts-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> Alerts <span class="badge">3</span> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Default <span class="label label-default">Default</span></a></li>
                <li><a href="#">Primary <span class="label label-primary">Primary</span></a></li>
                <li><a href="#">Success <span class="label label-success">Success</span></a></li>
                <li><a href="#">Info <span class="label label-info">Info</span></a></li>
                <li><a href="#">Warning <span class="label label-warning">Warning</span></a></li>
                <li><a href="#">Danger <span class="label label-danger">Danger</span></a></li>
                <li class="divider"></li>
                <li><a href="#">View All</a></li>
              </ul>
            </li>-->
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Hallo,
              <?php
              echo "$username";
              ?>
              <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-user"></i> Profil</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i> Pesan Masuk <span class="badge">7</span></a></li>
                <li><a href="#"><i class="fa fa-gear"></i> Pengaturan </a></li>
                <li class="divider"></li>
                <li><a href="../logout.php" onclick="return confirm('Apakah anda akan keluar?');"><i class="fa fa-power-off"></i> Keluar PPOK</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
      <?php
$timeout = 10; // Set timeout minutes
$logout_redirect_url = "../index.html"; // Set logout URL

$timeout = $timeout * 60; // Converts minutes to seconds
if (isset($_SESSION['start_time'])) {
    $elapsed_time = time() - $_SESSION['start_time'];
    if ($elapsed_time >= $timeout) {
        session_destroy();
        echo "<script>alert('Session Anda Telah Habis!'); window.location = '$logout_redirect_url'</script>";
    }
}
$_SESSION['start_time'] = time();
?>
<?php } ?>
      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1>Halaman Utama <small>Admin PPOK</small></h1>
            <ol class="breadcrumb">
              <li class="active"><i class="fa fa-dashboard"></i> Halaman Utama </li>
            </ol>
            <table width="900">
            <tr>
            <td width="250"><div class="Tanggal"><h4><script language="JavaScript">document.write(tanggallengkap);</script></div></h4></td> 
            <td align="left" width="30"> - </td>
            <td align="left" width="620"> <h4><div id="output" class="jam" ></div></h4></td>
            </tr>
            </table>
            <br />
            <div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
             Selamat Datang Di Halaman Admin Aplikasi PPOK.. 
          </div>
        </div><!-- /.row -->
<!--
        <div class="row">
          <div class="col-lg-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Traffic Statistics: October 1, 2013 - October 31, 2013</h3>
              </div>
              <div class="panel-body">
                <div id="morris-chart-area"></div>
              </div>
            </div>
          </div>
        </div>-->
        <!-- /.row -->
        <div class="col-lg-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-user"></i> Informasi Aplikasi </h3> 
              </div>
              <div class="panel-body">
                 <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped tablesorter">
                  <?php
$query = mysql_query("SELECT * FROM pertanyaan");
$jum = mysql_num_rows($query);
$jumlah = $jum+1;
$select = $_POST['select'];
$cf = $_POST['cf'];
for ($i=0; $i < $jumlah; $i++) { 
      # code...
      
      if (isset($select[$i]) == "") {
        # code...

      }else{
        $g = explode(',', $select[$i]);
        $gejala = $g[0];
        $nilai = $g[1];
      mysql_query("INSERT INTO tmp_gejala (idgejala,
                          cfu,
                          user)
                      VALUES ('$gejala',
                          '$nilai',
                          '$_SESSION[user]')");   
      } 
    }

//rule PPOK 
    $g1 = mysql_num_rows(mysql_query("SELECT * FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G001'"));
    $g2 = mysql_num_rows(mysql_query("SELECT * FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G002'"));
    $g3 = mysql_num_rows(mysql_query("SELECT * FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G003'"));
    $g4 = mysql_num_rows(mysql_query("SELECT * FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G004'"));
    $g5 = mysql_num_rows(mysql_query("SELECT * FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G005'"));
    $g6 = mysql_num_rows(mysql_query("SELECT * FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G006'"));
    $g7 = mysql_num_rows(mysql_query("SELECT * FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G007'"));
    $g8 = mysql_num_rows(mysql_query("SELECT * FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G008'"));
    $g9 = mysql_num_rows(mysql_query("SELECT * FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G009'"));
    $g10 = mysql_num_rows(mysql_query("SELECT * FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G010'"));
    $g11 = mysql_num_rows(mysql_query("SELECT * FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G011'"));
    $g12 = mysql_num_rows(mysql_query("SELECT * FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G012'"));
    $g13 = mysql_num_rows(mysql_query("SELECT * FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G013'"));
    $g14 = mysql_num_rows(mysql_query("SELECT * FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G014'"));
    $g15 = mysql_num_rows(mysql_query("SELECT * FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G015'"));
    $g16 = mysql_num_rows(mysql_query("SELECT * FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G016'"));
    $g17 = mysql_num_rows(mysql_query("SELECT * FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G017'"));
    $g18 = mysql_num_rows(mysql_query("SELECT * FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G018'"));
    $g19 = mysql_num_rows(mysql_query("SELECT * FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G019'"));
    $g20 = mysql_num_rows(mysql_query("SELECT * FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G020'"));
    
    $cfg1 = mysql_fetch_array(mysql_query("SELECT cfu FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G001'"));
    $cfg2 = mysql_fetch_array(mysql_query("SELECT cfu FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G002'"));
    $cfg3 = mysql_fetch_array(mysql_query("SELECT cfu FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G003'"));
    $cfg4 = mysql_fetch_array(mysql_query("SELECT cfu FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G004'"));
    $cfg5 = mysql_fetch_array(mysql_query("SELECT cfu FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G005'"));
    $cfg6 = mysql_fetch_array(mysql_query("SELECT cfu FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G006'"));
    $cfg7 = mysql_fetch_array(mysql_query("SELECT cfu FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G007'"));
    $cfg8 = mysql_fetch_array(mysql_query("SELECT cfu FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G008'"));
    $cfg9 = mysql_fetch_array(mysql_query("SELECT cfu FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G009'"));
    $cfg10 = mysql_fetch_array(mysql_query("SELECT cfu FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G010'"));
    $cfg11 = mysql_fetch_array(mysql_query("SELECT cfu FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G011'"));
    $cfg12 = mysql_fetch_array(mysql_query("SELECT cfu FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G012'"));
    $cfg13 = mysql_fetch_array(mysql_query("SELECT cfu FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G013'"));
    $cfg14 = mysql_fetch_array(mysql_query("SELECT cfu FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G014'"));
    $cfg15 = mysql_fetch_array(mysql_query("SELECT cfu FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G015'"));
    $cfg16 = mysql_fetch_array(mysql_query("SELECT cfu FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G016'"));
    $cfg17 = mysql_fetch_array(mysql_query("SELECT cfu FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G017'"));
    $cfg18 = mysql_fetch_array(mysql_query("SELECT cfu FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G018'"));
    $cfg19 = mysql_fetch_array(mysql_query("SELECT cfu FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G019'"));
    $cfg20 = mysql_fetch_array(mysql_query("SELECT cfu FROM tmp_gejala WHERE user = '$_SESSION[user]' AND idgejala = 'G020'"));

    //Brongkiektasis
    if (($g1 > 0) && ($g2 > 0)) {
    # code...
      $nilai11 = $cfg1['cfu'];
      $nilai12 = $cfg2['cfu'];
      $min1 = min($nilai11, $nilai12);
      $hasil1 = $min1*0.6;
    }else{
      $hasil1 = "";
    }

    
    //Brongkitis
    if (($g3 > 0) && ($g4 > 0)) {
    # code...
      $nilai21 = $cfg3['cfu'];
      $nilai22 = $cfg4['cfu'];
      $min2 = min($nilai21, $nilai22);
      $hasil2 = $min2*0.8;
    }else{
      $hasil2 = "";
    }


    //Brongkitis
    if (($g5 > 0) && ($g6 > 0)) {
    # code...
      $nilai31 = $cfg5['cfu'];
      $nilai32 = $cfg6['cfu'];
      $min3 = min($nilai31, $nilai32);
      $hasil3 = $min3*0.8;
    }else{
      $hasil3 = "";
    }

    
    //Brongkiektasis
    if (($g7 > 0) && ($g8 > 0)) {
    # code...
      $nilai41 = $cfg7['cfu'];
      $nilai42 = $cfg8['cfu'];
      $min4 = min($nilai41, $nilai42);
      $hasil4 = $min4*0.6;
    }else{
      $hasil4 = "";
    }


    //Emfisma Paru
    if (($g9 > 0) && ($g10 > 0)) {
    # code...
      $nilai51 = $cfg9['cfu'];
      $nilai52 = $cfg10['cfu'];
      $min5 = min($nilai51, $nilai52);
      $hasil5 = $min5*0.4;
    }else{
      $hasil5 = "";
    }

    //Brongkitis
    if (($g11 > 0) && ($g12 > 0)) {
    # code...
      $nilai61 = $cfg11['cfu'];
      $nilai62 = $cfg12['cfu'];
      $min6 = min($nilai61, $nilai62);
      $hasil6 = $min6*0.8;
    }else{
      $hasil6 = "";
    }

    
    //Brongkiektasis
    if (($g13 > 0) && ($g14 > 0)) {
    # code...
      $nilai71 = $cfg13['cfu'];
      $nilai72 = $cfg14['cfu'];
      $min7 = min($nilai71, $nilai72);
      $hasil7 = $min7*0.6;
    }else{
      $hasil7 = "";
    }

    //Brongkitis
    if (($g15 > 0) && ($g16 > 0)) {
    # code...
      $nilai81 = $cfg15['cfu'];
      $nilai82 = $cfg16['cfu'];
      $min8 = min($nilai81, $nilai82);
      $hasil8 = $min8*0.8;
    }else{
      $hasil8 = "";
    }
    
    //Brongkitis
    if (($g17 > 0) && ($g18 > 0)) {
    # code...
      $nilai91 = $cfg17['cfu'];
      $nilai92 = $cfg18['cfu'];
      $min9 = min($nilai91, $nilai92);
      $hasil9 = $min9*0.2;
    }else{
      $hasil9 = "";
    }
    
    //Brongkitis
    if (($g19 > 0) && ($g20 > 0)) {
    # code...
      $nilai101 = $cfg19['cfu'];
      $nilai102 = $cfg20['cfu'];
      $min101 = min($nilai101, $nilai102);
      $hasi102 = $min100*0.2;
    }else{
      $hasil8 = "";
    }
    
    
    //Hapus data temporari
  mysql_query("TRUNCATE tmp_gejala");
    echo "
      Rule  1 $hasil1<br> brongkiektasis
      Rule  2 $hasil2<br> brongkitis
      Rule  3 $hasil3<br> brongkitis
      Rule  4 $hasil4<br> brongkiektasis
      Rule  5 $hasil5<br> emfisma paru 
      Rule  6 $hasil6<br> brongkitis
      Rule  7 $hasil7<br> brongkiektasis
      Rule  8 $hasil8<br> brongkitis
      Rule  9 $hasil8<br> brongkitis
      Rule  10 $hasil8<br> brongktis
    "; 
    /* Gabungkan Rule */
    $hasil1 = isset($hasil1)?$hasil1:"";
    //Kecanduan Berat
    if(($hasil2 > 0) && ($hasil3 > 0) && ($hasil6 > 0) && ($hasil8 > 0)){
      $mb1 = min($hasil2, $hasil3, $hasil6, $hasil8);
      $berat = ($hasil2+$hasil3+$hasil6+$hasil8)*(1-$mb1);
    }elseif(($hasil2 > 0) && ($hasil3 > 0) && ($hasil6 > 0)){
      $mb2 = min($hasil2 , $hasil3, $hasil6);
      $berat = ($hasil2+$hasil3+$hasil6)*(1-$mb2);
    }elseif(($hasil2 > 0) && ($hasil3 > 0) && ($hasil8 > 0)){
      $mb3 = min($hasil2 , $hasil3, $hasil8);
      $berat = ($hasil2+$hasil3+$hasil8)*(1-$mb3);
    }elseif(($hasil2 > 0) && ($hasil6 > 0) && ($hasil8 > 0)){
      $mb4 = min($hasil2, $hasil6, $hasil8);
      $berat = ($hasil2+$hasil6+$hasil8)*(1-$mb4);
    }elseif(($hasil3 > 0) && ($hasil6 > 0) && ($hasil8 > 0)){
      $mb5 = min($hasil3 , $hasil6, $hasil8);
      $berat = ($hasil3+$hasil6+$hasil8)*(1-$mb5);
    }elseif(($hasil2 > 0) && ($hasil3 > 0)){
      $mb6 = min($hasil2 , $hasil3);
      $berat = ($hasil2+$hasil3)*(1-$mb6);
    }elseif(($hasil2 > 0) && ($hasil6 > 0)){
      $mb7 = min($hasil2 , $hasil6);
      $berat = ($hasil2+$hasil6)*(1-$mb7);
    }elseif(($hasil2 > 0) && ($hasil8 > 0)){
      $mb8 = min($hasil2 , $hasil8);
      $berat = ($hasil2+$hasil8)*(1-$mb8);
    }elseif(($hasil3 > 0) && ($hasil6 > 0)){
      $mb9 = min($hasil3 , $hasil6);
      $berat = ($hasil3+$hasil6)*(1-$mb9);
    }elseif(($hasil3 > 0) && ($hasil8 > 0)){
      $mb10 = min($hasil3 , $hasil8);
      $berat = ($hasil3+$hasil8)*(1-$mb10);
    }elseif(($hasil6 > 0) && ($hasil8 > 0)){
      $mb11 = min($hasil6 , $hasil8);
      $berat = ($hasil6+$hasil8)*(1-$mb11);
    }elseif($hasil2 > 0){
      $berat = $hasil2;
    }elseif($hasil3 > 0){
      $berat = $hasil3;
    }elseif($hasil6 > 0){
      $berat = $hasil6;
    }elseif($hasil8 > 0){
      $berat = $hasil8;
    }else{
      $berat = 0;
    }
    
    /* Gabungkan Rule */
    $hasil1 = isset($hasil1)?$hasil1:"";
    //Batuk Akut
    if($hasil1 > 0){
      $batuk_akut = $hasil1;
    }else{
      $batuk_akut = 0;
    }
    
    //Influenza
    if($hasil2 > 0){
      $influenza = $hasil2;
    }else{
      $influenza = 0;
    }
    
    //Demam
    if($hasil3 > 0){
      $demam = $hasil3;
    }else{
      $demam = 0;
    }
    
    //Sesak Nafas
    if($hasil4 > 0){
      $sesak = $hasil4;
    }else{
      $sesak = 0;
    }
    
    //Bronkitis Akut
    if($hasil5 > 0){
      $akut = $hasil5;
    }else{
      $akut = 0;
    }
    
    //Batuk Subakut
    if($hasil6 > 0){
      $batuk_subakut = $hasil6;
    }else{
      $batuk_subakut = 0;
    } 
    
    //Bronkitis Kronis
    if($hasil7 > 0){
      $kronis = $hasil7;
    }else{
      $kronis = 0;
    }
    
      $hasil_akhir = max($berat, $ringan);
      if($hasil_akhir != 0){
        if($hasil_akhir == $berat){
          $brt = $berat*100;
          $berat = number_format($brt, 2, ',', '.');
          mysql_query("INSERT INTO hipotesa (idpenyakit, 
                          user,
                          hasil)
                      VALUES ('P001',
                          '$_SESSION[user]',
                          '$berat')");
        }elseif($hasil_akhir == $ringan){
          $rng = $ringan*100;
          $ringan = number_format($rng, 2, ',' , '.');
          mysql_query("INSERT INTO hipotesa (idpenyakit, 
                          user,
                          hasil)
                      VALUES ('P002',
                          '$_SESSION[user]',
                          '$ringan')");
          echo "Anda menderita penyakit <b>Influenza</b> dengan Hipotesis <b>$influenza%</b>";
        }
      }else{
        mysql_query("INSERT INTO hipotesa (idpenyakit, 
                          user,
                          hasil)
                      VALUES ('',
                          '$_SESSION[user]',
                          '')");
      }
    
    
    
    
    echo "<script>window.location='hasil_akhir.php';</script>";
  
?>

    
    
    //Hapus data temporari
  mysql_query("TRUNCATE tmp_gejala");
    echo "
      Rule  1 $hasil1<br> Asma
      Rule  2 $hasil2<br> Emfisma Paru
      Rule  3 $hasil3<br> Emfisma Paru
      Rule  4 $hasil4<br> brongkiektasis
      Rule  5 $hasil5<br> brongkiektasis 
      Rule  6 $hasil6<br> brongkiektasis
      Rule  7 $hasil7<br> brongkiektasis
      Rule  8 $hasil8<br> brongkitis
      Rule  9 $hasil8<br> brongkitis
      Rule  10 $hasil8<br> brongktis
    "; 
    /* Gabungkan Rule */
    $hasil1 = isset($hasil1)?$hasil1:"";
    //Kecanduan Berat
    if(($hasil2 > 0) && ($hasil3 > 0) && ($hasil6 > 0) && ($hasil8 > 0)){
      $mb1 = min($hasil2, $hasil3, $hasil6, $hasil8);
      $berat = ($hasil2+$hasil3+$hasil6+$hasil8)*(1-$mb1);
    }elseif(($hasil2 > 0) && ($hasil3 > 0) && ($hasil6 > 0)){
      $mb2 = min($hasil2 , $hasil3, $hasil6);
      $berat = ($hasil2+$hasil3+$hasil6)*(1-$mb2);
    }elseif(($hasil2 > 0) && ($hasil3 > 0) && ($hasil8 > 0)){
      $mb3 = min($hasil2 , $hasil3, $hasil8);
      $berat = ($hasil2+$hasil3+$hasil8)*(1-$mb3);
    }elseif(($hasil2 > 0) && ($hasil6 > 0) && ($hasil8 > 0)){
      $mb4 = min($hasil2, $hasil6, $hasil8);
      $berat = ($hasil2+$hasil6+$hasil8)*(1-$mb4);
    }elseif(($hasil3 > 0) && ($hasil6 > 0) && ($hasil8 > 0)){
      $mb5 = min($hasil3 , $hasil6, $hasil8);
      $berat = ($hasil3+$hasil6+$hasil8)*(1-$mb5);
    }elseif(($hasil2 > 0) && ($hasil3 > 0)){
      $mb6 = min($hasil2 , $hasil3);
      $berat = ($hasil2+$hasil3)*(1-$mb6);
    }elseif(($hasil2 > 0) && ($hasil6 > 0)){
      $mb7 = min($hasil2 , $hasil6);
      $berat = ($hasil2+$hasil6)*(1-$mb7);
    }elseif(($hasil2 > 0) && ($hasil8 > 0)){
      $mb8 = min($hasil2 , $hasil8);
      $berat = ($hasil2+$hasil8)*(1-$mb8);
    }elseif(($hasil3 > 0) && ($hasil6 > 0)){
      $mb9 = min($hasil3 , $hasil6);
      $berat = ($hasil3+$hasil6)*(1-$mb9);
    }elseif(($hasil3 > 0) && ($hasil8 > 0)){
      $mb10 = min($hasil3 , $hasil8);
      $berat = ($hasil3+$hasil8)*(1-$mb10);
    }elseif(($hasil6 > 0) && ($hasil8 > 0)){
      $mb11 = min($hasil6 , $hasil8);
      $berat = ($hasil6+$hasil8)*(1-$mb11);
    }elseif($hasil2 > 0){
      $berat = $hasil2;
    }elseif($hasil3 > 0){
      $berat = $hasil3;
    }elseif($hasil6 > 0){
      $berat = $hasil6;
    }elseif($hasil8 > 0){
      $berat = $hasil8;
    }else{
      $berat = 0;
    }
    
    
      $hasil_akhir = max($berat, $ringan);
      if($hasil_akhir != 0){
        if($hasil_akhir == $berat){
          $brt = $berat*100;
          $berat = number_format($brt, 2, ',', '.');
          mysql_query("INSERT INTO hipotesa (idpenyakit, 
                          user,
                          hasil)
                      VALUES ('P001',
                          '$_SESSION[user]',
                          '$berat')");
        }elseif($hasil_akhir == $ringan){
          $rng = $ringan*100;
          $ringan = number_format($rng, 2, ',' , '.');
          mysql_query("INSERT INTO hipotesa (idpenyakit, 
                          user,
                          hasil)
                      VALUES ('P002',
                          '$_SESSION[user]',
                          '$ringan')");
          echo "Anda menderita penyakit <b>Influenza</b> dengan Hipotesis <b>$influenza%</b>";
        }
      }else{
        mysql_query("INSERT INTO hipotesa (idpenyakit, 
                          user,
                          hasil)
                      VALUES ('',
                          '$_SESSION[user]',
                          '')");
      }
    
    
    
    \
    echo "<script>window.location='../../index.php?menu=hasil';</script>";
  
?>

                   </tbody>
                   </table>
                   </div>
              </div> 
            </div>
          </div>
        </div><!-- /.row --> 

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>

    <!-- Page Specific Plugins -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
    <script src="js/morris/chart-data-morris.js"></script>
    <script src="js/tablesorter/jquery.tablesorter.js"></script>
    <script src="js/tablesorter/tables.js"></script>

  </body>
</html>
