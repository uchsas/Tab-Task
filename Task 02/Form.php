<?PHP
$isPost=false;
$username="";

if(isset($_POST["btnClick"]))
{
	$isPost=true;
	if($_POST["uname"]!="")
		$username=$_POST["uname"];
	
}
{
	$isPost=true;
	if($_POST["pass"]!="")
		$password=$_POST["pass"];
	
}


?>
<form action="#" method="post">
Username:<input type="text" id="uname" name="uname">
<?php
if($isPost==true && $username=="")
echo "<span style='color:red;'><small>Required</small></span>";
?>
<br><BR>
Password:<input type="password" id="pass" name="pass">
<?php
if($isPost==true && $password=="")
echo "<span style='color:red;'><small>Required</small></span>";
?>
<br>
Gender: <input type="radio" name="gender" value="Male"> Male
<input type="radio" name="gender" value="Female"> Female
<input type="radio" name="gender" value="Others"> Others <br><br>
Skills:<input type="checkbox" name="skills[]" value="c">C
<input type="checkbox" name="skills[]" value="c++">C++
<input type="checkbox" name="skills[]" value="c#">C# <br><br>
Department:<select name="dept">
<option value="cse">CSE</option>
<option value="eee">EEE</option>
<option value="bba">BBA</option>
</SELECT><br><br>
Address:<textarea rowspan="3" colspan="50" name="address"></textarea>
<br><br><br>
<input type="submit" name="btnClick" value="Click">
</form>