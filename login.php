<?php
include "templates/header.php";
include "server.php";
if (isset($_SESSION['user'])) {
    header("Location:index.php");
}
?>
<!-- start login form  -->
<div class="container mt-3 mb-3">
    <h2 class="text-center">Login</h2>

    <form method="POST" autocomplete="off" action="">

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text text-danger">
                <?php echo @$l_errors['email'] ?>
            </div>
        </div>
        <div class="mb-3">
            <label for="pass" class="form-label">Password</label>
            <input type="password" name="pass" class="form-control" id="pass">
        </div>
        <div id="emailHelp" class="form-text text-danger">
            <?php echo @$l_errors['pass'] ?>
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="check">
            <label class="form-check-label" for="check">Check me out</label>
        </div>
        <button type="submit" name="login" class="btn btn-primary">login</button>
    </form>
</div>
<!-- end login form  -->
<script>
    // const password = document.querySelector("#pass");

    // const show = document.querySelector("#check");

    // // Function to toggle password visibility
    // function visible_password() {

    //     if (show.checked) {
    //         password.type = "text";
    //     } else {
    //         password.type = "password";
    //     }
    // }

    // // Event listener for the checkbox
    // show.addEventListener("change", visible_password);
</script>





<?php
include "templates/footer.php";
?>