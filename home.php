<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Zone - You Can Design in Print Anything from Print Zone , Khanna Dak Islamabad</title>
    <link rel="shortcut icon" href="Index/Logo.png" type="favicon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
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

.hero-section {
  height: 10vh;
  padding: 0 80px;
  padding-top: 200px;
  background-image: url(Index/printer.png);
  background-size: cover;
}

.hero-section h5 {
  color: #fa0000;
}

.hero-section h1 {
  color: #d58104;
  font-weight: bold;
  font-size: 55px;
}

.hero-section p {
  font-size: 18px;
}

.hero-section .btn {
  background-image: url(Index/button.png);
  border: 0;
  background-color: transparent;
  border: 0;
  padding: 14px 80px 14px 65px;
  font-weight: 700;
}

.hero-section .btn a {
  text-decoration: none;
  color: #d58104;
}

.right img {
  position: absolute;
  left: 1020px;
  top: 180px;
  height: 400px;
  width: 400px;
}

#feature {
  padding: 40px 80px;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
}

#feature .fe-box {
  width: 180px;
  text-align: center;
  padding: 25px 15px;
  box-shadow: 20px 20px 34px rgba(0, 0, 0, 0.03);
  border: 1px solid #cce7d0;
  border-radius: 4px;
  margin: 15px 20px;
}

#feature .fe-box img {
  width: 100%;
  margin-bottom: 10px;
}

#feature .fe-box h6 {
  padding: 9px 8px 6px 8px;
  line-height: 1;
  border-radius: 4px;
  color: #d58104;
  background: #fddde4;
  display: inline-block;
}

.product1 {
  padding: 40px 80px;
  text-align: center;
}

.product1 h2 {
  font-size: 40px;
  font-weight: 600;
}

.product1 p {
  font-size: 20px;
}

.pro-container {
  width: 100%;
  display: flex;
  justify-content: space-between;
  padding-top: 20px;
  flex-wrap: wrap;
}

.pro {
  width: 23%;
  min-width: 250px;
  padding: 15px 15px;
  border: 1px solid #cce7d0;
  cursor: pointer;
  border-radius: 25px;
  box-shadow: 20px 20px 30px rgba(0, 0, 0, 0.1);
  margin: 15px 0;
}

.pro img {
  width: 100%;
}

.des {
  text-align: start;
  padding: 10px 0;
}

.des span {
  color: #d58104;
}

.des h5 {
  padding-top: 7px;
  color: #1a1a1a;
  font-size: 19px;
}

.star i {
  color: rgb(243, 181, 25);
  font-size: 12px;
}

.price-cart {
  display: flex;
}

.price-cart h4 {
  padding-top: 7px;
  font-size: 20px;
  font-weight: 700;
  color: #fa0000;
}

.cart-icon {
  padding-left: 140px;
}

.cart-icon.hot {
  position: absolute;
  left: 890px;
}

.cart-icon i {
  width: 40px;
  height: 40px;
  line-height: 40px;
  border-radius: 50px;
  background-color: #e8f6ea;
  color: #fa0000;
}

#banner {
  margin: 40px 0;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  text-align: center;
  background-image: url(Index/b2.jpg);
  width: 100%;
  height: 40vh;
  background-size: cover;
  background-position: center;
}

#banner h4 {
  color: #fff;
  font-size: 16px;
}

#banner h2 {
  color: #fff;
  font-size: 40px;
  padding: 10px 0;
}

#banner h2 span {
  color: #ef3636;
}

.normal {
  font-size: 16px;
  font-weight: 600;
  padding: 15px 30px;
  color: #333;
  background-color: #fff;
  border-radius: 4px;
  cursor: pointer;
  border: none;
  outline: none;
  transition: all 0.3s ease;
}

.normal:hover {
  background-color: #088178;
  color: #fff;
}

.newsletter {
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
  background-image: url(Index/b14.png);
  padding: 40px 80px;
  margin: 15px 0;
  background-position: no-repeat;
  background-position: 20% 30%;
  background-color: #041e42;
}

.newstext h4 {
  font-size: 22px;
  font-weight: 700;
  color: #fff;
}

.newstext p {
  font-size: 14px;
  font-weight: 600;
  color: #818ea0;
}

.newstext span {
  color: #ffbd27;
}

.form {
  display: flex;
  width: 40%;
}

.form input {
  height: 3.125rem;
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
  padding: 15px 15px;
  width: 0 1.25rem;
  font-size: 14px;
  width: 100%;
  border: 1px solid transparent;
  outline: none;
}

.form .btn {
  font-size: 16px;
  font-weight: 600;
  border-top-left-radius: 0;
  white-space: nowrap;
  border-bottom-left-radius: 0;
  padding: 13px 30px;
  color: #fff;
  background-color: #088178;
  cursor: pointer;
  border: none;
  outline: none;
  transition: all 0.2s ease;
}

.footer {
  padding: 40px 80px;
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
            <img src="Index/Logo.png" alt="" width="40" height="35">
            Print Zone
          </a>
          <ul class="nav justify-content-end nav-underline green">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="home.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About Us!</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="#products">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#banner">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>

          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa-solid fa-bag-shopping"></i></a> 
         </li>
         </div>

      </nav>
      <section class="hero-section">
        <div class="content">
        <h5>Printing Services</h5>
        <h1>A Leader In Quality Custom</h1>
        <p>Turn Your ideas into the premium products that leave a lasting impression!</p>
        <button class="btn"><a href="#products">Order Now</a></button>
            </div>
      </section>
      <div class="right">
      <img src="Index/printer.png" alt="">
         </div>
   </section>

   <section id="feature">
    <div class="fe-box">
    <img src="Index/f1.png" alt="Feature 1">
    <h6>Free Shipping!</h6>
  </div>

  <div class="fe-box">
    <img src="Index/f2.png" alt="Feature 2">
    <h6>Online Order</h6>
  </div>

  <div class="fe-box">
    <img src="Index/f3.png" alt="Feature 3">
    <h6>Save Money</h6>
  </div>

  <div class="fe-box">
    <img src="Index/f4.png" alt="Feature 4">
    <h6>Promotions</h6>
  </div>

  <div class="fe-box">
    <img src="Index/f5.png" alt="Feature 5">
    <h6>Happy Sell</h6>
  </div>

  <div class="fe-box">
    <img src="Index/f6.png" alt="Feature 6">
    <h6>F24/7 Support</h6>
  </div>
   </section>

   <section class="product1" id="products">
    <h2>Featured Products</h2>
    <p>New Arrivals!</p>
    <div class="pro-container">
      <div class="pro">
        <img src="Index/p1.jpeg" alt="">
        <div class="des">
          <span>Pen Printing</span>
          <h5>Customized Pen Printing! </h5>
          <div class="star">
            <i class="fas fa-star" ></i>
            <i class="fas fa-star" ></i>
            <i class="fas fa-star" ></i>
            <i class="fas fa-star" ></i>
            <i class="fas fa-star" ></i>
          </div>
        </div>
        <div class="price-cart">
        <h4>Rs. 499.99</h4>
        <div class="cart-icon">
        <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
      </div>
      </div>
      </div>

      <div class="pro">
        <img src="Index/p2.jpeg" alt="">
        <div class="des">
          <span>Pen Printing</span>
          <h5>T Shirts Printing! </h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
        </div>
        <div class="price-cart">
        <h4>Rs. 999.99</h4>
        <div class="cart-icon">
        <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
      </div>
      </div>
      </div>

      <div class="pro">
        <img src="Index/p3.png" alt="">
        <div class="des">
          <span>Pen Printing</span>
          <h5>Customized Mugs Printing! </h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
        </div>
        <div class="price-cart">
        <h4>Rs. 1360-70% = Rs 800!</h4>
        <div class="cart-icon hot">
        <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
      </div>
      </div>
      </div>

      <div class="pro">
        <img src="Index/4.jpeg" alt="">
        <div class="des">
          <span>Pen Printing</span>
          <h5>Mat Mugs Printing! </h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
        </div>
        <div class="price-cart">
        <h4>Rs. 899.99</h4>
        <div class="cart-icon">
        <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
      </div>
      </div>
      </div>

      <div class="pro">
        <img src="Index/5.jpeg" alt="" >
        <div class="des">
          <span>Pen Printing</span>
          <h5>Customized Wallets! </h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
        </div>
        <div class="price-cart">
        <h4>Rs. 1499</h4>
        <div class="cart-icon">
        <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
      </div>
      </div>
      </div>

      <div class="pro">
        <img src="Index/6.jpeg" alt="" >
        <div class="des">
          <span>Pen Printing</span>
          <h5>Magic Mugs Printing! </h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
        </div>
        <div class="price-cart" >
        <h4>Rs. 1150</h4>
        <div class="cart-icon">
        <a href="cart.php"><i class="fa-solid fa-cart-shopping" ></i></a>
      </div>
      </div>
      </div>

      <div class="pro">
        <img src="Index/7.png" alt="">
        <div class="des">
          <span>Pen Printing</span>
          <h5>Customized Mobile Covers! </h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
        </div>
        <div class="price-cart">
        <h4>Rs. 999.99</h4>
        <div class="cart-icon">
        <a href="cart.php"><i class="fa-solid fa-cart-shopping" ></i></a>
      </div>
      </div>
      </div>

      <div class="pro">
        <img src="Index/8.jpeg" alt="">
        <div class="des">
          <span>Pen Printing</span>
          <h5>Metal Keychain Printing! </h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
        </div>
        <div class="price-cart">
        <h4>Rs. 349.99</h4>
        <div class="cart-icon">
        <a href="cart.php"><i class="fa-solid fa-cart-shopping" ></i></a>
      </div>
      </div>
      </div>

      
    </div>
   </section>

   <section id="banner">
    <h4>Repair Services</h4>
    <h2>Up to <span>70% Off</span>  - Customized Mugs! </h2>
    <button class="normal">Explore More!</button>
   </section>

   <section class="product1" id="new-arrival-products">
    <h2>New Arrivals</h2>
    <p>New Modern Designs!</p>
    <div class="pro-container">
      <div class="pro">
        <img src="Index/1.jpeg" alt="">
        <div class="des">
          <span>Pen Printing</span>
          <h5>Crystal Sheild Printing! </h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
        </div>
        <div class="price-cart">
        <h4>Rs. 499.99</h4>
        <div class="cart-icon" >
        <a href="cart.php"><i class="fa-solid fa-cart-shopping" ></i></a>
      </div>
      </div>
      </div>

      <div class="pro" >
        <img src="Index/2.jpeg" alt="" >
        <div class="des">
          <span>Pen Printing</span>
          <h5>Magic Pillow Printing! </h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
        </div>
        <div class="price-cart">
        <h4>Rs. 999.99</h4>
        <div class="cart-icon" >
        <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
      </div>
      </div>
      </div>

      <div class="pro">
        <img src="Index/3.jpeg" alt="" >
        <div class="des">
          <span>Pen Printing</span>
          <h5>Water Bottle Printing! </h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
        </div>
        <div class="price-cart">
        <h4>Rs. 1360-70% = Rs 800!</h4>
        <div class="cart-icon hot" >
        <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
      </div>
      </div>
      </div>

      <div class="pro">
        <img src="Index/4.jpeg" alt="" >
        <div class="des" >
          <span>Pen Printing</span>
          <h5>Mat Mugs Printing! </h5>
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
        </div>
        <div class="price-cart">
        <h4>Rs. 899.99</h4>
        <div class="cart-icon">
        <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
      </div>
      </div>
      </div>
    </div>
   </section>

   <section class="newsletter">
    <div class="newstext">
      <h4>Sign Up For News Letters</h4>
      <p>Get E-mail Updates About Our Latest Shops <span>Special Offers!</span>And New Trending Products!</p>
    </div>
    <div class="form">
      <input type="email" placeholder="Your Email Address!">
      <button class="btn">SignUp</button>
    </div>
   </section>

   <footer class="footer">
    <div class="col">
      <img src="Index/Logo.png" alt="Print Zone Logo">
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
        <img  src="Index/app.jpg" alt="">
        <img src="Index/play.jpg" alt="">
      </div>
      <p class="para">Secure Payment Gateways</p>
      <img src="Index/pay.png" alt="">
    </div>
    <div class="copyright">
      <p>© 2024, Print Zone PVT LTD. All Rights Reserved!</p>
    </div>
   </footer>
    <script src="script.js"></script>
</body>
</html>