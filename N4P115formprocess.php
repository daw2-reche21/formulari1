<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La SUMA</title>
</head>
<body>
    
        <?php 
        $total=$_POST['num1']+$_POST['num2']+$_POST['num3'];

        echo $_POST['num1']."+".$_POST['num2']."+".$_POST['num3']."=".$total; ?>

</body>
</html>