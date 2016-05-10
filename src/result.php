<html>
<head>
    <title>Search Engine</title>
</head>
<style>

body {
    background: #DDD;
    font-size: 15px;
}

#entire {
    display: none;
    position: fixed;
    background-color:       #000080;
    opacity: 0.6;
    width:100%;
    height: 100%;
    z-index: 1000;
    top: 0px;
    left: 0px;
    right: 0px;
    bottom: 0px;
}

#window {
    display: none;
    width: 400px;
    height: 500px;
    position: fixed;
    top: 4%;
   left: 34%;
    background-color: #DDD;
    opacity: 1;
    text-align: center;
    z-index: 1000;
     border-style: ridge;
    
}

#window1 {
  z-index: 1000;
 border-style: ridge;
  
    display: none;
    width: 400px;
    height: 500px;
    position: fixed;
    top: 4%;
   left: 34%;
    background-color: #DDD;
    opacity: 1;
    text-align: center;
}

#window2 {
  z-index: 1000;
 border-style: ridge;
    
    display: none;
    width: 400px;
    height: 500px;
    position: fixed;
    top: 4%;
   left: 34%;
    background-color: #DDD;
    opacity: 1;
    text-align: center;
}

#window3 {
  z-index: 1000;
   border-style: ridge;
   

    display: none;
    width: 400px;
    height: 500px;
    position: fixed;
    top: 4%;
   left: 34%;
    background-color: #DDD;
    opacity: 1;
    text-align: center;
}


#toper {

    position:relative;
    top: 0%;
    width: 100%;
    background-color: white;
    margin-bottom: 10px;
    height: 52px;
    padding: 0px;
    border-style: hidden;
    text-align: center;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

.l1 li {
    float: left;
}

.l1 a:link, a:visited {
    border-style: hidden;
    display: block;
    width: 120px;
    height: 40px;
    font-weight: bold;
    padding-top: 12px;
    padding-bottom: 0px;
    color: grey;
    background-color: white;
    text-align: center;
    text-decoration: none;
    text-transform: uppercase;
}
.l1 a:hover, a:active {
    background-color: #DDD;
}


.l2 li {
    float: right;
}

.l2 a:link, a:visited {
    border-style: hidden;
    display: block;
    width: 120px;
    height: 40px;
    font-weight: bold;
    padding-top: 12px;
    padding-bottom: 0px;
    color: grey;
    background-color: white;
    text-align: center;
    text-decoration: none;
    text-transform: uppercase;
}
.l2 a:hover, a:active {
    background-color: #DDD;
}


#header {
   

    background-color: white;
    position:fixed;
    margin:0;
    padding: 5px;
    
    height: 100px;
    width: 100%;
   z-index: 1000;
    border-style: ridge;
    box-shadow: 10px 10px 5px 10px grey;
}
.pq h1 {position:fixed; right:1000px;}

.pr img {
    display: inline;
    position: fixed;
    left:12px;
    height: 90px;
    width: 200px;
}
.pr div {
display: inline;
    position: fixed;
    width: 300px;
    height:70px
}

#section {
  background-color: white;
    position:relative;
    margin:0;
    padding: 5px;
    
    height: 1000px;
    width: 100%;
   /* z-index: 1000px;*/
    border-style: ridge;
    box-shadow: 10px 10px 5px 10px grey;
}
    
    
    
#wrapper{
    position: absolute;
    width: 100%;
    
    height: 1000px;
}



.i1 input[type="text"] {
  height: 60px;
  font-size: 55px;
  display: inline-block;
  font-family: "Lato";
  font-weight: 100;
  border: none;
  outline: none;
  color: #555;
  padding: 3px;
  padding-right: 60px;
  position: fixed;
  
  right: 0;
  background: none;
  width: 700px;
  z-index: 500;
  border-bottom: 1px solid #BBB;
  cursor: text;
}

.i1 input[type="text"]:focus:hover {
 
}

.i1 input[type="text"]:focus {
  
}
.i1 input[type="submit"] {
  height: 67px;
  width: 63px;
  display: inline-block;
  color:red;
  float: right;
  background: url(download.png) center center no-repeat;
  text-indent: -10000px;
  border: none;
  position: fixed;
  
  right: 0;
  z-index: 2;
  cursor: pointer;
  opacity: 0.4;
  cursor: pointer;
  transition: opacity .4s ease;
}

.i1 input[type="submit"]:hover {
  opacity: 1.8;
}

.p1 p{
  position: relative;
  top:-10px;
  right: 10px;
  float: right;
  cursor: pointer;
  padding: 3px;
 /* background-color: red;*/ 
}


.i2 input[type="text"] {
  height: 40px;
  font-size: 35px;
  font-family: "Lato";
  font-weight: 100;
  border: none;
  outline: none;
  color: #555;
  padding: 3px;
  padding-right: 60px;
  
  background: none;
  width: 300px;
  border-bottom: 1px solid #BBB;
  cursor: text;
}

.i2 input[type="password"] {
  height: 40px;
  font-size: 35px;
  font-family: "Lato";
  font-weight: 100;
  border: none;
  outline: none;
  color: #555;
  padding: 3px;
  padding-right: 60px;
  
  background: none;
  width: 300px;
  border-bottom: 1px solid #BBB;
  cursor: text;
}

.i3 select {
  height: 40px;
  font-size: 35px;
  font-family: "Lato";
  font-weight: 100;
  border: none;
  outline: none;
  color: #555;
  padding: 3px;
  padding-right: 60px;
  
  background: none;
  width: 300px;
  border-bottom: 1px solid #BBB;
  cursor: pointer;
}





</style>


<script>
function changer(){
    document.getElementById("entire").style.display = "block";
    document.getElementById("window").style.display = "block";

}

function changer3(){
    document.getElementById("entire").style.display = "block";
    document.getElementById("window3").style.display = "block";

}

function changer1(){
    document.getElementById("entire").style.display = "block";
    document.getElementById("window1").style.display = "block";

}

function changer2(){
    document.getElementById("entire").style.display = "block";
    document.getElementById("window2").style.display = "block";

}

function closer(){
    document.getElementById("entire").style.display = "none";
    document.getElementById("window").style.display = "none";
}

function closer3(){
    document.getElementById("entire").style.display = "none";
    document.getElementById("window3").style.display = "none";
}

function closer1(){
    document.getElementById("entire").style.display = "none";
    document.getElementById("window1").style.display = "none";
}

function closer2(){
    document.getElementById("entire").style.display = "none";
    document.getElementById("window2").style.display = "none";
}



//var nr = /^[A-Za-z0-9 ]{3,20}$/;
//var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/;
//var ck_username = /^[A-Za-z0-9_]{1,20}$/;
//var ck_password =  /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;
var nr = /^[a-zA-Z ]{2,30}$/;
var er = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/;
var ru = /^[A-Za-z0-9_]{1,20}$/;
var pr = /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;
function vali()
{
    
     var n =  document.forms["myForm"]["Name"];

    if (!nr.test(n.value)) {
         alert("Name must consists of alphabets and spaces");
        return false;
    }
 var u =  document.forms["myForm"]["user"];

    if (!ru.test(u.value)) {
        alert("username must be correct");
        return false;
    }
    var e =  document.forms["myForm"]["email"];

    if (!er.test(e.value)) {
         alert("email must be right");
        return false;
    }
     var p =  document.forms["myForm"]["password"];

    if (!pr.test(p.value)) {
         alert("Enter valid password");
        return false;
    } 
  


}






</script>


</head>
<body>
    <div id = "wrapper">
<div id="toper" class = "l1">
<ul>
  <li><a href="http://localhost/phpcodes/">Home</a></li>
  <li><a href="#" onclick = "changer1()">Hotels</a></li>
  <li><a href="#" onclick = "changer2()">Favourities</a></li>
  <li><a href="#" >Contact</a></li>
  <div class = "l2">
    <ul>
  <li><a href="#" onclick = "changer()">Sign up</a></li>
  <li><a href="#" onclick = "changer3()">login</a></li>
</ul>
</ul>
</div>

<div id="header" class="pq"><div class="pr"><div class="i1">
  <img src="aaaa.jpg" >
    <h1 >Mr QuEry</h1>
     <form action="result.php" autocomplete="on">
  <input id="search" name="search" type="text" placeholder="What're we looking for ?"><input id="search_submit" value="Rechercher" type="submit">
  
    </form>
  </div>
</div>
    </div>
   
 
<pre>







</pre>
<div id = "section">
<?php
    mysql_connect("localhost", "root","") or die(mysql_error());
    mysql_select_db("searchbox") or die(mysql_error());
    if(isset($_GET['search'])){
    $clean = mysql_real_escape_string($_GET['search']);
    if(preg_match("/^([a-zA-Z ]*)?adventure.([a-zA-Z ]*)?|([a-zA-Z ]*)?adventure$/",$clean)){
      $clean = 'adventure';}
      if(preg_match("/^([a-zA-Z ]*)?attraction.([a-zA-Z ]*)?|([a-zA-Z ]*)?attraction$/",$clean)){
      $clean = 'attraction';}
      if(preg_match("/^([a-zA-Z ]*)?beach.([a-zA-Z ]*)?|([a-zA-Z ]*)?beach$/",$clean)){
      $clean = 'beach';}
      if(preg_match("/^([a-zA-Z ]*)?destination.([a-zA-Z ]*)?|([a-zA-Z ]*)?destination$/",$clean)){
      $clean = 'destination';}
      if(preg_match("/^([a-zA-Z ]*)?hilly.([a-zA-Z ]*)?|([a-zA-Z ]*)?hilly$/",$clean)){
      $clean = 'hilly';}
      if(preg_match("/^([a-zA-Z ]*)?island.([a-zA-Z ]*)?|([a-zA-Z ]*)?island$/",$clean)){
      $clean = 'island';}
      if(preg_match("/^([a-zA-Z ]*)?landmark.([a-zA-Z ]*)?|([a-zA-Z ]*)?landmark$/",$clean)){
      $clean = 'landmark';}
      if(preg_match("/^([a-zA-Z ]*)?zoo.([a-zA-Z ]*)?|([a-zA-Z ]*)?zoo$/",$clean)){
      $clean = 'zoo';}
    $hello = mysql_query("SELECT * FROM $clean") or die(mysql_error());
    if(mysql_num_rows($hello) >= 1) {
        while($i = mysql_fetch_assoc($hello)){
        	echo '<a href ="'.$i['url'].'">'.$i['title'].'</a><p>'.$i['description'].'</p>';
        }
    }
    else{
    	echo "No results found,sorry :(";
    }}
?>
</div>

 <div id = "entire">
       
    </div>

     <div id = "window" class="p1">
      <div class = "i2">
         <p onclick = "closer()">x</p>
         <pre>

         </pre>
         <h1>SIGN UP</h1>
<p>
  <pre>

  </pre>
         <form method = "post" action = "log.php" name = "myForm"
         onsubmit="return vali()">
          <fieldset>
          Name:<input type = "text" name = "Name" required><br><br>
          User:<input type = "text" name = "user" required><br><br>
          E-mail:<input type = "text" name = "email" required><br><br>
          Password:<input type = "password" name = "password" required><br><br>
         <input type = "submit" value = "Sign Up">
         </fieldset>
         </form>
</p>
</div>
        </div>

 <div id = "window1" class="p1">
   <div class = "i3">
        <div class = "i2">
 <p onclick = "closer1()">x</p>

<marquee><h1>Looking For A Hotel !!!  </h1></marquee>
<br>
<p><ul>
  <li>Step 1:Enter The City.</li>
  <li>Step 2:Enter The Country.</li>
  <li>Step 3:Enter The Destination type.</li>
  <li>Vollaa !! You Will Be Provided WithThe List Of Hotels</li>
</ul>
<pre>

</pre>
  
  <form method = "post" action="hotel.php">
    <fieldset>
  Type:<select name="Hotels" required>
    <option value="adventure">Adventure</option>
    <option value="attraction">Attraction</option>
    <option value="beach">Beach</option>
    <option value="destination">Destination</option>
     <option value="hilly">Hilly</option>
    <option value="island">Island</option>
    <option value="landmark">Landmark</option>
    <option value="zoo">Zoo</option>
  </select><br><br>
  City:<input type = "text" name = "city"><br><br>
 Country:<input type = "text" name = "country"><br><br>

  <br><br>
  <input type="submit" value = "Find" name = "Find">
</fieldset>
</form>
</div>
</div>
        </div>

         <div id = "window2" class="p1">
       <div class = "i3">
        <div class = "i2">
 <p onclick = "closer2()">x</p>
 <marquee><h3>MAKE A WHISHLIST OF YOUR DREAM PLACE HERE</h3></marquee>
 <pre>


 </pre>
  <form action="fav.php" method = "post">
    <fieldset>
  Type:<select name="type" required>
    <option value="adventure">Adventure</option>
    <option value="attraction">Attraction</option>
    <option value="beach">Beach</option>
    <option value="destination">Destination</option>
     <option value="hilly">Hilly</option>
    <option value="island">Island</option>
    <option value="landmark">Landmark</option>
    <option value="zoo">Zoo</option>
  </select><br><br>
 Country:<input type = "text" name = "country" required><br><br>

  <br><br>
  <input type="submit" value = "Add" name="Add">
</fieldset>
</form>
</div>
        </div>
</div>



         <div id = "window3" class="p1">
      <div class = "i2">
         <p onclick = "closer3()">x</p>
         <pre>

         </pre>
         <h1>LOGIN</h1>
<p>
  <pre>

  </pre>
         <form method = "post" action = "check.php">
          <fieldset>
          
          User:<input type = "text" name = "user" required><br><br>
          
          Password:<input type = "password" name = "password" required><br><br>
         <input type = "submit" value = "Sign Up">
         </fieldset>
         </form>
</p>
</div>
        </div>
</div>
</body>
</html>