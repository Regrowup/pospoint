<!DOCTYPE html>
<html lang="en">
<title>Pospoint</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/mathjs/3.17.0/math.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif;}
.w3-sidebar {
  z-index: 3;
  width: 250px;
  top: 43px;
  bottom: 0;
  height: inherit;
}



.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
  text-align:center;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;

}

.sidenav a:hover{
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

</style>


<body>




<!-- Navbar -->

<!-- Sidebar -->
<nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
    <i class="fa fa-remove"></i>
  </a>
  <h4 class="w3-bar-item"><b>Food Categories</b></h4>
  <a class="w3-bar-item w3-button w3-hover-black" href="javascript:void(0)" onclick="openMenu(event, 'Breakfast');">Breakfast</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="javascript:void(0)" onclick="openMenu(event, 'Eat');" id="myLink">Eat</a>
   
  <a class="w3-bar-item w3-button w3-hover-black" href="javascript:void(0)" onclick="openMenu(event, 'Drinks');">Drink</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="javascript:void(0)" onclick="openMenu(event, 'Dinner');">Dinner</a>
  <hr>
  <a  href="/logout.php" class="btn">Logout</a>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main" style="margin-left:250px">

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
    <div class="w3-container" id="menu">
  <div class="w3-content" style="max-width:700px">
 
    
  
    <div class="w3-row w3-center w3-card w3-padding">
      <a href="javascript:void(0)" onclick="openMenu(event, 'Eat');" id="myLink">
        <div class="w3-col s6 tablink"></div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Drinks');">
        <div class="w3-col s6 tablink"></div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Dinner');">
        <div class="w3-col s6 tablink"></div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Breakfast');">
        <div class="w3-col s6 tablink"></div>
      </a>
      Our Menu
    </div>
    
    <div id="Dinner" class="w3-container menu w3-padding-64 w3-card">
      <p><img src="https://th.bing.com/th/id/OIP.ndYB8OMCNVGDtyRb2b2RWwHaHa?pid=ImgDet&rs=1" class="w3-card-4" alt="Menu Image" style="width:20%;height:20%;"></p>
      <h5>Bread Basdaasdaket</h5>
      <p><button class="w3-right">+Add</button></p>
      <p class="w3-text-grey">Assortment of fresh baked fruit breads and muffins 5.50</p>
      
    <hr>
    <p><img src="https://th.bing.com/th/id/R.e955ec5b228ed28672ab5b920c8a1d8a?rik=GJjurtbpuBjJaQ&pid=ImgRaw&r=0" class="w3-card-4" alt="Menu Image" style="width:20%;height:20%;"></p>
      <h5>Honey Almond Granola with Fruits</h5>
      <p><button class="w3-right">+Add</button></p>
      <p class="w3-text-grey">Natural cereal of honey toasted oats, raisins, almonds and dates 7.00</p><br>
      <hr>
      <h5>Belgian Waffle</h5>
      <p class="w3-text-grey">Vanilla flavored batter with malted flour 7.50</p><br>
    
      <h5>Scrambled eggs</h5>
      <p class="w3-text-grey">Scrambled eggs, roasted red pepper and garlic, with green onions 7.50</p><br>
    
      <h5>Blueberry Pancakes</h5>
      <p class="w3-text-grey">With syrup, butter and lots of berries 8.50</p>
    </div>
    <div id="Breakfast" class="w3-container menu w3-padding-64 w3-card">
      <h5>Bread Breafast</h5>
      <p class="w3-text-grey">Assortment of fresh baked fruit breads and muffins 5.50</p><br>
    
      <h5>Honey Almond Granola with Fruits</h5>
      <p class="w3-text-grey">Natural cereal of honey toasted oats, raisins, almonds and dates 7.00</p><br>
    
      <h5>Belgian Waffle</h5>
      <p class="w3-text-grey">Vanilla flavored batter with malted flour 7.50</p><br>
    
      <h5>Scrambled eggs</h5>
      <p class="w3-text-grey">Scrambled eggs, roasted red pepper and garlic, with green onions 7.50</p><br>
    
      <h5>Blueberry Pancakes</h5>
      <p class="w3-text-grey">With syrup, butter and lots of berries 8.50</p>
    </div>

    <div id="Eat" class="w3-container menu w3-padding-48 w3-card">
      <h5>Bread Basket</h5>
      <p class="w3-text-grey">Assortment of fresh baked fruit breads and muffins 5.50</p><br>
    
      <h5>Honey Almond Granola with Fruits</h5>
      <p class="w3-text-grey">Natural cereal of honey toasted oats, raisins, almonds and dates 7.00</p><br>
    
      <h5>Belgian Waffle</h5>
      <p class="w3-text-grey">Vanilla flavored batter with malted flour 7.50</p><br>
    
      <h5>Scrambled eggs</h5>
      <p class="w3-text-grey">Scrambled eggs, roasted red pepper and garlic, with green onions 7.50</p><br>
    
      <h5>Blueberry Pancakes</h5>
      <p class="w3-text-grey">With syrup, butter and lots of berries 8.50</p>
    </div>

    <div id="Drinks" class="w3-container menu w3-padding-48 w3-card">
      <h5>Coffee</h5>
      <p class="w3-text-grey">Regular coffee 2.50</p><br>
    
      <h5>Chocolato</h5>
      <p class="w3-text-grey">Chocolate espresso with milk 4.50</p><br>
    
      <h5>Corretto</h5>
      <p class="w3-text-grey">Whiskey and coffee 5.00</p><br>
    
      <h5>Iced tea</h5>
      <p class="w3-text-grey">Hot tea, except not hot 3.00</p><br>
    
      <h5>Soda</h5>
      <p class="w3-text-grey">Coke, Sprite, Fanta, etc. 2.50</p>
    </div>  
   
  </div>
</div>
    </div>
    <div class="w3-third  w3-right" style="margin-right:0%;">
    
      <div class="w3-border w3-padding-large w3-padding-64 w3-center" style="width:350px;height:300px;padding-right:0px;">
      <div class="table-responsive">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>#</th>
          <th>Item</th>
          <th>Qty</th>
          <th>Price</th>
          <th>Subtotal</th>
          
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Bread</td>
          <td>2</td>
          <td>35</td>
          <td>70</td>
          
        </tr>
        <tr>
        <td>1</td>
          <td>Coffee</td>
          <td>2</td>
          <td>35</td>
          <td>70</td>
          
        </tr>
      </tbody>
    </table>
  </div>
</div>
<div class="w3-border w3-padding-large w3-padding-64-large" style="width:350px;">
other
</div>
      <div class="w3-border w3-padding-large w3-padding-64-large" style="width:350px;">
     

        <label class="switch">
                <input type="checkbox">
                <span class="slider"></span>
            </label>
        <form>
            <input readonly id="display1" type="text" class="form-control text-right">
            <input readonly id="display2" type="text" class="form-control text-right">
        </form>

        <div class="d-flex justify-content-between button-row">
            <button id="left-parenthesis" type="button" class="operator-group">&#40;</button>
            <button id="right-parenthesis" type="button" class="operator-group">&#41;</button>
            <button id="square-root" type="button" class="operator-group">&#8730;</button>
            <button id="square" type="button" class="operator-group">&#120;&#178;</button>
        </div>

        <div class="d-flex justify-content-between button-row">
            <button id="clear" type="button">&#67;</button>
            <button id="backspace" type="button">&#9003;</button>
            <button id="ans" type="button" class="operand-group">&#65;&#110;&#115;</button>
            <button id="divide" type="button" class="operator-group">&#247;</button>
        </div>


        <div class="d-flex justify-content-between button-row">
            <button id="seven" type="button" class="operand-group">&#55;</button>
            <button id="eight" type="button" class="operand-group">&#56;</button>
            <button id="nine" type="button" class="operand-group">&#57;</button>
            <button id="multiply" type="button" class="operator-group">&#215;</button>
        </div>


        <div class="d-flex justify-content-between button-row">
            <button id="four" type="button" class="operand-group">&#52;</button>
            <button id="five" type="button" class="operand-group">&#53;</button>
            <button id="six" type="button" class="operand-group">&#54;</button>
            <button id="subtract" type="button" class="operator-group">&#8722;</button>
        </div>


        <div class="d-flex justify-content-between button-row">
            <button id="one" type="button" class="operand-group">&#49;</button>
            <button id="two" type="button" class="operand-group">&#50;</button>
            <button id="three" type="button" class="operand-group">&#51;</button>
            <button id="add" type="button" class="operator-group">&#43;</button>
        </div>

        <div class="d-flex justify-content-between button-row">
            <button id="percentage" type="button" class="operand-group">&#37;</button>
            <button id="zero" type="button" class="operand-group">&#48;</button>
            <button id="decimal" type="button" class="operand-group">&#46;</button>
            <button id="equal" type="button">&#61;</button>
        </div>

    </div>
     
     
    </div>
  </div>

  <!-- Pagination -->


  

<!-- END MAIN -->
</div>
<hr>
<br></br>
<!--
<div class="w3-center w3-padding-32 w3-bottom">
    <div class="w3-bar">
      <a class="w3-button w3-black" href="#">1</a>
      <a class="w3-button w3-hover-black" href="#">2</a>
      <a class="w3-button w3-hover-black" href="#">3</a>
      <a class="w3-button w3-hover-black" href="#">4</a>
      <a class="w3-button w3-hover-black" href="#">5</a>
      <a class="w3-button w3-hover-black" href="#">»</a>
    </div>
  </div>-->
  <script src="js/main.js" type="text/javascript"></script>
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36251023-1']);
        _gaq.push(['_setDomainName', 'jqueryscript.net']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>
<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-dark-grey";
}
document.getElementById("myLink").click();
</script>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>


</body>
</html>
