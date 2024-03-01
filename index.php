<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" href="work_img/om.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="navbar.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #FFE5B4;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: red;
            padding: 10px;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
        }

        .nav_right p {
            color: white;
            margin: 0;
            padding: 10px;
        }

        .slideshow-container, .pdf-section {
            width: 40%;
            display: inline-block;
            vertical-align: top;
            }

        .slideshow-container {
            display: flex;
            justify-content: center;
            transform: translateX(72%);
        }

        .pdf-section {
            margin-left: 20px;
            padding: 20px;
            background-color: #f2f2f2;
        }

        .mySlides {
            display: flex-end;
            animation: fade 8s ease-in-out infinite; /* Fading animation */
            transition: opacity 2s;
        }

        .mySlides img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        @keyframes fade {
            0%, 100% { opacity: 0; }
            10%, 90% { opacity: 1; }
        }

        
    </style>
</head>
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
    
    <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="work_img/photo1.jpg" alt="Slide 1">
        </div>
        <div class="mySlides fade">
            <img src="work_img/photo2.jpg" alt="Slide 2">
        </div>
        <div class="mySlides fade">
            <img src="work_img/photo3.jpg" alt="Slide 3">
        </div>
        <div class="mySlides fade">
            <img src="work_img/photo4.jpg" alt="Slide 4">
        </div>
        <div class="mySlides fade">
            <img src="work_img/photo5.jpg" alt="Slide 5">
        </div>
        <div class="mySlides fade">
            <img src="work_img/photo6.jpg" alt="Slide 6">
        </div>
        <div class="mySlides fade">
            <img src="work_img/photo7.jpg" alt="Slide 7">
        </div>
        <div class="mySlides fade">
            <img src="work_img/photo8.jpg" alt="Slide 8">
    </div>
        
    <div class="pdf-section">
        <h2>Download the list of festivals 2023</h2>
        <p>Click the link below to download our PDF.</p>
        <a href="work_img/list_of_festivals.pdf" target="_blank" download="your-brochure.pdf">Download PDF Brochure</a>
    </div>
    

    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1;
            }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 4000); // Change image every 4 seconds (adjust as needed)
        }
    </script>
</body>
</html>