function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}


function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}


function deals_show(type,n){
  var left = document.getElementById("dealsleftcolumn");
  var right = document.getElementById("dealsrightcolumn");
  var row = document.getElementById("dealsrow");
  left.innerHTML="";
  right.innerHTML="";
  row.style.overflow="auto";
  row.style.background="#2d4059";
  for(var i=0 ; i<n ; i++){
    if((i%2) === 0){
     left.innerHTML+="<div class=\"card\" > <img src=\"Images/"+type+(i+1)+".png\" style=\"height:100%;background-color:white;\" > </div>";
    }else{
     right.innerHTML+="<div class=\"card\" > <img src=\"Images/"+type+(i+1)+".png\" style=\"height:100%; background-color:white;\" > </div>";   
    }
  }

}


function cat_show(type,n){
  var left = document.getElementById("catleftcolumn");
  var right = document.getElementById("catrightcolumn");
  var row = document.getElementById("catrow");
  row.style.overflow="auto";
  row.style.padding="5px";
  row.style.background="#2d4059";
  left.innerHTML="";
  right.innerHTML="";
  for(var i=0 ; i<n ; i++){
    if((i%2) === 0){
     left.innerHTML+="<div class=\"card\" > <img src=\"Images/"+type+(i+1)+".png\" style=\"height:70%; width:70%;background-color:white;\" > <p>Price=..... <br>Available </p> </div>";
    }else{
     right.innerHTML+="<div class=\"card\" > <img src=\"Images/"+type+(i+1)+".png\" style=\"height:70%; width:70%; background-color:white;\" > <p>Price=..... <br>Available </p> </div>";
    }
  }
}

function shopnow(){
  window.location ="Categories.php";
}

function opensignin(){
 window.location ="Register.php";
}


function signout(){
    document.getElementById("loginlbl").innerHTML= "" ;
    document.getElementById("loginlbl").style.visibility="hidden";
    document.getElementById("signinbtn").style.visibility="visible";
    document.getElementById("signoutbtn").style.visibility="hidden";
    sessionStorage.clear();
    terminatesession();
}
function Page_load(){
 
  if(sessionStorage.getItem("loggeduser") != null){
    document.getElementById("signinbtn").style.visibility="hidden";
    document.getElementById("loginlbl").innerHTML= sessionStorage.getItem("loggeduser")  ;
    document.getElementById("loginlbl").style.visibility="visible";
    document.getElementById("signoutbtn").style.visibility="visible";
  }
    
  
}