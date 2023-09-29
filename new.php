<form method="get">
    <input type="text"name="val1" required> <br>
    <input type="text"name="val2" required> <br>
    <input type="submit"value="sum off". name=" sub" >

</form>


<?php
if(isset($_GET["sub"]))
{
  $a=$_GET["val1"];
  $b=$_GET["val2"];
  //echo $b;
  echo $a + $b;
  
}
?>