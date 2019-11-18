<?php
  // require_once("pages/includes/functions.php");
  require_once("pages/includes/db.php");
  require_once("pages/includes/loginfunction.php");
  $vol=getalldonors();
  // echo "<pre>";
  // print_r($vol);
  // exit;
  require_once("pages/includes/db.php");


    // echo  $_SESSION['uname'] ;


?>

<!DOCTYPE html>


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
        <li><a href="index.php">Home</a></li>
        <li><a href="collaboration.html">Collaborations</a></li>
        <li><a href="about.html">About Us</a></li>

        <li><a href="pages/includes/logout.php">Logout</a></li>
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



            </div>


            <div class="clear"></div>

        </section><br><br>
        <div class="one_half first">

        </div>
        <div class="one_half">
        <section class="  clear">
                <div class="group latest">
                    <article >
                          <table align="center" style="padding : 10px">
                               <tr>
                               <td width='82' valign='top'><div align='center'>Name:</div></td>
                               <td width='165' valign='top'>
                                 <?php echo $_SESSION["uname"];?>
                                </td>
                             </tr>
                             <tr>
                               <td valign="top"><div align="center">User ID:</div></td>
                               <td valign="top">
                                <?php echo $_SESSION['uid'] ;?>
                               </td>
                             </tr>
                             <tr>
                               <td valign='top'><div align='center'>User type </div></td>
                               <td valign='top'><?php echo $_SESSION['role']; ?></td>
                             </tr>
                             <tr>
                               <td valign="top"><div align="center">User email:</div></td>
                               <td valign="top">
                               <?php echo $_SESSION['email'];?>
                               </td>
                               </tr>
                               <tr>
                               <td valign="top"><div align="center">User phone number:</div></td>
                               <td valign="top">
                               <?php echo $_SESSION['phone'];?>
                               </td>
                               </tr>

                               </table>

                               </div>
                           </table>
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

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>
