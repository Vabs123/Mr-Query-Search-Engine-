<html>
<head>
	<title>Search Engine</title>
</head>
<style>
body {
	background: #DDD;
	font-size: 15px;
}
#wrapper{
    position: relative;
    width: 100%;
    
    height: 100%;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}


.l2 a:link, a:visited {
    display: block;
    width: 200px;
    font-weight: bold;
    color: #FFFFFF;
    background-color: gray;
   position: relative;
    padding: 10px;
    text-decoration: none;
    text-transform: uppercase;
}
.l2 a:hover, a:active {
    background-color: black;
}



/*#nav {
    line-height:30px;
    background-color:gray;
    height:568px;
    width:200px;
    float:left;
    padding:5px;	   
    border-style: outset;  
   text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue; 
       box-shadow: 1px 1px 25px black;
       border-radius: 5px;
}*/
 
#sec {
  border :2px solid black;
}

div.background
{
  background: url(Best-Nature-Views-HD-18.jpg);
  border: 2px solid black;
  height: 500px;
}

div.background1
{
  background-image: url(fix.jpg);
  border: 2px solid black;
  height: 500px;
}

div.background2
{
  background-image: url(vista-de-singapore-nocturna-full-screen-high-resolution-wallpaper-photos-free.jpg);
  border: 2px solid black;
  height: 500px;
}

div.transbox
{width: 1000px;
  height: 300px;
  margin: 30px;
  background-color: #ffffff;
  border: 1px solid black;
  opacity:0.5;
 
}
div.transbox p
{
  margin: 5%;
  font-weight: bold;
  color: #000000;
  font-size: 50px
}
#footer {
    background-color:#98bf21;
    color:white;
    clear:both;
    text-align:center;
   padding:0;	 
       text-shadow: 1px 1px 2px darkgreen, 0 0 25px green, 0 0 5px yellow;
border-style: outset;
box-shadow: 1px 1px 2px darkgreen, 0 0 25px yellow, 0 0 5px green;
border-radius: 5px;
}
#header {
  position: fixed;

    background-color:transparent;
    color:white;
    font-size:40px;
    text-align:center;
    padding:1px;
    font-variant: small-caps;
    font-family: Arial, Helvetica, sans-serif;
    border-style: hidden;
     
     
}

#wrap {
  margin: 50px 100px;
  display: inline-block;
  position: relative;
  height: 60px;
  float: right;
  padding: 0;
  position: relative;
}

input[type="text"] {
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
  width: 0px;
  position: absolute;
  top: 0;
  right: 0;
  background: none;
  z-index: 3;
  transition: width .4s cubic-bezier(0.000, 0.795, 0.000, 1.000);
  cursor: pointer;
}

input[type="text"]:hover {
  border-bottom: 1px solid white;
  width: 700px;
  z-index: 1000;
  border-bottom: 1px solid #BBB;
  cursor: text;
}

input[type="text"]:focus {
  width: 700px;
  z-index: 1000;
  border-bottom: 1px solid #BBB;
  cursor: text;
}
input[type="submit"] {
  height: 67px;
  width: 63px;
  display: inline-block;
  color:red;
  float: right;
  background: url(download.png) center center no-repeat;
  text-indent: -10000px;
  border: none;
  position: absolute;
  top: 0;
  right: 0;
  z-index: 2;
  cursor: pointer;
  opacity: 0.4;
  cursor: pointer;
  transition: opacity .4s ease;
}

input[type="submit"]:hover {
  opacity: 1.8;
}

#container {
  z-index: -1000;
  position:absolute;
  height:100%;
  width:100%;
  top: 0px;
    left: 0px;
    right: 0px;
    bottom: 0px;
text-shadow: 1px 1px 2px black, 0 0 250px blue, 0 0 5px darkblue;
}
#container img {
  
   z-index: -1000;
  position:absolute;
  height:100%;
  width:100%;
  top: 0px;
    left: 0px;
    right: 0px;
    bottom: 0px;
}

@-webkit-keyframes imgFade {
 0% {
   opacity:1;
 }
 17% {
   opacity:1;
 }
 25% {
   opacity:0;
 }
 92% {
   opacity:0;
 }
 100% {
   opacity:1;
 }
}



#container img {
  -webkit-animation-name: imgFade;
  -webkit-animation-timing-function: ease-in-out;
  -webkit-animation-iteration-count: infinite;
  -webkit-animation-duration: 16s;

  
}
#container img:nth-of-type(1) {
  -webkit-animation-delay: 12s;
  
}
#container img:nth-of-type(2) {
  -webkit-animation-delay: 8s;
  
}
#container img:nth-of-type(3) {
  -webkit-animation-delay: 4s;
  
}
#container img:nth-of-type(4) {
  -webkit-animation-delay: 0;
 
}



</style>
<body>
<div id="container">
    <img src="1.jpg">
    <img src="2.jpg">
    <img src="3.jpg">
    <img src="4.jpg">
</div>
<div id = "wrapper">

	<!--<div id="footer" class = "l1">
<ul>
  <li><a href="www.jiit.ac.in">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>
</div>-->




	<div id="header">
<h1>Mr. Query</h1>
</div>
<!--<div id="nav" class = "l2">
<ul>
  <li><a href="www.jiit.ac.in">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>
</div>-->
<pre>







</pre>
	<div id="wrap">
  <form action="result.php" autocomplete="on">
  <input id="search" name="search" type="text" placeholder="What're we looking for ?"><input id="search_submit" value="Rechercher" type="submit">
  </form>
</div>
<pre><br>
<br>
<br>
<br>

<!--<img src = "earth_night.jpg" width = "1125px" height="400">-->
<br>
<br>
<hr>
<br>
<br>
</pre>
 <div class = "l2">
<div class="background2">
<div class="transbox">
<p><h1>Top Destination!!!</h1></p>
<ul>
 <li><a href="http://wikitravel.org/en/Milan">Milan</a></li>
 <li><a href="http://wikitravel.org/en/Havana">Havana</a></li>
 <li><a href="http://wikitravel.org/en/Kotor">Kotor</a></li>
 <li><a href="http://wikitravel.org/en/Singapore">Singapore</a></li>
 <li><a href="http://wikitravel.org/en/Rocky_Mountains_(United_States_of_America)">Rocky Mountains</a></li>
</ul>
</div>
</div>
</div>
<div class="background">
<div class="transbox">
<p><h1>Picture Of The Day!!!</h1></p>
</div>
</div>

<div class="background1">
<div class="transbox">
  <div class = "l2">
<p><h1>Top Hikes!!!</h1></p>
<ul>
  <li><a href="http://wikitravel.org/en/Inca_Trail">Inca Trail</a></li>
  <li><a href="http://wikitravel.org/en/Appalachian_Trail">Appalachian</a></li>
  <li><a href="http://wikitravel.org/en/Mount_Kilimanjaro">Mount Kilimanjaro</a></li>
  <li><a href="http://wikitravel.org/en/Everest_Base_Camp_Trek">Everest Base Camp</a></li>
  <li><a href="http://wikitravel.org/en/Grand_Canyon#Do">Grand Canyon</a></li>
</ul>
</div>
</div>
</div>

</div>

</body>
</html>