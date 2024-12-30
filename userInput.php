<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
       if (isset($_POST['userName'])) {
        echo $_POST['userName'];
        }
    ?>
    <h1>form submit</h1>
    <form action="userInput.php" method="POST" >
        <input type="text" name="userName">
        <input type="submit">
    </form>
</body>
</html>