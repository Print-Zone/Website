<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Print Zone!</title>
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body {
  scroll-behavior: smooth;
}

#home {
  height: 690px;
  background-color: #f5f7f8;
  background-size: cover;
}
.nav {
  gap: 25px;
}

.nav .nav-item .nav-link {
  color: black;
  font-size: 16px;
  transition: all 0.5s ease;
}
.header {
    height: 280px;
    width: 100%;
}

.header img{
    height: 240px;
    width: 100%;
    background-position: center;
    background-size: cover;
}

.footer {
  padding: 0px 80px;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.footer .col {
  display: flex;
  padding-left: 15px;
  flex-direction: column;
  align-items: flex-start;
  margin-bottom: 20px;
}

.col img {
  height: 70px;
  width: 70px;
  margin-bottom: 20px;
}

.col h4 {
  font-size: 19px;
  padding-bottom: 20px;
}
.col p {
  font-size: 13px;
  padding-bottom: 0 0 8px 0;
}

.follow h4 {
  font-size: 19px;
  padding-bottom: 20px;
}

.follow .icon i {
  color: #465b52;
  padding-right: 4px;
  cursor: pointer;
}

.col a {
  font-size: 13px;
  text-decoration: none;
  color: #222;
  margin-bottom: 10px;
}

.col-install {
  display: flex;
  align-items: flex-start;
  flex-direction: column;
  margin-bottom: 20px;
}

.col-install h4 {
  font-size: 19px;
  padding-bottom: 20px;
}

.col-install p {
  font-size: 13px;
  padding: 0 0 8px 0;
}

.col-install .row img {
  height: 55px;
  width: 195px;
  border: 1px solid #088178;
  border-radius: 6px;
  margin-bottom: 10px;
  margin: 5px;
}


.para {
  font-size: 17px; padding: 0 0 8px 0;
}

.col-install img {
  height: 50px;
}

.col .follow .icon i:hover {
  color: #088178;
}


    </style>
</head>
<body>
    <section id="home">
        <nav class="navbar bg-body-tertiary" id="navbar" >
            <div class="container">
              <a class="navbar-brand" href="#">
                <img src="Logo.png" alt="" width="40" height="35">
                Print Zone
              </a>
              <ul class="nav justify-content-end nav-underline green">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Shop</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Portfolio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
    
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa-solid fa-bag-shopping"></i></a> 
             </li>
             </div>
          </nav>

          <header class="header">
            <img src="ban.png" alt="">
          </header>

          <footer class="footer">
            <div class="col">
              <img src="Logo.png" alt="Print Zone Logo">
              <h4>Contact</h4>
              <p><strong>Address:</strong>Shop #4 , Kohsar Plaza , Opposite to Ziarat Stop , Main Lehtrar Road , Khanna Pull, Islamabad , Pakistan</p>
              <p><strong>Phone:</strong> Hassan Naeem - +923188384337</p>
              <p><strong>Hours:</strong>10:00 - 18:00 Mon-Sat</p>
              <div class="follow">
                <h4>Follow Us</h4>
                <div class="icon">
                  <i class="fab fa-facebook-f"></i>
                  <i class="fab fa-twitter"></i>
                  <i class="fab fa-instagram"></i>
                  <i class="fab fa-pinterest-p"></i>
                  <i class="fab fa-youtube"></i>
                
                </div>
              </div>
            </div>
        
            <div class="col">
              <h4>About</h4>
              <a href="#">About Us</a>
              <a href="#">Delievery Information</a>
              <a href="#">Privacy Policy</a>
              <a href="#">Terms & Conditions</a>
              <a href="#">Contact Us</a>
            </div>
        
            <div class="col">
              <h4>My Account</h4>
              <a href="#">Sign Out</a>
              <a href="#">View Cart</a>
              <a href="#">My Wishlist</a>
              <a href="#">Track My Order</a>
              <a href="#">Help</a>
            </div>
        
            <div class="col-install">
              <h4>Install Our App!</h4>
              <p>From App Store or Google Play!</p>
              <div class="row">
                <img  src="app.jpg" alt="">
                <img src="play.jpg" alt="">
              </div>
              <p class="para">Secure Payment Gateways</p>
              <img src="pay.png" alt="">
            </div>
            <div class="copyright">
              <p>© 2024, Print Zone PVT LTD</p>
            </div>
           </footer>
</body>
</html>