<form method="get">
    <input type="text"name="val1" required> <br>
    <input type="text"name="val2" required> <br>
    <input type="text"name="val3" required> <br>
    <input type="submit"value="ENTER BUTTON". name="sub" >

</form>


<?php
if(isset($_GET["sub"]))
{
  $num1=$_GET["val1"];
  $num2=$_GET["val2"];
  $num3=$_GET["val3"];
 if($num3=="+")
 {
  echo $num1+$num2;
}
elseif($num3=="-")
{
  echo $num1-$num2;
}
elseif($num3=="*")
{
  echo $num1*$num2;
}
elseif($num3=="/")
{
  echo $num1/$num2;
}
}


?>