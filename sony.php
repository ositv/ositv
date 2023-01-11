<html><head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
<title>MaxproLive-TonyTv</title>
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
<script src="http://maxprodrive.rf.gd/Scripts/nouse.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lazysizes@5.3.2/lazysizes.min.js"></script>

</head>
<body>

<div class="menu">&nbsp;<i class='fas fa-video' id="name1"  style='font-size:13px;color:orangered;margin-top:.3rem;'>&nbsp;&nbsp;MaxproTV</i></div>


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
    TonyTV
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="./zee5.php">Kee5</a></li><br>
    <li><a class="dropdown-item" href="./index.php">RioTV</a></li>
    
  </ul>
</div>
 </div>

<div id="content">
<div class="container-fluid">

<div class="row">

<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="sony.php?c=Sony_SAB" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_SAB.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sony SAB</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="sony.php?c=Sony_HD" class="card">
<img class=" lazyloaded" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_HD.png" style="height: 120px" src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_HD.png">
<div class="card-body">
<p class="card-text">Sony HD</p>
</div>
</a>
</div></div>

<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="sony.php?c=Sony_SAB_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_SAB_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sony SAB HD</p>
</div>
</a>
</div></div>

<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="sony.php?c=Sony_Pal" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Pal.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sony Pal</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="sony.php?c=Sony_Pix_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Pix_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sony Pix HD</p>
</div>
</a>
</div></div>

<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="sony.php?c=Sony_Max_SD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/SET_MAX.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sony Max SD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="sony.php?c=Sony_Max_HD" class="card">
<img class=" lazyloaded" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Max_HD.png" style="height: 120px" src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Max_HD.png">
<div class="card-body">
<p class="card-text">Sony Max HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="sony.php?c=Sony_MAX2" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_MAX2.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sony MAX2</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="sony.php?c=Six_HD" class="card">
<img class=" lazyloaded" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Six_HD.png" style="height: 120px" src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Six_HD.png">
<div class="card-body">
<p class="card-text">Sony Six HD</p>
</div>
</a>
</div></div><div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="sony.php?c=Sony_Wah" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Wah.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sony Wah</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="sony.php?c=Sony_SD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_SD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sony SD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="sony.php?c=Sony_Pix_SD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Pix_SD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sony Pix SD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="sony.php?c=Ten_HD" class="card">
<img class=" lazyloaded" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ten_HD.png" style="height: 120px" src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ten_HD.png">
<div class="card-body">
<p class="card-text">Ten 1 HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="sony.php?c=Ten2_HD" class="card">
<img class=" lazyloaded" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ten2_HD.png" style="height: 120px" src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ten2_HD.png">
<div class="card-body">
<p class="card-text">Ten 2 HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="sony.php?c=Ten3_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ten3_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Ten 3 HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="sony.php?c=Ten_1" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ten_1.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Ten 1</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="sony.php?c=Ten_2" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ten_2.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Ten 2</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="sony.php?c=Ten_3" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ten_3.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Ten 3</p>
</div>
</a>
</div></div>

<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="sony.php?c=Sony_BBC_Earth_HD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_BBC_Earth_HD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sony BBC Earth HD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="sony.php?c=Sony_Six_SD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Six_SD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sony Six SD</p>
</div>
</a>
</div></div>

<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="sony.php?c=Sony_Yay_Hindi" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Yay_Hindi.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sony Yay Hindi</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="sony.php?c=Sony_BBC_Earth_HD_Telugu" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_BBC_Earth_HD_Telugu.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sony BBC Earth HD Telugu</p>
</div>
</a>
</div></div>

<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="sony.php?c=Sony_BBC_Earth_HD_Tamil" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_BBC_Earth_HD_Tamil.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sony BBC Earth HD Tamil</p>
</div>
</a>
</div></div>

<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="sony.php?c=Sony_Marathi_SD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Marathi_SD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sony Marathi SD</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="sony.php?c=Sony_aath" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_aath.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sony aath</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="sony.php?c=Sony_BBC_Earth_SD" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_BBC_Earth_SD.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sony BBC Earth SD</p>
</div>
</a>
</div></div>

<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="sony.php?c=Sony_BBC_Earth_HD_English" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_BBC_Earth_HD_English.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sony BBC Earth HD English</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="sony.php?c=Sony_Yay_Telugu" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Yay_Telugu.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sony Yay Telugu</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="sony.php?c=Sony_Yay_Telugu" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Yay_Telugu.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sony Yay Telugu</p>
</div>
</a>
</div></div>
<div class="col-6 col-sm-4 col-md-2"> <div class="box1">
<a href="sony.php?c=Sony_Yay_Tamil" class="card">
<img class="lazyload" data-src="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Yay_Tamil.png" style="height: 120px">
<div class="card-body">
<p class="card-text">Sony Yay Tamil</p>
</div>
</a>
</div></div>
</div>
</div></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
             

<script>


var _0x3ca68c=_0x1364;(function(_0x3c4efa,_0x6298a8){var _0x364e34=_0x1364,_0x1373bc=_0x3c4efa();while(!![]){try{var _0x5815da=parseInt(_0x364e34(0x98))/0x1+parseInt(_0x364e34(0x88))/0x2+parseInt(_0x364e34(0x82))/0x3+parseInt(_0x364e34(0x90))/0x4*(-parseInt(_0x364e34(0x7f))/0x5)+-parseInt(_0x364e34(0x95))/0x6*(-parseInt(_0x364e34(0x75))/0x7)+-parseInt(_0x364e34(0x73))/0x8+parseInt(_0x364e34(0x7a))/0x9*(parseInt(_0x364e34(0x8d))/0xa);if(_0x5815da===_0x6298a8)break;else _0x1373bc['push'](_0x1373bc['shift']());}catch(_0x1ce4d9){_0x1373bc['push'](_0x1373bc['shift']());}}}(_0xb63f,0x418cd),$(document)[_0x3ca68c(0x94)](function(){$('input')['on']('keyup',function(){var _0x491706=_0x1364,_0xb3027b=$(this)[_0x491706(0x9d)]()[_0x491706(0x8e)]();$('.container-fluid\x20.row\x20.col-sm-4')[_0x491706(0x85)](function(){var _0x9e0288=_0x491706;$(this)[_0x9e0288(0x7d)]($(this)[_0x9e0288(0x9e)]()[_0x9e0288(0x8e)]()[_0x9e0288(0x92)](_0xb3027b)>-0x1);});});}));function _0x1364(_0x3753b5,_0x4c214){var _0xb63fe7=_0xb63f();return _0x1364=function(_0x13645e,_0x52e4b4){_0x13645e=_0x13645e-0x71;var _0x5f291f=_0xb63fe7[_0x13645e];return _0x5f291f;},_0x1364(_0x3753b5,_0x4c214);}var animateButton=function(_0x5b8995){var _0x146a4b=_0x3ca68c;_0x5b8995[_0x146a4b(0x7c)],_0x5b8995['target'][_0x146a4b(0x9c)]['remove']('animate'),_0x5b8995['target'][_0x146a4b(0x9c)][_0x146a4b(0x7b)](_0x146a4b(0x78)),setTimeout(function(){var _0x11880a=_0x146a4b;_0x5b8995[_0x11880a(0x9b)]['classList'][_0x11880a(0x99)](_0x11880a(0x78));},0x2bc);},bubblyButtons=document[_0x3ca68c(0x80)]('bubbly-button');for(var i=0x0;i<bubblyButtons['length'];i++){bubblyButtons[i][_0x3ca68c(0x8b)](_0x3ca68c(0x86),animateButton,![]);}setTimeout(videovisible,0xbb8);function videovisible(){var _0xe310c1=_0x3ca68c;document[_0xe310c1(0x76)](_0xe310c1(0x71))[_0xe310c1(0x83)][_0xe310c1(0x96)]=_0xe310c1(0x7e);}document[_0x3ca68c(0x8b)](_0x3ca68c(0x9a),()=>{var _0x23bffc=_0x3ca68c;const _0x60787d=document[_0x23bffc(0x84)](_0x23bffc(0x97)),_0x2f36ee=_0x60787d[_0x23bffc(0x8c)]('source')[0x0]['src'],_0x21eafc={};if(Hls[_0x23bffc(0x8a)]()){var _0x1630b1={'maxMaxBufferLength':0x64};const _0x2d78dd=new Hls(_0x1630b1);_0x2d78dd['loadSource'](_0x2f36ee),_0x2d78dd['on'](Hls[_0x23bffc(0x72)][_0x23bffc(0x79)],function(_0x229d69,_0x5586ee){var _0x4e536b=_0x23bffc;const _0xa061d8=_0x2d78dd[_0x4e536b(0x87)][_0x4e536b(0x74)](_0xc7bb10=>_0xc7bb10[_0x4e536b(0x89)]);_0x21eafc[_0x4e536b(0x8f)]={'default':_0xa061d8[0x0],'options':_0xa061d8,'forced':!0x0,'onChange':_0x340433=>function(_0x51deb0){var _0x2ef88d=_0x4e536b;window[_0x2ef88d(0x91)][_0x2ef88d(0x87)][_0x2ef88d(0x77)]((_0x5d3eca,_0x276dfc)=>{var _0x2dce12=_0x2ef88d;_0x5d3eca[_0x2dce12(0x89)]===_0x51deb0&&(window[_0x2dce12(0x91)][_0x2dce12(0x81)]=_0x276dfc);});}(_0x340433)},new Plyr(_0x60787d,_0x21eafc);}),_0x2d78dd[_0x23bffc(0x93)](_0x60787d),window[_0x23bffc(0x91)]=_0x2d78dd;}else new Plyr(_0x60787d,_0x21eafc);});function _0xb63f(){var _0x570b7c=['23225dFLpur','getElementsByClassName','currentLevel','104958XfcSsL','style','querySelector','filter','click','levels','283088oBQwOw','height','isSupported','addEventListener','getElementsByTagName','3432890tFxaup','toLowerCase','quality','308pBpEeS','hls','indexOf','attachMedia','ready','3077058XiisSA','display','video','92929dvogHO','remove','DOMContentLoaded','target','classList','val','text','loading','Events','3995464iPrGDS','map','7cvhxtK','getElementById','forEach','animate','MANIFEST_PARSED','9ehNVsR','add','preventDefault','toggle','none'];_0xb63f=function(){return _0x570b7c;};return _0xb63f();}
</script>

</body></html>
