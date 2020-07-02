<?php 
include "config.php";
include "header.php";
?>
      <div class="container-fluid">
        <h4 class="mt-4"><strong>Tambah Video</strong></h4>
      <hr/>
      </div>
      <div class="container-fluid">
          <form method="post" action="buat_video.php" enctype="multipart/form-data">
                <div class="span12">
                  <label>Video:</label><br>
                  <input  type="text" name="video" placeholder="Ketikkan link video.." class="input-xxlarge" /><br>
                </div>
                <div class="text-right mb-3"><button type="submit" class="btn btn-primary ml-auto" >Simpan</button></div>
          </form>
          
        
    </div>
    <!-- /#page-content-wrapper -->
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
