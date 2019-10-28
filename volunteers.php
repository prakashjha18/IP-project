<!DOCTYPE html>
<?php
require_once("pages/includes/functions.php");
session_start();
// print_r($_SESSION);
if($_SESSION['vid']==NULL)
{
    header("Location: index.php");
}


// $events=getngoevents();
// echo "<pre>";
// print_r($events);
  if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 6;
        $offset = ($pageno-1) * $no_of_records_per_page;

        global $connection;
        // Check connection
        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            die();
        }

        $total_pages_sql = "SELECT COUNT(*) FROM ngoevents";
        $result = mysqli_query($connection,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        $sql = "SELECT * FROM ngoevents LIMIT $offset, $no_of_records_per_page";
        $res_data = mysqli_query($connection,$sql);
        while($row = mysqli_fetch_array($res_data)){

            $events[]=$row;

        }
?>
<!--
Template Name: Drywest
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>SAARTHI</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<script
      src="https://code.jquery.com/jquery-2.2.4.min.js"
      integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
      crossorigin="anonymous"></script>
<link rel="stylesheet" href="layout/toastr/toastr.min.css">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<style type="text/css">
/* DEMO ONLY */
.container .demo{text-align:center;}
.container .demo div{padding:8px 0;}
.container .demo div:nth-child(odd){color:#FFFFFF; background:#CCCCCC;}
.container .demo div:nth-child(even){color:#FFFFFF; background:#979797;}
@media screen and (max-width:900px){.container .demo div{margin-bottom:0;}}
items a {
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
      <li><i class="fa fa-phone"></i> +91 9987085332 </li>
      <li><i class="fa fa-envelope-o"></i> info@saarthingo.com</li>
      <li><a href="index.html"><i class="fa fa-lg fa-home"></i></a></li>
      <li><a href="login.html" title="Login"><i class="fa fa-lg fa-sign-in"></i></a></li>
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
      <h1 ><a href="index.php">SAARTHI</a></h1>
    </div>
    <div class="fl_right"><a class="btn" href="#">make a donation</a></div>
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
      </ul>
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
        <li><a href="#">VOLUNTEERS PROFILE</a></li><BR><BR>
      </ul>
      <h5>Welcome</h5>
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
    <div class="content three_quarter">

      <section class=" clear">
          <!-- ################################################################################################ -->

          <div class="grid-container1">

              <?php

                 foreach ($events as $key => $value) {
                   // print_r($value[2]);
                   ?>
                   <article class="grid-item1">
                   <div class="first1">
                       <!-- <img src="css/img/img3phone.jpg" height="239px" width="330px"> -->
                      <div class="mapouter"><div class="gmap_canvas"><iframe width="330" height="239" id="gmap_canvas" src="https://maps.google.com/maps?q=.'<?php print_r($value[4]) ?>'.&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de">webdesign agentur</a></div><style>.mapouter{text-align:right;height:239px;width:330px;}.gmap_canvas {overflow:hidden;background:none!important;height:239px;width:330px;}</style></div>

                      <div class="txtwrap">

                        <div class="bottom-container" style="height: 160px ">

                     <p class="bold1"><?php print_r($value[2]) ?></p>

                     <p class="bold2"><?php print_r($value[3]) ?></p>


                      <span style="float:left;">
                     <form action="javascript:void(0);"  >
                      <input type="hidden" name="dtitle" id="dtitle" value="<?php echo $value[2] ?>">

                      <input type="hidden" name="per" id="per"
                      value="<?php
                              $score=($value[6]/$value[5])*100;
                              echo(round($score, 2));
                              ?>"
                      >
                      <input type="hidden" name="pled" id="pled" value="<?php echo $value[5] ?>">
                      <input type="hidden" name="desc" id="desc" value="<?php echo $value[3] ?>">
                        <span><a href="#"><button data-bid="a1" class="myBtn btn read-more open-AddDialog" data-toggle="modal" data-target="#readModal" type="submit" style="margin-left : 10px">Read More</button></a></span>
                      </form>
                    </span>
                  <span style="float:right;">
                      <form action="javascript:void(0);" name="thisform" id="thisform">
                        <input type="hidden" name="evid" id="evid" value=<?php  echo ($value[0]) ?>>
                        <input type="hidden" name="vid" id="vid" value=<?php  echo $_SESSION['vid'] ?>></span>
                        <button class="btn read-more mores" type="submit" style="margin-right: 10px;">Participate</button>
                      </form>



                 </div>
                      </div>
                  </div>
                  </article>
                   <?php
                 }

                 ?>
          </div>
          <ul class="pagination" style="text-align: center;" >
                <li><a href="?pageno=1">First</a></li>
                <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
                  <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
                </li>
                <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                  <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
                </li>
                <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
              </ul>
                <div class="clearfix"></div>
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
      <h6 class="heading">Arcu accumsan id felis</h6>
      <ul class="nospace btmspace-30 linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          Street Name &amp; Number, Town, Postcode/Zip
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
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
      <h6 class="heading">Sodales facilisis nisi</h6>
      <ul class="nospace linklist">
        <li>
          <article>
            <h2 class="nospace font-x1"><a href="#">Curabitur a pharetra</a></h2>
            <time class="font-xs block btmspace-10" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
            <p class="nospace">Quis quam in hendrerit elit donec hendrerit sollicitudin imperdiet curabitur [&hellip;]</p>
          </article>
        </li>
        <li>
          <article>
            <h2 class="nospace font-x1"><a href="#">Risus sit amet blandit</a></h2>
            <time class="font-xs block btmspace-10" datetime="2045-04-05">Thursday, 5<sup>th</sup> April 2045</time>
            <p class="nospace">Ultricies aliquam nisi vitae pulvinar donec luctus ex ex eget ornare tortor [&hellip;]</p>
          </article>
        </li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="heading">Justo duis vulputate</h6>
      <p class="nospace btmspace-30">commodo non proin fermentum neque sapien phasellus molestie tincidunt.</p>
      <form method="post" action="#">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" type="text" value="" placeholder="Name">
          <input class="btmspace-15" type="text" value="" placeholder="Email">
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
<div class="wrapper row5">
  <div id="copyright" class="hoc clear">
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<div id="myModal" class="modal">
  <div class="modal-content" id="a1"> <span class="close">&#215;</span>
  <h5 class="modal-title" id="exampleModalLongTitle" style="margin: 0px;padding:0px"><p class="bold1" style="margin: 0px;padding:0px" name="dtitle2" id="dtitle2"></p></h5><br><br>
  <b>Progress Status</b><br>
   <progress id="vol_progress" max="100"></progress>
  <div class="box1">

    <div class="box2" name="per2" id="per2"><span class="percent">


    </span></div>
  </div>
    <p class="bold2" name="ple" id="ple"></p>
    <p class="bold2" name="desc2" id="desc2"></p>

  </div>

</div>
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
<script src="layout/toastr/toastr.min.js"></script>
<script type="text/javascript">
           $(document).on("click", ".myBtn", function () {
           var form = $(this).closest("form");
           // console.log("h");
           var dtitle= form[0]["dtitle"].value;
           // console.log(dtitle);
           var desc= form[0]["desc"].value;
           // console.log(desc);
           var per= form[0]["per"].value;
           // console.log(per);
           var ple= form[0]["pled"].value;
            console.log(dtitle);
            console.log(desc);
            console.log(per);
            console.log(ple);
           // console.log(dtitle);
           $("#dtitle2").html(dtitle);
           $("#desc2").html(desc);
           $("#ple").html("Pledge Volunteer - "+ple);
           $("#per2").html(per+"%");
           document.getElementById('per2').style.width = per;
           document.getElementById('vol_progress').value = per;
           document.getElementById('per2').style.animation.to = per;

      });
            $("form#thisform").submit(function(){
            console.log("g");

            var form_data = $(this).closest("form");
            $eid = form_data[0]["evid"].value;
            $vid = form_data[0]["vid"].value;

            // var data = form_data.split("&");

            //fetching all the other values from database using ajax ans loading them onto their respective edit fields!
            // console.log($eid);
            $.ajax({
                url: "getResults.php",
                method:"POST",
                data:{eid:$eid,vid:$vid},
                dataType:"json",
                success:function(response){
                  if(response.done==true)
                  {
                    //alert("You Have Succesfullty registered for this event");
                      toastr["success"]("YOU HAVE SUCCCESFULLY REGISTERED FOR THE EVENT", "PARTICIPANTS");
                  }else if(response.done==false){
                        toastr["success"]("YOU HAVE ALREADY REGISTERED", "PARTICIPANTS");
                  }else{
                        toastr["success"]("YOU HAVE ALREADY REGISTERED", "PARTICIPANTS");
                  }

                },
                error: function () {
                    toastr["error"]("YOU HAVE ALREADY REGISTERED", "PARTICIPANTS");
                }


            });
        });
        </script>
</body>
</html>
