<?php
include 'functions.php';
/*if(empty($_SESSION['user']))
    header("location:login.php");*/
?>
<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="icon" href="favicon.ico"/>
    <link rel="canonical" href="https://sarjanakomedi.com/" />
    <link href="assets/css/styles.css" rel="stylesheet" />

    <title>Sistem Informasi Geografis</title>
    <link href="assets/css/solar-bootstrap.min.css" rel="stylesheet"/>
    <link href="assets/css/general.css" rel="stylesheet"/>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/tinymce/tinymce.min.js"></script>
    <script>
        tinymce.init({
        selector: "textarea.mce",
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            menubar : false,
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        });
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC4Ol7ITQpiNrKISAa4hXDTAkz0ZbaUBQU&callback=myMap"></script>
    <script>
        var default_lat = <?=get_option('default_lat')?>;
        var default_lng = <?=get_option('default_lng')?>;
        var default_zoom = <?=get_option('default_zoom')?>;
    </script>
    <script src="assets/js/script.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">GIS WISATA PROVINSI LAMPUNG</a>
    </div>
      <!-- <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand">GIS WISATA PROVONSI LAMPUNG</a>
        </div> -->
        <div id="navbar" class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
          <ul class="nav navbar-nav">
            <?php if($_SESSION['login']):?>
            <li><a href="?m=tempat"><span class="glyphicon glyphicon-map-marker"></span> Tempat</a></li>
            <li><a href="?m=galeri"><span class="glyphicon glyphicon-picture"></span> Galeri</a></li>
            <li><a href="?m=password"><span class="glyphicon glyphicon-lock"></span> Password</a></li>
            <li><a href="aksi.php?act=logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            <?php else:?>
            <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <li><a href="?m=tempat_list"><span class="glyphicon glyphicon-map-marker"></span> Tempat</a></li>
            <li><a href="?m=login"><span class="glyphicon glyphicon-user"></span> Login</a></li>
            <?php endif?>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
    <?php
        if(file_exists($mod.'.php'))
            include $mod.'.php';
        else
            include 'home.php';
    ?>
    </div>
    <!-- <footer class="footer-copyright text-center py-3">
      <div class="container">
        <p>Copyright &copy; <?=date('Y')?>TUGAS AKHIR <em class="pull-right">Juli 2020</em></p>
      </div>
    </footer> -->
</body>
<!-- Footer -->
<footer class="page-footer font-small indigo">
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/">SKRIPSI</a>
  </div>
</footer>
<!-- Footer -->
</html>