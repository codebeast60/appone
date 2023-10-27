const password = document.querySelector("#pass");
const rpassword = document.querySelector("#rpass");
const show = document.querySelector("#check");

// Function to toggle password visibility
function visible_password() {
  if (show.checked) {
    (password.type = "text"), (rpassword.type = "text");
  } else {
    (password.type = "password"), (rpassword.type = "password");
  }
}

// Event listener for the checkbox
show.addEventListener("change", visible_password);
