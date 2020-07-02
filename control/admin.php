<?php 
include "header.php";
include "config.php";

$q1  = mysqli_query($conn, "SELECT * FROM posting ORDER BY id_post DESC") or die(mysqli_error($conn));
$jml1 = mysqli_num_rows($q1);
$q2  = mysqli_query($conn, "SELECT * FROM foto ORDER BY id_foto DESC") or die(mysqli_error($conn));
$jml2 = mysqli_num_rows($q2);
$q3  = mysqli_query($conn, "SELECT * FROM video ORDER BY id_video DESC") or die(mysqli_error($conn));
$jml3 = mysqli_num_rows($q3);

 ?>
      <div class="container-fluid">
        <h1 class="mt-4">Selamat Datang Admin Kejaksaan Negeri Bangkalan</h1>
        <hr/>
      </div>
      <div class="container-fluid">
              <div class="span6">
                <table class="table table-hover">
                  <thead style="font-weight:bold;color: #1C8D25;background: #E4E4E4;">
                    <tr>
                      <td>Item</td>
                      <td>Jumlah</td>
                    </tr>
                    
                  </thead>
                  <tbody>
                    <tr>
                      <td><a href="lihat.php">Posting</a></td>
                      <td><span class="badge badge-info"><?php echo $jml1; ?></span></td>
                    </tr>
                    <tr>
                      <td><a href="lihat_foto">Foto</a></td>
                      <td><span class="badge badge-info"><?php echo $jml2; ?></span></td>
                    </tr>
                    <tr>
                      <td><a href="">Video</a></td>
                      <td><span class="badge badge-info"><?php echo $jml3; ?></span></td>
                    </tr>
                  </tbody>
                </table>
              </div>

    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
    $(document).ready(function () {

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

});
  </script>


</body>

</html>
