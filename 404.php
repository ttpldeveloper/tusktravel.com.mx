<!DOCTYPE>
<html lang="en">
<head>  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  


   <title>404 Error- Something Went Wrong</title>
    
    <meta name="Description" content="Sorry!! PAGE NOT FOUND" />
    <meta name="Keywords" content="PAGE NOT FOUND" />

    
  <?php include("head.php"); ?>
  


</head>

<body class="wsmenucontainer clearfix">


     <!--header-->
    <?php include ('header.php') ?>
    <!--End header-->



<section class="missing-page">
<style type="text/css">
 .details-banner {
    background: #ff8100;
    padding: 55px 0 50px 0;
    overflow: hidden;
    position: relative;
}
.text-center {
    text-align: center!important;
}
.banner-overlay {
    content: '';
    background:radial-gradient(circle farthest-side at center bottom,#b30334,#3c3c3c 110%);
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
}
.banner-desc {
    width: 70%;
    margin: 0 auto;
}
.details-banner h1 {
    color: #fff;
    margin: 0 0 10px;
}
.banner-desc .breadcrumb {
    background: transparent;
    border: none;
    padding: 0;
    border-radius: 0;
    box-shadow: none;
}
.banner-desc .breadcrumb ol {
    margin: 0;
    padding: 0;
}
.banner-desc .breadcrumb ol li {
    display: inline-block;
    position: relative;
    color: #fff;
}
.breadcrumb li+li:before {
    padding: 0 5px;
    content: "/";
    color: #fff;
}
.banner-desc .breadcrumb ol li a {
    color: #fff;
}
.banner:after, .details-banner:after {
    bottom: -15px;
}
.banner:after, .details-banner:after {
    content: '';
    background: url(https://www.tusktravel.com.mx/images/cloud.png) repeat-x;
    width: 100%;
    background-size: 6%;
    bottom: 0;
    left: 0;
    right: 0;
    margin: 0 auto;
    position: absolute;
    height: 47px;
    z-index: 9;
}
.detail-missing{
  float:left;
  width:100%;
  padding:35px 0;
}
h1.error_number {
    text-align: center;
    font-size: 200px;
    line-height: .7;
    margin-bottom: 50px;
}
h1.error_number span {
      color: #cc0e31;
    font-size: 250px;
    position: relative;
}
.main_title.text-center {
    margin-bottom: 15px;
}

.btn-white a {
    padding: 10px 20px;
    border: 1px solid #eaa200;
    color: #fff;
    background: inherit;
    transition: all ease-in-out 0.3s;
    font-weight: 500;
    font-size: 14px;
    border-radius: 5px;
    background: #eaa200;
}
.btn-white a:hover{
    -webkit-animation-name: hvr-pop;
    animation-name: hvr-pop;
    -webkit-animation-duration: .3s;
    animation-duration: .3s;
    -webkit-animation-timing-function: linear;
    animation-timing-function: linear;
    -webkit-animation-iteration-count: 1;
    animation-iteration-count: 1;
    background: #eaa200;
    color: #fff;
    border-color: #eaa200;
}
@media only screen and (max-width: 768px) {
    section.missing-page{
        float:left;
    }
    h1.error_number {
        font-size:80px;
    }
    h1.error_number span{
        font-size:90px;
    }

}
</style>
  <!-- banner area-->
<div class="details-banner text-center clearfix"><div class="banner-overlay"></div><div class="container"><div class="row"><div class="col-sm-12"><div class="banner-desc"><h1>Error 404</h1><div class="breadcrumb">
    <ol><li class="item-home cyclone-hotel-home"><a class="bread-link bread-home" href="https://www.tusktravel.com">Home</a></li><li class="active">Error 404</li></ol></div></div></div></div></div></div>


<div class="detail-missing"><div class="container"><div class="row"><div class="col-sm-12"><div class="about-intro"><h1 class="error_number"> 4<span>0</span>4</h1>
    <div class="main_title text-center">
        <h2>OOPS!! Page Not Found... Sorry for the inconvenience..
</h2><p>The page you are looking for is missing for some reasons.</p>
    </div><div class="btn-white text-center"><a href="https://www.tusktravel.com.mx/" class="hvr-pop"><i class="fa fa-angle-left"></i> PLEASE GO BACK TO HOME PAGE</a></div></div></div></div></div> </div>

  <!-- banner area end here-->
  
</section>

 <?php include ('footer.php') ?> 
 <?php include ('model.php') ?>
 <?php include ('script.php') ?>
</body>
</html>
