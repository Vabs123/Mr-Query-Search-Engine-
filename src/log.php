<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "searchbox";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$n=$_POST["Name"];
$u=$_POST["user"];
$e=$_POST["email"];
$p=$_POST["password"];
$query="SELECT * FROM login WHERE User = '$u' and password = '$p'";
$result = mysqli_query($conn, $query);
$sql = "INSERT INTO login (Name,User,email,password) VALUES ('$n','$u','$e','$p')";
if(mysqli_num_rows($result)>0){
	echo "<script>
alert('User Already Registered !!!');
window.location.href='http://localhost/phpcodes/result.php';
</script>";
}
elseif (mysqli_query($conn, $sql)) {
    echo "<script>
alert('You Have Registered Yourself :)');
window.location.href='http://localhost/phpcodes/result.php';
</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>