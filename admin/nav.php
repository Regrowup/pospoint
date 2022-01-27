<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Pospoint</title>
        <meta charset="utf-8">
        <link href="/styles/multiselect.css" rel="stylesheet"/>
	<script src="multiselect.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


	
	
	
	
<style>
 html, body {
                border: 0;
                padding: 0;
                margin: 0;
                height: 100%;
            }
 body {
                background: white;
                font-size: 16px;
                background-color: #ffffff; 
                font-family: Arial;
                font-size: 18px;
                padding: 0px;
            }
             .textarea {
               width: 70%;
               height: 150px;
               padding: 12px 20px;
               box-sizing: border-box;
               box-shadow: 0px 0px 18px rgba(0, 0, 0, 0.2);
               border: 2px solid #ccc;
               border-radius: 10px;
               background-color: #fff;
               resize: none;
            }
            .container {
                align-items: center;
                background-color: #ffffff;
                padding: 10px 10px 10px 10px;
                border-radius: 0px;
            }
              .row {
                display: -ms-flexbox; /* IE10 */
                display: flex;
                -ms-flex-wrap: wrap; /* IE10 */
                flex-wrap: wrap;
                margin: 0 -16px;
            }
              .col-25 {
                -ms-flex: 25%; /* IE10 */
                flex: 25%;
            }
            .col-10 {
                -ms-flex: 15%; /* IE10 */
                flex: 15%;
            }
            .col-50 {
                -ms-flex: 50%; /* IE10 */
                flex: 50%;
            }
             .col-75 {
                -ms-flex: 75%; /* IE10 */
                flex: 75%;
            }
            .col-25,
            .col-50,
            .col-75 {
                padding: 0 16px;
            }
            .table-responsive {
                border-collapse: collapse;
                border-spacing: 0;
                width: 60%;
                box-shadow: 0px 0px 18px rgba(0, 0, 0, 0.2);
                font-family: lato;
                position: relative;
                color: #333;
                border-radius: 10px;
            }
            .w3-bar{
                 box-shadow: 0px 0px 18px rgba(0, 0, 0, 0.2);
                 border-radius: 4px;
            }
             .w3-sidebar{
                 box-shadow: 0px 0px 18px rgba(0, 0, 0, 0.2);
                 border-radius: 10px;
                 border: 3px;  
            }
             .w3-red{
                
               color: #ff3333;
            }
            .table-responsive{
                -sm|-md|-lg|-xl
            }

            th, td {
                text-align: left;
                padding: 10px;
            }
            th:first-child, td:first-child {
                text-align: center;
            }
            tr:nth-child(even) {
                background-color:#ffffff
            }
             input[type=text] {
                width: 30%;
                margin-bottom: 20px;
                padding: 12px;
                border: 3px;
                border-radius: 1px;
                background: white;
                box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
                font-family: lato;
                position: relative;
                color: #333;
                border-radius: 7px;
            }
            .btn {
                background-color: red;
                width: 20%;
                padding: 12px;
                height: 50px;
                font-family: 'Roboto', sans-serif;
                font-size: 24pxpx;
                text-transform: uppercase;
                letter-spacing: 2.5px;
                font-weight: 500;
                color: #fff;
                border: 3px;
                border-radius: 10px;
                box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
                transition: all 0.3s ease 0s;
                cursor: pointer;
                outline: none;
            }
            
                .title{

                    font-weight: 100;
                    letter-spacing: 2.5px;
                    padding: 12px;
                    border-radius: 10px;
                    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
                    width: 100%;
                    padding: 5px 15px;
                    margin-top: 30px;
                    margin-bottom: 30px;
                }
                
            
            
            
            
    
    
    
    
</style>
<link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">  

<style>  
        * {  
  box-sizing: border-box;  
  font-family: 'Roboto', sans-serif;  
}  
body {  
  background: black;  
}  
.container {  
  width: 100%;  
  margin: 20px;  
  color:black;  
}  
.calc-body {  
  width: 275px;  
  margin: auto;  
  min-height: 400px;  
  border: solid 1px #3A4655;  
  box-shadow: 0 8px 50px -7px black;  
}  
.calc-screen {  
  background: #3A4655;  
  width: 100%;  
  height: 150px;  
  padding: 20px;  
}  
.calc-operation {  
  text-align: right;  
  color: #727B86;  
  font-size: 21px;  
  padding-bottom: 10px;  
  border-bottom: dotted 1px;  
}  
.calc-typed {  
  margin-top: 20px;  
  font-size: 45px;  
  text-align: right;  
  color: #fff;  
}  
.calc-button-row {  
  width: 100%;  
  background: #3C4857;  
}  
.button {  
  width: 25%;  
  background: #425062;  
  color: #fff;  
  padding: 20px;  
  display: inline-block;  
  font-size: 25px;  
  text-align: center;  
  vertical-align: middle;  
  margin-right: -4px;  
  border-right: solid 2px #3C4857;  
  border-bottom: solid 2px #3C4857;  
  transition: all 0.2s ease-in-out;  
}  
.button.l {  
  color: #AEB3BA;  
  background: #404D5E;  
}  
.button.c {  
  color: #D95D4E;  
  background: #404D5E;  
}  
.button:hover {  
  background: #E0B612;  
  transform: rotate(5deg);  
}  
.button.c:hover {  
  background: #E0B612;  
  color: #fff;  
}  
.button.l:hover {  
  background: #E0B612;  
  color: #fff;  
}  
.blink-me {  
  color: #E0B612;  
}  
html {  
  height: 100vh;  
  display: flex;  
  align-items: center;  
  justify-content: center;  
  background-color: #2d3436;  
  background-image: linear-gradient(315deg, #2d3436 0%, #000000 74%);  
  font-family: 'Cookie', cursive;  
}  
.title:hover {  
  background: #E0B612;  
  color: #fff;  
}  
.title {  
margin-bottom: 10px;  
padding: 5px 0;  
font-size: 40px;  
font-weight: bold;  
text-align: center;  
color: #AEB3BA;  
font-family: 'Cookie', cursive;  
}  
input[type=button] {  
  width: 60px;  
  height: 60px;  
  float: left;  
  padding: 0;  
  margin: 5px;  
  box-sizing: border-box;  
  background: #ecedef;  
  border: none;  
  font-size: 30px;  
  line-height: 30px;  
  border-radius: 50%;  
  font-weight: 700;  
  color: #5E5858;  
  cursor: pointer;    
}  
input[type=text] {  
  width: 270px;  
  height: 60px;  
  float: left;  
  padding: 0;  
  box-sizing: border-box;  
  border: none;  
  background: none;  
  color: red;  
  text-align: right;  
  font-weight: 700;  
  font-size: 60px;  
  line-height: 60px;  
  margin: 0 25px;  
  }  
.calculator {  
  background-color: #c0c0c0;  
  box-shadow: 0px 0px 0px 10px #666;  
  border: 5px solid black;  
  border-radius: 10px;  
}     
</style>  
</head>
<body>
    

   
      
        <!-- Top container -->
        <div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
            <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
       
      
            <span class="w3-bar-item w3-right">Pospoint</span>
        </div>
        <div class="w3-sidebar w3-bar-block w3-card" style="width:30%;right:0;">
 
        

  <div class="container" >  
  <div class="calc-body">  
    <div class="calc-screen">  
      <div class="calc-operation"> 25 + 10 = </div>  
      <div class="calc-typed"> 35 <span class="blink-me"> _ </span> </div>  
    </div>  
    <div class="calc-button-row">  
      <div class="button c"> C </div>  
      <div class="button l"> ? </div>  
      <div class="button l"> % </div>  
      <div class="button l"> / </div>  
    </div>  
    <div class="calc-button-row">  
      <div class="button"> 7 </div>  
      <div class="button"> 8 </div>  
      <div class="button"> 9 </div>  
      <div class="button l"> x </div>  
    </div>  
    <div class="calc-button-row">  
      <div class="button"> 4 </div>  
      <div class="button"> 5 </div>  
      <div class="button"> 6 </div>  
      <div class="button l"> ? </div>  
    </div>  
    <div class="calc-button-row">  
      <div class="button"> 1 </div>  
      <div class="button"> 2 </div>  
      <div class="button"> 3 </div>  
      <div class="button l"> + </div>  
    </div>  
    <div class="calc-button-row">  
      <div class="button"> . </div>  
      <div class="button"> 0 </div>  
      <div class="button">  
        < </div>  
          <div class="button l"> = </div>  
      </div>  
    </div>  
  </div>  
 
</div>
        <!-- Sidebar/menu -->
        <nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:248px;" id="mySidebar"><br>
           
            <div class="w3-bar-block">
                <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>Close Menu</a>
                <div class="w3-container w3-row">
                <a href="/dashboard/home.php" class="w3-bar-item w3-button">Menu</a>
                <hr>
                <a href="#breakfast" class="w3-bar-item w3-button w3-padding">Breakfast</a>
                <hr>
                
                <a href="#main" class="w3-bar-item w3-button w3-padding">Main</a>
                <hr>
                
                <a href="#" class="w3-bar-item w3-button w3-padding">Cold Snacks</a>
               
                <hr>
                
                <a href="#" class="w3-bar-item w3-button w3-padding">Hot Snacks</a>
               
                <hr>
                
                <a href="#" class="w3-bar-item w3-button w3-padding">Salads</a>
               
                <hr>
                <a href="#" class="w3-bar-item w3-button w3-padding">Pasta</a>
                
                <hr>
                <a href="#" class="w3-bar-item w3-button w3-padding">Seafood</a>
                <hr>
                <a href="#" class="w3-bar-item w3-button w3-padding">Drinks</a>
                
                <hr>
            
                    <a href="#" class="w3-bar-item w3-button">Setting</a> 
                 <hr>
              
                <a href="/logout.php" class="w3-bar-item w3-button">Log Out</a>
                </div>
            </div>
        </nav>


        <!-- Overlay effect when opening sidebar on small screens -->
        <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>


        
        <!-- !PAGE CONTENT! -->
        <div class="w3-main" style="margin-left:320px;margin-top:43px;">
      
          
            
            
            