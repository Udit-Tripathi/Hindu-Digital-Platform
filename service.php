<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="icon" href="work_img/om.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="navbar.css">
</head>
<style>
  h1, h2{
    font-family: Verdana;
  }
  body {
    background-color: #FFE5B4;
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    margin: 0;
    padding: 0;
  }

  .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
  }

  h1 {
    font-size: 32px;
    margin-bottom: 20px;
  }

  /* Grid layout for services */
  .services {
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* Three services in a row */
    grid-gap: 15px; /* Spacing between services */
  }

  .service {
    background-color: #FCD283;
    border: 1px solid #ccc;
    padding: 0px;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
  }

  .service img {
    width: 400px; /* Adjust the width as needed */
    height: 250px; /* Adjust the height as needed */
    object-fit: cover; /* Maintain aspect ratio and cover the entire space */
  }
</style>
<body>
  <div class="navbar">
    <div class="nav_left">
      <img src="work_img/om.png" alt="Logo">
      <a href="index.php">Home</a>
      <a href="about.php">About</a>
      <a href="service.php">Services</a>
    </div>
    <div class="nav_right">
      <p>Email: pt.shivpuri@gmail.com</p>
    </div>
  </div>
  <div class="container">
    <h1>Our Services</h1>
    <!-- Grid layout for services -->
    <div class="services">
      <div class="service">
          <img src="work_img/all_ceremony.jpg" alt="Service 1">
          <h2>All Hindu ceremonies</h2>
          <p>All Hindu ceremonies from first Rites to last rites</p>
      </div>

      <div class="service">
          <img src="work_img/havan.jpg" alt="Service 2">
          <h2>Havan</h2>
          <p>Havan is a sacred purification ritual that is performed in households as well as work places and shops by chanting mantras and worshipping different Gods and Goddesses.</p>
      </div>

      <div class="service">
          <img src="work_img/katha.jpg" alt="Service 3">
          <h2>katha</h2>
          <p>Katha is an Indian style of religious storytelling, performances of which are a ritual event in Hinduism.</p>
      </div>

      <div class="service">
          <img src="work_img/kirtan.jpg" alt="Service 4">
          <h2>kirtan</h2>
          <p>kirtan is a call-and-response style song or chant, set to music, wherein multiple singers recite or describe a legend, or express loving devotion to a deity, or discuss spiritual ideas.</p>
      </div>

      <div class="service">
          <img src="work_img/marriage.jpg" alt="Service 5">
          <h2>Marriage</h2>
          <p>marriage is a sacrament, not a contract. To signify the viability of the ceremony, fire is kept as a witness, and offerings are made. The bride's brother gives three fistfuls of puffed rice to the bride as a wish for his sister's happy marriage. Each time, the bride offers the rice to the fire</p>
      </div>

      <div class="service">
          <img src="work_img/funeral.jpg" alt="Service 5">
          <h2>funeral</h2>
          <p>when someone dies, the soul is reborn as a different form. Although the physical body dies, their soul remains and continues to recycle until it settles upon its true nature.</p>
      </div>
    </div>
  </div>
</body>
</html>