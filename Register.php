<!DOCTYPTE html>
<html>

<head>
<title> Registeration  </title>
<link rel="stylesheet" href="css/mystylesheet.css">
<script src="js/javascript.js"></script>
<script src="js/regjs.js"></script>
</head>
<body onload="Page_load()">
            <div id="header">
                    <div id="logo">
                          <a href="index.php">    <img src = "Images/logo.png" >  </a>
                    </div>
                    <div id="signin">

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
                            <a href ="index.php">Home</a>
                            <a href ="Dealspage.php">Deals</a>
                            <a href="Categories.php">Categories</a>
                            <a href="About us.php">About us</a>
                            <a href="Contact us.php">Contact us</a>
                    </div>

                    <div id ="menu">
                            <ul>
                            <li><a href ="index.php">Home</a></li>
                            <li><a href ="Dealspage.php">Deals</a></li>
                            <li><a href="Categories.php">Categories</a></li>
                            <li><a href="About us.php">About us</a></li>
                            <li><a href="Contact us.php">Contact us</a></li>

                            </ul>

                    </div>
            </div>

            <div id="signinbackground">

                    <?php if(isset($_GET['error'])){?>
                           <p class="error"> <?php echo $_GET['error']; ?> </p>
                        <?php } ?>



                    <div id="signindiv">
                            <form onsubmit="return signinvalidation()" method="post" action="Login_handler.php" name ="signinForm">
                                    <label id="emaillabel">Email</label>
                                    <input type="email" id="emailtf" name ="SIemail">
                                    <label id="passwordlabel">Password</label>
                                    <input type="password" id="passwordtf" name ="SIpassword">

                                    <input type="submit" id="submitbtn" value="Sign in" >


                            </form>


                    </div>
                    <div id="signupdiv">
                            <form onsubmit="return regvalidation()" method="post" action="Reg_handler.php" name ="regForm">
                                    <label id="fnlabel">First Name</label>
                                      <input type="text" id="fntf" name ="SUfn">
                                    <label id="lnlabel">Last Name</label>
                                      <input type="text" id="lntf" name ="SUln">
                                    <label id="emaillabel">Email</label>
                                      <input type="email" id="emailtf" name ="SUemail">
                                    <label id="passwordlabel">Password</label>
                                      <input type="password" id="passwordtf" name ="SUpassword">
                                    <label id="passwordlabel">re-Password</label>
                                      <input type="password" id="passwordtf" name ="SUrepassword">
                                    <input type="submit" id="submitbtn" value="Sign up" >

                            </form>


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

