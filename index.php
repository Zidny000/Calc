<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="GET">
        <input type="number" name="1"><br>
        <input type="number" name="2"><br>
        <input type="submit"  name="add" value="+">
        <input type="submit"  name="sub" value="-">
        <input type="submit"  name="multi" value="*">
        <input type="submit"  name="div" value="/">
        

    </form>
    <?php 
        
        if(isset($_GET["add"])){
             $res=$_GET['1']+$_GET['2'];
             echo "<h1>$res</h1>";
        }
        if(isset($_GET["sub"])){
            $res= $_GET['1']-$_GET['2'];
            echo "<h1>$res</h1>";
       }
        if(isset($_GET["multi"])){
            $res= $_GET['1']*$_GET['2'];
            echo "<h1>$res</h1>";
             
       }
        if(isset($_GET["div"])){
            $res= $_GET['1']/$_GET['2'];
            echo "<h1>$res</h1>";
            
       }
    ?>
    
</body>
</html>