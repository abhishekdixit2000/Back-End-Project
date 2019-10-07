<?php include'C:\xampp\htdocs\Planner Pros\inc\header.php'; ?>
<style>
    
* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
</style>

<!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>PhotoGallery</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->
<!--    main body start-->
<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="img/gallery/ffe459582c8e4dc676d73e4b07dcabc0.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="img/gallery/download.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="img/gallery/1294993-best-nature-hd-wallpapers-1920x1080-cell-phone.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="img/gallery/ffe459582c8e4dc676d73e4b07dcabc0.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="img/gallery/download.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="img/gallery/1294993-best-nature-hd-wallpapers-1920x1080-cell-phone.jpg" style="width:100%">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="img/gallery/ffe459582c8e4dc676d73e4b07dcabc0.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/gallery/download.jpg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/gallery/1294993-best-nature-hd-wallpapers-1920x1080-cell-phone.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/gallery/ffe459582c8e4dc676d73e4b07dcabc0.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/gallery/download.jpg" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
    </div>    
    <div class="column">
      <img class="demo cursor" src="img/gallery/1294993-best-nature-hd-wallpapers-1920x1080-cell-phone.jpg" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
    </div>
  </div>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
<!--main body ends-->
<!-- contact us part start-->
    <section class="contact_us">
        <div class="container">
           <div id="contact">
              <div class="row">
                <div class="col-lg-12">
                    <div class="contact_us_iner">
                        <div class="row justify-content-around">
                            <div class="col-lg-4">
                                <div class="contact_us_left_text">
                                    <h4>Ghaziabad</h4>
                                    <span>India</span>
                                    <p>KIET Group Of Institutions,Muradnagar,
                                        Ghaziabad-201206, India</p>
                                    <p>Email: plannerpros@gmail.com <br>Phone no: +91 8868944979</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="contact_us_right_text">
                                    <h5>Call Directly;</h5>
                                    <h2>(+91 8868944979)</h2>
                                    <h5>Brand Office</h5>
                                    <span>KIET Group Of Institutions,Muradnagar,
                                        Ghaziabad-201206, India</span>
                                    <h5>Working Hours:</h5>
                                    <p>Monday - Friday / 9.00 PM - 5.00 AM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
    </section>
    <!-- contact us part end-->

    <!-- map us part start-->
    <section class="map_part">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="map_iner">
                        <div class="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- map us part end-->`

    <?php include 'C:\xampp\htdocs\Planner Pros\inc\footer.php'; ?>