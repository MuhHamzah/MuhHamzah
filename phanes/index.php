<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Phanes - Discover 3D Printing</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background-color: rgb(25, 360, 180);
      display: flex;
      height: 100vh;
      overflow: hidden;
    }

    .sidebar {
      width: 35%;
      background-color: rgb(15, 150, 228);
      padding: 40px 30px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      color: white;
    }

    .logo-area {
      display: flex;
      align-items: center;
      gap: 15px;
      font-weight: bold;
      font-size: 2em;
    }

    .promo {
      margin-top: 60px;
    }

    .promo h1 {
      font-size: 2.5em;
      letter-spacing: 2px;
      color: #000;
    }

    .promo h1 span {
      color: #7b61ff;
    }

    .promo p {
      margin: 20px 0;
      color: #333;
      line-height: 1.6em;
    }

    .promo button {
      padding: 10px 20px;
      background-color: rgb(192, 191, 191);
      border: none;
      border-radius: 25px;
      color: white;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .promo button:hover {
      background-color: rgb(36, 103, 248);
    }

    .social-media {
      margin-top: 40px;
      display: flex;
      gap: 15px;
    }

    .social-media i {
      font-size: 1.5em;
      color: rgb(181, 246, 59);
      cursor: pointer;
    }

    .main {
      width: 65%;
      position: relative;
      background-size: cover;
      background-position: center;
    }

    .navbar {
      position: absolute;
      top: 30px;
      right: 40px;
      display: flex;
      align-items: center;
      gap: 30px;
      z-index: 2;
    }

    .navbar a {
      color: blue;
      text-decoration: none;
      font-weight: bold;
      transition: color 0.3s;
    }

    .navbar a:hover {
      color: #ffd700;
    }

    .navbar button {
      padding: 8px 16px;
      background-color: blue;
      color: #fff;
      border: none;
      border-radius: 20px;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .navbar button:hover {
      background-color: #e0e7ff;
      color: blue;
    }

    .slider-wrapper {
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      gap: 20px;
      margin-top: 150px;
    }

    .arrow {
      background-color:rgb(241, 247, 254);
      color: white;
      border: none;
      font-size: 30px;
      padding: 10px 15px;
      border-radius: 50%;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .arrow:hover {
      background-color: #0056b3;
    }

    .center-image img {
  width:1000px;
  height: 600px;
  object-fit: center;
  border-radius: 20px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
}
  </style>
</head>
<body>

  <!-- Sidebar Kiri -->
  <div class="sidebar">
    <div>
      <div class="logo-area">
        <img src="transparan logo[1].png" style="width:90px; height:90px;">
        Phanes
      </div>

      <div class="promo">
        <h1>Discover <span>Phanes</span></h1>
        <p>Experience the future of 3D printing. Customize your dream into reality with our precision-crafted technology.</p>
        <a href="services.php"><button>Read More</button></a>
      </div>
    </div>

    <div class="social-media">
      <i class="fab fa-twitter"></i>
      <i class="fab fa-facebook-f"></i>
      <i class="fab fa-instagram"></i>
    </div>
  </div>

  <!-- Bagian Main -->
  <div class="main">
    <div class="navbar">
      <a href="login.php"><button>Log In</button></a>
    </div>

    <!-- Slider -->
    <div class="slider-wrapper">
      <button class="arrow left" onclick="prevSlide()">&#10094;</button>
      <div class="center-image">
        <img id="slider-image" src="image/Custom Face Human.jpg" alt="Slider">
      </div>
      <button class="arrow right" onclick="nextSlide()">&#10095;</button>
    </div>
  </div>

  <!-- Fix Typo: script bukan scrip -->
  <script>
    const images = [
      "image/Custom Face Human.jpg",
      "image/Custom tentara.jpg",
      "image/Kartun.jpg"
    ];

    let currentIndex = 0;
    const imgElement = document.getElementById('slider-image');

    function showImage(index) {
      imgElement.src = images[index];
    }

    function nextSlide() {
      currentIndex = (currentIndex + 1) % images.length;
      showImage(currentIndex);
    }

    function prevSlide() {
      currentIndex = (currentIndex - 1 + images.length) % images.length;
      showImage(currentIndex);
    }
  </script>

</body>
</html>
