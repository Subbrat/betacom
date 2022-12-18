<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" class="logo" href="./imges/ic.png">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beta com V.2</title>
  <!-- bootstrap css   -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- font awsome  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./css/s6css.css">
  <link rel="stylesheet" href="./css/slider.css">
  <link rel="stylesheet" href="./main.css">
</head>

<body>
  <!-- <div class="main"> -->
  <!-- side bar / nav bar  -->
  <nav
    class="s6-sidebar s6-bar-block s6-cyan s6-animate-left s6-text-black s6-collapse s6-display-container s6-top s6-center"
    style="z-index:3;width:300px;" id="mySidebar"><br>
    <img src="./imges/ic.png" class="logo" alt="">
    <h3 class="s6-padding s6-center headd"><a href="#" class="headd">demo x shop</a></h3>
    <!-- logo here -->
    <!-- search bar  -->
    <div class="search-container">
      <form action="/action_page.php">
        <input type="text" placeholder="Search" class="s6-round-large" name="search">
        <button type="submit" class="s6-cyan">
          <i class="fa fa-search s6-text-black s6-cyan"></i>
        </button>
      </form>
    </div>
    <br>
    <!--
    <div class="row">
      <div class="col-sm-8">col-sm-8</div>
      <div class="col-sm-4">col-sm-4</div>
    </div> -->
    <div class="row usex">
      <!-- maybe guest !  -->
      <!-- <div class="col-sm-6>  -->
      <ul>
        <li>
          <!-- <span href="">Hi Guest</span> -->
        </li>
        <li>
          <!-- <a href="#">login</a> -->
        </li>
      </ul>
      <p>Hi
        <?php
        $username = "subbrat";
        echo $username ?>
        Subbrat
      </p>
      <div class="s6-display-bottommiddle">
        <span class="cart">
          <a href="#cartlink" class="cartl">
            <i class="fa-solid fa-cart-shopping cartl s6-large"><sup>1</sup> &nbsp;</i></a>
          </a>
        </span>
        &nbsp;&nbsp;&nbsp;
        <span> <a href="index.php?logout='1'" style="color: blue  ;" class="logout"><i
              class="fa-solid fa-power-off s6-large"></i></a>
        </span><br>
      </div>
    </div>
    <!-- <div class="col">
    <p> <a href="index.php?logout='1'" style="color: red;">manage account <i fa fa-men></i></a> </p>
    </div> -->
    <a href="javascript:void(0)" onclick="s6_close()" class="s6-bar-item s6-button s6-padding s6-hide-large">CLOSE</a>
    <p class="s6-xlarge">Categories</p>
    <a href="#tshirt" onclick="s6_close()" class="s6-bar-item s6-button">t - Shirts </a>
    <a href="#hoodies" onclick="s6_close()" class="s6-bar-item s6-button">Hoodies</a>
    <a href="#stationary" onclick="s6_close()" class="s6-bar-item s6-button"> Stationary </a>
  </nav>
  <!-- Top menu on small screens -->
  <header class="s6-container s6-top s6-hide-large s6-white s6-xlarge s6-padding-16">
    <!-- <img src="./imges/ic.png" alt=""> -->
    <span class="s6-left s6-padding">demo x shop</span>
    <a href="javascript:void(0)" class="s6-right s6-button s6-white" onclick="s6_open()">☰</a>
  </header>
  <!-- Overlay effect when opening sidebar on small screens -->
  <div class="s6-overlay s6-hide-large s6-animate-opacity" onclick="s6_close()" style="cursor:pointer"
    title="close side menu" id="myOverlay"></div>
  <!-- </div> -->
  <!-- x products  -->
  <div class="s6-main s6-red " style="margin-left:300px">
    <!-- Push down content on small screens -->
    <div class="s6-red s6-hide-large" style="margin-top:83px"></div>
    <!--x-->
    <div class="s6-display-container s6-container">
      <!-- <img src="./imges/head.jpg" alt="Jeans" style="width:100%"> -->
      <!-- img slideshow -->
      <div class="s6-content s6-display-container" style="max-width:950px;padding: 2%;">
        <a href="#tshirt">
          <img class="slidehead s6-animate-opacity s6-animate-fading" src="./imges/header/im1.jpg" style="width:100%">
        </a>
        <a href="#tshirt">
          <img class="slidehead s6-animate-opacity s6-animate-fading" src="./imges/header/im2.jpg" style="width:100%">
        </a>
        <a href="#tshirt">
          <img class="slidehead s6-animate-opacity s6-animate-fading" src="./imges/header/im3.jpg" style="width:100%">
        </a>
      </div>
      <div class="s6-display-topleft s6-text-white" style="padding:24px 48px">
        <h1 class="s6-jumbo s6-hide-small">New arrivals</h1>
        <h1 class="s6-hide-large s6-hide-medium">New arrivals</h1>
        <h1 class="s6-hide-small">COLLECTION 2016</h1>
        <p><a href="#jeans" class="s6-button s6-black s6-padding-large s6-large">SHOP NOW</a></p>
      </div>
    </div>
    <!-- Product grid -->
    <div class="s6-row s6-center" id="tshirt">
      <div class="prods">
        <!-- prods  -->
        <a href="./prodone.html">
          <div class="prod s6-white ">
            <div class="s6-container">
              <div class="s6-display-container s6-center">
                <span class="s6-tag s6-display-topleft" style="margin-top: 2px;">out of
                  stock</span>
                <img src="./imges/prodimg/1.jpg" class="sc-4 " style="width:100%;margin-top: 10px;">
                <!-- <span class="s6-tag s6-green s6-display-topleft" style="margin-top: 3px;">New</span> -->
                <span class="bold s6-right s6-text-grey">COTTON</span> &nbsp;&nbsp;&nbsp;&nbsp;
                <span class="bold s6-left s6-text-grey">M</span> &nbsp;&nbsp;&nbsp;&nbsp;
                <span>
                  <!-- <a href="#cartlink" class="cartl s6-button s6-grey s6-round s6-display-bottommiddle ">
                  <i class="fa-solid fa-cart-shopping cartl cric"></i></a>
              </span> -->
                  <p>Female T-Shirt Over Sized<br>
                    <b>₹499.99</b>
                    <s class="s6-small">₹999.99</s>
                    <span class=" s6-text-green">50% off</span>
                  </p>
              </div>
            </div>
          </div>
        </a>
        <a href="#proftwo">
          <div class="prod s6-white">
            <div class="s6-container">
              <div class="s6-display-container s6-center">
                <!-- <span class="s6-tag s6-display-topleft" style="margin-top: 2px;">out of
                  stock</span> -->
                <span class="s6-tag s6-display-topleft" style="margin-top: 2px;">New</span>
                <img src="./imges/prodimg/2.jpg" class="sc-4 " style="width:100%;margin-top: 10px;">
                <span class="bold s6-right s6-text-grey mate">denim</span> &nbsp;&nbsp;&nbsp;&nbsp;
                <span class="bold s6-left s6-text-grey mate">l</span> &nbsp;&nbsp;&nbsp;&nbsp;
                <span>
                  <!-- <a href="#cartlink" class="cartl s6-button s6-grey s6-round s6-display-bottommiddle ">
                  <i class="fa-solid fa-cart-shopping cartl cric"></i></a>
              </span> -->
                  <p class="uppe">denim jeans<br>
                    <b>₹1200</b>
                    <s class="s6-small">₹200</s>
                    <span class=" s6-text-green">45% off</span>
                  </p>
              </div>
            </div>
          </div>
        </a>
        <a href="#prodthree">
          <div class="prod s6-white">
            <div class="s6-container">
              <div class="s6-display-container s6-center">
                <!-- <span class="s6-tag s6-display-topleft" style="margin-top: 2px;">out of
                          stock</span> -->
                <span class="s6-tag s6-display-topleft" style="margin-top: 2px;">New</span>
                <img src="./imges/prodimg/3.jpg" class="sc-4 " style="width:100%;margin-top: 10px;">
                <span class="bold s6-right s6-text-grey mate">cotton</span> &nbsp;&nbsp;&nbsp;&nbsp;
                <span class="bold s6-left s6-text-grey mate">m</span> &nbsp;&nbsp;&nbsp;&nbsp;
                <span>
                  <!-- <a href="#cartlink" class="cartl s6-button s6-grey s6-round s6-display-bottommiddle ">
                          <i class="fa-solid fa-cart-shopping cartl cric"></i></a>
                      </span> -->
                  <p class="uppe">printer tshirt<br>
                    <b>₹400</b>
                    <s class="s6-small">₹600</s>
                    <span class=" s6-text-green">34% off</span>
                  </p>
              </div>
            </div>
          </div>
        </a>
        <a href="#prodfour">
          <div class="prod s6-white">
            <div class="s6-container">
              <div class="s6-display-container s6-center">
                <!-- <span class="s6-tag s6-display-topleft" style="margin-top: 2px;">out of
                          stock</span> -->
                <span class="s6-tag s6-display-topleft" style="margin-top: 2px;">New</span>
                <img src="./imges/prodimg/4.jpg" class="sc-4 " style="width:100%;margin-top: 10px;">
                <span class="bold s6-right s6-text-grey mate">cotton</span> &nbsp;&nbsp;&nbsp;&nbsp;
                <span class="bold s6-left s6-text-grey mate">xl</span> &nbsp;&nbsp;&nbsp;&nbsp;
                <span>
                  <!-- <a href="#cartlink" class="cartl s6-button s6-grey s6-round s6-display-bottommiddle ">
                          <i class="fa-solid fa-cart-shopping cartl cric"></i></a>
                      </span> -->
                  <p class="uppe">graphic tshirt<br>
                    <b>₹300</b>
                    <s class="s6-small">₹452</s>
                    <span class=" s6-text-green">42% off</span>
                  </p>
              </div>
            </div>
          </div>
        </a>
        <a href="#prodfive">
          <div class="prod s6-white">
            <div class="s6-container">
              <div class="s6-display-container s6-center">
                <!-- <span class="s6-tag s6-display-topleft" style="margin-top: 2px;">out of
                          stock</span> -->
                <span class="s6-tag s6-display-topleft" style="margin-top: 2px;">New</span>
                <img src="./imges/prodimg/5.jpg" class="sc-4 " style="width:100%;margin-top: 10px;">
                <span class="bold s6-right s6-text-grey mate">nylon</span> &nbsp;&nbsp;&nbsp;&nbsp;
                <span class="bold s6-left s6-text-grey mate">xl</span> &nbsp;&nbsp;&nbsp;&nbsp;
                <span>
                  <!-- <a href="#cartlink" class="cartl s6-button s6-grey s6-round s6-display-bottommiddle ">
                          <i class="fa-solid fa-cart-shopping cartl cric"></i></a>
                      </span> -->
                  <p class="uppe">oversize unisex tshirt<br>
                    <b>₹500</b>
                    <s class="s6-small">₹999</s>
                    <span class=" s6-text-green">52% off</span>
                  </p>
              </div>
            </div>
          </div>
        </a>
        <a href="#prodsix">
          <div class="prod s6-white">
            <div class="s6-container">
              <div class="s6-display-container s6-center">
                <!-- <span class="s6-tag s6-display-topleft" style="margin-top: 2px;">out of
                          stock</span> -->
                <span class="s6-tag s6-display-topleft" style="margin-top: 2px;">New</span>
                <img src="./imges/prodimg/6.jpg" class="sc-4 " style="width:100%;margin-top: 10px;">
                <span class="bold s6-right s6-text-grey mate">cotton</span> &nbsp;&nbsp;&nbsp;&nbsp;
                <span class="bold s6-left s6-text-grey mate">m</span> &nbsp;&nbsp;&nbsp;&nbsp;
                <span>
                  <!-- <a href="#cartlink" class="cartl s6-button s6-grey s6-round s6-display-bottommiddle ">
                          <i class="fa-solid fa-cart-shopping cartl cric"></i></a>
                      </span> -->
                  <p class="uppe">white tshirt<br>
                    <b>₹400</b>
                    <s class="s6-small">₹800-</s>
                    <span class=" s6-text-green">50% off</span>
                  </p>
              </div>
            </div>
          </div>
        </a>
        <a href="#prod7">
          <div class="prod s6-white">
            <div class="s6-container">
              <div class="s6-display-container s6-center">
                <!-- <span class="s6-tag s6-display-topleft" style="margin-top: 2px;">out of
                  stock</span> -->
                <span class="s6-tag s6-display-topleft" style="margin-top: 2px;">New</span>
                <img src="./imges/prodimg/7.jpg" class="sc-4 " style="width:100%;margin-top: 10px;">
                <span class="bold s6-right s6-text-grey mate">denim cotton</span> &nbsp;&nbsp;&nbsp;&nbsp;
                <span class="bold s6-left s6-text-grey mate">xl</span> &nbsp;&nbsp;&nbsp;&nbsp;
                <span>
                  <!-- <a href="#cartlink" class="cartl s6-button s6-grey s6-round s6-display-bottommiddle ">
                  <i class="fa-solid fa-cart-shopping cartl cric"></i></a>
              </span> -->
                  <p class="uppe">over size combo<br>
                    <b>₹1500</b>
                    <s class="s6-small">₹3000</s>
                    <span class=" s6-text-green">50% off</span>
                  </p>
              </div>
            </div>
          </div>
        </a>
        <a href="#prodeight">
          <div class="prod s6-white">
            <div class="s6-container">
              <div class="s6-display-container s6-center">
                <!-- <span class="s6-tag s6-display-topleft" style="margin-top: 2px;">out of
                  stock</span> -->
                <span class="s6-tag s6-display-topleft" style="margin-top: 2px;">New</span>
                <img src="./imges/prodimg/8.jpg" class="sc-4 " style="width:100%;margin-top: 10px;">
                <span class="bold s6-right s6-text-grey mate">terylene</span> &nbsp;&nbsp;&nbsp;&nbsp;
                <span class="bold s6-left s6-text-grey mate">xs</span> &nbsp;&nbsp;&nbsp;&nbsp;
                <span>
                  <!-- <a href="#cartlink" class="cartl s6-button s6-grey s6-round s6-display-bottommiddle ">
                  <i class="fa-solid fa-cart-shopping cartl cric"></i></a>
              </span> -->
                  <p class="uppe">girls top<br>
                    <b>₹600</b>
                    <s class="s6-small">₹1000</s>
                    <span class=" s6-text-green">67% off</span>
                  </p>
              </div>
            </div>
          </div>
        </a>
        <!-- over  -->
        <br>
        <br>
        <br>
        <!-- prods  -->
      </div>
    </div>
    <!--x-->
  </div>
  <!-- footer  -->
  <footer>
    <div class="s6-bottom s6-black">
      <span class="s6-text-orange s6-bar-itemb s6-right">&nbsp;?&nbsp;&nbsp;</span>
      <span class="s6-text-white s6-bar-itemb s6-left" id="ct"> &nbsp; 10</span>
    </div>
  </footer>
  <!-- bs JS  -->
  <script src="./js/slider.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
    crossorigin="anonymous"></script>
  <script src="./main.js">
  </script>
</body>

</html>
?>