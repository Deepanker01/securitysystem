<html>
<head>
<link rel="stylesheet" href="css/leftbar.css">
<title> VIT SECURITY </title>
<style>
body{
	background-color: ;
	font-family: sans-serif;

}

#logo{
	position: absolute;
	width:150px;
	margin-top: 15px;
	margin-left: 10px;
}

#hea{
	background-color: #161329;
	padding: 30px;

	margin-left: -8px;
	margin-right: -8px;
	margin-top: -20px;
	color:white;
font-family: 'Lucida Casual', 'Comic Sans MS';
font-size: 25px;
}

#wrapper
{
border-color: black;
border-style: solid;
border-radius: 10px;
margin: 0 auto;
width: 800px;
margin-top: 40px;
margin-left: 400px;

}


#mainbut1

{
color: white;
font-weight: bold;
font-size: 1.1em;
width: 250px;
height: 50px;
border-radius: 20px;
margin-bottom: 50px;
margin-top: 80px;
margin-left: 280px;
background-color: #161329;
cursor: pointer;
transition: 0.3s ease-in;

-moz-transition: 0.3s ease-in;
-webkit-transition: 0.3s ease-in;

}
#mainbut1:hover
{
background-color:#3C3447;
width: 255px;
height: 53px;

}

#vit
{

	margin-bottom: -40px;

}
#leftbar
{
position:absolute;
margin-left:10px;

}

</style>
</head>
<body>
      	<img src="white vit.png" id="logo"/>

    	<h1 align="center" id="hea"> VIT SECURITY</h1>
	   
	   <div id="leftbar">
 <div class="large-2 columns hide-for-medium-down left-bar" style="overflow-y: hidden; outline: none;" tabindex="5000">
	       <div class="row">
		  <div class="large-12 columns">
		     <div class="top">
			<div class="row negative-margin">
			   <div class="large-12 columns center-element">
			      <a href="">
				
			      </a>
			   </div>
			</div>
			<div class="row negative-margin select-campus">
			   <div class="large-12 large-centered columns center-element">
			      <div class="row negative-margin">
				<div class="large-10 large-centered columns select-campus-column">
				   
				</div>
			      </div>
			   </div> 
			</div>
			<div class="row negative-margin left-bar-link-container">
			   <ul>
			      <div class="active">
				 <li><a href="index.html">Home</a></li>
			      </div>
			      <div>
				 <li class="has-dropdown "><div class="dropdown-header"><a href="gates.php">Entry</a></div>
				 <li class="has-dropdown "><div class="dropdown-header"><a href="backup.html">BackUp</a></div>

				    <ul class="dropdown">
				       <li><a href="Exceptional.php">Exceptional Library</a></li>
				       <li><a href="#">Our Team</a></li>
				       <li><a href="floor-plan.php">Floor Plan</a></li>
				       <li><a href="Work_hours.php">Working Hours</a></li>
				       <li><a href="Rules.php">Rules</a></li>
				    </ul>
				 </li>
			      </div>
			      <div>
				 <li><a href="#">History</a></li>
				 <ul class="dropdown">
				       <li><a href="type.html">Type</a></li>
				       <li><a href="date.html">Date</a></li>
				       <li><a href="name.html">Name</a></li>
				       <li><a href="block.html">Block</a></li>
				       
				    </ul>
			      </div>
			      <div>
				 <li><a href="Features.php">Contact Us</a></li>
				 <ul class="dropdown">
				       <li><a href="Exceptional.php">CTS</a></li>
				       <li><a href="#">Our team</a></li>
				   
				       
				    </ul>
			      </div>
			
			      </div>
			      <div>
				
			      </div>
			      <div>
				
			      </div>
			      <div>
			
			      </div>	
			   </ul>
			</div>
		     </div>
		    
		     </div>
		  </div>
	       </div>
	       </div>
		</div>
    	<div id = "wrapper">
		
      	<img src="head.jpg" id= "vit"/>
		
<a href="backup.php"><button id = "mainbut1"> BACK UP THE RECORD</button> </a>
<a href="test.php"><button id = "mainbut1"> GENERATE PDF</button> </a>

<?php
mysql_connect('localhost','root','');
mysql_select_db('security2');
$sql=mysql_query("SELECT * FROM `leave` WHERE status=3");



while($row=mysql_fetch_array($sql))
{
$name=$row['name'];
$reg=$row['reg'];
$from=$row['from'];
$to=$row['to'];
$hours=$row['hours'];
$place=$row['place'];
$purpose=$row['purpose'];
$leaveid=$row['leaveid'];
$date=$row['date'];
$out=$row['out'];
$in=$row['in'];
$total=$row['total'];
$query=mysql_query("insert into backupt values('$name','$reg','$from','$to','$hours','$place','$purpose','$leaveid','$date','$out','$in',$total)");

echo "<br>"; 
echo "<br>"; 
echo "<br>"; 
echo "<br>"; 
echo "<br>"; 

echo "<script>";
echo "alert('Back is done in main database')";
echo "</script>";


}


mysql_query("DELETE FROM `leave` WHERE status=3");



?>



    	</div>

</body>

</html>