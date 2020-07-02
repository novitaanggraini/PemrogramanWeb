<?php

include '../control/config.php'; 


$q  = mysqli_query($conn, "SELECT * FROM posting ORDER BY id_post DESC") or die(mysqli_error($conn));

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/fontawesome/css/all.css">
    <style>
		body {
		  font-family: Arial;
		}

		* {
		  box-sizing: border-box;
		  padding-top: 1px;
		}

		form.example input[type=text] {
		  padding: 5px;
		  font-size: 17px;
		  border: 0.5px solid grey;
		  float: left;
		  width: 80%;
		  background: #f1f1f1;
		}

		form.example button {
		  float: left;
		  width: 20%;
		  padding: 5px;
		  background: ##f1f1f1;
		  color: white;
		  font-size: 17px;
		  border: 1px solid grey;
		  border-left: none;
		  cursor: pointer;
		}

		form.example button:hover {
		  background: #0b7dda;
		}

		form.example::after {
		  content: "";
		  clear: both;
		  display: table;
		}
		</style>

	    <style>
	    /* Make the image fully responsive */
	    .carousel-inner img {
	      width: 100%;
	      height: 100%;
	    }
	    </style>

    <title>Berita &#8211; Kejakri Bangkalan</title>
    <link rel="icon" href="img/icon.png" sizes="32x32" />
  <link rel='dns-prefetch' href='http://s.w.org/' />
  </head>
    <body style="background-color: #8a00e6;">
    <!-- ini Banner -->  
    	 <div class="container text-center" style="background-image: linear-gradient( to bottom left,#ff4d4d, #8a00e6);">
    	    <img src="img\banner.jpg " class= "my-2" >
    	</div>
      <div class="container text-center" style="background-image: linear-gradient( #ff1a1a, #8a00e6);">
          <img src="img\jumbobanner.jpg" class = "img-fluid">
      </div>	
    <!-- ini Navbar -->
    <div class = "container" style="background-image: linear-gradient(to right, #ff1a1a, #8a00e6);">
    <nav class="navbar navbar-expand-lg navbar-light text-black" >
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item ">
                  <a class="nav-link" href="index.php"><strong>BERANDA</strong><span class="sr-only">(current)</span></a>
                </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <strong>PROFIL</strong>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #00cc00 ;">
                <a class="dropdown-item " href="katasambutan.html">Kata Sambutan</a>
                <div class="dropdown-divider"></div>                
                <a class="dropdown-item" href="visidanmisi.html">Visi dan Mini</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="strukturorganisasi.html">Struktur Organisasi</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="pejabat.html">Pejabat Struktural</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="tugasdanwewenang.html">Tugas Pokok dan Wewenang</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="perintah.html">Perintah Jaksa Agung</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="doktrin.html">Doktrin Kejaksaan</a>
              </div>
                <li class="nav-item active">
                  <a class="nav-link" href="berita.php">  <strong>BERITA</strong><span class="sr-only">(current)</span></a>
                </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <strong>GALLERY</strong>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #00cc00 ;">
                <a class="dropdown-item" href="photo.php">Photo</a>
                <div class="dropdown-divider"></div>                
                <a class="dropdown-item" href="video.php">Video</a>
              </div>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <strong> SIMANJA BANGKIT</strong>
               
              </a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #00cc00 ;">
                <a class="dropdown-item " href="bantuanhukumdanpelayanan.html">Bantuan Hukum dan Pelayanan Online</a>
                <div class="dropdown-divider"></div>                
                <a class="dropdown-item" href="Ambil-Tilang-Cepat-Tanpa-Pungli.html">Ambil Tilang Cepat Tanpa Pungli</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="Delivery-Order-Tilang.html">Delivery Order Tilang</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="Denda-Tilang-Online.html">Denda Tilang Online</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="Ambil-Barang-Bukti-Tanpa-Pungli.html">Ambil Barang Bukti tanpa Pungli</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item " href="deliverybarangbukti.html">Delivery Order Barang Bukti</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Putusan Tilang</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item " href="jadwalsidangonline.html">Informasi Jadwal Sidang Online</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="3in1.html">3in1 KN Bangkalan</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="Klinik-Adhyaksa.html">Klinik "Adhyaksa"</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="Posyandu-Mandiri-Adhyaksa.html">Posyandu Mandiri "Adhyaksa"</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="Fasilitas-Jalan-Disabilitas.html">Fasilitas Jalan Disabilitas</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="Kotak-saran.html">Kotak Saran</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="bangkalan-icc.html">Bangkalan Intelegen Comand Center</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="Informasi-Peraturan-Undang-Undang.html">Informasi Peraturan Undang - undang</a>
              </div>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="" aria-label="Search">
   			<button type="submit"><i class="fa fa-search"></i></button>
          </form>
        </div>
      </div>
    </nav>

    <!-- ini isi -->
    <div class="container  bg-light ">

          

        <div class="jeg_breadcrumbs jeg_breadcrumb_container"><br>
              <div id="breadcrumbs">
                <span class="">
                  <a href="index.html"><font color="grey">Home</font></a>
                </span><i class="fa fa-angle-right"></i>
                  <span class="breadcrumb_last_link">
                    <a href="berita.html"><font color="grey">Berita</font></a>
              </div>                            
        </div><br>

        <div class="entry-header">
              <h1 class="post_title"><strong>Berita</strong></h1>
        </div>
            <br>

<!-- ini isi -->
        <div class="entry-content ">
            <div class="content-inner" >
              <div class="row">
                <ul class="list-unstyled">

                  <?php 
                  while ($post = mysqli_fetch_array($q)) {
                  
                   ?>
                  <div class="col-8 ">
                  <li class="media">
                    <img class=" mr-4 ml-5 alignnone wp-image-1307 size-medium" src="../control/img/<?php echo $post['foto']; ?>" alt="" width="300" height="250"  sizes="(max-width: 209px) 100vw, 209px" alt="">
                    <div class="media-body" class="mr-3" >
                      <h4 style="text-align: left;"><strong><a href="post.php?id=<?php echo $post['id_post']; ?>"> <?php echo $post['judul'];  ?></a></strong><br/>
                      </h4>
                      <small class="text-muted"><i class="fa-clock-o"></i> <?php echo $post['tanggal'];  ?> </small>
                      <p style="text-align: justify;"><?php echo substr(strip_tags($post['body']), 0, 126);  ?></p>
                      <a href="post.php?id=<?php echo $post['id_post']; ?>" class="btn btn-primary"> read more</a>
                    </div>
                  </li><br><br>
                  </div>
                 <?php 
                }
                  ?>

                </ul>

                </div>
              </div>
          </div>
          <br>
          <br>
</div>
 
<!-- Ini- Footer -->
   <div class=container>
  	<footer class="footer bg-dark text-light container-fluid" pt- 5>
  		<div class="row">
  			<!-- footer left -->
  			<div class="col-md-auto ml-4"> 
  				<img src="img/LOGO.png" class= "img-fluid my-5 mx-4" width="50%" >
  				<p style="font-size: 14px;"><font color="grey">Jl. Soekarno Hatta, Kel. Mlajah, Kec. Bangkainfo@lan,<br /> Kabupaten Bangkalan,<br /> Jawa Timur 69116 </font></p>
				<font color="grey" style="font-size: 14px;">WEBSITE KEJAKSAAN NEGERI BANGKALAN </font>
				<p style="font-size: 14px;"><font color="grey">www.kejari-bangkalan.go.id<br />
				FACEBOOK : Kejari bangkalan<br />
				INSTAGRAM : kejaribangkalan<br />
				SMS CENTER / PENGADUAN : 085748165352<br />
				WHATSAPP PENGADUAN LAYANAN : 085748165352<br />
				Telepon Kantor : 031-3095026<br />
				Fax Kantor : 031-3095026 </font></p>
  			</div>
  			<!-- footer center -->
 			<div class="col-md-5 mt-5">
  				<h6 class="footer"><span style="color: #e6005c;"><strong>Categories</strong></span></h6>
  					<div class="container" style="list-style-type: none;">
					  <div class="row"  >
					    <div class="col">
					      <li class="cat-item cat-item-43"><a href="#" class="text-light">Berita</a></li>
					    </div>
					    <div class="col">
					      <li class="cat-item cat-item-44"><a href="#" class="text-light" >Pengumuman</a></li>
					    </div>
					    <div class="col">
					      <li class="cat-item cat-item-46"><a href="#" class="text-light" >Uncategorized</a></li>
					    </div>
					  </div>
					  <div class="row">
					    <div class="col ">
					      <li class="cat-item cat-item-45"><a href="#" class="text-light">Daftar Tilang</a></li>
					    </div>
					    <div class="col">
					      <li class="cat-item cat-item-1"><a href="#"class="text-light" >Slide</a></li>
					    </div>
					    <div class="col">
					      <li class="cat-item cat-item-47"><a href="#" class="text-light">Video</a></li>
					    </div>
					  </div>
					</div>
  			</div>
  			<!-- footer right -->
			<div class="col-md-auto mt-5">
                            <div class="footer_widget widget_fbw_id" id="fbw_id-2">
                                <div class="jeg_footer_heading jeg_footer_heading_1">
                                    <h6 class="jeg_footer_title" style="color: #e6005c;" ><span><strong>Like Us On Facebook</strong></span></h6>
                                </div>
                                    <div id="fb-root">
                                </div>
                                <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/Kejaksaan-RI-843134702533814/ " data-width="220" data-height="220" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true" data-show-posts="true" style="" hide_cta="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=false&amp;app_id=&amp;container_width=360&amp;height=300&amp;hide_cover=false&amp;hide_cta=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FKejaksaan-RI-843134702533814%2F&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;show_posts=true&amp;small_header=false&amp;width=220"><span style="vertical-align: bottom; width: 220px; height: 220px;"><iframe name="f213e6508bd74a4" width="220px" height="220px" data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.8/plugins/page.php?adapt_container_width=false&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D46%23cb%3Df86375067cb618%26domain%3Dwww.kejari-bangkalan.go.id%26origin%3Dhttp%253A%252F%252Fwww.kejari-bangkalan.go.id%252Ff3388837feb7134%26relation%3Dparent.parent&amp;container_width=360&amp;height=300&amp;hide_cover=false&amp;hide_cta=false&amp;href=https%3A%2F%2Fwww.facebook.com%2FKejaksaan-RI-843134702533814%2F&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;show_posts=true&amp;small_header=false&amp;width=200" style="border: none; visibility: visible; width: 220px; height: 220px;" class=""></iframe></span>
                                </div>
                      
                      
                                </div>
      
  			</div>
  		</div>

                    <!-- secondary footer right -->

  				<div class="sub-footer d-lg-flex justify-content-lg-between border-top pt-3 pb-4 mt-4 align-items-center">
                    <p class="copyright" > © 2018 <a href="#" title="Kejari Bangkalan" class="border-left">Kejari Bangkalan</a>   </p>

                    <!-- secondary footer left -->
                    <br>
                    <div class="footer-contact text-lg-right">
                      <a aria-label="Kontak kami" href="#" class="border-right pr-2">Kontak Kami</a>
                      <a aria-label="Aduan" href="#" class="border-right px-2">Aduan</a>
                      <a aria-label="FAQ" href="#" class="pl-2">FAQ</a>
                    </div>
                    
                </div>
                </div>     
                </div> 
  	</footer>
  </div>
    <!-- penutup footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>
