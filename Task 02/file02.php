<?php
echo $_GET["name"]."<br>";
echo $_GET["pass"]."<br>";
echo $_GET["gender"]."<br>";

foreach ($_GET["skill"] as $b)
{echo $b." ";
}
echo "<br>";

?>