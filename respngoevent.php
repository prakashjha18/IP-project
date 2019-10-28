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
require_once("pages/includes/constants.php");
require_once("pages/includes/db.php");

$events=ngoevents($nid);
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
<script
      src="https://code.jquery.com/jquery-2.2.4.min.js"
      integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
      crossorigin="anonymous"></script>

<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<style type="text/css">
/* DEMO ONLY */
.items a {
	display:block;
	cursor:pointer;
}
.modal {
	display: none; /* Hidden by default */
	position: fixed; /* Stay in place */
	z-index: 99; /* Sit on top */
	left: 0;
	right:0;
	top: 0;
	bottom:0;
	overflow: auto; /* Enable scroll if needed */
	background-color: rgb(0,0,0); /* Fallback color */
	background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
.modal-content {
	background-color: #fefefe;
	position:fixed;
	top:20%;
	bottom:20%;
	left:0;
	right:0;
	margin:auto;
	padding: 20px;
	border: 1px solid #888;
	width: 70%; /* Could be more or less, depending on screen size */
	display:none;
	box-sizing:border-box;
	z-index:100;
	overflow:auto;
}
.close {
	color: #aaa;
	float: right;
	font-size: 28px;
	font-weight: bold;
}
.close:hover, .close:focus {
	color: black;
	text-decoration: none;
	cursor: pointer;
}

.container .demo{text-align:center;}
.container .demo div{padding:8px 0;}
.container .demo div:nth-child(odd){color:#FFFFFF; background:#CCCCCC;}
.container .demo div:nth-child(even){color:#FFFFFF; background:#979797;}
@media screen and (max-width:900px){.container .demo div{margin-bottom:0;}}
/* DEMO ONLY */



@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */

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
      <h1><a href="../index.html">SAARTHI</a></h1>
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
        <li><a href="index.php">Home</a></li>
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
      <ul>
        <li><a href="#">HOME</a></li>
        <li><a href="#">NGO PROFILE</a></li><BR><BR>
      </ul>
      <h5>NGO EVENTS</h5>
      <!-- ################################################################################################ -->

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

      <section class=" clear">
        <div id="myModal" class="modal">
        <?php

           foreach ($events as $key => $value) {
             // print_r($value[2]);
             ?>


          <div class="modal-content" id="a<?php print_r($value[0]) ?>"> <span class="close">&#215;</span>
            <p><span>Volunteers participated  :- </span></p>
            <?php

                        $connection = mysqli_connect(SERVER,USER,PASSWORD,DB);
                        if(!$connection){
                            echo "Some issue in connecting ".mysqli_connect_error($connection);
                        }
                       $query = "SELECT users.* from ngoeventspartcpn
                       INNER JOIN users ON ngoeventspartcpn.vid=users.uid where eid=$value[0]";
                        $ngo=mysqli_query($connection,$query);?>
                        <table id="table_th">
                            <tr>
                              <th>Volunteers Name</th>
                              <th>Email</th>
                              <th>Phone</th>
                            </tr>
                        <?php
                        if (mysqli_num_rows($ngo) > 0) {
                        while($row = mysqli_fetch_assoc($ngo)) {

                          ?>

                            <tr>
                              <td><?php  print_r($row["UNAME"]); ?></td>
                              <td><?php print_r($row["U_EMAIL"]); ?></td>
                              <td><?php print_r($row["U_PHONE"]); ?></td>
                            </tr>



                   <?php   }

                        }
                        else{
                          echo "<b>no volunteers found</b>";
                        }
                ?>
                </table>
            <p></p>
          </div>


      <?php } ?>
      </div>
          <!-- ################################################################################################ -->

          <div class="grid-container1">

              <?php

                 foreach ($events as $key => $value) {
                   // print_r($value[2]);
                   ?>
                   <div id="myModal" class="modal">

                     <div class="modal-content" id="a<?php print_r($value[0]) ?>"> <span class="close">&#215;</span>
                       <p><span>Audits and Standards</span></p>
                       <p>Text 1</p>
                     </div>

                   </div>
                   <article class="grid-item1">
                   <div class="first1">
                       <!-- <img src="css/img/img3phone.jpg" height="239px" width="330px"> -->
                      <div class="mapouter"><div class="gmap_canvas"><iframe width="330" height="239" id="gmap_canvas" src="https://maps.google.com/maps?q=.'<?php print_r($value[4]) ?>'.&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de">webdesign agentur</a></div><style>.mapouter{text-align:right;height:239px;width:330px;}.gmap_canvas {overflow:hidden;background:none!important;height:239px;width:330px;}</style></div>

                      <div class="txtwrap">

                          <p class="bold1"><?php print_r($value[2]) ?></p>

                          <p class="bold2"><?php print_r($value[3]) ?></p>
                          <form action="javascript:void(0);" >
                             <!-- <span><a href="#"><button class="btn read-more">Read More</button></a></span>  -->
                             <input type="hidden" name="evid" id="evid" value=<?php  echo ($value[0]) ?> >
                             <input type="hidden" name="vid" id="vid" value="8">
                             <!-- <button class="btn read-more mores" type="submit">Participate</button></span>  -->
                           </form>
                           <?php
                                if($value[7]==1){
                           ?>

                               <span><a href="#"><button data-bid="a<?php print_r($value[0]) ?>" class="myBtn btn read-more" onclick="getpart('<?php  echo ($value[2]) ?>'+','+<?php  echo ($value[0]) ?>)" data-toggle="modal" data-target="#readModal" >Ongoing event</button></a></span>
                           <?php
                               }
                               else{
                           ?>
                               <span><a href="#"><button data-bid="a<?php print_r($value[0]) ?>" class="myBtn btn read-more" onclick="getpart('<?php  echo ($value[2]) ?>'+','+<?php  echo ($value[0]) ?>)" data-toggle="modal" data-target="#readModal" >Successful event</button></a></span>
                           <?php
                               }
                           ?>
                      </div>
                  </div>
                  </article>
                   <?php
                 }

                 ?>



          </div>
          <!-- ################################################################################################ -->
          <div class="clear"></div>

        </section>


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
<script>
$(document).on('click','.myBtn',function(){
	var myTargetModal = '#' + $(this).data('bid');
	$('#myModal').hide();
	$('.modal-content').hide();

	$('#myModal').fadeIn();
	$(myTargetModal).fadeIn();
});

$("body" ).on( "click",".close", function() {
  	$('#myModal').hide();
	$('.modal-content').hide();
});

</script>
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>


</body>
</html>
