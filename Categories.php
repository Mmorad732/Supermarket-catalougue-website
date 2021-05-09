<!DOCTYPTE html>
<html>

   <head>
    <title> Categories </title>
    <link rel="stylesheet" href="css/mystylesheet.css">
    <script >
    sessionStorage.setItem("loggeduser", '<?php session_start();  echo $_SESSION["loggeduser"];?>');
    function terminatesession(){
        <?php
        session_unset();
        session_destroy()
        ?>
        
    }
    </script>
    <script src="js/javascript.js"></script>
   </head>


 <body onload="Page_load()">
    
    <div id="header">
          <div id="logo">
         <a href="index.php">    <img src = "Images/logo.png" >  </a> 
          </div>
         <div id="signin"> 
          <input type="button" onclick="opensignin()" value="Sign in" id="signinbtn"> 
          <input type="button" onclick="signout()" value="Sign out" id="signoutbtn"> 
          <label id="loginlbl"></label>
           </div>
           <div id="floatingMenu">
          <img src="Images/menuicon.png" onclick="openNav()">
          </div>
           <div id ="search">
            <input type="submit" value="Search">
           <input type="text" name="Usersearch" placeholder ="Search here">
          </div>
          <div id="mySidenav" class="sidenav">
                <a class="closebtn" onclick="closeNav()">&times;</a>
            	  <a href="index.php">Home</a>
                <a href="Dealspage.php">Deals</a>
                <a href="About us.php">About us</a>
                <a href="Contact us.php">Contact us</a>
          </div>
       
   </div>
   
   <div id ="menu">
         <ul>
	              <li><a href="index.php">Home</a></li>
                <li><a href="Dealspage.php">Deals</a></li>
                <li><a href="About us.php">About us</a></li>
                <li><a href="Contact us.php">Contact us</a></li>
		
         </ul>
      
   </div>
   
       <div id ="Categories">
        <div id ="Cat_menu">
         <ul>
                <li onclick="cat_show('grocery',3)" id="grocery">Grocery</li>
                <li onclick="cat_show('dairy',1)" id="dairy">Dairy</li>
	              <li>Beverages</li>
                <li>Condiments</li>
                <li>Snacks</li>
                <li>Paper</li>
                <li>Pets food</li>
                <li>Cleaning tools</li>
                <li>Electronics</li>
          </ul>
        </div>
         <div id="catrow" class="row">
                  <div id="catleftcolumn" class="leftcolumn">
                  </div>
                  <div id="catrightcolumn" class="rightcolumn">
                  </div>
               </div> 
   </div>
  
 
 <div id="ffooter">
       <div id="linklogos">
       <a href="https://www.facebook.com/kazyonegypt/"><img src = "Images/facebooklogo.png"></a>
       </div>
       <div id ="hotline">
       <p>19609
       <img src= "Images/hotlineicon.png">
       </p>
       </div>
      
</div> 







 </body>








</html>
