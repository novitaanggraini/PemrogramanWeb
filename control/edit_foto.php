<?php 
include "config.php";
include "header.php";

$id = $_GET['id'];

$q  = mysqli_query($conn, "SELECT * FROM foto WHERE id_foto='$id'") or die(mysqli_error($conn));
$post = mysqli_fetch_array($q);
?>
      <div class="container-fluid">
        <h4 class="mt-4"><strong>Edit Foto</strong></h4>
      <hr/>
      </div>
      <div class="container-fluid">
          <form method="post" action="edit_foto_proses.php?id=<?php echo$id ?>" enctype="multipart/form-data">
                <div class="span12">
                  <label>Foto:</label><br>
                  <input  type="file" name="foto" class="span5" placeholder="Pilih gambar" /><br>
                </div>
                <div class="text-right mb-3"><button type="submit" class="btn btn-primary ml-auto" >Simpan</button></div>
          </form>
          
        
    </div>
    <!-- /#page-content-wrapper -->

    <footer align="center">
    <h6>&copy; Kejaksaan Negeri Bangkalan - 2020</h6>
  </footer>
  </div>

  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap-dropdown.js"></script>
  <script src="js/bootstrap-collapse.js"></script>
  <script src="js/ckeditor/ckeditor.js"></script>

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
