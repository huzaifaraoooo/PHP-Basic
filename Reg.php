<style> 
.tbl{
    background-color: #102030;
    width: 400px;
    border: 2px solid black;
    text-align: center;
    color: greenyellow;
    font-size: x-large;
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}

</style>
</form>
<table  border="2" class="tbl">
  
</head>
<body>
    <form action="">
        <div class="container">
            <h1>Register Form</h1>
            <p>Create an Account.</p>
        <tr> <td>Name</td> <td> <input type="text" name="num1" required></td></tr>
        <tr> <td>F Name</td> <td>  <input type="text" name="num2" required></td></tr>
        <tr> <td>E Mail</td> <td>  <input type="text" name="num3" required></td></tr>
        <tr> <td>CNIC</td> <td> <input type="text" name="num4" required></td></tr>
        <tr> <td>Result</td> <td> <input type="submit" value="Reg" name="sub"></td></tr>
</style>
<table  border="1" class="tbl">

        <?php
if(isset($_GET['sub']))
{
    $a= $_GET['num1'];
    $s= $_GET['num2'];
    $d= $_GET['num3'];
    $f= $_GET['num4'];
   
    echo "<tr><td> Name <td/> <td> $a</td </tr> <br>"; 
    echo "<tr><td> Fname <td/> <td> $s</td </tr> <br>";
    echo "<tr><td> E Mail <td/> <td> $d</td </tr> <br>";
    echo "<tr><td> CNIC <td/> <td> $f</td </tr> <br>";
}

?>
        


