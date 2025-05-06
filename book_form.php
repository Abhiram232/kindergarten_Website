<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Become a teacher</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/bookform.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">




    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">



    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

<!-- <style>
    .book-form{
    padding:2rem;
    background: var(--light-bg);


}
.booking .book-form .flex{
    display: flex;
    flex-wrap: wrap;
    gap:2rem;
}
 .flex .inputBox{
    flex:1 1 41rem;
}
 .inputBox input{
    width: 100%;
    padding:1.2rem 1.4rem;
    font-size: 1.6rem;
    color:var(--light-black);
    text-transform:none;margin-top: 1.5rem;
    border: var(--border);
}
.booking .book-form .flex .inputBox input:focus{
    background: var(--black);
    color: var(--white);
}
.booking .book-form .flex .input-box input:focus::placeholder{
    background:var(--black);
    color:var(--light-white);
}
.booking .book-form .flex .input-box span{
    font-size: 1.5rem;
    color:var(--light-black);

}
.booking .book-form .btn{
    margin-top: 2rem;
}

    </style> -->
</head>
<body>

<div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
            <a href="home.php" class="navbar-brand">
                <h1 class="m-0 text-primary"><i class="fa fa-book-reader me-3"></i>Kider</h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="home.php" class="nav-item nav-link">Home</a>
                    <a href="about.php" class="nav-item nav-link">About Us</a>
                    <a href="classes.php" class="nav-item nav-link">Classes</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                            <a href="facility.php" class="dropdown-item">School Facilities</a>
                            
                            <a href="call-to-action.php" class="dropdown-item">Become A Teachers</a>
                            <a href="appointment.php" class="dropdown-item active">Make Appointment</a>
                           
                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link">Contact Us</a>
                </div>
                
            </div>
        </nav>

 

<div class="menu-btn" class="fas fa-bars"></div>
<!-- </section> -->


<section>
<div class="heading" style="background:url(images/book.jpg)center/cover;color: white;font-size: 200px ;text-align: center; border-radius:50% ;">

<h1 style="font-size: larger;background: url(images/book.jpg)center/cover;">Become a Teacher</h1>

</div>
<!--book form starts  -->
<section class="booking">
<!-- <h1 class="heading-title" style="color: rgb(16, 15, 15);">book now</h1> -->
<form action="teacherconnect.php" method="post" class="book-form" style=" padding:2em;
background: var(--light-bg);">
    <div class="flex" style=" display: flex;
    flex-wrap: wrap;
    gap:2em;">
        <div class="inputBox" style="padding-top: 0 ;
         flex:1 1 41rem;">
            <span>Name:</span>
            <input type="text" placeholder="enter your name"  name="name"
            style=>
        </div>

        <div class="inputBox"style="flex:1 1 41em" >
            <span>Email:</span>
            <input type="email" placeholder="enter your email"  name="email">
        </div>

        <div class="inputBox" style="flex:1 1 41em"  >
            <span>Phone:</span>
            <input type="number" placeholder="enter your number"  name="phone">
        </div>
        

        <div class="inputBox" style="flex:1 1 41em"  >
            <span>Address:</span>
            <input type="address" placeholder="enter your address"  name="address"
           >
        </div>
        <div class="inputBox" style="flex:1 1 41em" >
            <span>Course:</span>
            <input type="text" placeholder="Course name"  name="Course"
           >
        </div>
        <!-- <div class="inputBox" style="flex:1 1 41em" >
            <span>how many:</span>
            <input type="number" placeholder="how many guests"  name="guests"
            >
        </div>
        <div class="inputBox" style="flex:1 1 41em" >
            <span>where to:</span>
            <input type="text" placeholder="place you want to visit"  name="location"
           >
        </div> -->
        <!-- <div class="inputBox" style="flex:1 1 41em" >
            <span>arrivals:</span>
            <input type="date"  name="arrivals"
            >
        </div> -->
        <!-- <div class="inputBox" style="flex:1 1 41em" >
            <span>leaving:</span>
            <input type="date"  name="leaving"
            >
        </div> -->
    </div>

<input  type="submit" value="submit" class="btn1" name="end">
<!-- <script>alert('Succesful')</script> -->
</form>


</section>



<!-- book form ends -->
<!--footer-->

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>  



<script>
    let menu=document.querySelector('.menu-btn');
let navbar=document.querySelector('.header.navbar');


menu.onclick=()=>{
    menu.classList.toggle('fa-times');
    nav.classList.toggle('active');
}
</script>

</body>
</html>