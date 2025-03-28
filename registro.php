<?php
include ("cabecera.php");
?>

            <div class="card-body">
                <div class="text-center m-auto">
                   <h4 class="text-uppercase text-center">Crear cuenta</h4>
                </div>
                <form action="registrarse.php" method="post" enctype="multipart/form-data">
                   <div class="form-group mb-3">
                      <label for="fname">Usuario </label>
                      <input type="text" name="usuario" placeholder="Nombre de usuario" class="form-control" required="">
                   </div>
                   <div class="form-group mb-3">
                      <label for="fname">Nombre </label>
                      <input type="text" name="fname" placeholder="Nombre" class="form-control" required="">
                   </div>
                   <div class="form-group mb-3">
                      <label for="fname">Apellido</label>
                      <input type="text" name="lname" placeholder="Apellido" class="form-control" required="">
                   </div>
                   <div class="form-group mb-3">
                      <label for="emailaddress">Email </label>
                      <input type="email" name="email" placeholder="Email" class="form-control" required="">
                   </div>
                   <div class="form-group mb-3">
                      <label for="password">Contraseña</label>
                      <div class="input-group bg-light" id="show_hide_password">
                         <input type="password" class="form-control" id="password" value="" name="password" placeholder="Contraseña" required="">
                         <div class="input-group-addon">
                            <a href=""><i class="fa fa-lg fa-eye" style="padding-top: 10px; padding-left: 10px; padding-right: 10px;" aria-hidden="true"></i></a>
                         </div>
                      </div>
                   </div>
                   
                   <div class="form-group mb-3">
                      <label for="password">Avatar</label>
                      <div class="input-group bg-light" id="show_hide_password">
                         <input type="file" class="form-control" id="confirm-password" value="" name="avatar">
                      </div>
                   </div>
                   
                   <div class="form-group mb-0 d-flex justify-content-between">
                      <button class="btn btn-dark btn-block" type="submit" name="submit" id="submit">Registrarse </button>
                   </div>
                   <script>
                      $(document).ready(function() {
                          $("#show_hide_password a").on('click', function(event) {
                              event.preventDefault();
                              if($('#show_hide_password input').attr("type") == "text"){
                                  $('#show_hide_password input').attr('type', 'password');
                                  $('#show_hide_password i').addClass( "fa-eye-slash" );
                                  $('#show_hide_password i').removeClass( "fa-eye" );
                              }else if($('#show_hide_password input').attr("type") == "password"){
                                  $('#show_hide_password input').attr('type', 'text');
                                  $('#show_hide_password i').removeClass( "fa-eye-slash" );
                                  $('#show_hide_password i').addClass( "fa-eye" );
                              }
                          });
       
                      });
                   </script>
                </form>
             </div>
       

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>