<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>IT-Point</title>

<link rel="stylesheet" type="text/css" href="CSS\default.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
  <content>
  <form action="/PHP/main.php" method="post">
  <fieldset>
    <legend>Logga in:</legend>
    <div class="inputboxes"> 
        Användare:<br> 
        <input type="text" name="namn"><br><br>
        Lösenord:<br> 
        <input type="password" name="pass"><br><br>
        Host:<br> 
        <input type="text" name="host"><br><br>
        Databas:<br> 
        <input type="text" name="databas"><br><br>
        <input type="submit" value="Logga in">
    </div>
    
  </fieldset>
</form>
</content>

</body>
</html>