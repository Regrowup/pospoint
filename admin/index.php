<?php 
session_start(); 
if(!isset($_SESSION['valid'])) {
	header('Location: /login.php');
}
?>

<?php include 'nav.php';?>
      
     <!-- Icon Bar (Sidebar - hidden on small screens) -->
<div class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->

  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>ABOUT</p>
  </a>
  <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>PHOTOS</p>
  </a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>CONTACT</p>
  </a>
</div>
<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">

  </header>

 

   
  
 
    <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
   
  <!-- End footer -->
  </footer>

<!-- END PAGE CONTENT -->
</div>




  <!-- Header -->
  <header class="w3-container w3-center" style="padding-top:22px">
   
    <button>button1</button> &nbsp; <button>button2</button> &nbsp; <button>button3</button> &nbsp;<button>button4</button> <br>

  </header>
<br>
  <div class="w3-row-padding w3-margin-bottom">
    <div class="row">
    <button>button1</button> <br>
     <button>button2</button> <br>
     <button>button3</button> <br>
     <button>button4</button> <br>
     <button>button5</button> 

     
      <table class="table table-bordered">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
      <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
      <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
      <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
      <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
    </tbody>
  </table>

      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
      <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>23</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Leads</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>50</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Customers</h4>
      </div>
    </div>
  </div>

  <hr>
  <div class="w3-container">
    <h5>General Stats</h5>
    <p>Leads</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-green" style="width:25%">+25%</div>
    </div>

    <p>Customers</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-orange" style="width:50%">50%</div>
    </div>

    <p>Sales</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-red" style="width:75%">75%</div>
    </div>
  </div>
  <hr>

  
  

  
  
    
      
           
          <?php include 'footer.php';?>
         
    