<!DOCTYPE html>

<?php
require("pages/includes/ngofunction.php");
//session_start();
//print_r($_SESSION);
if($_SESSION['nid']==NULL)
{
    header("Location: index.php");
}
// echo "string";
$ngo=getngo();
$event=getngoevent();
$donations=getngodonations();

// print_r();
// print_r($ngo['ORGNAME']);
// print_r($_SESSION);
//if($_SESSION['nid']==NULL)
//{
//    header("Location: index.php");
//}
//$donations=getngodonations();
// print_r($donations);

?>
<html lang="">
<head>
<title>SAARTHI</title>
<link href="https://fonts.googleapis.com/css?family=Nunito:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i" rel="stylesheet">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<style type="text/css">

.container .demo{text-align:center;}
.container .demo div{padding:8px 0;}
.container .demo div:nth-child(odd){color:#FFFFFF; background:#CCCCCC;}
.container .demo div:nth-child(even){color:#FFFFFF; background:#979797;}
@media screen and (max-width:900px){.container .demo div{margin-bottom:0;}}

</style>
</head>
<body id="top">

<div class="wrapper row0">
  <div id="topbar" class="hoc clear">

  <ul>
      <li><i class="fa fa-clock-o"></i> Mon. - Fri. 8am - 5pm</li>
      <li><i class="fa fa-phone"></i> +91 9987085332 </li>
      <li><i class="fa fa-envelope-o"></i> info@saarthingo.com</li>
      <li><a href="index.php"><i class="fa fa-lg fa-home"></i></a></li>
      <li><a href="login.php" title="Login"><i class="fa fa-lg fa-sign-in"></i></a></li>
      <li><a href="#" title="Sign Up"><i class="fa fa-lg fa-edit"></i></a></li>
    </ul>

  </div>
</div>
<div class="wrapper row1">
  <header id="header" class="hoc clear">
  <div id="logo" class="fl_left">
      <h1 ><a href="index.php">SAARTHI</a></h1>
    </div>
    <div class="fl_right"><a class="btn" href="#">make a donation</a></div>
  </header>
</div>
<div class="bgded" style="background-image:url('images/demo/backgrounds/01.png');">

  <div class="wrapper row2">
    <nav id="mainav" class="hoc clear">

    <ul class="clear">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="collaboration.html">Collaborations</a></li>
        <li><a href="about.html">About Us</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php">Register</a></li>
      </ul>
        <!-- <li class="active"><a class="drop" href="#">Pages</a>
          <ul>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="full-width.html">Full Width</a></li>
            <li><a href="sidebar-left.html">Sidebar Left</a></li>
            <li><a href="sidebar-right.html">Sidebar Right</a></li>
            <li class="active"><a href="basic-grid.html">Basic Grid</a></li>
          </ul>
        </li> -->
        <!-- <li><a class="drop" href="#">Dropdown</a>
          <ul>
            <li><a href="#">Level 2</a></li>
            <li><a class="drop" href="#">Level 2 + Drop</a>
              <ul>
                <li><a href="#">Level 3</a></li>
                <li><a href="#">Level 3</a></li>
                <li><a href="#">Level 3</a></li>
              </ul>
            </li>
            <li><a href="#">Level 2</a></li>
          </ul>
        </li> -->
        <!-- <li><a href="#">Link Text</a></li>
        <li><a href="#">Link Text</a></li>
        <li><a href="#">Link Text</a></li> -->
        
      </ul>

    </nav>
  </div>

  <div class="wrapper overlay">
    <div id="breadcrumb" class="hoc clear">

      <ul>
        <li><a href="#">HOME</a></li>
        <li><a href="#">NGO PROFILE</a></li><BR><BR>
      </ul>
      <h5>welcome</h5>
    </div>
  </div>

</div>
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
        <section class=" clear">


            <div class="group latest">

                <article >
                    <figure><a href="#"><img src="images/demo/ngo3.gif" alt=""></a>
                    <figcaption>
                        <time datetime="2045-04-05T08:15+00:00"><strong>05</strong> <em>Apr</em></time>
                    </figcaption>
                    </figure>
                    <div class="txtwrap">
                    <h4 class="heading">HELLO NGO</h4>

                    <p>We value the trust our donors place in us. Our partner nonprofits are thoroughly checked to ensure credibility of operations. We also ensure that your money is put to the right use by conducting periodic visits to the end beneficiaries of the donations. GiveAssured is our seal of trust built over 18 years of operations</p>

                    </div>
                </article>

            </div>


            <div class="clear"></div>

        </section><br><br>
        <div class="one_half first">
            <section class="  clear">
                <div class="group latest">
                    <article >
                        <div class="txtwrap">
                        <center><h2 class="heading"><a href="respngoevent.php">NGO EVENT >></a></h2></center>
                        <p style="font-family:roboto;font-size:25px;text-align:center;"><?php print_r($event['accm']) ;?> Events Accomplished</p>
                        <p style="font-family:roboto;font-size:25px;text-align:center;"><?php print_r($event['going']) ;?>  Events Ongoing</p>
                        <a href="add-event.php"><button class="btn" style="margin-left : 35%">ADD EVENTS</button></a>
                        </div>
                    </article>
                </div>
                <div class="clear"></div>
            </section>
        </div>
        <div class="one_half">
        <section class="  clear">
                <div class="group latest">
                    <article >
                        <div class="txtwrap">
                        <center><h2 class="heading"><a href="respngodonation.php">NGO DONATION >></a></h2></center>
                        <p style="font-family:roboto;font-size:25px;text-align:center;"><?php print_r($donations['accm']) ;?> Donations Accomplished</p>
                        <p style="font-family:roboto;font-size:25px;text-align:center;"><?php print_r($donations['going']) ;?> Donations Ongoing</p>
                        <a href="add-donation.php"><button class="btn" style="margin-left : 32%" >ADD DONATIONS</button></a>
                        </div>
                    </article>
                </div>
                <div class="clear"></div>
            </section>
        </div>
      <!-- ################################################################################################ -->
    </div>
      <!-- ################################################################################################ -->


    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>

  </main>
</div>
<div class="wrapper row4">
  <footer id="footer" class="hoc clear">
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
  </footer>
</div>
<div class="wrapper row5">
  <div id="copyright" class="hoc clear">
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
  </div>
</div>
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>
