<?php
//Start session
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if (isset($_SESSION['ShopLogin']) && $_SESSION['ShopLogin'] == true) {
    echo "";
}
else {	
		// In the pages that redirect to login.
		$_SESSION["login_redirect"] = $_SERVER["PHP_SELF"];
		header("Location: index.php");
		exit;
}

?>
<?php 

//Auto log out desktop after 1 minutes
//-- Very simple way
$useragent = $_SERVER['HTTP_USER_AGENT']; 
$iPod = stripos($useragent, "iPod"); 
$iPad = stripos($useragent, "iPad"); 
$iPhone = stripos($useragent, "iPhone");
$Android = stripos($useragent, "Android"); 
$iOS = stripos($useragent, "iOS");
//-- You can add billion devices 
$DEVICE = ($iPod||$iPad||$iPhone||$Android||$iOS);

if (!$DEVICE) {	?>
<meta  http-equiv="refresh" content="120; url=logout.php?auto" />

<?php }else{ ?> 

<?php } 

?>
<?php
mysql_connect("localhost","root","");
//delete after 1 run

mysql_select_db("shops") or die("database could not connect ");
?>
<!DOCTYPE html>

<html lang="en">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
 <meta charset="UTF-8">
 <meta
  name="description"           
  content="A basic Shop manager.">
<style>
body {
 
 font-family:Garamond;
 }

.sidenav {
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 2px;
  left: 1px;
  background: #eee;
  overflow-x: hidden;
  padding: 8px 0;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  color: #2196F3;
  display: block;
}

.sidenav a:hover {
  color: #064579;
}

.main {
  font-size: 25px;  /* Increased text to enable scrolling */
  padding: 0px 10px;
}

.main table{
	width:750px;
	font-size: 25px; 
	
}

@media only screen and (max-device-width: 450px) {
       /* styles for mobile browsers smaller than 480px; (iPhone) */
body {
 
 font-family:Garamond;
 }

.sidenav {
  width: 80px;
  position: fixed;
  z-index: 1;
  top: 2px;
  left: 1px;
  background: #eee;
  overflow-x: hidden;
  padding: 8px 0;
  text-align: left;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 9px;
  color: #2196F3;
  display: block;
  text-align: center;
}

.sidenav a:hover {
  color: #064579;
}

.main {
  /* font-size: 10px;  /* Increased text to enable scrolling */
  padding: 0px 80px;
  text-align: center;
}

.main table{
	width:350px;
	font-size: 15px;
	text-align: center;
}	   

}
</style>
 <script language="javascript" type="text/javascript">
/* Visit http://www.yaldex.com/ for full source code
and get more free JavaScript, CSS and DHTML scripts! */
<!-- Begin
var timerID = null;
var timerRunning = false;
function stopclock (){
if(timerRunning)
clearTimeout(timerID);
timerRunning = false;
}
function showtime () {
var now = new Date();
var hours = now.getHours();
var minutes = now.getMinutes();
var seconds = now.getSeconds()
var timeValue = "" + ((hours >12) ? hours -12 :hours)
if (timeValue == "0") timeValue = 12;
timeValue += ((minutes < 10) ? ":0" : ":") + minutes
timeValue += ((seconds < 10) ? ":0" : ":") + seconds
timeValue += (hours >= 12) ? " P.M." : " A.M."
document.clock.face.value = timeValue;
timerID = setTimeout("showtime()",1000);
timerRunning = true;
}
function startclock() {
stopclock();
showtime();
}
window.onload=startclock;
// End -->
</SCRIPT>
<title>SHOP</title>
</head>
<body>

<a name="UpHome" ></a>
<div class="sidenav">
	<a href="shop.php">HOME</a>

	<a href="#newUser">NEW SYSTEM USER</a>
	<a href="#SFileUpload">NEW FILE UPLOAD</a>
	<a href="#Infoce">INFORMATION CENTRE</a>
	<a href="#srec">SEARCH </a>
	<a href="#Daystracns">SHOP SALES</a>
	<a href="#Newshoi">NEW SHOP ITEM RECORD</a>
	<a href="#pwdts">DEBTORS</a>
	<a href="#Newactivity">NEW ACTIVITY</a>
	<a href="#ContactList">CONTACTS DATABASE</a>
	<a href="#NewSales">ADD SALES RECORD</a>
	<a href="#clients">RESOURCES CENTRE</a>
	
<?php
//display birthdays
$ty = date('d/m');
$query="select * from shoptasks where DueDate = '$ty' and Activity ='Birthday' and Status ='Pending'order by Sno desc";
//$query="select * from shoptasks where DueDate > '$today' and Status ='Pending' and DueDate || 'Monday' and DueDate ||'Tuesday' and DueDate || 'Wednesday' and DueDate || 'Thursday' and DueDate || 'Friday' order by Sno asc";
$result=mysql_query($query);
if(mysql_num_rows($result) > 0) {
	echo "<br/><tr><td>Birthdays</td></tr><br/>";
	while ($row = mysql_fetch_array($result)) {
		echo "<tr><td colspan='4'>",$row[3],"</td></tr>";
		}
	}
	else{
		echo "";
		}
	?>

</div>

<div class="main">
<?php
//adding sales
if (isset($_POST["store"])=="NT"){
$today = date('Y-m-d');

$aa=mysql_real_escape_string(stripslashes($_POST["ticfeyc"])); //item
$bb=mysql_real_escape_string(stripslashes($_POST["ticflanom"])); //amount
$cc=mysql_real_escape_string(stripslashes($_POST["ticffinom"])); //remarks
$dd=mysql_real_escape_string(stripslashes($_POST["ticflbnom"])); // balance
$ss=mysql_real_escape_string(stripslashes(ucwords(strtolower($cc))));
$query="insert into shopsales value(Sno,'$today','$aa','$bb','$ss','$dd')";
mysql_query($query);
}
else{
	echo " ";
}

//adding new tasks to do list
if (isset($_POST["todo"])=="actoNT"){
$today = date('d-m-Y');
$aa=mysql_real_escape_string(ucwords(strtolower($_POST["ticfeyc"]))); //task
$bb=mysql_real_escape_string($_POST["ticflanom"]); //Due date
$cc=mysql_real_escape_string($_POST["ticffinom"]); //remarks
$dd=mysql_real_escape_string(ucwords(strtolower($_POST["ticflbnom"]))); // status
$ss=mysql_real_escape_string(ucwords(strtolower($cc)));
$query="insert into shoptasks
value(Sno,'$bb','$aa','$ss','$dd')";
mysql_query($query);
}
else{
	echo " ";
}

//adding contacts
if (isset($_POST["cont"])=="conact"){
$aa=mysql_real_escape_string(ucwords(strtolower($_POST["ticfeiyc"]))); //name
$bb=mysql_real_escape_string(ucwords(strtolower($_POST["ticflapnom"]))); //PhoneNumber
$cc=mysql_real_escape_string(strtolower($_POST["ticflanom"])); //Email 
$dd=mysql_real_escape_string(ucwords(strtolower($_POST["ticffinom"]))); // Password
$ee=mysql_real_escape_string(ucwords(strtolower($_POST["ticfeyc"]))); // Status
$ff=mysql_real_escape_string(strtoupper(($_POST["ticfeyic"]))); // Activity
$gg=mysql_real_escape_string(ucwords(strtolower($_POST["ticfot"]))); //Official Title
$hh=mysql_real_escape_string(ucwords(strtolower($_POST["ticffbn"]))); // Brief Notes

//lets check whether number or email exists in database
  $result =mysql_query( "SELECT * FROM shopcontacts WHERE PhoneNumber='$bb' OR Email='$cc' LIMIT 1");
  $user = mysql_fetch_assoc($result);  
  if ($user) { // if user exists
    if ($user['Email'] === $cc) {
	echo"<tr><td>";
	header("location:shop.php?err#ContactList");
      
    }
    if ($user['PhoneNumber'] === $bb) {
	echo"<tr><td>";
	header("location:shop.php?err#ContactList");

      
    }
  }
  else{
	  $query="insert into shopcontacts
	  value(Sno,'$aa','$ff','$bb','$cc','$dd','$ee','$gg','$hh')";
	  mysql_query($query);
  }



}
else{
	echo " ";
}





//updating debtors debts
if (isset($_POST["pymdt"])=="Nedt")
{

$today = date('d-m-Y');
$aa=stripslashes(ucwords(strtolower($_POST["dbtnm"]))); //debtors details name
$bb=mysql_real_escape_string(ucwords(strtolower($_POST["blpdt"]))); //Updated balance
$cc=mysql_real_escape_string(strtolower($_POST["amtpd"])); //Amount paid 
$dd=mysql_real_escape_string(strtolower($_POST["pymdtid"])); //Transaction id
$ff=$aa." and paid ".$cc. " on ".$today ;

$sql = "UPDATE shopsales SET Balance ='$bb', Remark ='$ff', Cost ='$cc' WHERE Sno ='$dd'";
mysql_query($sql);

}

else{
	echo " ";
}




//adding shop items
if (isset($_POST["shitodo"])=="ShiNT"){
$aa=mysql_real_escape_string(ucwords(strtolower($_POST["ticfeyc"]))); //item
$bb=mysql_real_escape_string($_POST["ticflanom"]); //rate
$dd=mysql_real_escape_string(ucwords(strtolower($_POST["ticflbnom"]))); // target
$cc= $aa." - ".$bb." @ ".$dd;
$query="insert into shopitems value(Sno,'$cc','Activate')";
mysql_query($query);
}
else{
	echo " ";
}

//adding information to your system
if (isset($_POST["ince"])=="inforce"){
$aa=mysql_real_escape_string(ucwords(strtolower($_POST["titlc"]))); //Title
$bb=mysql_real_escape_string($_POST["contr"]); //content
$today = date('Y-m-d');
$cc= $_SESSION['SAdmin'];
$bb = stripslashes($bb);

$bb = mysql_real_escape_string($bb);
$query="insert into shopost value(id,'$aa','$bb','$today','$cc')";
mysql_query($query);
}
else{
	echo " ";
}




?>
<table cellpadding="5px" cellspacing="0px" align="center" border="0" >
<tr>
<td name="clock">
<form name="clock" name="face" value="">
<input style="width:150px;" type="submit" class="trans" name="face" value="">
</form>
</td>
</tr>

<tr>
<td>You are logged in as <?php echo $_SESSION['SAdmin'];?>.  <a href="logout.php">Logout</a></td>

</tr>

<tr>
<td>

</td>
<td>
<?php
if (date("l") == "Friday")
{
	$ddd=date("dmY");
	$query="select * from backup where BackupDate = '$ddd' AND BackupStatus = '0'";
	$result=mysql_query($query);
	if($result) {
		if(mysql_num_rows($result) > 0) {
			echo "";
			}
			else {
				echo " <a href='Databasebackup.php'>Backup Website</a>";
				}
				
	
				
		}
		
		else {
			echo "SQL Error";

		}
}

	else 
	{
		echo "";
};
?>
</td>
</tr>

</table>



<!-- start of table to for to do record  -->
<a name="MyToDoList" ></a>
<form name="shop" method="post" action="shop.php">

<table style=" border:1px solid silver" cellpadding="5px" cellspacing="0px" align="center" border="0" 	width='350px';>

<tr>
<td colspan="4" style="background:'white'; color:#FFFFFF; align:centre"> </td>
	
</tr>
<tr>
<td colspan="4" align="center" style="background:#0066FF; color:#FFFFFF;">YOUR TO DO LIST FOR TODAY</td>
</tr>
<?php

//display list of recurring tasks for the day
$today = date('d');
//days events
$todac = date('l');
$query="select * from shoptasks where DueDate = '$today' and Status ='Pending' or DueDate='$todac' and Status ='Pending'order by Sno desc";
$result=mysql_query($query);
while ($row = mysql_fetch_array($result)) {
		echo "<tr><td colspan='4'>",$row[3],"</td></tr>";
		
		
		}
echo "";

//}


//display list of tasks for the day

$ty = date('d/m');
$query="select * from shoptasks where DueDate = '$ty' and Status ='Pending' and Activity || 'Birthday' order by Sno desc";
$result=mysql_query($query);
while ($row = mysql_fetch_array($result)) {

		echo "<tr><td colspan='4'><a href=shop.php?done=",$row[0],">",$row[3],"</a></td></tr>";
		
		
		}
echo "";
//display list of recurring tasks for the day

$today = date('d/m');
$query="select * from shoptasks where DueDate > '$today' and Status ='Pending'  and DueDate || 'Monday' and DueDate ||'Tuesday' and DueDate || 'Wednesday' and DueDate || 'Thursday' and DueDate || 'Friday' order by Sno asc limit 3";
$result=mysql_query($query);
echo "<tr>";
		echo "<td>===============Upcoming events===============</td></tr>";
while ($row = mysql_fetch_array($result)) {
		echo "<tr>";

		echo"
<td colspan='4'>",$row[1]," ",$row[3],"</td></tr>";
		
		
		}
		echo "<tr>";
echo "";


			

				




?>
</tr>

</table>
</form>
<!-- end of table to for to do record  -->

<!-- end of table to create space between tables -->
<table cellpadding="5px" cellspacing="0px" align="center" border="0" >
<tr>
<td > &nbsp;</td>
</tr>
&nbsp;
</table>
<!-- end of table to create space between tables -->
<div id="Infoce">
<form name="info" method="post" action="shop.php">
<table style=" border:1px solid silver" cellpadding="5px" cellspacing="0px"
align="center" border="0" width='350px' >
<tr>
<td colspan="3" style="background:'white'; color:#FFFFFF; align:centre">
	</td>
	
</tr>
<tr>
<td colspan="4" align="center" style="background:#0066FF; color:#FFFFFF;">INFORMATION CENTRE</td>
</tr>
<tr>
<td>Title</td>
<td><input type="text" name="titlc" size="20" required>
</td>
</tr>
<tr>
<td>Content</td>
<td>
 <textarea   name="contr" placeholder="All your content here" required></textarea> </td>
</tr>
<tr>

<tr>
<td colspan="4" align="center"><input type="hidden" name="ince" value="inforce">
<input type="submit" value="ADD KNOWLEDGE"></td>
</tr>
</table>
</form>
</div>


<!-- end of table to create space between tables -->
<table cellpadding="5px" cellspacing="0px" align="center" border="0" >
<tr>
<td > &nbsp;</td>
</tr>
&nbsp;
</table>
<!-- end of table to create space between tables -->



<!-- search -->
<div id="srec">
<form name="search" method="post" action="shop.php#srec">
<table cellpadding="5px" cellspacing="0px" align="center" border="0" width='350px'>
<tr>
<td colspan="4" style="background:#0066FF; color:#FFFFFF;">Search </td>

</tr>
<tr>
<td>Enter Search Keyword</td>
<td><input type="text" name="search" size="15"  required></td>
<td><input type="hidden" name="don" value="search">
<input type="submit" value="Search" /></td>
</tr>


<?php
if (isset($_POST['search']))
{
$search=mysql_real_escape_string($_POST["search"]);
$query="select * from shopcontacts where PhoneNumber like '%$search%' or Activity like '%$search%' OR Name like '%$search%' LIMIT 5";
$result=mysql_query($query);
//print "<tr bgcolor='green' style='color:#FFFFFF'>";
while ($row = mysql_fetch_array($result)) {
	#srec
		echo 
		"<tr><td width='150px'><a href=shop.php?id=",$row[0],"#srec>".$row[1]," </a>","</td>	
		<td width='50px'>",$row[2],"</td></tr>";
		}
		//echo "<tr><td><a href=shop.php?id=more>More</a></td></tr>";
}

if (isset($_POST['search']))
{	
$search=mysql_real_escape_string($_POST["search"]);
$query="select * from shopost where title like '%$search%' or content like '%$search%' LIMIT 5";
$result=mysql_query($query);
$nr3 = mysql_num_rows($result);
while ($row = mysql_fetch_array($result)) 
	
	{
	echo "<tr><td width='250px' ><a href=shop.php?postg=",$row[0],"#srec>".$row[1]," </a>","<br/ ><br/ ></td></tr>";
	
		};
	echo "<tr ><td width='250px' align='center' alink='#fcff02' link='fc1a02' vlink='#36900a'><br/ ><br/ ><a alink='#fcff02' link='fc1a02' vlink='#36900a' href=shop.php?moreg=",$row[0],"#srec> More results</a>","</td></tr>";
}


?>
</table>
</form>
</div>






<table>
<?php
if (isset($_GET["id"]))
{
$search=mysql_real_escape_string($_GET["id"]);
$query="select * from shopcontacts where Sno ='$search'";
$result=mysql_query($query);
while ($row = mysql_fetch_array($result)) {
	print "<form name='aopop' method='post' action='shop.php'>";
	print "<table cellpadding='5px' cellspacing='0px' align='center' border='0'>";
	print "<tr><td colspan='4' > Name:".$row[1]."</td></tr>";
	print "<tr><td> Email: ".$row[4]."</td></tr>";
	print "<tr><td> Phone Number: ".$row[3]."</tr>";
	print "<tr><td> Status: ".ucwords(strtolower($row[2]))." ";
	print "<select name='cuns' required>
	<option value=''>".$row[6]."</option>
	<option value='Incomplete'>Pending</option>
	<option value='Complete'>Complete</option>
	<option value='Approved'>Approved</option>
	</select>
	</td></tr>";	
	print "<tr><td> Title: ".$row[7]."</tr>";
	print "<tr><td colspan='4' align='center'><input type='hidden' name='paopo' value='".$row[0]."'></td></tr>";
	print "<tr><td colspan='4' align='center'><input type='hidden' name='opaopo' value='Apedt'>";
	print "<tr><td><input type='submit' value='Update'></td></tr>";
	print "</table>";
		print "</form>";
		}
echo "";
}


//completed list of task
if (isset($_GET["done"]))
{
$tskid=mysql_real_escape_string($_GET["done"]);
$sql = "UPDATE shoptasks SET Status ='Complete' WHERE Sno ='$tskid'";
mysql_query($sql);
header("location: shop.php");
echo "";
}

if (isset($_GET["postg"]))
{
$search=mysql_real_escape_string($_GET["postg"]);
$query="select * from shopost where id ='$search'";
$result=mysql_query($query);
while ($row = mysql_fetch_array($result)) {
	print "<form name='cc' method='post' action='shop.php'>";
	print "<table cellpadding='5px' cellspacing='0px' align='center' border='0'>";
	print "<tr>";
	print "<td > <B>TITLE</B>: ".$row[1];
	print "</td ></tr>";
		print "<tr>";
	print "<td width='400px'><textarea rows='4' cols='50'>".$row[2]."</textarea>";
	print "</td ></tr>";
	
	
	print "</table>";
		print "</form>";
		}

echo "";
}





?>	

<!-- end of table to create space between tables -->
<table cellpadding="5px" cellspacing="0px" align="center" border="0" >
<tr>
<td ><a href="#UpHome" align="center">TOP</a> &nbsp;</td>
</tr>
&nbsp;
</table>
<!-- end of table to create space between tables -->

<div id="Daystracns">
<table style=" border:1px solid silver" cellpadding="5px" cellspacing="0px" align="center" border="0" width='650px' >
<tr>

<td colspan="5" style="background:#0066FF; color:#FFFFFF;  align="center">

<a href='shop.php?salestoday#Daystracns'>DAYS SALES:</a> <?php
//display total daily sales
$today = date('Y-m-d');
$result= mysql_query("SELECT SUM(cost) AS totalcollection FROM shopsales where Date='$today'");
$row = mysql_fetch_assoc($result); 
$sum = $row['totalcollection'];
echo $sum; 

//display total weekly sales
$result= mysql_query("SELECT SUM(cost) AS totalcollection FROM shopsales WHERE WEEKOFYEAR(date)=WEEKOFYEAR(NOW())");
$row = mysql_fetch_assoc($result); 
$wsum = $row['totalcollection'];

echo "<a href='shop.php?salesweek#Daystracns'> WEEKLY SALES:</a> ".$wsum;


//display total monthly sales
$dfr= date('Y-m-01');
$fdr=date('Y-m-t');
$result= mysql_query("SELECT SUM(cost) AS totalcollection FROM shopsales WHERE Date BETWEEN '$dfr' AND '$fdr' order by Date asc");

$row = mysql_fetch_assoc($result); 
$msum = $row['totalcollection'];
echo "<a href='shop.php?salesmonth#Daystracns'>TOTAL MONTHLY SALES: </a>".$msum;
?> </td>

</tr>
<tr bgcolor="#666666" style="color:#FFFFFF" >
<td >Date</td>
<td>Item</td>
<td>Amount</td>


<?php
$t = date('Y');
$td = date('m');
$number = cal_days_in_month(CAL_GREGORIAN, $td, $t);
$query="select * from shopsales where Date='$today' ORDER BY Sno desc LIMIT 5";
$result=mysql_query($query);
while ($row = mysql_fetch_array($result)) {
		echo "<tr>
		<td>",$row[1],"</td>
		<td><a href='shop.php?details=",$row[0],"#Daystracns'>".$row[2]," </a>","</td>		
		<td>",$row[3],"</td>
		</tr>";
		}

echo "";

//}
?>

</tr>
<tr>
<td colspan='4'><?php
$t = date('Y');
$td = date('m');
//number of days in current month
$number = cal_days_in_month(CAL_GREGORIAN, $td, $t); // 31
$rinsf=round($msum/$number,-3);
// total monthly collections divided by number of days in month
echo "D.Average: ",round($msum/$number,-3);
echo "&nbsp; W.Average: ",round($msum/4,-3);
echo "&nbsp;";
echo "T.Check: ", ROUND(((($msum/2500000)*100)),0),"%";
?>
</td>
</tr>
</TR>
</table>
</div>
<?php
if (isset($_GET["details"]))
{
$acti=mysql_real_escape_string($_GET["details"]);
$query="select * from shopsales where Sno ='$acti'";
$result=mysql_query($query);
echo "<table solid silver' cellpadding='5px' cellspacing='0px' align='center' border='0' >";
while ($row = mysql_fetch_array($result)) {
	print "<tr><td> Date: ".$row[1];
	print "</tr>";
	print "<tr><td> Transaction: ".$row[2];
	print "</tr>";
	print "<tr><td style='color: red;'> Amount: ".$row[3]."&nbsp;&nbsp;&nbsp;&nbsp;  Balance: ".$row[5];
	print "</tr>";
	print "<tr><td> Details: ".ucwords(strtolower($row[4]));
	print "</tr>";
		}
echo "";
}
echo"</tr>";
echo "</table>";		

?>	

<?php

//daily sales view
if (isset($_GET["salestoday"]))
{
$tacti=date('Y-m-d');
$query="select * from shopsales where Date ='$tacti'";
$result=mysql_query($query);
echo "<table solid silver' cellpadding='5px' cellspacing='0px' align='center' border='0' >";

while ($row = mysql_fetch_array($result)) {
	print "<tr><td colspan='5'> Transaction: ".$row[2]."</td></tr>";
	print "<tr><td style='color: red;'> Amount: ".$row[3]."&nbsp;&nbsp;&nbsp;&nbsp;  Balance: ".$row[5];
//<td><a href='shop.php?debts=",$row[0],"#Daystracns'>",$row[5],"</a></td>";

}
echo "";
		}
		
echo"</tr>";
echo "</table>";		

?>



<?php
//weekly sales view
if (isset($_GET["salesweek"]))
{
$query="select * from shopsales WHERE WEEKOFYEAR(date)=WEEKOFYEAR(NOW())";
$result=mysql_query($query);
echo "<table solid silver' cellpadding='5px' cellspacing='0px' align='center' border='0' >";
echo "<tr>";

while ($row = mysql_fetch_array($result)) {
	echo "<tr><td colspan='5'> Transaction: ",$row[2],"</td></tr>";
	echo "<tr><td style='color: red;'> Date: ",$row[1]," Amount: ",$row[3],"&nbsp;&nbsp;  Balance: ",$row[5];

		}
echo "";
}
echo"</tr>";
echo "</table>";
?>

<?php
//monthly sales view
if (isset($_GET["salesmonth"]))
{
$dfr= date('Y-m-01');
$fdr=date('Y-m-t');
$query="select * from shopsales WHERE Date BETWEEN '$dfr' AND '$fdr'";
$result=mysql_query($query);
echo "<table solid silver' cellpadding='5px' cellspacing='0px' align='center' border='0' >";
echo "<tr>";
while ($row = mysql_fetch_array($result)) {
	print "<tr><td> Transaction: ".$row[2]."</td></tr>";
	print "<tr><td style='color: red;'> Date: ".$row[1]." Amount: ".$row[3]."&nbsp;&nbsp;  Balance: ".$row[5];
		}
echo "";
}
echo"</tr>";
echo "</table>";
?>

<?php
if (isset($_GET["debts"]))
{
$searchd=mysql_real_escape_string($_GET["debts"]);
$query="select * from shopsales where Sno ='$searchd'";
$result=mysql_query($query);
echo "<form name='debts' method='post' action='shop.php'>";
echo '<table solid silver cellpadding="5px" cellspacing="0px" align="center" border="0" >';
echo '<tr>';
while ($row = mysql_fetch_array($result)) {
	print "<tr><td><b>Debtor:</b><input type='text' name='dbtnm' size='35' value='".$row[4]."'></td></tr>";
	print "<tr><td><b>Updated Balance Amount:</b><input type='text' name='blpdt' size='5' value='".$row[5]."' required></td></tr>";
	print "<tr><td><b>Amount Paid:</b><input type='text' name='amtpd' size='15'  required></td></tr>";
	print "<tr><td colspan='4' align='center'><input type='hidden' name='pymdtid' value='".$row[0]."'></td></tr>";
	print "<tr><td colspan='4' align='center'><input type='hidden' name='pymdt' value='Nedt'>";
	print "<tr><td><input type='submit' value='Update'></td></tr>";
	print "</table>";
	print "</form>";



		}
//echo ;
}
?>
<!-- end of table to create space between tables -->
<table cellpadding="5px" cellspacing="0px" align="center" border="0" >
<tr>
<td > <a href="#UpHome" align="center">TOP</a> &nbsp;</td>
</tr>
&nbsp;
</table>
<!-- end of table to create space between tables -->
<div id="Newshoi">
<form name="shop" method="post" action="shop.php">
<table style=" border:1px solid silver" cellpadding="5px" cellspacing="0px"align="center" border="0" >
<tr>
<td colspan="3" style="background:'white'; color:#FFFFFF; align:centre">
	</td>
	
</tr>
<tr>
<td colspan="4" align="center" style="background:#0066FF; color:#FFFFFF; ">NEW SHOP ITEM RECORD</td>
</tr>
<tr>
<td> Item Name</td>
<td><input type="text" name="ticfeyc" size="20" required>
</td>
<td>Rate per Item</td>
<td><input type="text" name="ticflanom" size="20" required></td>
</tr>
<tr>
<tr>
<td>Target per Month</td>
<td><input type="text" name="ticflbnom" size="20" required></td>
</tr>
<tr>
<td colspan="4" align="center"><input type="hidden" name="shitodo" value="ShiNT">
<input type="submit" value="ADD ITEM"></td>
</tr>
</table>
</form>
</div>

<!-- end of table to create space between tables -->
<table cellpadding="5px" cellspacing="0px" align="center" border="0" >
<tr>
<td > <a href="#UpHome" align="center">TOP</a>&nbsp;</td>
</tr>
&nbsp;
</table>
<!-- end of table to create space between tables -->
<div id="pwdts">
<table style=" border:1px solid silver" cellpadding="5px" cellspacing="0px"
align="center" border="1" width='450px'>

<tr>
<td colspan="4" align="center" style="background:#0066FF; color:#FFFFFF; ">PEOPLE WITH DEBTS:
<?php 
$today = date('Y-m-d');
$result= mysql_query("SELECT SUM(Balance) AS totalcollection FROM shopsales where Balance > 0");
$row = mysql_fetch_assoc($result); 
$sum = $row['totalcollection'];
echo $sum; ?> 
</td>
</tr>
<?php
$query="select * from shopsales where Balance > 0 order by Sno desc";
$result=mysql_query($query);
while ($row = mysql_fetch_array($result)) {
		echo "<tr>
		<td> ",$row[1],"</td>
		<td>",$row[4],"</td>
		
		<td><a href='shop.php?debts=",$row[0],"#Daystracns'>",$row[5],"</a></td>";

		
		}
echo "";
"</tr>";
//}
?>
</table>
</div>
<!-- end of table to create space between tables -->
<table cellpadding="5px" cellspacing="0px" align="center" border="0" >
<tr>
<td > <a href="#UpHome" align="center">TOP</a>&nbsp;</td>
</tr>
&nbsp;
</table>
<!-- end of table to create space between tables -->
<div id="Newactivity">
<form name="shop" method="post" action="shop.php">
<table style=" border:1px solid silver" cellpadding="5px" cellspacing="0px"
align="center" border="0" >
<tr>
<td colspan="3" style="background:'white'; color:#FFFFFF; align:centre">
	</td>
</tr>
<tr>
<td colspan="4" align="center" style="background:#0066FF; color:#FFFFFF;">TO DO LIST RECORD</td>
</tr>	
</tr>
<tr>
<td colspan="3" style="background:'white'; color:#FFFFFF; align:centre">
	</td>
<tr>
<td> Task</td>
<td><input type="text" name="ticfeyc" size="20" placeholder="Name of Task" required>
</td>
<td>Due Date</td>
<td><input type="text" name="ticflanom" size="22" placeholder="Just the day e.g 01,22 or 25/08" required></td>
</tr>
<tr>
<tr>
<td>Enter Remarks</td>
<td><input type="text" name="ticffinom" size="20" placeholder="Details of what you intend to do" required></td>
<td>Enter Status</td>
<td>
<select name="ticflbnom" class="span12" required>
<option value="">Status</option>
<option value="Pending">Pending</option>
<option value="Complete">Complete</option>
<option value="Approved">Approved</option>
</select>
</td>
</tr>
<tr>
<td colspan="4" align="center"><input type="hidden" name="todo" value="actoNT">
<input type="submit" value="ADD TASK"></td>
</tr>

</table>
</form>
</div>
<!-- end of table to create space between tables -->
<table cellpadding="5px" cellspacing="0px" align="center" border="0" >
<tr>
<td ><a href="#UpHome" align="center">TOP</a> &nbsp;</td>
</tr>
&nbsp;
</table>
<!-- end of table to create space between tables -->


<div id="ContactList">

<form name="shop" method="post" action="shop.php">
<table style=" border:1px solid silver" cellpadding="5px" cellspacing="0px"
align="center" border="0" >

<tr><td colspan="3">
<?php
if(isset($_GET['err'])) 
	{
		echo "Record with details already exists";
		}
		
		else
			{
				}
		?>
</td>
</tr>
<tr>
<td colspan="3" style="background:'white'; color:#FFFFFF; align:centre">
	</td>
	
</tr>
<tr>
<td colspan="5" align="center" style="background:#0066FF; color:#FFFFFF;">CONTACTS DATABASE</td>
</tr>
<tr>
<td> Name</td>
<td><input type="text" name="ticfeiyc" size="20" required>
</td>

<td>Phone Number</td>
<td><input type="text" name="ticflapnom" size="20" required></td>
</tr>
<tr>
<td>Email Address</td>
<td><input type="text" name="ticflanom" size="20" ></td>
<td>Password</td>
<td><input type="text" name="ticffinom" size="20"></td>
</tr>
<tr>

<td> Status</td>
<td><select name="ticfeyc" class="span12" required>
<option value="">Status</option>
<option value="Incomplete">Pending</option>
<option value="Complete">Complete</option>
<option value="Approved">Approved</option>

</select></td>

<td>Activity</td>
<td><select name="ticfeyic" class="span12" required>
<option value="">Activity</option>
<option value="URA">URA</option>
<option value="TMIS">TMIS</option>
<option value="Admission">ADMISSION</option>
<option value="Nurse">NURSE</option>
<option value="contact">CONTACT</option>
<option value="Email">EMAIL</option>
</select></td></tr>


<tr><td>Offical Title</td>
<td><input type="text" name="ticfot" size="20" required></td>
<td>Brief Notes</td>

<td>
 <textarea   name="ticffbn"  placeholder="All your content here" required></textarea> </td>
</tr>
<tr>
<td colspan="4" align="center"><input type="hidden" name="cont" value="conact">
<input type="submit" value="SEND"></td>
</tr>


</table>
</form>

</div>


<!-- end of table to create space between tables -->
<table cellpadding="5px" cellspacing="0px" align="center" border="0" >
<tr>
<td ><a href="#UpHome" align="center">TOP</a> &nbsp;</td>
</tr>
&nbsp;
</table>
<!-- end of table to create space between tables -->




<div id="NewSales">
<form name="shop" method="post" action="shop.php">
<table style=" border:1px solid silver" cellpadding="5px" cellspacing="0px"
align="center" border="0" >
<tr>
<td colspan="3" style="background:'white'; color:#FFFFFF; align:centre">
	</td>
	
</tr>
<tr>
<td colspan="4" align="center" style="background:#0066FF; color:#FFFFFF; ">ADD SALES RECORD</td>
</tr>
<tr>
<td> Select Item</td>
<td><select name="ticfeyc" class="span12">
<option value="">Item</option>
<?php
$query="select * from shopitems";
$result=mysql_query($query);
while ($row = mysql_fetch_array($result)) {
	print '<option value="'.$row[1].'">'.$row[1].'</option>';
	}
echo "";
?>
</select></td>
<td>Enter  Amount </td>
<td><input type="text" name="ticflanom" size="20" required></td>
</tr>
<tr>
<tr>
<td>Enter Remarks</td>
<td><input type="text" name="ticffinom" size="20" required></td>
<td>Enter Balance</td>
<td><input type="text" name="ticflbnom" size="20" required></td>
</tr>
<tr>
<td colspan="4" align="center"><input type="hidden" name="store" value="NT">
<input type="submit" value="ADD RECORD"></td>
</tr>
</table>
</form>
</div>
<!-- table to create space between tables -->
<table cellpadding="5px" cellspacing="0px"
align="center" border="0" >
<tr>
<td > <a href="#UpHome" align="center">TOP</a> &nbsp;</td>
</tr>
&nbsp;
</table>
<!-- end of table to create space between tables -->

<div id="newUser">
<form name="new" method="post" action="shop.php">
<table style=" border:1px solid silver" cellpadding="5px" cellspacing="0px"
align="center" border="0" >
<tr>
<td colspan="3" style="background:'white'; color:#FFFFFF; fontsize:20px; align:centre">
	</td>
</tr>
<tr>
<td colspan="4" align="center" style="background:#0066FF; color:#FFFFFF; fontsize:20pX">ADD NEW USER RECORD</td>
</tr>
<tr>
<tr>
<td>Enter Username</td>
<td><input type="text" name="ticfffnom" size="20" required></td>
<td>Email Address</td>
<td><input type="text" name="ticfblo" size="20"></td>
</tr>
<tr>
<td>Enter Password</td>
<td><input type="text" name="ticffinom" size="20" required></td>
<td>Enter Contact Number</td>
<td><input type="text" name="ticflnnom" size="20" required></td>
</tr>

<tr>
<td colspan="4" align="center"><input type="hidden" name="dno" value="NM">
<input type="submit" value="ADD RECORD"></td>
</tr>
</table>
</form>



<?php

//new user registration
if (isset($_POST["dno"])=="NM"){
$aa=ucwords(strtolower($_POST["ticfffnom"])); # UserName
$kk=ucwords(strtolower($_POST["ticfblo"])); # Email Address
$ll=$_POST["ticffinom"]; # Password
$mm=$_POST["ticflnnom"]; # Contact

// first check the database to make sure a user does not already exist with the same username and/or email
  $result =mysql_query( "SELECT * FROM shopusers WHERE username='$aa' OR email='$kk' LIMIT 1");
  $user = mysql_fetch_assoc($result);  
  if ($user) { // if user exists
    if ($user['username'] === $aa) {
		echo"<tr><td>";
      echo "Username already exists";
	  echo"</td></tr>";
    }

    if ($user['email'] === $kk) {
	echo"<tr><td>";
	echo "<br/>Email already exists";
	echo"</td></tr>";
      
    }
    if ($user['contact'] === $mm) {
	echo"<tr><td>";
	echo "<br/>Contact already exists";
	echo"</td></tr>";
      
    }
  }
  else{
	  $ss=$chars = "abcdefghjkmnpqrtwxyABCDEFGHJKLMNPQRTUVWXYZ0123456789"; //set characters for salt
	  $salt = substr( str_shuffle( $chars ), 0, 64 ); // characters in salt
	  $password = hash("sha512",$ll.$salt);//encrypt the password before saving in the database
	  $query="insert into shopusers value(id,'$aa','$kk','$password','$salt','$mm','2','','')";
	  mysql_query($query);
  }
}
echo"</td></tr>";
?>
</div>

<!-- table to create space between tables -->
<table cellpadding="5px" cellspacing="0px"
align="center" border="0" >
<tr>
<td > <a href="#UpHome" align="center">TOP</a> &nbsp;</td>
</tr>
&nbsp;
</table>
<!-- end of table to create space between tables -->

<div id="SFileUpload">
<form action="shop.php" method="post" enctype="multipart/form-data">
<table style=" border:1px solid silver" cellpadding="5px" cellspacing="0px" align="center" border="0" >
<tr><td colspan="3" style="background:'white'; color:#FFFFFF; fontsize:20px; align:centre">	</td></tr>
<tr><td colspan="4" align="center" style="background:#0066FF; color:#FFFFFF; fontsize:20pX">FILE UPLOAD SYSTEM</td></tr>
<tr>
<tr>
<td>Select File to upload:</td>
<td><input type="file" name="fileToUpload" id="fileToUpload"><input type="hidden" name="sfu" value="NSFA">
<input type="submit" value="Upload" name="submit">
</tr>
</table>
</form>

<?php
//file encryption function
define('FILE_ENCRYPTION_BLOCKS', 10000);

/**
 * @param  $source  Path of the unencrypted file
 * @param  $dest  Path of the encrypted file to created
 * @param  $key  Encryption key
 */
function encryptFile($source, $dest, $key)
{
    $cipher = 'aes-256-cbc';
    $ivLenght = openssl_cipher_iv_length($cipher);
    $iv = openssl_random_pseudo_bytes($ivLenght);

    $fpSource = fopen($source, 'rb');
    $fpDest = fopen($dest, 'w');

    fwrite($fpDest, $iv);

    while (! feof($fpSource)) {
        $plaintext = fread($fpSource, $ivLenght * FILE_ENCRYPTION_BLOCKS);
        $ciphertext = openssl_encrypt($plaintext, $cipher, $key, OPENSSL_RAW_DATA, $iv);
        $iv = substr($ciphertext, 0, $ivLenght);

        fwrite($fpDest, $ciphertext);
    }

    fclose($fpSource);
    fclose($fpDest);
}

?>
<?php
//File uploads
if (isset($_POST["sfu"])=="NSFA"){
	$spath = "FileUploads/";
    $path = $spath . basename( $_FILES['fileToUpload']['name']);
	$EFileuploaded=$spath.'E'.basename( $_FILES['fileToUpload']['name']);
	$Fileuploaded=basename( $_FILES['fileToUpload']['name']);
	encryptFile($Fileuploaded, $EFileuploaded, 'my-secret-key');
}
?>
</div>
 </div>  
</body>
</html>