<!DOCTYPTE html>
<html>

   <head>
    <title> Contact us </title>
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
                <a href="Categories.php">Categories</a>
                <a href="About us.php">About us</a>
          </div>

          
          
   </div>

   <div id ="menu">
         <ul>
	             	<li><a href="index.php">Home</a></li>
                <li><a href="Dealspage.php">Deals</a></li>
                <li><a href="Categories.php">Categories</a></li>
                <li><a href="About us.php">About us</a></li>
               
		
         </ul>
      
   </div>
 



  <div class="row">   
        <div  class="leftcolumn">
           <div style="  border: 2px solid #ffa45b; height:100%; width:100%;" class ="card">
             <img src="Images/branch1.jpg" style=" height:60%;">
               
                <h4>Branch 1</h4>
                <p>Address ..... <br> telephone...... <br></p>
         </div>
          <div style="  border: 2px solid #ffa45b; height:100%; width:100%;" class ="card">
             <img src="Images/branch3.jpg" style=" height:60%;" >
           
              <h4>Branch 3</h4>
              <p>Address ..... <br> telephone...... <br></p>
          
           </div>
         </div>
            <div  class="rightcolumn">         
            <div style=" border: 2px solid #ffa45b; height:100%; width:100%;" class ="card">
              <img src="Images/branch2.jpg" style=" height:60%;" >
              
                <h4>Branch 2</h4>
                <p>Address ..... <br> telephone...... <br></p>
       
                
          </div>
           <div style="  border: 2px solid #ffa45b;  height:100%; width:100%;" class ="card">  
          <img src="Images/branch4.jpg" style=" height:60%;" >
            
               <h4>Branch 4</h4>
               <p>Address ..... <br> telephone...... <br></p>
           
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
