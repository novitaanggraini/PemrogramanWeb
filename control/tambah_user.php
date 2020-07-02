<?php 
include "config.php";
include "header.php";
?>
      <div class="container-fluid">
        <h4 class="mt-4"><strong>Tambah User</strong></h4>
      <hr/>
      </div>
      <div class="container-fluid">
          <form method="post" action="buat_user.php" enctype="multipart/form-data">
                <div class="span12">
                  <label>Name:</label><br>
                  <input  type="text" name="name" placeholder="Ketikkan nama.." class="input-xxlarge" /><br>
                  <label>Username:</label><br>
                  <input  type="text" name="username" placeholder="Ketikkan username.." class="input-xxlarge"/><br>
                  <label>Email:</label><br>
                  <input  type="text" name="email" placeholder="Ketikkan email.." class="input-xxlarge" /><br>
                  <label>Password:</label><br>
                  <input  type="text" name="password" placeholder="Ketikkan Password.." class="input-xxlarge" /><br>
                </div>
                <div class="text-right mb-3"><button type="submit" class="btn btn-primary ml-auto" name="tambah" >Tambah</button></div>
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
