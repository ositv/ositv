<html><head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
<title>MaxproLive-Rio</title>
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
<link rel="shortcut icon" type="image/x-icon" href="https://i.ibb.co/37fVLxB/f4027915ec9335046755d489a14472f2.png"> <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Playfair+Display&family=Roboto&family=Roboto+Slab&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
<link rel="stylesheet" href="./maxprostyle.css" />
<link rel="stylesheet" href="./maxproplayer.css" />
<meta name="robots" content="noindex">

<!--====================================Player===============================-->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<link rel="shortcut icon" type="image/x-icon" href="https://i.ibb.co/37fVLxB/f4027915ec9335046755d489a14472f2.png">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/plyr@3.6.2/dist/plyr.css" />
<script src="https://cdn.jsdelivr.net/npm/plyr@3.6.12/dist/plyr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/hls.js@1.1.4/dist/hls.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lazysizes@5.3.2/lazysizes.min.js"></script>


</head>
<body>

<!--===========================Video Player============================-->
<div class="menu">&nbsp;<i class='fas fa-video' id="name1" style='font-size:13px;color:orangered;margin-top:.3rem;'>&nbsp;&nbsp;MaxproTv</i></div>
<div class="conta" id="video">
<div id="loading" class="loading">
<div style="color:red;" class="loading-text">
<span style="color:green;" class="loading-text-words">T</span>
<span style="color:yellow;" class="loading-text-words">E</span>
<span style="color:white;" class="loading-text-words">C</span>
<span style="color:skyblue;" class="loading-text-words">H</span>
<span  style="color:pink;" class="loading-text-words">M</span>
<span style="color:yellow;" class="loading-text-words">A</span>
<span  style="color:red;" class="loading-text-words">X</span>
</div>
</div>
<video autoplay controls crossorigin playsinline>
<?php
printf("<source type=\"application/vnd.apple.mpegurl\" src=\"autoq.php?c=%s\">", $_REQUEST["c"]);
?>
</video>
</div>
<div class="search">
<form>
     <input id="search" type="search" placeholder="Search"/>
 </form>
 <div class="dropdown">
  <button class="btn dropdown-toggle text-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    RioTV
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="./zee5.php">Kee5</a></li><br>
    <li><a class="dropdown-item" href="./sony.php">TonyTV</a></li>
    
  </ul>
</div>
 </div>

<div id="content">
<div class="container-fluid">

<div class="row">
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Aastha" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Aastha.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i> Aastha</p>
</div>
</a>
</div></div>

<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Aastha_Bhajan" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Aastha_Bhajan.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Aastha Bhajan</p>
</div>
</a>
</div></div>


<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sanskar" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sanskar.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sanskar</p>
</div>
</a>
</div></div>

<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Satsang_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Satsang_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Satsang TV</p>
</div>
</a>
</div></div>


<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Arihant_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Arihant_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Arihant TV</p>
</div>
</a>
</div></div>

<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Divya_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Divya_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Divya TV</p>
</div>
</a>
</div></div>


<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sadhna" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sadhna.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sadhna</p>
</div>
</a>
</div></div>


<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Colors_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Colors HD</p>
</div>
</a>
</div></div>


<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sony_SAB" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_SAB.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sony SAB</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=And_TV_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/And_TV_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>And TV HD</p>
</div>
</a>
</div></div>

<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sony_SAB_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_SAB_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sony SAB HD</p>
</div>
</a>
</div></div>

<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Rishtey" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Rishtey.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Rishtey</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Zee_Anmol" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Anmol.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Zee Anmol</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sony_Pal" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Pal.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sony Pal</p>
</div>
</a>
</div></div>



<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sony_HD" class="card">
<img class=" lazyloaded" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_HD.png" style="height: 120px" src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_HD.png">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sony HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Zee_TV_HD" class="card">
<img class=" lazyloaded" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_TV_HD.png" style="height: 120px" src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_TV_HD.png">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Zee TV HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sony_Max_HD" class="card">
<img class=" lazyloaded" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Max_HD.png" style="height: 120px" src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Max_HD.png">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sony Max HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Zee_Cinema_HD" class="card">
<img class=" lazyloaded" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Cinema_HD.png" style="height: 120px" src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Cinema_HD.png">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Zee Cinema HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Six_HD" class="card">
<img class=" lazyloaded" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Six_HD.png" style="height: 120px" src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Six_HD.png">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sony Six HD</p>
</div>
</a>
</div></div>


<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Colors_Cineplex" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Cineplex.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Colors Cineplex</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sony_Pix_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Pix_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sony Pix HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sony_Max_SD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/SET_MAX.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sony Max SD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sony_MAX2" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_MAX2.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sony MAX2</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=And_Pictures_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/And_Pictures_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>And Pictures HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Zee_Cinema" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Cinema.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Zee Cinema</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=B4U_Movies" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/B4U_Movies.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>B4U Movies</p>
</div>
</a>
</div></div>

<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Aaj_Tak" class="card">
<img class=" lazyloaded" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Aaj_Tak.png" style="height: 120px" src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Aaj_Tak.png">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Aaj Tak</p>
</div>
</a>
</div></div>

<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=IBN_7" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/IBN_7.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>News 18 India</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=India_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/India_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>India TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=NDTV_India" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/NDTV_India.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>NDTV India</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Zee_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Zee News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Zee_Classic" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Classic.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Zee Bollywood</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=NDTV_Good_Times" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/NDTV_Good_Times.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>GOOD TiMES</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Zee_Business" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Business.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Zee Business</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=CNBC_Tv18_Prime_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/CNBC_Tv18_Prime_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>CNBC Tv18 Prime HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=NDTV_Profit" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/NDTV_Profit.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>NDTV Profit</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=CNBC_Awaaz" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/CNBC_Awaaz.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>CNBC Awaaz</p>
</div>
</a>
</div></div>

<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=India_Science" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/India_Science.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>India Science</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Swayam_Prabha_01" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_01.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Swayam Prabha 01</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Swayam_Prabha_02" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_02.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Swayam Prabha 02</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Swayam_Prabha_03" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_03.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Swayam Prabha 03</p>
</div>
</a>
</div></div>

<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Zee_Marathi" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Marathi.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Zee Marathi</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Colors_Marathi_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Marathi_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Colors Marathi HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Colors_Kannada_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Kannada_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Colors Kannada HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Zee_Kannada" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Kannada.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Zee Kannada</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Comedy_Central_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Comedy_Central_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Comedy Central HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Zee_Telugu" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Telugu.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Zee Telugu</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Zee_Tamil" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Tamil.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Zee Tamil</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Colors_Gujarati" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Gujarati.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Colors Gujarati</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Zee_Bangla" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Bangla.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Zee Bangla</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Colors_Bengali_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Bengali_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Colors Bengali HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Epic_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Epic_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Epic</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Colors_Infinity_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Infinity_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Colors Infinity HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Zee_Yuva" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Yuva.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Zee Yuva</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=PTC_Punjabi" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/PTC_Punjabi.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>PTC Punjabi</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=ID" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ID.PNG" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Investigation Discovery</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=DD_India" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_India.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>DD India</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=DD_National" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_National.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>DD National</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Dabangg" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Dabangg.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Dabangg</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Colors_Tamil_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Tamil_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Colors Tamil HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=DD_Madhya_Pradesh" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Madhya_Pradesh.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>DD Madhya Pradesh</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=DD_Rajasthan_Jaipur" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Rajasthan_Jaipur.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>DD Rajasthan (Jaipur)</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Colors_Cineplex" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Cineplex.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Colors Cineplex</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sony_Pix_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Pix_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sony Pix HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sony_Max_SD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/SET_MAX.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sony Max SD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sony_MAX2" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_MAX2.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sony MAX2</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=And_Pictures_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/And_Pictures_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>And Pictures HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Zee_Cinema" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Cinema.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Zee Cinema</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=B4U_Movies" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/B4U_Movies.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>B4U Movies</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Zee_Classic" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Classic.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Zee Bollywood</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Jio_Cricket" class="card">
<img class=" lazyloaded" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Cricket.png" style="height: 120px" src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Cricket.png">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Jio Cricket HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Jio_Cricket_English" class="card">
<img class=" lazyloaded" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Cricket_English.png" style="height: 120px" src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Cricket_English.png">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Jio Cricket English HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Colors_HD" class="card">
<img class=" lazyloaded" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_HD.png" style="height: 120px" src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_HD.png">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Colors HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Times_NOW" class="card">
<img class=" lazyloaded" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Times_NOW.png" style="height: 120px" src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Times_NOW.png">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Times NOW</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Times_Now_Navbharat" class="card">
<img class=" lazyloaded" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Times_Now_Navbharat.png" style="height: 120px" src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Times_Now_Navbharat.png">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Times Now Navbharat</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Ten_HD" class="card">
<img class=" lazyloaded" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ten_HD.png" style="height: 120px" src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ten_HD.png">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Ten 1 HD</p>
</div>
</a>
</div></div>

<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=BBC_Marathi" class="card">
<img class=" lazyloaded" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/BBC_Marathi.png" style="height: 120px" src="http://jiotv.catchup.cdn.jio.com/dare_images/images/BBC_Marathi.png">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>BBC Marathi</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=ABP_News_India" class="card">
<img class=" lazyloaded" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ABP_News_India.png" style="height: 120px" src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ABP_News_India.png">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>ABP News India</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Ten2_HD" class="card">
<img class=" lazyloaded" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ten2_HD.png" style="height: 120px" src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ten2_HD.png">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Ten 2 HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=CNN_NEWS_18" class="card">
<img class=" lazyloaded" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/CNN_NEWS_18.png" style="height: 120px" src="http://jiotv.catchup.cdn.jio.com/dare_images/images/CNN_NEWS_18.png">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>CNN NEWS 18</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=MTV_HD_Plus" class="card">
<img class=" lazyloaded" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/MTV_HD_Plus.png" style="height: 120px" src="http://jiotv.catchup.cdn.jio.com/dare_images/images/MTV_HD_Plus.png">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>MTV HD Plus</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=MTV_Beats_HD" class="card">
<img class=" lazyloaded" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/MTV_Beats_HD.png" style="height: 120px" src="http://jiotv.catchup.cdn.jio.com/dare_images/images/MTV_Beats_HD.png">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>MTV Beats HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Republic_TV" class="card">
<img class=" lazyloaded" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Republic_TV.png" style="height: 120px" src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Republic_TV.png">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Republic TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Mastiii" class="card">
<img class=" lazyloaded" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Mastiii.png" style="height: 120px" src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Mastiii.png">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Mastiii</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=ABP_Majha" class="card">
<img class=" lazyloaded" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ABP_Majha.png" style="height: 120px" src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ABP_Majha.png">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>ABP Majha</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Nick_Hindi" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nick_Hindi.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Nick Hindi</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=TV9_Karnataka" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TV9_Karnataka.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>TV9 Karnataka</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Pogo_Hindi" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Pogo_Hindi.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Pogo Hindi</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Polimer_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Polimer_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Polimer News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=TV9_Telugu_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TV9_Telugu_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>TV9 Telugu News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Cartoon_Network_Hindi" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Cartoon_Network_Hindi.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Cartoon Network Hindi</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Discovery_HD_World" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_HD_World.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Discovery HD World</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=ABP_Ananda" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ABP_Ananda.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>ABP Ananda</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sony_BBC_Earth_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_BBC_Earth_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sony BBC Earth HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=History_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/History_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>History TV18 HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=TLC_HD_World" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TLC_HD_World.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>TLC HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Food_Food" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Food_Food.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Food Food</p>
</div>
</a>
</div></div>

<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Bhojpuri_Cinema" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Bhojpuri_Cinema.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Bhojpuri Cinema</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Enterr_10" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Enterr_10.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Enterr 10</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Zee_Action" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Action.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Zee Action</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Zee_Cinemalu" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Cinemalu.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Zee Cinemalu</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Zee_Anmol_Cinema" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Anmol_Cinema.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Zee Anmol Cinema</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=IBN_7" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/IBN_7.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>News 18 India</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=India_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/India_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>India TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=NDTV_India" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/NDTV_India.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>NDTV India</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Zee_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Zee News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Times_Now_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Times_Now_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Times Now World</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=NDTV_24x7" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/NDTV_24x7.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>NDTV 24x7</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=ETV_Telugu" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Telugu.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>ETV Telugu</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Public_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Public_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Public TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=24_Ghanta_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/24_Ghanta_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>24 Ghanta TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sakshi_tv" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sakshi_tv.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sakshi tv</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Suvarna_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Suvarna_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Suvarna News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=NTV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/NTV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>NTV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Thanthi_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Thanthi_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Thanthi TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=News_24" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/News_24.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>News 24</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=TV9_Maharashtra" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TV9_Maharashtra.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>TV9 Maharashtra</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=BTV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/BTV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>BTV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Zee_24_Taas" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_24_Taas.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Zee 24 Taas</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Newslive" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Newslive.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Newslive</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Ten3_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ten3_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Ten 3 HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Jio_Sports" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Sports.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Jio Sports HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Dsports_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Dsports_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Eurosport HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Jio_Football" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Jio Football HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Jio_Cricket_1_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Cricket_1_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Jio Cricket 1 HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Jio_Football_1" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football_1.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Jio Football 1 HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Jio_Football_2" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football_2.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Jio Football 2 HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Jio_Football_3" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football_3.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Jio Football 3 HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Jio_Football_4" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football_4.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Jio Football 4 HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Ten_1" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ten_1.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Ten 1</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Ten_2" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ten_2.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Ten 2</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Ten_3" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ten_3.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Ten 3</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sony_Six_SD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Six_SD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sony Six SD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Zing" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zing.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Zing</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=9XM" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/9XM.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>9XM</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=E_24" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/E_24.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>E 24</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=B4U_Music" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/B4U_Music.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>B4U Music</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Zoom" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zoom.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>ZOOM</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=MTV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/MTV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>MTV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=9X_Jalwa" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/9X_Jalwa.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>9X Jalwa</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Public_Music" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Public_Music.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Public Music</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Jaya_Max" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jaya_Max.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Jaya Max</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sangeet_Bhojpuri" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sangeet_Bhojpuri.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sangeet Bhojpuri</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=PTC_Music" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/PTC_Music.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>PTC Music</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sangeet_Bangla" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sangeet_Bangla.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sangeet Bangla</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=sonic_Hindi" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/sonic_Hindi.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sonic Hindi</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sony_Yay_Hindi" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Yay_Hindi.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sony Yay Hindi</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Nickelodeon" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nickelodeon.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Nickelodeon</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Nick_Tamil" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nick_Tamil.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Nick Tamil</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Pogo_Tamil" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Pogo_Tamil.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Pogo Tamil</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=CN_HD_English" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/CN_HD_English.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>CN HD+ English</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Cartoon_Network_Tamil" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Cartoon_Network_Tamil.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Cartoon Network Tamil</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Nick_Telugu" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nick_Telugu.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Nick Telugu</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Discovery_Kids_2" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_Kids_2.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Discovery Kids 2</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Nick_Junior" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nick_Junior.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Nick Junior</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Animal_Planet_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Animal_Planet_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Animal Planet HD World</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Travel_XP_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Travel_XP_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Travel XP HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Animal_Planet_Hindi" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Animal_Planet_Hindi.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Animal Planet Hindi</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Discovery_Channel_Hindi" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_Channel_Hindi.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Discovery Channel Hindi</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=History_18_Hindi" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/History_18_Hindi.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>History TV18 HD Hindi</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Discovery_Science" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_Science.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Discovery Science</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Jio_Events" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Events.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Jio Events HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Discovery_Channel_Telugu" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_Channel_Telugu.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Discovery Channel Telugu</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Discovery_Channel_Tamil" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_Channel_Tamil.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>D Tamil</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=History_18_Tamil" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/History_18_Tamil.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>History TV18 HD Tamil</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=History_18_Telugu" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/History_18_Telugu.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>History TV18 HD Telugu</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Animal_Planet_English" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Animal_Planet_English.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Animal Planet English</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Samara_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Samara_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Samara News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Discovery_Channel_Bengali" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_Channel_Bengali.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Discovery Channel Bengali</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Travel_XP_Tamil" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Travel_XP_Tamil.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Travel XP Tamil</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sony_BBC_Earth_HD_Telugu" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_BBC_Earth_HD_Telugu.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sony BBC Earth HD Telugu</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Discovery" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Discovery.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Discovery</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sony_BBC_Earth_HD_Tamil" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_BBC_Earth_HD_Tamil.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sony BBC Earth HD Tamil</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Ayush_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ayush_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Ayush TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Desi_Channel" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Desi_Channel.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Desi Channel</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Travel_XP" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Travel_XP.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Travel XP HD Hindi</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=TLC_English" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TLC_English.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>TLC English</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=ETV_Abhiruchi" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Abhiruchi.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>ETV Abhiruchi</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=TLC_Hindi" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TLC_Hindi.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>TLC Hindi</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sadhguru_Television" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sadhguru_Television.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sadhguru Television HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Kaumudy_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kaumudy_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Kaumudy TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=CNBC_Tv_18" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/CNBC_Tv_18.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>CNBC Tv 18</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=ET_Now" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ET_Now.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>ET Now</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=ET_Now_Swadesh" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ET_Now_Swadesh.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>ET Now Swadesh</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Bhakti_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Bhakti_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Bhakti TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sri_Sankara" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sri_Sankara.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sri Sankara</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=SaiTV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/SaiTV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sai TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Peace_of_Mind" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Peace_of_Mind.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Peace of Mind</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=mh1_Shraddha" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/mh1_Shraddha.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>mh1 Shraddha</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Lakshya_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Lakshya_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Lakshya TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sri_Venkateshwar_Bhakti" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sri_Venkateshwar_Bhakti.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sri Venkateshwar Bhakti</p>
</div>
</a>
</div></div>

<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Paras_tv" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Paras_tv.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Paras tv</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Angel_TV_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Angel_TV_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Angel TV HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=CVR_OM_Spiritual" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/CVR_OM_Spiritual.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>CVR OM Spiritual</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Aradhana_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Aradhana_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Aradhana TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Jinvani_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jinvani_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Jinvani TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=PTC_Simran" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/PTC_Simran.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>PTC Simran</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Shubh_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Shubh_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Shubh TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sai_Leela" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sai_Leela.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sai Leela</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Hindu_Dharmam" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Hindu_Dharmam.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Hindu Dharmam</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Subhavartha_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Subhavartha_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Subhavartha TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Divya_Vani" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Divya_Vani.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Divya Vani</p>
</div>
</a>
</div></div>

<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Rujumargam_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Rujumargam_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Mercy TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Calvary" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Calvary.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Calvary</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Swayam_Prabha_04" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_04.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Swayam Prabha 04</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Swayam_Prabha_05" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_05.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Swayam Prabha 05</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Swayam_Prabha_06" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_06.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Swayam Prabha 06</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Swayam_Prabha_07" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_07.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Swayam Prabha 07</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Swayam_Prabha_08" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_08.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Swayam Prabha 08</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Swayam_Prabha_09" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_09.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Swayam Prabha 09</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Swayam_Prabha_10" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_10.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Swayam Prabha 10</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Swayam_Prabha_11" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_11.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Swayam Prabha 11</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Swayam_Prabha_12" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_12.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Swayam Prabha 12</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Jio_Cricket_4_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Cricket_4_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Jio Cricket 4 HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Swayam_Prabha_13" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_13.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Swayam Prabha 13</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Swayam_Prabha_14" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_14.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Swayam Prabha 14</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Swayam_Prabha_15" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_15.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Swayam Prabha 15</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Swayam_Prabha_16" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_16.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Swayam Prabha 16</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Swayam_Prabha_17" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_17.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Swayam Prabha 17</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Swayam_Prabha_18" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_18.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Swayam Prabha 18</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Swayam_Prabha_19" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_19.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Swayam Prabha 19</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Swayam_Prabha_20" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_20.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Swayam Prabha 20</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Swayam_Prabha_21" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_21.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Swayam Prabha 21</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Swayam_Prabha_22" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_22.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Swayam Prabha 22</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=evidya_1" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/evidya_1.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>PM e Vidya 01</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=evidya_2" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/evidya_2.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>PM e Vidya 02</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=evidya_3" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/evidya_3.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>PM e Vidya 03</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=evidya_4" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/evidya_4.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>PM e Vidya 04</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=evidya_5" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/evidya_5.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>PM e Vidya 05</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=evidya_6" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/evidya_6.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>PM e Vidya 06</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=evidya_7" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/evidya_7.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>PM e Vidya 07</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Raj_Pariwar" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Raj_Pariwar.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Raj Pariwar</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=DD_Bihar" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Bihar.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>DD Bihar</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=DD_Uttar_Pradesh" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Uttar_Pradesh.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>DD Uttar Pradesh</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Jaya_TV_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jaya_TV_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Jaya TV HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Mazavali_Manorama_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Mazavali_Manorama_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Mazavali Manorama HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=MK_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/MK_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>MK TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Colors_Super" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Super.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Colors Super</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Vendhar_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vendhar_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Vendhar TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sanjha_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sanjha_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sanjha TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Anjan_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Anjan_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Anjan TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=GarvPunjabi" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/GarvPunjabi.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Garv Punjabi</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=JUSPunjabi" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/JUSPunjabi.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>JUSPunjabi</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Arre" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Arre.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Arre HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Peppers_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Peppers_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Peppers TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sarthak_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sarthak_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Zee Odisha</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Flower_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Flower_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Flower TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Mazhavil_Manorama" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Mazhavil_Manorama.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Mazhavil Manorama</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=DD_Bangla" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Bangla.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>DD Bangla</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Puthu_Yugam" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Puthu_Yugam.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Puthu Yugam</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Saam_Tv" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Saam_Tv.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Saam Tv</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Colors_Oriya" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Oriya.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Colors Oriya</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Jonack" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jonack.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Jonack</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Rang" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Rang.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Rang</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Rengoni" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Rengoni.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Rengoni</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=ETV_Plus" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Plus.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>ETV Plus</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sony_Marathi_SD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Marathi_SD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sony Marathi SD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=DD_Sahayadri" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Sahayadri.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>DD Sahayadri</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sony_aath" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_aath.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sony aath</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Aakaash_bangla" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Aakaash_bangla.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Aakash Aath</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=DD_Malayalam" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Malayalam.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>DD Malayalam</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Dangal" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Dangal.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Dangal</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=DD_Oriya" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Oriya.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>DD Oriya</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Polimer_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Polimer_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Polimer TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Raj_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Raj_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Raj TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Makkal_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Makkal_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Makkal TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Kairali_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kairali_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Kairali TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Captain_tv" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Captain_tv.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Captain tv</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=DD_urdu" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_urdu.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>DD urdu</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=DD_Saptagiri" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Saptagiri.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>DD Saptagiri</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=DD9_chandana_kannada" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD9_chandana_kannada.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>DD9 chandana (kannada)</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=DD_Girnar" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Girnar.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>DD Girnar</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=DD_Punjabi" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Punjabi.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>DD Punjabi</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=DD_Kashir" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Kashir.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>DD Kashir</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Nepal_one" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nepal_one.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Nepal one</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=DD13_Guwahati_NE" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD13_Guwahati_NE.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>DD13 Guwahati NE</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Amrita_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Amrita_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Amrita TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Kairali_People_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kairali_People_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Kairali News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=DD5_Podhigai" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD5_Podhigai.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>DD5 Podhigai</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Vasanth_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vasanth_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Vasanth TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Zee_Salaam" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Salaam.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Zee Salaam</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Kasturi" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kasturi.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Kasturi</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Kairali_WE_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kairali_WE_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Kairali WE TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Vissa_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vissa_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Vissa TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Maiboli" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Maiboli.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Maiboli</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=TheQIndia" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TheQIndia.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>The Q</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=TheQ_Kahaniyan" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TheQ_Kahaniyan.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>The Q Kahaniyan</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Andy_Haryana" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Andy_Haryana.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Andy Haryana</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Dishum_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Dishum_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Dishum TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Namma_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Namma_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Namma TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Rangamanch" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Rangamanch.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Rangamanch</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Dillagi_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Dillagi_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Dillagi TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Dhamaal_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Dhamaal_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Dhamaal TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Zee_Talkies" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Talkies.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Zee Talkies</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=J_Movies" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/J_Movies.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>J Movies</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Zee_Bangla_Cinema" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Bangla_Cinema.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Zee Bangla Cinema</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=ETV_Cinema" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Cinema.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>ETV Cinema</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Fakt_Marathi" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Fakt_Marathi.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Fakt Marathi</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Pitaara" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Pitaara.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Pitaara</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Maha_Movies" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Maha_Movies.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Maha Movies</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Raj_Digital_Plus" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Raj_Digital_Plus.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Raj Digital Plus</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=PTC_Punjabi_Gold" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/PTC_Punjabi_Gold.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>PTC Punjabi Gold </p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Oscar_Movies" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Osar_Movies.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Oscar Movies</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Indradhanu" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Indradhanu.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Indradhanu</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Amaar_Cinema" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Amaar_Cinema.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Amaar Cinema</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=ABN_Andhra_Jyothi" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ABN_Andhra_Jyothi.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>ABN Andhra Jyothi</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=News_Nation" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/News_Nation.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>News Nation</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Kanak_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kanak_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Kanak News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=India_news" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/India_news.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>India news</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Puthiya_Thalimurai" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Puthiya_Thalimurai.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Puthiya Thalimurai</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=ETV_BIHAR" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_BIHAR.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>News18 BIHAR</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Dighvijay_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Dighvijay_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Dighvijay TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Zee_Kalinga" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Kalinga.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Zee Kalinga</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=ETV_News_Gujarati" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_News_Gujarati.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>News18 Gujarati</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Tez" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Tez.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Good News Today</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Asianet_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Asianet_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Asianet News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sony_BBC_Earth_SD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_BBC_Earth_SD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sony BBC Earth SD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=ETV_Kannada_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Kannada_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>News18 Kannada News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=News7_Tamil" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/News7_Tamil.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>News7 Tamil</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=DY_365" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DY_365.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>DY 365</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=IBN_Lokmat" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/IBN_Lokmat.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>News18 Lokmat</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Pratidin_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Pratidin_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Pratidin Time</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Tv_9_Gujarat" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Tv_9_Gujarat.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Tv 9 Gujarat</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=ETV_RAJASTHAN" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_RAJASTHAN.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>News18 RAJASTHAN</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=ETV_Bangla_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Bangla_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>News18 Bangla News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=News_State_UK_UP" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/News_State_UK_UP.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>News State UK UP</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=News_18_Assam" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/News_18_Assam.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>News 18 Assam</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=ABP_Asmita" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ABP_Asmita.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>ABP Asmita</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Prag_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Prag_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Prag News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=ETV_MP" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_MP.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>News18 MP</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Kashish_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kashish_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Kashish News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=V6_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/V6_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>V6 News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=ETV_Andhra_pradesh" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Andhra_pradesh.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>ETV Andhra pradesh</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=News_18_Tamilnadu" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/News_18_Tamilnadu.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>News 18 Tamilnadu</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Manorama_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Manorama_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Manorama News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Mathrubhumi_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Mathrubhumi_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Mathrubhumi News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=India_Today" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/India_Today.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>India Today</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=TV_5_Kannada" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TV_5_Kannada.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>TV 5 Kannada</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=DD_Sports" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Sports.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>DD Sports</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=MK_Music" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/MK_Music.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>MK Music</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Music_India" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Music_India.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Music India</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Tunes_6" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Tunes_6.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Tunes 6</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Raj_Music_Kannada" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Raj_Music_Kannada.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Raj Music Kannada</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Ramdhenu" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ramdhenu.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Ramdhenu</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Raj_Musix" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Raj_Musix.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Raj Musix</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=PTC_Chak_De" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/PTC_Chak_De.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>PTC Chak De</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=9X_Tashan" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/9X_Tashan.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>9X Tashan</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sahana_Music" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sahana_Music.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sahana Music</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=PTC_DHOL_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/PTC_DHOL_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>PTC DHOL TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=mh1_Music" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/mh1_Music.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>mh1 (Music)</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sangeet_Marathi" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sangeet_Marathi.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sangeet Marathi</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=9x_Jhakaas" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/9x_Jhakaas.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>9x Jhakaas</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Only_Music" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Only_Music.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Only Music</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=PBN_Music" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/PBN_Music.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>PBN Music</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Raj_Music_Telugu" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Raj_Music_Telugu.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Raj Music Telugu</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Brit_Asia" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Brit_Asia.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Brit Asia</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Kappa_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kappa_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Kappa TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=PEACE_MUSIC" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/PEACE_MUSIC.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>PEACE MUSIC</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Raj_Music_Malayalam" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Raj_Music_Malayalam.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Raj Music Malayalam</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Steelbird_Music" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Steelbird_Music.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Steelbird Music</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=10_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/10_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>10 TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Zee_News_MP_Chattisgarh" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_News_MP_Chattisgarh.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Zee News MP Chattisgarh</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=IBC24" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/IBC-24.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>IBC24</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=VTV_Gujarati" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/VTV_Gujarati.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>VTV Gujarati</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=TV_5_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TV_5_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>TV 5 News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Jio_Exclusive" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Exclusive.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Jio Exclusive HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Hi_Dost" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Hi_Dost.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Hi Dost!</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Assam_Talks" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Assam_Talks.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Assam Talks</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=News_Time_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/News_Time_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>News Time TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Zee_Purvaiya" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Purvaiya.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Zee Purvaiya</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Prameya_News_7" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Prameya_News_7.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Prameya News 7</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=CVR_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/CVR_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>CVR News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Zee_Rajasthan" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Rajasthan.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Zee Rajasthan</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=ETV_UP" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_UP.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>News18 UP</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=ETV_News_Oriya" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_News_Oriya.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>News18 Oriya</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=T_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/T_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>T News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sandesh_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sandesh_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sandesh News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=DD_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>DD News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Prajaa_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Prajaa_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Prajaa TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Jaya_Plus" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jaya_Plus.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Jaya Plus</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Malai_Murasu" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Malai_Murasu.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Malai Murasu</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Media_One_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Media_One_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Media One TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Zee_24_Kalak" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_24_Kalak.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Zee 24 Kalak</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=BBC_World_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/BBC_World_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>BBC World News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=ETV_Telangana" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Telangana.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>ETV Telangana</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Kalinga_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kalinga_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Kalinga TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Janam_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Janam_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Janam TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=India_News_UP" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/India_News_UP.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>India News UP</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=News_18_Kerala" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/News_18_Kerala.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>News 18 Kerala</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Maha_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Maha_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Maha News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=HM_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/HM_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>HM TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=sonic_Tamil" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/sonic_Tamil.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>sonic Tamil</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Cartoon_Network_Telugu" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Cartoon_Network_Telugu.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Cartoon Network Telugu</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Discovery_Kids_Tamil" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_Kids_Tamil.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Discovery Kids Tamil</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=DD_Kisan" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Kisan.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>DD Kisan</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=ETV_Life" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Life.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>ETV Life</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=InGoa24x7" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/InGoa24x7.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>In Goa 24x7</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Vanitha" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vanitha.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Vanitha</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=CVR_Health" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/CVR_Health.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>CVR Health</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Discovery_Turbo" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_Turbo.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Discovery Turbo</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sony_BBC_Earth_HD_English" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_BBC_Earth_HD_English.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sony BBC Earth HD English</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Boogle_Bollywood" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Boogle_Bollywood.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Boogle Bollywood</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Propex_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Propex_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Propex TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sakhi_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sakhi_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>testii</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=CNBC_Bazaar_MNO" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/CNBC_Bazaar_MNO.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>CNBC Bazaar (MNO)</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Disha_tv" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Disha_tv.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Disha tv</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Vedic_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vedic_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Vedic TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Darshan_24" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Darshan_24.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Darshan 24</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Bhaktisagar" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Bhaktisagar.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Bhaktisagar 2</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Ishwar_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ishwar_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Ishwar TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Channel_Win" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Channel_Win.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Channel Win</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Nambikkai" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nambikkai.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Nambikkai</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Harekrsna" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Harekrsna.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Hare krsna</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Garv_Swaminarayan" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Garv_Swaminarayan.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Swar Shree</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Shubhsandesh_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Shubhsandesh_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Shubhsandesh TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Shalom" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Shalom.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Shalom</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Tulja_Bhavani" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Tulja_Bhavani.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Tulja Bhavani</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sarv_Dharam_Sangam" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sarv_Dharam_Sangam.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sarv Dharam Sangam</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Lord_Buddha" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sharnam_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sharnam TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=GarvGurbani" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/GarvGurbani.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Garv Punjabi Gurbani</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Fateh_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Fateh_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Fateh TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Valambhakti" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Valambhakti.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Valam TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Om_Shanti" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Om_Shanti.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Om Shanti</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Kartavya_Tv" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kartavya_Tv.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Kartavya TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Hamari_Sanskruti_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Hamari_Sanskruti_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Hamari Sanskruti</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=JUSOne" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/JUSOne.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>JUSOne</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Soham_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Soham_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Soham TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Awakening" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Awakening.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Awakening</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=SRMD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/SRMD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>SRMD HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Hare_Krsna_music" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Hare_Krsna_music.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Hare Krsna Music</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=evidya_8" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/_evidya_8.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>PM e Vidya 08</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=evidya_9" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/_evidya_9.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>PM e Vidya 09</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=evidya_10" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/evidya_10.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>PM e Vidya 10</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=evidya_11" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/evidya_11.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>PM e Vidya 11</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=evidya_12" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/evidya_12.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>PM e Vidya 12</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Vande_Gujarat_1" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_1.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Vande Gujarat 1</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Vande_Gujarat_2" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_2.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Vande Gujarat 2</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Vande_Gujarat_3" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_3.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Vande Gujarat 3</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Vande_Gujarat_4" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_4.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Vande Gujarat 4</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Vande_Gujarat_5" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_5.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Vande Gujarat 5</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Vande_Gujarat_6" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_6.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Vande Gujarat 6</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Vande_Gujarat_7" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_7.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Vande Gujarat 7</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Vande_Gujarat_8" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_8.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Vande Gujarat 8</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Vande_Gujarat_9" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_9.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Vande Gujarat 9</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Vande_Gujarat_10" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_10.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Vande Gujarat 10</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Vande_Gujarat_11" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_11.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Vande Gujarat 11</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Vande_Gujarat_12" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_12.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Vande Gujarat 12</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Vande_Gujarat_13" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_13.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Vande Gujarat 13</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Vande_Gujarat_14" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_14.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Vande Gujarat 14</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Vande_Gujarat_15" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_15.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Vande Gujarat 15</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Vande_Gujarat_16" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_16.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Vande Gujarat 16</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Gulistan_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Gulistan_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Gulistan News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Jan_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jan_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Jan TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Raj_News_Kannada" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Raj_News_Kannada.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Raj News Kannada</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=GSB_Worldwide" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/GSB_Worldwide.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>G S B Worldwide</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Ashtavinayak" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ashtavinayak.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Ashtavinayak</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=ETV_Urdu" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Urdu.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>News18 Urdu</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=India_News_Haryana" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/India_News_Haryana.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>India News Haryana</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=India_News_Rajasthan" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/India_News_Rajasthan.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>India News Rajasthan</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=GS_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/GS_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>GS TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=MBC" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/MBC.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>MBC</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sahara_Samay_Bihar" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sahara_Samay_Bihar.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sahara Samay Bihar</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Zee_SANGAM" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_SANGAM.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Zee Hindustan</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=TEST14_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TEST14_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>TEST14 HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Hindi_Khabar" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Hindi_Khabar.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Hindi Khabar</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Zee_Punjabi_HP_Haryana" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Punjabi_HP_Haryana.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Zee Punjabi HP Haryana</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=First_India_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/First_India_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>First India News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=News11" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/News11.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>News11</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=RPLUS" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/RPLUS.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>R Plus</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=SAHARA_SAMAY_MP" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/SAHARA_SAMAY_MP.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>SAHARA SAMAY MP</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Captain_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Captain_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Captain News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=I_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/I_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>I News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=News_X" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/News_X.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>News X</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Mirror_Now" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Mirror_Now.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Mirror Now</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=India_News_MP" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/India_News_MP.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>India News MP</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sathiyam" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sathiyam.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sathiyam TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Naxatra_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Naxatra_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Naxatra News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Living_Foodz" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Living_Foodz.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Zee UP UK</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=CNN" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/CNN.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>CNN</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Chardikla_Time_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Chardikla_Time_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Chardikla Time TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sudarshan" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sudarshan.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sudarshan</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=JK_24x7_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/JK_24x7_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>JK 24x7 News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=AL_Jazeera" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/AL_Jazeera.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>AL Jazeera</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=PTC_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/PTC_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>PTC News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Taaza_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Taaza_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Taaza TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Onkar_Only_Truth" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Onkar_Only_Truth.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Onkar Only Truth</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Live_Today" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Live_Today.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Live Today</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sahara_Samay_Rastriya" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sahara_Samay_Rastriya.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sahara Samay Rastriya</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Mh_One_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Mh_One_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Mh One News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Janta_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Janta_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Janta TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=ETV_Haryana_and_HP_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Haryana_and_HP_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>News18 Haryana and HP News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Total_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Total_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Total TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=TEST1_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TEST1_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>TEST1 HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=TEST2_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TEST2_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>TEST2 HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=SAHARA_SAMAY_UP" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/SAHARA_SAMAY_UP.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>SAHARA SAMAY UP</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Wion" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Wion.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Wion</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Bhaarat_Samachar" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Bharat_Samachar.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Bharat Samachar</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=K_News_India" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/K_News_India.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>K News India</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=North_East_Live" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/North_East_Live.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>North East Live</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Samachar_Plus" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Samachar_Plus.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Samachar Plus</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Samay_Rajasthan" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Samay_Rajasthan.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Samay Rajasthan</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Raj_News_Telugu" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Raj_News_Telugu.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Raj News Telugu</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=dw" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/dw.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>dw</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Loksabha_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Loksabha_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sansad TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Madhimugam_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Madhimugam_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Madhimugam TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=DD_Rajyasabha" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Rajyasabha.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sansad TV HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=TV_5_Monde" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TV_5_Monde.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>TV5 Monde</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Win_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Win_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Win TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Mantavya_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Mantavya_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Mantavya News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=4_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/4_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>4 TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=News_1_India" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/News_1_India.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>News 1 India</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=MK_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/MK_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>MKN</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=APN_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/APN_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>APN News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Jaihind_tv" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jaihind_tv.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Jaihind tv</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Jeevan_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jeevan_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Jeevan TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=TV_100" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TV_100.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>TV 100</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Bansal_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Bansal_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Bansal News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=India_Voice" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/India_Voice.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>India Voice</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=A1_TV_Rajasthan" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/A1_TV_Rajasthan.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>A1 TV Rajasthan</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=INH_24x7" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/INH_24x7.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>INH 24x7</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=GoodNews_Channel" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/GoodNews_Channel.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>GoodNews Channel</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=News_India_24_X_7" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/News_India_24_X_7.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>News India 24x7</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Living_India_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Living_India_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Living India News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=SMBC_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/SMBC_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>SMBC TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sadhna_News_Plus" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sadhna_News_Plus.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sadhna News Plus</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Channel_News_Asia_International" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Channel_News_Asia_International.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Channel News Asia International</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Goa365" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Goa365.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>GOA 365</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=France_24" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/France_24.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>France 24</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Raj_News_Malayalam" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Raj_News_Malayalam.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Raj News Malayalam</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Prime_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Prime_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Prime News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Euro_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Euro_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Euro News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=PrudentHD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/PrudentHD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Prudent</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Khabar_Fast" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Khabar_Fast.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Khabar Fast</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Swadesh_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swadesh_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Swadesh News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=JUS24x7" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/JUS24x7.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>JUS 24x7</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=RDX_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/RDX_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>RDX Goa</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=CVR_English" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/CVR_English.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>CVR English</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=DNN" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DNN.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>DNN</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Jantantra" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jantantra.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Jantantra</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Raj_News_24x7" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Raj_News_24x7.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Raj News&nbsp;24x7</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sony_Yay_Telugu" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Yay_Telugu.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sony Yay Telugu</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sony_Yay_Tamil" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Yay_Tamil.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sony Yay Tamil</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Nickelodeon_Jr" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nickelodeon_Jr.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Nickelodeon Jr.</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=CN_HD_Tamil" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/CN_HD_Tamil.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>CN HD+ Tamil</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=CN_HD_Telugu" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/CN_HD_Telugu.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>CN HD+ Telugu</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=DD_bharati" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_bharati.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>DD bharati</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Care_World" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Care_World.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Care World</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Insight_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Insight.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Insight HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Prime_Asia_Tv" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Prime_Asia_Tv.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Prime Asia HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Star_Plus_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Star_Plus_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Star Plus HD IP</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Star_Utsav" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Star_Utsav.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Star Utsav HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Asianet" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Asianet.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Asianet HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Star_Vijay" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Star_Vijay.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Star Vijay HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Star_Jalsha" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Star_Jalsha.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Star Jalsha HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Maa_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Maa_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Maa TV HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Maa_Gold" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Maa_Gold.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Maa Gold HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Star_Bharat_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Star_Bharat_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Star Bharat HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Asianet_Plus" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Asianet_Plus.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Asianet Plus HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Star_Pravah" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Star_Pravah.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Star Pravah HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Suvarna" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Suvarna.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Suvarna HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Suvarna_Plus_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Asianet_Suvarna_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Suvarna Plus HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Star_Gold_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Star_Gold_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Star Gold HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Jalsa_Movies_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jalsa_Movies_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Jalsha Movies HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Maa_Movies" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Maa_Movies.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Maa Movies HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Movies_OK" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Movies_OK.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Movies OK HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Asianet_Movies_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Asianet_Movies_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Asianet Movies HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Star_Sports_Select_HD_1" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Star_Sports_Select_HD_1.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Star Sports Select HD1</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Star_Sports_HD_1" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Star_Sports_HD_1.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Star Sports 1</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Star_Sports_HD_2" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Star_Sports_HD_2.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Star Sports 2</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Star_Sports_3" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Star_Sports_3.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Star Sports Hindi 1</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Star_Sports_Select_HD_2" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Star_Sports_Select_HD_2.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Star Sports Select HD2</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Nick_Malayalam" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nick_Malayalam.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Nick Malayalam</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Nick_Bangla" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nick_Bangla.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Nick Bangla</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Nick_Marathi" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nick_Marathi.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Nick Marathi</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sonic_Malayalam" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sonic_Malayalam.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sonic Malayalam</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sonic_Bangla" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sonic_Bangla.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sonic Bangla</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sonic_Marathi" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sonic_Marathi.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sonic Marathi</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Digishala" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Digishala.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Digishala</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Top_Tutor" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Top_Tutor.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Top Tutor</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Gyan_Brikshya" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Gyan_Brikshya.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Gyan Brikshya</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Manipur_Educational_Channel" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Manipur_Educational_Channel.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Lairik</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=TV_Teacher" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TV_Teacher.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>TV Teacher</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Utkarsh_Primary" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Utkarsh_Primary.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Utkarsh Primary</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Utkarsh_Middle" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Utkarsh_Middle.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Utkarsh HSBTE</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Utkarsh_Secondary" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Utkarsh_Secondary.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Utkarsh Secondary</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Utkarsh_Higher" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Utkarsh_Higher.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Utkarsh Higher</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Meluha" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Meluha.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Meluha</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Home_Learning_Gujarat" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Home_Learning_Gujarat.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Home Learning Gujarat Standard-9</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=KITE_Victers" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/KITE_Victers.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>KITE VICTERS</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Parmarth_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Parmarth_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Parmarth TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Jio_Cricket_2_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Cricket_2_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Jio Cricket 2 HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Jio_Esports_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Esports_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>JioGames HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Jio_Cricket_3_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Cricket_3.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Jio Cricket 3 HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Colors_Gujarati_Cinema" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Gujarati_Cinema.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Colors Gujarati Cinema</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Colors_Marathi_SD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Marathi_SD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Colors Marathi SD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Colors_SD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_SD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Colors SD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Colors_Bangla_SD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Bangla_SD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Colors Bangla SD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Colors_Kannada_SD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Kannada_SD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Colors Kannada SD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=VH1" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/VH1.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>VH1</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=MTV_Beats_SD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/MTV_Beats_SD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>MTV Beats SD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Akal_Academy_Group" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Akal_Academy_Group.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Akal Academy Group</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=IMS_School" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/IMS_School.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>IMS Schools Grade 1 - 8</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Argus_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Argus_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Argus News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Amma" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Amma.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>AMMA TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Moon_Tv" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Moon_Tv.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Moon TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Birla_Brainiacs" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Birla_Brainiacs.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Birla Brainiacs</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Vedant_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vedant_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Vedant TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Haryanvi_Hits" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Haryanvi_Hits.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Haryanvi Hits</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=MI_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/MI_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>MI TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Gyanvani_1" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Gyanvani_1.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Gyanvani 1</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Chardham_Darshan" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Chardham_Darshan.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Chardham Darshan</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Tute" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Tute.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Tute</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Punjab_School_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Punjab_School_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Punjab School TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=AAS_Vidyalaya" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/AAS_Vidyalaya.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>AAS Vidyalaya CBSE NCERT</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Khandoba_Majha_Jejuri" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Khandoba_Majha_Jejuri.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Khandoba Majha, Jejuri</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=DharmGranth_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DharmaGranth_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Dharm Granth TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=P_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/P_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>P News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Malnadu_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Malnadu_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Malanadu TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=ABSTAR_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ABSTAR_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>AB Star News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sanatan_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sanatan_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sanatan TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Express_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Express_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Express TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Express_TV_Shikshana" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Express_TV_Shikshana.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Express Shikshana</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Jigyasa_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jigyasa_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Jigyasa TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=35mm" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/35mm.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>35mm</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sristi_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sristi_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sristi TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Himshiksha_Elementary" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Himshiksha_Elementary.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Himshiksha Elementary</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Himshiksha_Higher" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Himshiksha_Higher.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Himshiksha Higher</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Himshiksha_Vocational" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Himshiksha_Vocational.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Himshiksha Vocational</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=AP_BIE_ARTS" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/AP_BIE_ARTS.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>AP-BIE-ARTS</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=AP_BIE_SCIENCE" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/AP_BIE_SCIENCE.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>AP-BIE-SCIENCE</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=AP_CIE_SIVE" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/AP_CIE_SIVE.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>AP-CIE-SIVE</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Atmadarshan_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Atmadarshan_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Atmadarshan TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sanskrit" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sanskritam.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sanskrit</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Lokmanch_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Lokmanch_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Lokmanch News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Lifology" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Lifology.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Lifology</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Samachar_24" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Samachar_24.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Samachar 24</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=FTV_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/FTV_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>FTV HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=InWild_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/InWild_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>InWild HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=ZooMoo_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ZooMoo_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>ZooMoo HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Smithsonian_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Smithsonian_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Smithsonian HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Bangla_Bhakti" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Bangla_Bhakti.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Bangla Bhakti</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Ken_Kerelam_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ken_Kerelam_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Ken TV Keralam</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Manav_Dharam" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Manav_Dharam.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Manav Dharam</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=MPNews" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/MP_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>MP News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Ishvani_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ishvani_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Ishvani TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Divyaang_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Divyang_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Divyang News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Tara_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Tara_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Tara TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Medha_Secondary" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Medha_Secondary.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Medha Secondary</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Omnicuris" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Omnicuris.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Omnicuris</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=India_Ahead" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/India_Ahead.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>India Ahead</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Real_News_Kerala" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Real_News_Kerala.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Real News Kerala</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Madha_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Madha_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Madha TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Rongeen_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Rongeen_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Rongeen TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=C_News_Bharat" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/C_News_Bharat.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>C News Bharat</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Gyanvani_2" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Gyanvani_2.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Gyanvani 2</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=PTD_Chhattisgarrh" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/PTD_Chhattisgarrh.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>PTD Chhattisgarrh</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Samveda" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Samveda.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Samveda</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=ESG" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ESG.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>ESG TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=BVTV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/BVTV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>BVTV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Badakhabar" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Badakhabar.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Badakhabar</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Haryana_Beats" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Haryana_Beats.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Haryana Beats</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Prime_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Prime_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Prime TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=SSV_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/SSV_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>SSV TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=FM_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/FM_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>FM News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=IND_24" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/IND_24.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>IND 24</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=ANN_Kashmir" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ANN_Kashmir.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>ANN News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Shri_Hingulambika_Devi_Temple" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Shri_Hingulambika_Devi_Temple.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Shri Hingulambika Devi Temple</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Shri_Mangal_Dev_Grah_Temple" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Shri_Mangal_Dev_Grah_Temple.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Shri Mangal Dev Grah Temple</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=SKY_12" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/SKY_12.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>SKY 12</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=24hrs_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/24hrs_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>24Hrs TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=BBC_Gujarati" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/BBC_Gujarati.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>BBC News Gujarati</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Anaadi_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Anaadi_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Anaadi TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Live_7" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Live_7.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Live 7</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Punjab1_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Punjab1_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Punjab1 TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=N5TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/N5TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>N5TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=ND24" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ND24.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>ND 24</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Ek_Onkar" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ek_Onkar.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Ek Onkar</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=TV9_Bangla" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TV9_Bangla.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>TV9 Bangla</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Luxe_Tv_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Luxe_Tv_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>LUXE TV HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Mezzo_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Mezzo_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Mezzo Live HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Hosanna_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Hosanna_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Hosanna TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=V24_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/V24_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>V24 TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Purnima_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Purnima_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Purnima TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Bharat_AtoZ" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Bharat_AtoZ.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Bharat AtoZ</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sanskrit_Ganga_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sanskrit_Ganga_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sanskrit Ganga</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Hornbill_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Hornbill_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Hornbill TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=T_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/T_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>TTV News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=NK_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/NK_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>NK TV 24x7</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=DPK_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DPK_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>DPK News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Buletin_India" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Buletin_India.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Buletin India</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Aryan_TV_National" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Aryan_TV_National.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Aryan TV National</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Channel_Vision" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Channel_Vision.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Channel Vision</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Dadabhagwan" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Dadabhagwan.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Dada Bhagwan Foundation</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Doinandin" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Doinandin.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Doinandin</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Zorins_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zorins_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Zorins TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Naaptol" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Naaptol.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Naaptol</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=LWA" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/LWA.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>LWA</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Vande_Tripura" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Tripura.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Vande Tripura</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Express_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Express_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Express News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Ten_4_HD_Tamil" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ten_4_HD_Tamil.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Ten 4 HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Ten_4_Tamil" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ten_4_Tamil.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Ten 4</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Bharat_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Bharat_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Bharat News TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=SamacharExpressTV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/SamacharExpressTV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Samachar Express TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=VISVAS" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/VISVAS.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>VISVAS</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Yeshuaa" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Yeshuaa.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Yeshuaa TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Dada_Bhagwan_Foundation_Gujarati" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Dada_Bhagwan_Foundation_Gujarati.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Dada Bhagwan Foundation Gujarati</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=VRLive" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/VRLive.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>VR Live</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=KPNews" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/KPNews.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>KP News 24x7</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Satta_Express" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Satta_Express.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sattaxpress News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Mangalmaylive" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Mangalmaylive.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Mangalmay Live</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Shri_Amarnath_Shrine_Board" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Shri_Amarnath_Shrine_Board.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Shri Amarnathji Shrine Board</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Anand_Barta" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Anand_Barta.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Ananda Barta</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=DA_News_Plus" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DA_News_Plus.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>DA News Plus</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Pasand" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Pasand.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Pasand</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Studio_Yuva_Alpha" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Studio_Yuva_Alpha.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Studio Yuva Alpha</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=News_World_India" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/News_World_India.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>News World India</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Jan_Setu_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jan_Setu_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Jan Setu News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Jio_Football_5" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football_5.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Jio Football 5 HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Jio_Football_6" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football_6.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Jio Football 6 HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=DTV_Bharat" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/DTV_Bharat.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>DTV Bharat</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=NEWS_24_MPCG" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/NEWS_24_MPCG.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>NEWS 24 MPCG</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Jio_Football_7" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football_7.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Jio Football 7 HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Jio_Football_8" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football_8.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Jio Football 8 HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Swarlasika" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swarlasika.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Swaralasika Sangeetalaya</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Green_Chillies_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Green_Chillies_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Green Chillies</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Devam" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Devam.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Devam</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=AAS_Vidyalaya_State_Boards" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/AAS_Vidyalaya_State_Boards.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>AAS Vidyalaya State Boards</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=India_At_Dubai_Expo" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/India_At_Dubai_Expo.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>India At Dubai Expo</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=TEST3_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TEST3_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>TEST3 HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=TEST4_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TEST4_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>TEST4 HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=TEST5_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TEST5_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>TEST5 HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=TEST6_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TEST6_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>TEST6 HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=TEST7_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TEST7_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>TEST7 HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=TEST8_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TEST8_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>TEST8 HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=ABP_Ganga" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ABP_Ganga.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>ABP Ganga</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Kalaignar_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kalaignar_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Kalaignar TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Kalaignar_Seithigal_" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kalaignar_Seithigal_.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Kalaignar Seithigal </p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Hare_Krsna_Pravachan" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Hare_Krsna_Pravachan.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Hare Krsna Pravachan</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Highbrow" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Highbrow.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Highbrow</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=LordShri_Vitthal" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/LordShri_Vitthal.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Lord Shri Vitthal Rukmini</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Animal_Planet_HD_Tamil" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Animal_Planet_HD_Tamil.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Animal Planet HD Tamil</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Rajyoga_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Rajyoga_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Rajyoga TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Rajyoga_Malayalam" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Rajyoga_Malayalam.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Rajyoga Malayalam</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=GovindDevji_Jaipur" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/GovindDevji_Jaipur.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Mandir Shri Govinddevji-Jaipur</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Dagdusheth_Pune" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Dagdusheth_Pune.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Dagdusheth Ganpati - Pune</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Nimbark" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nimbark.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Nimbark TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Click_Life" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Click_Life.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Click Life</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Nick_HD_Plus" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nick_HD_Plus.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Nick HD+</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Ambabai_Temple" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ambabai_Temple.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Ambabai Temple-Kolhapur</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=TEST9_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TEST9_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>TEST9 HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=VR_360" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/VR_360.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>PTC VR</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Jio_Football_Hindi_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football_Hindi_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Jio Football Hindi HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Jio_Football_Tamil_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football_Tamil_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Jio Football Tamil HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Jio_Football_Malayalam_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football_Malayalam_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Jio Football Malayalam HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Jio_Football_Bangali_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football_Bangali_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Jio Football Bengali HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=TEST10_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TEST10_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>TEST10 HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=God_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/God_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>God TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sonic_Telugu" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sonic_Telugu.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sonic Telugu</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sonic_Kannada" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sonic_Kannada.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sonic Kannada</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Nick_Kannada" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nick_Kannada.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Nick Kannada</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Tripura_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Tripura_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Headlines Tripura</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Twenty_Four_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TWENTY_FOUR_NEWS.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Twenty Four News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=TV9_Bharatvarsh" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TV9_Bharatvarsh.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>TV9 Bharatvarsh</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Tehzeeb_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TEHZEEB_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Tehzeeb TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Kolkata_Live" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kolkata_LIVE.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Kolkata Live</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Aastha_Telugu" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Aastha_Telugu.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Aastha Telugu</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Aastha_Tamil" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Aastha_Tamil.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Aastha Tamil</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Aastha_Kannada" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Aastha_Kannada.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Aastha Kannada</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Surya_Samachar" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Surya_Samachar.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Surya Samachar</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Surya_Cinema" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Surya_Cinema.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Surya Cinema</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Surya_Bhakti" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Surya_Bhakti.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Surya Bhakti</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Ctvn_Akd_Plus" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/CTVN_AKD_Plus.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Ctvn Akd Plus</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Calcutta_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Calcutta_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Calcutta News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Total_Tv_Haryana" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Total_Tv_Haryana.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Total Tv Haryana</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Kolkata_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kolkata_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Kolkata TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sanjh_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Global_Sanjh.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Global Sanjh</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Bflix_Movies" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Bflix_Movies.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Bflix Movies</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=iLove" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/iLove.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>iLove</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=ABZY_Dhakad" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ABZY_Dhakad.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>ABZY Dhakad</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=ABZY_Cool" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ABZY_Cool.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>ABZY Cool</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=ABZY_Movies" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ABZY_Movies.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>ABZY Movies</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Udupi_Krishna_Temple" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Udupi_Krishna_Temple.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sh Krishna Matta Adamaru Paryaya UDUPI</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sugran" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sugran.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sugran</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Studio_One" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Studio_One.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Studio One</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Box_Cinema" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Box_Cinema.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Box Cinema</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Nireekshana_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nireekshana_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Nireekshana TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Prarthana_Bhawan" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Prarthana_Bhawan.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Prarthana Bhawan</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Manoranjan_Grand" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Manoranjan_Grand.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Manoranjan Grand</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Manoranjan_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Manoranjan_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Manoranjan TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Manoranjan_Movies" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Manoranjan_Movies.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Manoranjan Movies</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Khusboo_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Khusboo_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Khushboo TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Hanuman_Mahavir_Temple" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Hanuman_Mahavir_Temple.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Mahavir Mandir Patna</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Vignesh_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vignesh_TV.PNG" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Vignesh TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Insync" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Insync.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Insync</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=ANB_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ANB_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>ANB News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Omkareshwar_Temple" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Omkareshwar_Temple.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Shri Omkareshwar Mandir</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=StarTell" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/StarTell.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Stars Tell</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=ABP_Sanjha" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ABP_Sanjha.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>ABP Sanjha</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Wellness_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Wellness_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Wellness</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Lokshahi_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Lokshahi_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Lokshahi News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Dsports" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Dsports.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Eurosport</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=B4U_Kadak" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/B4U_Kadak.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>B4U Kadak</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=B4U_Bhojpuri" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/B4U_Bhojpuri.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>B4U Bhojpuri</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=TV_Bangla" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TV_Bangla.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>TV Bangla</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Manjari_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Manjari_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Manjari TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=HHDL" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/HHDL.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>HHDL</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Iskon_Temples_New" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Iskon_Temples_New.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>ISKCON Darshan</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sri_Patna_Sahib" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sri_Patna_Sahib.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Takht Sri Patna Sahib - Patna</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Colors_Infinity_SD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Infinity_SD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Colors Infinity SD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Comedy_Central_SD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Comedy_Central_SD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Comedy Central SD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=RT_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/RT_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>RT TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sony_Wah" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Wah.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sony Wah</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sony_SD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_SD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sony SD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=NHK_World_Japan" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/NHK_World_Japan.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>NHK World Japan</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Reporter_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Reporter_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Reporter TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=SongDew_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/SongDew_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>SongDew TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Shani_Shingnapur" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Shani_Shingnapur.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Shani Shingnapur</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Prati_Shirdi_Saibaba" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Prati_Shirdi_Saibaba.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Prati Shirdi Saibaba</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Ganga_Darshan_Varanasi" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ganga_Darshan_Varanasi.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Ganga Darshan Varanasi</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Ashtavinayak_Ozar" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ashtavinayak_Ozar.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Ashtavinayak Ozar</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=SVBC2" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/SVBC2.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>SVBC2</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Ichhapuran_Balaji_Rajasthan" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ichhapuran_Balaji_Rajasthan.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Ichhapuran Balaji Rajasthan</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Iskon_Girgaon" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Iskon_Girgaon.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Iskon Girgaon</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Ashtavinayak_Ranjangaon" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ashtavinayak_Ranjangaon.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Ashtavinayak Ranjangaon</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Karani_Mata_Rajasthan" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Karani_Mata_Rajasthan.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Karani Mata Rajasthan</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Mahalaxmi_Mumbai" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Mahalaxmi_Mumbai.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Mahalaxmi Mumbai</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Babulnaath_Mumbai" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Babulnaath_Mumbai.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Babulnaath Mumbai</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Mumbadevi_Mumbai" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Mumbadevi_Mumbai.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Mumbadevi Mumbai</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=1Sports" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/1Sports.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>1Sports</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Santvani" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Santvani.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Santvani</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Nandighosha" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nandighosha.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Nandighosha</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_KIDS.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Jio KIDS</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=BBC_Hindi" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/BBC_Hindi.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>BBC News Hindi</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=TIME8" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TIME8.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>TIME8</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Velukkudi_Discourses" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Velukkudi_Discourses.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Velukkudi Discourses</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Krishna_Vani" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Krishna_Vani.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Krishna Vani</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Wah_Punjabi" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Wah_Punjabi.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Wah Punjabi</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=YTV_INDIA" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/YTV_INDIA.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>YTV India</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Rishtey_Cineplex" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Rishtey_Cineplex.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Rishtey Cineplex</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=9_Bharat_Samachar" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/9_Bharat_Samachar.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>9 Bharat Samachar</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Shemaroo_MarathiBana" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Shemaroo_MarathiBana.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Shemaroo MarathiBana</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Balle_Balle_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Balle_Balle_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Balle Balle TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Shiksha_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Shiksha_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Shiksha TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Janapriyam_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Janapriyam_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Janapriyam</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=News_Only" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/News_Only.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>News Only</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Gurkebaani" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Gurkebaani.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Gurkibani</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Moti_Doongri" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Moti_Doongri.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Shree Ganesh - Moti Doongri Jaipur</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Daijiworld_TV_24X7" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Daijiworld_TV_24X7.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Daijiworld TV 24x7</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=History_TV18_SD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/History_TV18_SD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>History TV18 SD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=TEST11_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TEST11_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>TEST11 HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Colors_Cineplex_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Color_Cineplex_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Colors Cineplex HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Nakoda_Temple" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nakoda_Temple.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Shri Jain Nakoda Parshwanath Tirth</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Bhoomi_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Bhoomi_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>BHOOMI 24x7</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Kannur_one" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kannur_one.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Kannur One</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=News_J" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/News_J.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>News J</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=TEST13_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TEST13_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>TEST13 HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Network_10" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Network_10.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Network 10</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sony_Pix_SD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Pix_SD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sony Pix SD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=World_Punjab" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/World_Punjab.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>World  Punjabi</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Surya_Bhojpuri" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Surya_Bhojpuri.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Surya Bhojpuri</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=RadheKrishna_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/RadheKrishna_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>RadheKrishna TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Samachar_Today" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Samachar_Today.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Samachar Today</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sangat_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sangat_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sangat TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Subharti" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Subharti.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Subharti</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Shiksha_Darshan" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Shiksha_Darshan.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Shiksha Darshan</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=AB_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/AB_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>AB News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=News_First" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/News_First.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>News First</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=MY_ZEN_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/MY_ZEN_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>MY ZEN HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=HitsIndia_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/HitsIndia_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>HITS HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Colors_Kannada_Cinema" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Kannada_Cinema.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Colors Kannada Cinema</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Colors_Cineplex_Bollywood" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Cineplex_Bollywood.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Colors Cineplex Bollywood</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Hoopla_Kids_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Hoopla_Kids_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Hoopla Kidz TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Aakash_EduTV_NEET" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Aakash_EduTV_NEET.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Aakash EduTV NEET</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Harpal_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Harpal_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Harpal TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=SVBC" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/SVBC.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>SVBC</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Aakash_EduTV_JEE" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Aakash_EduTV_JEE.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Aakash EduTV JEE</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=News11_Bharat" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/News11_Bharat.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>News11 Bharat</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=STV_Haryana_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/STV_Haryana_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>STV Haryana News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=NL_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/NL_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>NL TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=News_Time_Assam" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/News_Time_Assam.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>News Time Assam</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=SVBC3" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/SVBC3.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>SVBC3</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=SVBC4" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/SVBC4.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>SVBC4</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Punjab_Plus" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Punjab_Plus.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Punjab Plus</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Kenson_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kenson_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Kenson News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=7X_Music" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/7X_Music.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>7X Music</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Dreamworks" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Dreamworks.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>DreamWorks</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=E_NBCU" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/E_NBCU.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>E!</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=TEST15_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/TEST15_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>TEST15 HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Pogo_Telugu" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Pogo_Telugu.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Pogo Telugu</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Kripa_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kripa_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Kripa TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Sansad_TV_RajyaSabha" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sansad_TV_RajyaSabha.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Sansad TV Rajya Sabha</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Jivan_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jivan_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Jivan TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Jio_Sports_1_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Sports_1_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Jio Sports 1 HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Jio_Sports_2_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Sports_2_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Jio Sports 2 HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Tribe_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Tribe_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Tribe TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Padhega_Bharat" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Padhega_Bharat.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Padhega Bharat</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Today_24_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Today_24_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Today 24 News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=News_Flash" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/News_Flash.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>News Flash</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Pulse_24" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Pulse_24.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Pulse 24</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=GBN24" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/GBN24.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>GBN24</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=VK_News" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/VK_News.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>VK News</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=ENB" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/ENB.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Express News Bharat</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Adhyatam_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Adhyatam_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Adhyatam TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Aaj_Ki_Baat" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Aaj_Ki_Baat.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Aaj Ki Baat Gujarati</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Namasthe_TV" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Namasthe_TV.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Namasthe TV</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Jio_Cricket_Hindi" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Cricket_Hindi.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Jio Cricket Hindi HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Jio_Cricket_Tamil" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Cricket_Tamil.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Jio Cricket Tamil HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Jio_Cricket_Telugu" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Cricket_Telugu.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Jio Cricket Telugu HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="index.php?c=Jio_Cricket_Kannada" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Cricket_Kannada.png" style="height: 120px">
<div class="card-body">
<p class="card-text"><i class='fas fa-video' style='font-size:15px;color:red;margin-top:.3rem;'>&nbsp;</i>Jio Cricket Kannada HD</p>
</div>
</a>
</div></div>

</div>



</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <script>


var _0x3ca68c=_0x1364;(function(_0x3c4efa,_0x6298a8){var _0x364e34=_0x1364,_0x1373bc=_0x3c4efa();while(!![]){try{var _0x5815da=parseInt(_0x364e34(0x98))/0x1+parseInt(_0x364e34(0x88))/0x2+parseInt(_0x364e34(0x82))/0x3+parseInt(_0x364e34(0x90))/0x4*(-parseInt(_0x364e34(0x7f))/0x5)+-parseInt(_0x364e34(0x95))/0x6*(-parseInt(_0x364e34(0x75))/0x7)+-parseInt(_0x364e34(0x73))/0x8+parseInt(_0x364e34(0x7a))/0x9*(parseInt(_0x364e34(0x8d))/0xa);if(_0x5815da===_0x6298a8)break;else _0x1373bc['push'](_0x1373bc['shift']());}catch(_0x1ce4d9){_0x1373bc['push'](_0x1373bc['shift']());}}}(_0xb63f,0x418cd),$(document)[_0x3ca68c(0x94)](function(){$('input')['on']('keyup',function(){var _0x491706=_0x1364,_0xb3027b=$(this)[_0x491706(0x9d)]()[_0x491706(0x8e)]();$('.container-fluid\x20.row\x20.col-sm-4')[_0x491706(0x85)](function(){var _0x9e0288=_0x491706;$(this)[_0x9e0288(0x7d)]($(this)[_0x9e0288(0x9e)]()[_0x9e0288(0x8e)]()[_0x9e0288(0x92)](_0xb3027b)>-0x1);});});}));function _0x1364(_0x3753b5,_0x4c214){var _0xb63fe7=_0xb63f();return _0x1364=function(_0x13645e,_0x52e4b4){_0x13645e=_0x13645e-0x71;var _0x5f291f=_0xb63fe7[_0x13645e];return _0x5f291f;},_0x1364(_0x3753b5,_0x4c214);}var animateButton=function(_0x5b8995){var _0x146a4b=_0x3ca68c;_0x5b8995[_0x146a4b(0x7c)],_0x5b8995['target'][_0x146a4b(0x9c)]['remove']('animate'),_0x5b8995['target'][_0x146a4b(0x9c)][_0x146a4b(0x7b)](_0x146a4b(0x78)),setTimeout(function(){var _0x11880a=_0x146a4b;_0x5b8995[_0x11880a(0x9b)]['classList'][_0x11880a(0x99)](_0x11880a(0x78));},0x2bc);},bubblyButtons=document[_0x3ca68c(0x80)]('bubbly-button');for(var i=0x0;i<bubblyButtons['length'];i++){bubblyButtons[i][_0x3ca68c(0x8b)](_0x3ca68c(0x86),animateButton,![]);}setTimeout(videovisible,0xbb8);function videovisible(){var _0xe310c1=_0x3ca68c;document[_0xe310c1(0x76)](_0xe310c1(0x71))[_0xe310c1(0x83)][_0xe310c1(0x96)]=_0xe310c1(0x7e);}document[_0x3ca68c(0x8b)](_0x3ca68c(0x9a),()=>{var _0x23bffc=_0x3ca68c;const _0x60787d=document[_0x23bffc(0x84)](_0x23bffc(0x97)),_0x2f36ee=_0x60787d[_0x23bffc(0x8c)]('source')[0x0]['src'],_0x21eafc={};if(Hls[_0x23bffc(0x8a)]()){var _0x1630b1={'maxMaxBufferLength':0x64};const _0x2d78dd=new Hls(_0x1630b1);_0x2d78dd['loadSource'](_0x2f36ee),_0x2d78dd['on'](Hls[_0x23bffc(0x72)][_0x23bffc(0x79)],function(_0x229d69,_0x5586ee){var _0x4e536b=_0x23bffc;const _0xa061d8=_0x2d78dd[_0x4e536b(0x87)][_0x4e536b(0x74)](_0xc7bb10=>_0xc7bb10[_0x4e536b(0x89)]);_0x21eafc[_0x4e536b(0x8f)]={'default':_0xa061d8[0x0],'options':_0xa061d8,'forced':!0x0,'onChange':_0x340433=>function(_0x51deb0){var _0x2ef88d=_0x4e536b;window[_0x2ef88d(0x91)][_0x2ef88d(0x87)][_0x2ef88d(0x77)]((_0x5d3eca,_0x276dfc)=>{var _0x2dce12=_0x2ef88d;_0x5d3eca[_0x2dce12(0x89)]===_0x51deb0&&(window[_0x2dce12(0x91)][_0x2dce12(0x81)]=_0x276dfc);});}(_0x340433)},new Plyr(_0x60787d,_0x21eafc);}),_0x2d78dd[_0x23bffc(0x93)](_0x60787d),window[_0x23bffc(0x91)]=_0x2d78dd;}else new Plyr(_0x60787d,_0x21eafc);});function _0xb63f(){var _0x570b7c=['23225dFLpur','getElementsByClassName','currentLevel','104958XfcSsL','style','querySelector','filter','click','levels','283088oBQwOw','height','isSupported','addEventListener','getElementsByTagName','3432890tFxaup','toLowerCase','quality','308pBpEeS','hls','indexOf','attachMedia','ready','3077058XiisSA','display','video','92929dvogHO','remove','DOMContentLoaded','target','classList','val','text','loading','Events','3995464iPrGDS','map','7cvhxtK','getElementById','forEach','animate','MANIFEST_PARSED','9ehNVsR','add','preventDefault','toggle','none'];_0xb63f=function(){return _0x570b7c;};return _0xb63f();}
</script>

</body></html>
