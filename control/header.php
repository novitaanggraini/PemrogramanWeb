<?php require_once("auth.php"); ?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" type="text/css" href="css/fontawesome/css/all.css">

  <title>Administrator Kejari Bangkalan</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">
  <style type="text/css">
    a[data-toggle="collapse"] {
    position: relative;
}

.dropdown-toggle::after {
    display: block;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
}
  </style>

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"><strong><a href="admin.php" style="text-decoration: none;">Dashboard Admin</a></strong></div>
      <div class="list-group list-group-flush">
        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle list-group-item list-group-item-action bg-light">Posting</a>
            <ul class="collapse list-unstyled " id="pageSubmenu">
                <li>
                    <a href="lihat.php">Lihat</a>
                </li>
                <li>
                    <a href="tambah_posting.php">Tambah</a>
                </li>
            </ul>
            
        <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle list-group-item list-group-item-action bg-light">Foto</a>
            <ul class="collapse list-unstyled " id="pageSubmenu1">
                <li>
                    <a href="lihat_foto.php">Lihat</a>
                </li>
                <li>
                    <a href="tambah_foto.php">Tambah</a>
                </li>
            </ul>
        <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle list-group-item list-group-item-action bg-light">Video</a>
            <ul class="collapse list-unstyled " id="pageSubmenu2">
                <li>
                    <a href="lihat_video.php">Lihat</a>
                </li>
                <li>
                    <a href="tambah_video.php">Tambah</a>
                </li>
            </ul>
        <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle list-group-item list-group-item-action bg-light">User</a>
            <ul class="collapse list-unstyled " id="pageSubmenu3">
                <li>
                    <a href="lihat_user.php">Lihat</a>
                </li>
                <li>
                    <a href="tambah_user.php">Tambah</a>
                </li>
            </ul>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle"><i class="fa fa-bars"></i></button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="img/<?php echo $_SESSION['user']['photo'] ?>" style="width:25px;height:25px;margin-right:10px"/>
                Hi,Admin
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="logout.php">Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
