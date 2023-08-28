<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h1 style='color:red'> My form</h1>";
    if(isset ($_POST['submit'])){
        echo 'Password is:'.$_POST['pwd'];
    }
    ?>
    <form action="" method="post">
    <fieldset>
    <legend>login:</legend>
    
    <div>
        <label for="">Username:</label>
        <input type="text" name="pwd"/>
    </div>
    <div>
        <label for="">Password:</label>
        <input type="password" name="pwd"/>
    </div>
    <div>
        <label for="">Email:</label>
        <input type="email" name="email"/>
    </div>
    <div>
        <label for="">Date:</label>
        <input type="date" name="date"/>
    </div>
    <input type="submit" value="login" name="submit"/>
</fieldset>
</form>
</body>
</html>