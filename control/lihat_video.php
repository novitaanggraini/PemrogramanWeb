<?php 
include "header.php";

include 'config.php'; 

if (isset($_GET['id'])) {
  $d = $_GET['id'];
  $sql1 = mysqli_query($conn, "DELETE FROM video WHERE id_video='$d'") or die(mysqli_error($conn));?>
  <script type="text/javascript">
    alert('video berhasil dihapus!');
  </script>
  <?php
}


$q  = mysqli_query($conn, "SELECT * FROM video ORDER BY id_video DESC") or die(mysqli_error($conn));



 ?>
      <div class="container-fluid">
        <h1 class="mt-4">Daftar Video</h1><hr/>
        <p>Halo admin!! Ini adalah daftar Video. Anda dapat mengubah atau menghapus Video yang telah ditambahkan.</p>
        
      </div>
      <div class="container-fluid">
              <div class="span6">
                <table class="table table-hover">
                  <thead style="font-weight:bold;color: #1C8D25;background: #E4E4E4;">
                    <tr>
                      <td>No</td>
                      <td>video</td>
                      <td>Tanggal</td>
                      <td>Aksi</td>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $i = 1;
                  while ($post = mysqli_fetch_array($q)) {
                    ?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $post['video']; ?></td>
                      <td><?php echo $post['tanggal']; ?></td>
                      <td><a href="edit_video.php?id=<?php echo $post['id_video']; ?>" class="btn btn-primary">Edit</a> <a href="?id=<?php echo $post['id_video']; ?>" onclick="confirm('Apakah anda yakin?')" class="btn btn-danger">Delete</a></td>
                    </tr>
                    <?php
                    $i++;
                  }
                   ?>
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
