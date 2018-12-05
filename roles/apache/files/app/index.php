<html>
<body>

<?php
$servername = "localhost";
$username = "usr_app";
$password = "password";
$dbname = "bd_name";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql="INSERT INTO Person (name,fav_color,fav_pet) VALUES ('$_POST[name]','$_POST[fav_color]','$_POST[fav_pet]')";

    if (!mysqli_query($conn,$sql))
      {
      die('Error: ' . mysqli_error($conn));
      }
    echo "1 record added";

mysqli_close($conn);
?> 

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

Name: <input type="text" name="name" value="<?php echo $name;?>">
<br>
Color: <input type="text" name="fav_color" value="<?php echo $email;?>">
<br>
Pet:
<input type="radio" name="fav_pev"
<?php if (isset($fav_pet) && $fav_pet=="Cat") echo "checked";?>
value="Cat">Cat
<input type="radio" name="fav_pet"
<?php if (isset($fav_pet) && $gender=="Dog") echo "checked";?>
value="Dog">Dog
<p>
<input type="submit" value="Save" />

</form>

</body>
</html>