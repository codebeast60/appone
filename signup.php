 <?php
    include "templates/header.php";
    include "server.php";
    if (isset($_SESSION['user'])) {
        header("Location:index.php");
    }
    ?>
 <!-- start form signup  -->
 <div class="container mt-3 mb-3">
     <h2 class="text-center">signup</h2>

     <form method="POST" autocomplete="off" action="">
         <div class="mb-3">
             <label for="username" class="form-label">user name</label>
             <input type="text" name="user" class="form-control" id="username" aria-describedby="emailHelp">
             <div id="emailHelp" class="form-text text-danger">
                 <?php echo @$s_errors['user'] ?>
             </div>
         </div>
         <div class="mb-3">
             <label for="exampleInputEmail1" class="form-label">Email address</label>
             <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
             <div id="emailHelp" class="form-text text-danger">
                 <?php echo @$s_errors['email'] ?>
             </div>
         </div>
         <div class="mb-3">
             <label for="pass" class="form-label">Password</label>
             <input type="password" name="pass" class="form-control" id="pass">
         </div>
         <div id="emailHelp" class="form-text text-danger">
             <?php echo @$s_errors['pass'] ?>
         </div>
         <div class="mb-3">
             <label for="rpass" class="form-label">retype Password</label>
             <input type="password" name="rpass" class="form-control" id="rpass">
             <div id="emailHelp" class="form-text text-danger">
                 <?php echo @$s_errors['pass'] ?>
             </div>
         </div>
         <div class="mb-3 form-check">
             <input type="checkbox" class="form-check-input" id="check">
             <label class="form-check-label" for="check">Check me out</label>
         </div>
         <button type="submit" name="signup" class="btn btn-primary">signup</button>
     </form>
 </div>
 <!-- end form signup  -->
 <!-- <script>
     const password = document.querySelector("#pass");
     const rpassword = document.querySelector("#rpass");
     const show = document.querySelector("#check");

     // Function to toggle password visibility
     function visible_password() {

         if (show.checked) {
             password.type = "text", rpassword.type = "text";
         } else {
             password.type = "password", rpassword.type = "password";
         }
     }

     // Event listener for the checkbox
     show.addEventListener("change", visible_password);
 </script> -->

 <?php
    include "templates/footer.php";
    ?>