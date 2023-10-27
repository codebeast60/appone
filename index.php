 <?php
    include "templates/header.php";

    ?>
 <!-- start landing  -->
 <div class="landing text-light d-flex justify-content-center align-items-center bg-dark">
     <div class="text-center">
         <h2 class="text-uppercase fw-bold">Learn everything about <br>Programming</h2>
         <p class="fs-5 text-white-50 mb-5 mt-3">welcome into amazing experiences</p>
         <a class="btn btn-primary rounded-pill main-btn w-75 " href="index.php"> Lets Get Started <i class="fa-brands fs-5 fa-golang"></i></a>
     </div>
 </div>
 <!-- end landing  -->
 <!-- start feature  -->
 <div class="features text-center pt-5 pb-5 ">
     <div class="container">
         <div class="main-title mt-5 mb-5 position-relative">

             <i class="fa-solid fa-school mb-4" style="color:19283f;font-size:4rem; "></i>
             <h2>Our Courses</h2>
             <p class="text-black-50 text-uppercase ">some of these stuff under</p>

         </div>
         <div class="row">
             <div class="col-md-6 col-lg-4 ">
                 <div class="feat">
                     <div class="icon-holder position-relative">


                     </div>
                     <h4 class="mb-4 mt-4 text-uppercase"> <i class="fa-brands fa-php h1"></i></h4>
                     <p class="text-black-50 lh-lg">
                         Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo

                         .
                     </p>
                 </div>
             </div>
             <div class="col-md-6 col-lg-4 ">
                 <div class="feat">
                     <div class="icon-holder position-relative">

                     </div>
                     <h4 class="mb-4 mt-4 text-uppercase">MySQL <i class="fa-solid fa-database text-primary"></i></h4>
                     <p class="text-black-50 lh-lg">
                         Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo

                         s.
                     </p>
                 </div>
             </div>
             <div class="col-md-6 col-lg-4 ">
                 <div class="feat">
                     <div class="icon-holder position-relative">

                     </div>
                     <h4 class="mb-4 mt-4 text-uppercase">Laravel 10 <i class="fa-brands fa-laravel h3 text-danger"></i></h4>
                     <p class="text-black-50 lh-lg">
                         Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo

                         .
                     </p>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- end feature  -->
 <!-- start stuff -->
 <div class="stuff pt-4 pt-5">
     <div class="container">
         <div class="main-title text-center mt-5 mb-5 position-relative">
             <i class="fa-solid fa-anchor mb-4 text-primary" style=" font-size:4rem;"></i>
             <h2>some stuff about us</h2>
             <p class="text-black-50  text-uppercase">the greate team</p>
             <p class="description text-center mb-5 mt-4 text-black-50">
                 donec rutrum congue leo ehet malesuada. Mauris blandit aliquet elit , eget ticidunt nibh puvinar a. Pellentesque in ipsum id orci porta dapibus . Proin eget tortor risus.Sonec sollicitudin molestie malesuada.
             </p>
         </div>
         <div class="row " style="padding-top:190px;">
             <div class="col-lg-4 mb-4 pt-5 text-center text-md-start">
                 <div class="text ">
                     <h4>ECOMMERCE</h4>
                     <p class="text-black-50 w-75 fs-6">donec rutrum congue leo ehet malesuada. Mauris blandit aliquet elit , eget ticidunt nibh puvinar a. Pellentesque in ipsum id orci porta dapibus . Proin eget tortor risus.Sonec sollicitudin molestie malesuada.</p>
                     <p class="text-black-50 w-75 js-6">donec rutrum congue leo ehet malesuada. Mauris blandit aliquet elit , eget ticidunt nibh puvinar a. Pellentesque in ipsum id orci porta dapibus . Proin eget tortor risus.Sonec sollicitudin molestie malesuada.</p>
                     <a href="#" class="btn btn-primary text-uppercase ">Order Me One</a>
                 </div>
             </div>
             <div class="col-lg-8  mb-3">
                 <img class="img-fluid" src="https://picsum.photos/850/700?grayscale" alt="">
             </div>
         </div>
     </div>
 </div>
 <hr class="w-75 m-auto mb-3">
 <!-- end stuff -->
 <?php
    if (isset($_SESSION['user'])) {
    ?>
     <!-- start cards -->
     <div class="cards">
         <div class="container">
             <div class="main-title text-center mt-5 mb-5 position-relative">
                 <i class="fa-solid fa-book mb-4 text-primary" style=" font-size:4rem;"></i>
                 <h2>backend courses</h2>
                 <p class="text-black-50  text-uppercase">access now</p>

             </div>
             <div class="row mb-3">
                 <div class="col-md-4 mb-3 col-sm-6">
                     <div class="card" style="width: 18rem;">

                         <div class="card-body">
                             <h5 class="card-title">PHP Level (1)</h5>
                             <p class="card-text">
                                 PHP Level One is an introductory course aimed at beginners. It covers the fundamentals of PHP, a popular server-side scripting language for web development. Topics include syntax, variables, data types, basic functions, and simple web applications. This course provides a foundational understanding of PHP, setting the stage for more advanced web development skills.</p>
                             <a href="#" class="btn btn-primary">view <i class="fa-solid fa-eye"></i></a>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4 col-sm-6">
                     <div class="card" style="width: 18rem;">

                         <div class="card-body">
                             <h5 class="card-title">PHP Level (2)</h5>
                             <p class="card-text">PHP Level Two is an intermediate course that builds upon the basics. Students delve deeper into PHP, learning advanced concepts such as object-oriented programming, database integration with MySQL, and creating dynamic web applications. This level equips learners with the skills to develop interactive and data-driven websites, making them proficient PHP developers</p>
                             <a href="#" class="btn btn-primary">view <i class="fa-solid fa-eye"></i></a>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4 col-sm-6">
                     <div class="card" style="width: 18rem;">

                         <div class="card-body">
                             <h5 class="card-title">PHP Level (3)</h5>
                             <p class="card-text">
                                 PHP Level Three is an advanced course that hones the skills of experienced PHP developers. It covers topics like security best practices, performance optimization, and advanced database manipulation. Students also explore frameworks and design patterns, enabling them to develop robust, scalable, and secure web applications at a professional level.</p>
                             <a href="#" class="btn btn-primary">view <i class="fa-solid fa-eye"></i></a>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4 col-sm-6">
                     <div class="card" style="width: 18rem;">

                         <div class="card-body">
                             <h5 class="card-title">MYSQL (1)</h5>
                             <p class="card-text">MySQL Level One is an introductory course designed for beginners. It provides a solid foundation in MySQL, a popular relational database management system. Students learn database design, SQL query writing, and basic database administration tasks. This course equips learners with essential skills to manage and interact with databases effectively.</p>
                             <a href="#" class="btn btn-primary">view <i class="fa-solid fa-eye"></i></a>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4 col-sm-6">
                     <div class="card" style="width: 18rem;">

                         <div class="card-body">
                             <h5 class="card-title">MYSQL (2)</h5>
                             <p class="card-text">MySQL Level Two is an intermediate course that builds on fundamental skills. It covers advanced database management topics such as transactions, indexing, stored procedures, and triggers. Students also explore performance optimization and database security. This level empowers learners to design and manage complex databases, making them proficient in MySQL database administration.</p>
                             <a href="#" class="btn btn-primary">view <i class="fa-solid fa-eye"></i></a>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-4 col-sm-6">
                     <div class="card" style="width: 18rem;">

                         <div class="card-body">
                             <h5 class="card-title">Laravel 10</h5>
                             <p class="card-text">As of my last knowledge update in September 2021, there's no such thing as Laravel 10. Laravel is a popular PHP framework for web development, and the latest version at that time was Laravel 8. However, newer versions might have been released since then. Laravel typically introduces new features and improvements with each release..</p>
                             <a href="#" class="btn btn-primary">view <i class="fa-solid fa-eye"></i></a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- end cards -->
 <?php } else {

    ?>

 <?php } ?>
 <div class="text-center">
     <h2 class="text-uppercase fw-bold">to access to our courses <br>you should login</h2>
     <p class="fs-6 text-white-50 mb-5 mt-3">welcome into amazing experiences</p>
     <a class="btn btn-primary rounded-pill main-btn w-25 " href="login.php"> login</a>
 </div>
 <?php
    include "templates/footer.php";
    ?>