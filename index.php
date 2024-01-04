<?php
echo " ";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail Page</title>
    
    <h1>Email Us</h1>
</head>
<body>
    <p>this is my html space</p>
   <form action="/ptt.php" method="POST">
    <input type="email" id="Email" name="Email"><br>
    <input type="text" id="Subject" name="Subject"><br>
    <textarea rows="5" cols="40" id="Content" name="Content" > </textarea>
   
    <input type= "submit" value="Submit"><br>
   </form>
</body>
</html>
