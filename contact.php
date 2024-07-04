<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Print Zone!</title>
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        body {
  scroll-behavior: smooth;
  background: #f5f7f8;
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

.contact-details {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 40px 80px;
}

.contact-details .details {
    width: 40%;
}

.contact-details .details span {
    font-size: 12px;
}
.contact-details .details h2,
.form-details form h2 {
    font-size: 32px;
    font-weight: 600;
    padding-bottom: 15px;
}

.contact-details .details h3 {
    font-size: 20px;
    font-weight: 500;
}

.contact-details .details li {
    list-style: none;
    display: flex;
    padding: 10px 0;
}

.contact-details .details li i {
    font-size: 14px;
    padding-right: 14px;
    padding-top: 5px;
}

.contact-details .details li p {
    margin: 0;
    font-size: 14px;
}

.contact-details .map {
    width: 55%;
    height: 400px;
}

.contact-details .map iframe{
    width: 100%;
    height: 100%;
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

.form-details {
    display: flex;
    justify-content: space-between;
    margin: 30px;
    padding: 80px;
    border: 1px solid #bdbdbd;
}

.form-details form {
    padding: 40px 80px;
    width: 65%;
     display: flex;
     flex-direction: column;
     align-items: flex-start;
}

.form-details form span {
    font-size: 12px;
}

.form-details form input,
.form-details form textarea {
    width: 100%;
    padding: 12px 15px;
    outline: none;
    margin-bottom: 20px;
    border: 1px solid #bdbdbd;
}

.form-details form button {
    background-color: #088178;
    color: #fff;
    border: none;
}

.form-details div {
    padding-top: 25px;
}

.form-details .people div img {
    width: 65px;
    height: 65px;
    object-fit: contain;
    margin-right: 15px;
}

.form-details .people p {
    margin: 0;
    font-size: 13px;
    line-height: 25px;

}

.form-details .people div p span {
    display: block;
    font-size: 16px;
    font-weight: 600;
    color: #000;
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
                        <a class="nav-link" href="about.php">About Us!</a>
                      </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.php">Shop</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#banner">Portfolio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                      </li>
        
                  <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa-solid fa-bag-shopping"></i></a> 
                 </li>
             </div>

          </nav> 


          <header class="header">
            <img src="con-ban.png" alt="">
          </header>

          <section class="contact-details">
            <div class="details">
                <span>GET IN TOUCH</span>
                <h2>Visit our Outlet or Contact us!</h2>
                <h3>Head Office:</h3>
                <div>
                    <li>
                        <i class="fa-regular fa-map"></i>
                        <p>Shop #4 , Kohsar Plaza , Opposite to Ziarat Stop , Main Lehtrar Road , Khanna Pull, Islamabad , Pakistan</p>
                    </li>

                    <li>
                        <i class="far fa-envelope"></i>
                        <p>hassanbilla983@gmail.com</p>
                    </li>

                    <li>
                        <i class="fas fa-phone-alt"></i>
                        <p>Hassan Naeem - +923188384337</p>
                    </li>   <li>
                        <i class="far fa-clock"></i>
                       <p>10:00 - 18:00 Mon-Sat</p>
                    </li>
                </div>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3322.0294159554246!2d73.11784107569846!3d33.6304792733188!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzPCsDM3JzQ5LjciTiA3M8KwMDcnMTMuNSJF!5e0!3m2!1sen!2s!4v1720009756775!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
          </section>

          <section class="form-details">
            <form action="">
                <span>Leave a Message</span>
                <h2>We Love To Hear From You!</h2>
                <input type="text" placeholder="Your Name">
                <input type="email" placeholder="E-mail">
                <input type="text" placeholder="Subject">
                <textarea name="" id="" cols="30" rows="10"></textarea>
                <button class="btn">Submit</button>
            </form>

            <div class="people">
                <div>
                    <img src="1.png" alt="">
                    <p><span>Hassan Naeem</span> CEO +92 318 8384337  </p>
                </div>
                <div>
                    <img src="2.png" alt="">
                    <p><span>Hasnain Mughal</span> Senior Manager +92 370 6831867  </p>
                </div>
                <div>
                    <img src="3.png" alt="">
                    <p><span>Naeem Iqbal</span> Owner +92 313 5220186  </p>
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