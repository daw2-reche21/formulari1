<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <label for="texto">Your selection:</label>
    <select id="texto" name="textoUser">
        <option value="<?php echo $_POST['texto1']; ?>"><?php echo $_POST['texto1']; ?></option>
        <option value="<?php echo $_POST['texto2']; ?>"><?php echo $_POST['texto2']; ?></option>
        <option value="<?php echo $_POST['texto3']; ?>"><?php echo $_POST['texto3']; ?></option>
        <option value="<?php echo $_POST['texto4']; ?>"><?php echo $_POST['texto4']; ?></option>
        <option value="<?php echo $_POST['texto5']; ?>"><?php echo $_POST['texto5']; ?></option>
        <option value="<?php echo $_POST['texto6']; ?>"><?php echo $_POST['texto6']; ?></option>
        <option value="<?php echo $_POST['texto7']; ?>"><?php echo $_POST['texto7']; ?></option>
    </select>

</body>
</html>