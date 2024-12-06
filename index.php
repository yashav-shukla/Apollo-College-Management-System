
<?php include('common/header.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Image Slideshow</title>
<style>
.slideshow-container {
  max-width: 100%;
  height: auto;
  position: relative;
  overflow: hidden;
}

.mySlides {
  display: none;
}

img {
  width: 100%;
  height: auto;
}
</style>
</head>
<body>

<div class="slideshow-container">
  <?php
  // Array of image paths
  $images = array("images/banner-new-6.jpg", "images/banner-new-4.jpg","images/Apollo-Web-Banner.jpg","images/award-1.jpg","images/banner-new-2.jpg","images/banner-new-4.jpg","images/ggg.jpg","images/1643432124317.png","images/Apollo-Standee.jpg","images/1400x500-placement.jpg","images/1400x500-Saurabh.jpg","images/1400x500-cover.jpg","images/induction-program1.jpg","images/workshop-website.jpg");

  // Loop through each image and create a slide
  foreach ($images as $image) {
      echo "<div class='mySlides'>";
      echo "<img src='$image' alt='College Image'>";
      echo "</div>";
  }
  ?>
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  const slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

</body>
</html>




		
    <!-- rest of the page content goes here -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                autoplay: true,
                autoplayTimeout: 5000,
                loop: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 5
                    }
                }
            });
        });
    </script>


		
	<?php include('common/cards.php') ?>
	<?php include('common/footer.php') ?>
  <?php include('aktu-button.html') ?>

</body>
</html>

