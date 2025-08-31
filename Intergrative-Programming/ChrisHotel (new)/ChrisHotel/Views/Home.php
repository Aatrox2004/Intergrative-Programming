<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chris Hotel</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="./CSS/general.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <style>
      .hero {
        display: grid;
        place-items: center;
        height: 90vh;
        background: url('https://themewagon.github.io/sogo/images/hero_1.jpg') center/cover no-repeat;
        text-align: center;
        color: #fff;
      }

      .hero h1 {
        font-size: 3rem;
        margin-bottom: 1rem;
      }

      .btn {
        padding: 0.75rem 1.5rem;
        background: #f9b233;
        color: #000;
        border: none;
        font-weight: bold;
        cursor: pointer;
        border-radius: 5px;
      }

      .section {
        padding: 4rem 2rem;
        max-width: 1200px;
        margin: auto;
      }

      .section-title {
        text-align: center;
        margin-bottom: 2rem;
      }

      .room-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
      }

      .room {
        border: 1px solid #ccc;
        border-radius: 5px;
        overflow: hidden;
        background: #fff;
      }

      .room img {
        width: 100%;
        height: 200px;
        object-fit: cover;
      }

      .room-content {
        padding: 1rem;
      }

      .footer {
        background: #111;
        color: #eee;
        text-align: center;
        padding: 2rem;
      }

      @media (max-width: 768px) {
        .hero h1 {
          font-size: 2rem;
        }
      }
    </style>
  </head>
  <body>
    <div id="header"></div>
    <section class="hero">
      <div>
        <h1>Welcome to Chris Hotel</h1>
        <a href="#rooms" class="btn">Book Now</a>
      </div>
    </section>

    <section id="rooms" class="section">
      <h2 class="section-title">Our Rooms</h2>
      <div class="room-grid">
        <div class="room">
          <img src="https://themewagon.github.io/sogo/images/img_1.jpg" alt="Room 1" />
          <div class="room-content">
            <h3>Deluxe Room</h3>
            <p>Comfortable and spacious room with sea view.</p>
          </div>
        </div>
        <div class="room">
          <img src="https://themewagon.github.io/sogo/images/img_2.jpg" alt="Room 2" />
          <div class="room-content">
            <h3>Standard Room</h3>
            <p>Affordable luxury for budget-conscious travelers.</p>
          </div>
        </div>
        <div class="room">
          <img src="https://themewagon.github.io/sogo/images/img_3.jpg" alt="Room 3" />
          <div class="room-content">
            <h3>Family Suite</h3>
            <p>Spacious suite perfect for families with children.</p>
          </div>
        </div>
      </div>
    </section>

    <section id="about" class="section">
      <h2 class="section-title">About Us</h2>
      <p style="text-align:center; max-width:800px; margin:auto">Chris Hotel offers world-class hospitality with a touch of elegance. Nestled in the heart of the city, we bring you a blend of luxury and comfort for both business and leisure travelers.</p>
    </section>

    <section id="contact" class="section">
      <h2 class="section-title">Contact Us</h2>
      <p style="text-align:center; max-width:800px; margin:auto">Feel free to reach out via email at contact@sogohotel.com or call us at +123 456 7890.</p>
    </section>
    <div id="footer"></div>
    <script src="./JS/include.js"></script>
  </body>
</html>