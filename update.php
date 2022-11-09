<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>ANURAG UNIVERSITY</title>
    <link rel = "stylesheet" type = "text/css" href = "style.css">   
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

<body
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><img src="img\logo.jpg" width="200"></i></h2>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<h3>DEPARTMENT OF INFORMATION TECHNOLOGY</h3>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="admin.php" class="nav-item nav-link active">Home</a>
                <a href="adminlogin.html" class="nav-item nav-link">LOGOUT</a>
                
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
    	<div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
			<div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <a href="studentdata.php"><h5 class="mb-3">STUDENT DATA</h5></a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                            <a href="studentadd.php"><h5 class="mb-3">ADD STUDENT</h5></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-home text-primary mb-4"></i>
                            <a href="delete.php"><h5 class="mb-3">DELETE STUDENT</h5></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                            <a href="update.php"><h5 class="mb-3">UPDATE STUDENT</h5></a>
                        </div>
                    </div>
                </div>
	</div>
        </div>
    </div>
    <!-- Service End -->

<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 70%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 70%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  
  padding: 20px;
}
form {
   max-width: 42em;
   margin: auto;
 }

</style>
<body>

<center><h1>Update Details </h1></center>
<center>
<div>
  <form method="post" action='updates.php'>
    Name<br>
    <input type="text" id="fname" name="name" placeholder="xyz">
<br>
<br>
    <label for="des">Roll Number</label><br>
    <input type="text" id="lname" name="RollNo" placeholder="Roll Number">
<br>
<br>
    <label for="des">Section</label><br>
    <input type="text" id="lname" name="section" placeholder="IT-A or IT-B or IT-C">
<br>
<br>
    <label for="mail">Email ID</label><br>
    <input type="text" id="lname" name="email" placeholder="xyz@cvsr.ac.in">
<br>
<br>
    <label for="num">Mobile Number</label><br>
    <input type="text" id="lname" name="num" placeholder="+91 9999999999">
<br>
<br>
    <label for="lname">attendance</label><br>
    <input type="text" id="lname" name="att" placeholder="xx%">
<br>
<br>
    <label for="des">C.G.P.A</label><br>
    <input type="text" id="lname" name="cgpa" placeholder="On the Scale of 10">
<br>
<br>
    <label for="des">Active Backlogs</label><br>
    <input type="text" id="lname" name="abs" placeholder="0 or 1 or n">
<br>
<br>
    <label for="des">Passive Backlogs</label><br>
    <input type="text" id="lname" name="pbs" placeholder="0 or 1 or n">
<br>

<br>
    <input type="submit" name="submit" value="Submit">
  </form>
</div>

</center>

<!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-4 mt-4 wow fadeIn" data-wow-delay="0.1s"><center>DEVELOPED BY KSK</center>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>
</html>


