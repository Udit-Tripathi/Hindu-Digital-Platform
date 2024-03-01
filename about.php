<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="icon" href="work_img/om.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="navbar.css">
</head>
<style>
  body {
    background-color: #FFE5B4;
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    margin: 0;
    padding: 0;
  }
  .about-section {
    display: flex; /* Use flexbox for layout */
    align-items: flex-start; /* Align contents to the top */
    margin: 20px 0;
}

.about-image {
    flex: 1; /* Allow the image to take up 50% of the horizontal space */
}

.about-image img {
    display: block;
    margin: 0 auto;
    max-width: 75%; /* Make the image responsive within its container */
}

.about-description {
    flex: 1; /* Allow the description to take up 50% of the horizontal space */
    text-align: top;
    margin-right: 50px;  
}

.about-description h2 {
    font-size: 27px;
}

.about-description p {
    font-size: 18px;
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
  <div class="about-section">
    <div class="about-image">
        <img src="work_img/photo3.jpg" alt="Description of the image">
    </div>
    <div class="about-description">
        <h2>About Us</h2>
        <p>Shivpuri Ji is widely revered for his unwavering dedication and profound expertise as a Hindu priest. With an illustrious career spanning nearly three decades, he has cultivated a deep reservoir of knowledge and wisdom, offering a wealth of experience in the sacred traditions and rituals of Hinduism. His commitment to serving the spiritual needs of the community has solidified his reputation as a pillar of guidance, compassion, and authenticity in his field.
        <h2>Contact us</h2>
        <p>Phone: +44 7740 048096 <br>Tel: 0208 5748403 <br>Email: pt.shivpuri@gmail.com</p>
    </div>
  </div>
</body>
</html>