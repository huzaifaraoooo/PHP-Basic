<form method="get">
    <input type="text"name="val1" required> <br>
    <input type="text"name="val2" required> <br>
    <input type="text"name="val3" required> <br>
    <input type="text"name="val4" required> <br>
    <input type="submit"value="ENTER BUTTON". name="sub" >

</form>


<?php
if(isset($_GET["sub"]))
{
  $a=$_GET["val1"];
  $b=$_GET["val2"];
  $c=$_GET["val3"];
  $d=$_GET["val4"];
  
  echo $a + $b + $c + $d;
  
}
?>