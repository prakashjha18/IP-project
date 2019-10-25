<!DOCTYPE html>
<!--
Template Name: Drywest
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<?php
require_once("pages/includes/functions.php");
 session_start();
// print_r($_SESSION);
$nid=$_SESSION['nid'];
if($_SESSION['nid']==NULL)
{
    header("Location: index.php");
}

$donate=ngodonations($nid);
// echo "<pre>";
// print_r($events);
// exit;
?>
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Drywest | Pages | Basic Grid</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="layout/toastr/toastr.min.css">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<style type="text/css">
<style>


/* DEMO ONLY */
.container .demo{text-align:center;}
.container .demo div{padding:8px 0;}
.container .demo div:nth-child(odd){color:#FFFFFF; background:#CCCCCC;}
.container .demo div:nth-child(even){color:#FFFFFF; background:#979797;}
@media screen and (max-width:900px){.container .demo div{margin-bottom:0;}}
/* DEMO ONLY */
</style>
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear">
    <!-- ################################################################################################ -->
    <ul>
      <li><i class="fa fa-clock-o"></i> Mon. - Fri. 8am - 5pm</li>
      <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
      <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
      <li><a href="#"><i class="fa fa-lg fa-home"></i></a></li>
      <li><a href="#" title="Login"><i class="fa fa-lg fa-sign-in"></i></a></li>
      <li><a href="#" title="Sign Up"><i class="fa fa-lg fa-edit"></i></a></li>
    </ul>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear">
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="../index.html">Drywest</a></h1>
    </div>
    <div class="fl_right"><a class="btn" href="#">Quam quisque vel</a></div>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded" style="background-image:url('images/demo/backgrounds/01.png');">
  <!-- ################################################################################################ -->
  <div class="wrapper row2">
    <nav id="mainav" class="hoc clear">
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li><a href="../index.html">Home</a></li>
        <li><a href="collaboration.html">Collaborations</a></li>
        <li><a href="about.html">About Us</a></li>
        <li><a href="pages/includes/logout.php">Logout</a></li>
      <!-- ################################################################################################ -->
    </nav>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper overlay">
    <div id="breadcrumb" class="hoc clear">
      <!-- ################################################################################################ -->
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Lorem</a></li>
        <li><a href="#">Ipsum</a></li>
        <li><a href="#">Dolor</a></li>
      </ul>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear">
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="sidebar one_quarter first">
        <div id="comments">

            <ul>
            <li>
                <article>
                <header>
                    <figure class="avatar"><img src="../images/demo/avatar.png" alt=""></figure>
                    <h1><a>Total Volunteers</a><h1>
                    <h1>826666<h1>
                </header>

                </article>
            </li>
            <li>
                <article>
                <header>
                    <figure class="avatar"><img src="../images/demo/avatar.png" alt=""></figure>
                    <h1><a>Total NGO's</a><h1>
                    <h1>826666<h1>
                </header>

                </article>
            </li>
            <li>
                <article>
                <header>
                    <figure class="avatar"><img src="../images/demo/avatar.png" alt=""></figure>
                    <h1><a>Donations Done</a><h1>
                    <h1>95862<h1>
                </header>

                </article>
            </li>
            <li>
                <article>
                <header>
                    <figure class="avatar"><img src="../images/demo/avatar.png" alt=""></figure>
                    <h1><a>new donations</a><h1>
                    <h1>7264<h1>
                </header>

                </article>
            </li>
            <li>
                <article>
                <header>
                    <figure class="avatar"><img src="../images/demo/avatar.png" alt=""></figure>
                    <h1><a>new Volunteers</a><h1>
                    <h1>3294<h1>
                </header>

                </article>
            </li>
            </ul>

        </div>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="content three_quarter">


          <!-- ################################################################################################ -->

          <div class="content">
            <!-- ################################################################################################ -->
            <div id="comments">

              <h2>ADD EVENT</h2>
              <form method="POST" enctype="multipart/form-data" action="javascript:void(0)">

                Name of Event : <input type="text" class="form-control" name="name" id="name"><br>
                <!-- Date of Event : <input type="date" class="form-control" name="date" id="date"><br> -->
                <!-- Time of Event : <input type="text" class="form-control" name="time" id="time"><br> -->
                Location of Event : <input type="text" class="form-control" name="location" id="location"><br>
                Description of Event : <textarea type="text" class="form-control" cols=10 rows=10 name="desc" id="desc"></textarea><br>
                Limit of People : <input type="text" class="form-control" name="req_reg" id="req_reg"><br>
                <button class="btn" style="background:#fda401;border-radius:0px;color:white;float:left;">ADD EVENT</button>




            </form>
              <!-- <form action="pages/includes/signupfunction.php" method="POST" id="login" name="login">
                <div class="block clear">
                  <label for="name">NAME <span>*</span></label>
                  <input type="text" placeholder="Name" name="username" required="">
                </div>
                <div class="block clear">
                  <label for="email">EMAIL <span>*</span></label>
                  <input type="email" placeholder="Email" name="email" required="">
                </div>
                <div class="block clear">
                  <label for="url">PASSWORD</label>
                  <input type="password" placeholder="Password" name="password" required="">
                </div>
                <div class="block clear">
                  <label for="url">PHONE NUMBER</label>
                  <input type="phone" placeholder="PhoneNumber" name="phone" required=""><br>
                </div>
                <div class="block clear">
                  <select name="category_id" id="category_id" class="form-control" style="border:1px solid #454545;">
                      <option>Choose Ur Role</option>
                      <option>Volunteer</option>
                      <option>Donor</option>
                      <option>NGO</option>
                  </select>
                </div><br>
                <!-- <div class="block clear">
                  <label for="comment">Your Comment</label>
                  <textarea name="comment" id="comment" cols="25" rows="10"></textarea>
                </div> -->
            </div>
            <!-- ################################################################################################ -->
          </div>
          <!-- ################################################################################################ -->
          <div class="clear"></div>



      <!-- ################################################################################################ -->
    </div>
      <!-- ################################################################################################ -->


    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>

  </main>
</div>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="hoc clear">
    <!-- ################################################################################################ -->
    <div class="one_third first">
      <h6 class="heading">CONTACT US</h6>
      <ul class="nospace btmspace-30 linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          Vill - Chhoto Udaipur, Post - Argoal, Dist - Purba Midnapore, Pin - 721456, West Bengal, India
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +91 9987085332</li>
        <li><i class="fa fa-envelope-o"></i> info@saarthingo.com</li>
      </ul>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="heading">EVENTS</h6>
      <ul class="nospace linklist">
        <li>
          <article>
            <h2 class="nospace font-x1"><a href="#">Fundraising</a></h2>
            <time class="font-xs block btmspace-10" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
            <p class="nospace">Founders Adrienne Monteath-Van Dok and Hayley Bolding set up Atma in 2007, after exploring first-hand the dearth of quality education services that left millions of children excluded from a relevant education. [&hellip;]</p>
          </article>
        </li>
        <li>
          <article>
            <h2 class="nospace font-x1"><a href="#">NGO meet</a></h2>
            <time class="font-xs block btmspace-10" datetime="2045-04-05">Thursday, 5<sup>th</sup> April 2045</time>
            <p class="nospace">SAARTHI's mission became plain: support existing education NGOs, transforming them into sustainable and scalable organisations. By transforming high potentials into high impact organisations, Atma enables them to reach out to more children in need[&hellip;]</p>
          </article>
        </li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="heading">Reach Out To Us</h6>
      <p class="nospace btmspace-30">If you have any queries, post your name and email and we'll get in touch with you.</p>
      <form method="post" action="#">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" type="text" value="" placeholder="Name" SAARTHI="Name">
          <input class="btmspace-15" type="text" value="" placeholder="Email" SAARTHI="Email">
          <button type="submit" value="submit">Submit</button>
        </fieldset>
      </form>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/toastr/toastr.min.js"></script>
<script type="text/javascript">

            $("form").submit(function(){

            var form_data = $(this).closest("form");
            var req_reg = form_data[0]["req_reg"].value;
            var etitle = form_data[0]["name"].value;
            var desc=form_data[0]["desc"].value;
            var location=form_data[0]["location"].value;
            if(req_reg == "" || etitle == "" || etitle == "" || desc == "" || location == "")   {
              toastr["error"]("Please fill all the fields");
            }
            // console.log("hello")
            // console.log(form_data);
            // var data = form_data.split("&");
            // console.log(form_data[0]["evid"].value);

            //fetching all the other values from database using ajax ans loading them onto their respective edit fields!
            // console.log($eid);
            else {
              $.ajax({
                  url: "pages/includes/saveevent.php",
                  type:"POST",
                  data:{req_reg:req_reg,etitle:etitle,desc:desc, location:location},
                  dataType:'json'
                  // success:function(response){
                  //   if(response.done=="Event Added")
                  //   {
                  //     // alert("You Have Succesfullty registered for this event");
                  //       toastr["success"]("YOU HAVE A SUCCCESFULLY REGISTERED", "Events");
                  //       // $timeout(function() {
                  //             // window.location='ngo.php'
                  //         // }, 1000000);
                  //
                  //
                  //   }
                  //
                  // },
                  // error: function (response) {
                  //     toastr["error"]("There was some error, try again later", "Events");
                  //     console.log(response.done);
                  //     // $timeout(function() {
                  //     //         window.location='ngo.php'
                  //     //     }, 1000000);
                  // }


              })
              .done(function(data){
                toastr["success"]("YOU HAVE A SUCCCESFULLY REGISTERED", "Events");
                form_data[0]["req_reg"].value = "";
                form_data[0]["name"].value = "";
                desc=form_data[0]["desc"].value = "";
                location=form_data[0]["location"].value = "";
              })
              .fail(function(data){
                toastr["error"]("There was some error, try again later", "Events");
                console.log(data);
              });
            }
          });

        </script>
</body>
</html>
