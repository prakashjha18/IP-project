  <?php
  require_once("pages/includes/functions.php");
  $vol=getalldonors();
  // echo "<pre>";
  // print_r($vol);
  // exit;
  ?>
  <html>
      <head>
          <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <link rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
          <link rel="stylesheet" href="vendors/datatables/datatables.min.css">
          <link rel="stylesheet" href="vendors/datatables/plugins/bootstrap/datatables.bootstrap.css"> -->
          <link rel="stylesheet" href="header.css">
          <style>
#table_t {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#table_t td, #table_t th {
  border: 1px solid #ddd;
  padding: 8px;
}

#table_t tr:nth-child(even){background-color: #f2f2f2;}

#table_t tr:hover {background-color: #ddd;}

#table_t th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #fda401;
  color: white;
}
</style>
      </head>
      <body>
          <div class="topnav" id="myTopnav">
    <span class="logo">DASHBOARD</span>
    
    <a href="index.php" class="pull-right">Logout</a>

    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
   
    <div class="sidenav">
    <div class="top-wala">
    <a href="header.php">View Volunteer</a>
    <a href="viewdonor.php">View Donor</a>
    <a href="viewngo.php">View NGO</a>
    <!-- <a href="#">My Profile</a> -->
  </div>
  </div>
  <!-- <table class="table table-striped table-hover table-bordered" style="margin-top:50px;margin-left:200px;">
      <thead>
          <tr>
              
              <th style="width:150px;">VOLUNTEER NAME</th>
              <th style="width:150px;">VOLUNTEER PHONE</th>
              <th style="width:200px;">Delete </th>
              
              
          </tr>
      </thead>

  </table> -->
 <div class="container" style="
    margin-left: 0px;
">
  <table id="table_t" style="margin-top:50px;margin-left:220px;width: 300px">
    <thead>
      <tr>
        <!-- <th scope="col">#</th> -->
        <th scope="col">Name</th>
        <th scope="col">Email</th>
         <!-- <th scope="col">View</th>
        <th scope="col">Delete</th> -->
       
      </tr>
    </thead>
    <tbody>
      <?php foreach ($vol as $key => $value) {
        ;?>
        <tr>
          <!-- <th scope="row">1</th> -->
          <td><?php echo $value[1] ;?></td>
          <td><?php echo $value[2] ;?></td>
          <!-- <td><i class="fa fa-eye" aria-hidden="true"></i></td>
          <td><i class="fa fa-trash" aria-hidden="true"></i></td> -->
        </tr>

        <?php
      } 
      ?>
      <!-- <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr> -->
    </tbody>
  </table>
</div>
</body>
  <!-- Use any element to open the sidenav -->
  <span onclick="openNav()">open</span>
      
      <script src="datatable.js"></script>
      <script src="vendors/datatables/datatables.min.js"></script>
      <script src="vendors/datatables/plugins/bootstrap/datatables.bootstrap.js"></script>
      <script>
      /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
  function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
          x.className += " responsive";
      } else {
          x.className = "topnav";
      }
  }
         
          
      </script>
      
  </html>