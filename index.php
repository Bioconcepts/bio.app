<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">


  <title>Tegor International</title>

  <!-- HTML -->


  <!-- Custom Styles -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.compat.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <link rel="icon" href="https://1.bp.blogspot.com/-Xbf1WMoAxhg/YSTcIjdwngI/AAAAAAAAAp4/wblgeVjG3s4bF3ymkMYDcFJMhNP25EOVgCLcBGAsYHQ/s0/20210824_171449.png" type="image/x-icon">
</head>


<body onload="load()">

 <?php
 include_once('Includes/header.php');
 ?>




<header class="text-gray-600 body-font" background-color="blue" id="home">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
<img src="/Images/20220421_090854.png" alt="Tegor InT gFx" width="200px">
      <span class="ml-3 text-xl">
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;">BIO Concepts</font>
        </font>
      </span>
    </a>
    <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
      <a class="mr-5 hover:text-gray-900" href="#home">
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;">Home</font>
        </font>
      </a>
      <a class="mr-5 hover:text-gray-900"href="#status">
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;">Status</font>
        </font>
      </a>
      <a class="mr-5 hover:text-gray-900"href="#services">
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;">Ask Us</font>
        </font>
      </a>
      <a class="mr-5 hover:text-gray-900" href="#feedback">
        <font style="vertical-align: inherit;">
          <font style="vertical-align: inherit;">Feedback</font>
        </font>
      </a>
    </nav>
  </div>
</header>




 
  <?php
  include_once('Includes/hero.php');
  ?>
  
  <?php
  include_once('Includes/Statics.php');
  ?> 
  
  <?php
  include_once('Includes/defferent.php');
  ?>
  
  
  
<?php
 include_once('Includes/slideshow.php');
 ?>

  
  
  <?php
  include_once('Includes/askus.php');
  ?>
 
 
  <?php
  include_once('Includes/quick.php');
  ?>
  
  
  <?php
  include_once('Includes/footer.php');
  ?>



</body>

</html>
