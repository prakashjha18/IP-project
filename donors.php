<!DOCTYPE html>
<?php
  require_once("pages/includes/functions.php");
  session_start();
  // print_r($_SESSION);
  if($_SESSION['did']==NULL)
  {
      header("Location: index.php");
  }
  // $donations=getngodonations();
  // echo "<pre>";
  // print_r($donations);
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
        $total_pages_sql = "SELECT COUNT(*) FROM donations";
        $result = mysqli_query($connection,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);
        $sql = "SELECT * FROM donations LIMIT $offset, $no_of_records_per_page";
        $res_data = mysqli_query($connection,$sql);
        while($row = mysqli_fetch_array($res_data)){
            $donations[]=$row;
        }
         // echo "<pre>";
         //    print_r($donations);
  ?>
<html lang="">
<head>
<title>Drywest | Pages | Basic Grid</title>
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
        <li><a href="profilepage.php">My Profile</a></li>
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
      <?php $img[0]='css/img/pic1.jpg';?>
          <?php $img[1]='css/img/pic2.jpg';?>
          <?php $img[2]='css/img/pic3.jpg';?>
          <?php $img[3]='css/img/pic4.jpg';?>
          <?php $img[4]='css/img/pic5.jpg';?>
          <?php $img[5]='css/img/pic6.jpg';?>
          <?php $img[6]='css/img/pic1.jpg';?>
          <?php $img[7]='css/img/pic2.jpg';?>
          <?php $img[8]='css/img/pic3.jpg';?>
          <?php $img[9]='css/img/pic4.jpg';?>
          <?php $i=0;?>

      <section class=" clear">
          <!-- ################################################################################################ -->
          <div id="myModal1" class="modal">
          <?php
            foreach ($donations as $value) {
              // print_r($value[2]);
            ?>
              <div class="modal-content" id="b<?php print_r($value[0]) ?>"> <span class="close">&#215;</span>
              <form action="javascript:void(0);">

                          <label for="usr">Please Enter Amount to be Donated</label>
                          <input type="text" class="form-control" iname="amnt" id="amnt" value="">
                          <input type="hidden" name="dnid" id="dnid" value=<?php  echo ($value[0]) ?>>

                        <!--  Amount to be donated <input type="text" name="amnt" id="amnt" value=""> -->


                    <button class="btn pay" type="submit" id="contribute" style="background:#fda401;color:white;">Contribute</button>
              </form>
              </div>
            <?php
            }
            ?>
          </div>
          <div class="grid-container1">

              <?php
                 foreach ($donations as $value) {
                   // print_r($value[2]);
                   ?>
                   <article class="grid-item1">
                   <div class="first1">
                       <!-- <img src="css/img/img3phone.jpg" height="239px" width="330px"> -->
                       <img src="<?php echo $img[$i];?>" height="220" width="330">
            <?php $i++;?>
            <div class="bottom-container" style="height: 200px ">
              <p class="bold1"><b><?php print_r($value[4]) ?></b></p>
              <p class="bold2"><?php print_r($value[5]) ?></p>
              <form action="javascript:void(0);">
                <div class="form-group">
                  <input type="hidden" name="dtitle" id="dnid" value="<?php echo $value[4] ?>">

                  <input type="hidden" name="per" id="per"
                  value="<?php
                          $score=($value[2]/$value[1])*100;
                          echo(round($score, 2));
                          ?>"
                  >
                  <input type="hidden" name="pled" id="pled" value="<?php echo $value[1] ?>">
                  <input type="hidden" name="desc" id="desc" value="<?php echo $value[5] ?>">
                  <span><button type="button" data-bid="a1" class="myBtn btn read-more open-AddDialog" data-toggle="modal" data-target="#readModal" type="submit" style="margin-left : 10px;">Read More</button></span>
                  <button type="button" data-bid="b<?php print_r($value[0]) ?>" class="myBtn2 btn read-more mores"  <?php  echo ($value[0]) ?>"style="margin-left : 70px">Donate</button>
                </div>
              </form>
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
<!-- <div class="wrapper row5">
  <div id="copyright" class="hoc clear">
     ################################################################################################ -->
    <!-- <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p> -->
    <!-- ################################################################################################ -->
  </div>
</div> -->
<!-- ################################################################################################ -->
<!-- #################################
############################################################### -->
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
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script>

$(document).on("click", ".myBtn", function () {
           var form = $(this).closest("form");
           var dtitle= form[0]["dtitle"].value;
           var desc= form[0]["desc"].value;
           // console.log(desc);
           var per= form[0]["per"].value;
           var ple= form[0]["pled"].value;
           // console.log(per);
           document.getElementById('vol_progress').value = per;
           // console.log(dtitle);
           $("#dtitle").html(dtitle);
           $("#ple").html("Pledge Amount - "+ple);
           $("#desc2").html(desc);
           $("#per2").html(per+"%");
           document.getElementById('per2').style.width = per;
           document.getElementById('per2').style.animation.to = per;
      });
$(document).on('click','.myBtn',function(){
	var myTargetModal = '#' + $(this).data('bid');
	$('#myModal').hide();
	$('.modal-content').hide();
	$('#myModal').fadeIn();
	$(myTargetModal).fadeIn();
});

$(document).on('click','.myBtn2',function(){
	var myTargetModal = '#' + $(this).data('bid');
	$('#myModal1').hide();
	$('.modal-content').hide();

	$('#myModal1').fadeIn();
	$(myTargetModal).fadeIn();
});

$("body" ).on( "click",".close", function() {
    $('#myModal').hide();
    $('#myModal1').hide();
	$('.modal-content').hide();
});
$("form").submit(function(){

          var form_data = $(this).closest("form");
          // console.log(form_data);
          $dnid = form_data[0]["dnid"].value;
          var dnid= form_data[0]["dnid"].value;
          $amnt = form_data[0]["amnt"].value;
          // console.log(form_data[0]["dnid"].value);
          // document.write(dnid);
          $('#myModal1').hide();
          // $dnid = document.getElementById('dnid').value;

          // $amnt = document.getElementById('amnt').value;

          //var data = form_data.split("&");
          // console.log(form_data[2]["amnt"].value);
          console.log($amnt);
          //fetching all the other values from database using ajax ans loading them onto their respective edit fields!
          console.log($dnid);
          $.ajax({

              // url: "http://localhost/be-the-change/getDonations.php",
              url : "getDonations.php",
              method:"POST",
              data:{dnid:$dnid,amnt:$amnt},
              dataType:"json",
              success:function(response){
                  // print_r(response);

                  if(response.done=="Amount Donated!")
                  {
                      toastr["success"]("YOU HAVE A SUCCCESFULLY DONATED");
                  }else if(response.done==false){
                      toastr["error"]("SOMETHING WENT WRONG1");
                  }else{
                      alert(response.done);
                  }

              },
              // error: function( jqXhr, textStatus, errorThrown ){
              //     console.log( JSON.stringify(errorThrown) );
              // }
              error: function () {
                  toastr["error"]("SOMETHING WENT WRONG1");
              }


          });
      });

</script>
<script src="layout/toastr/toastr.min.js"></script>
<script src="layout/scripts/jquery-3.3.1.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>
