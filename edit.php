 <?php
    include "templates/header.php";
    include "server.php";
    if (isset($_SESSION['user'])) {
        $username = $_SESSION['user'];
        // echo $username;
        $sql = "SELECT * FROM users WHERE name = '$username'";
        $result = mysqli_query($conn, $sql);
        $fetch = mysqli_fetch_assoc($result);
        // echo $fetch['id'];

    ?>
     <!-- start form signup  -->
     <div class="container mt-3 mb-3">
         <h2 class="text-center">edit</h2>

         <form method="POST" autocomplete="off" action="">
             <div class="mb-3">
                 <input type="hidden" value="<?php echo $fetch['id'] ?>" name="userid">
                 <label for="username" class="form-label">user name</label>
                 <input type="text" name="user" value="<?php echo $fetch['name'] ?>" class="form-control" id="username" aria-describedby="emailHelp">
                 <div id="emailHelp" class="form-text text-danger">
                     <?php echo @$e_errors['user'] ?>
                 </div>
             </div>
             <div class="mb-3">
                 <label for="exampleInputEmail1" class="form-label">Email address</label>
                 <input type="email" value="<?php echo $fetch['email'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>

             </div>
             <div class="mb-3">
                 <label for="pass" class="form-label">Password</label>
                 <input type="password" name="pass" class="form-control" id="pass">
                 <input type="hidden" name="oldpass" value="<?php echo $fetch['password'] ?>">
             </div>
             <div id="emailHelp" class="form-text text-danger">
                 <?php echo @$e_errors['pass'] ?>
             </div>
             <div class="mb-3">
                 <label for="rpass" class="form-label">retype Password</label>
                 <input type="password" name="rpass" class="form-control" id="rpass">
                 <div id="emailHelp" class="form-text text-danger">
                     <?php echo @$e_errors['pass'] ?>
                 </div>
             </div>
             <div class="mb-3 form-check">
                 <input type="checkbox" class="form-check-input" id="check">
                 <label class="form-check-label" for="check">Check me out</label>
             </div>
             <button type="submit" name="edit" class="btn btn-primary">edit</button>
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
    } else {
        header("Location:index.php");
    }
    include "templates/footer.php";
    ?>