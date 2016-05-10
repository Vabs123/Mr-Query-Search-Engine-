<html>
<head></head>
<style>

table, th, td {
   border: 1px solid black;
}

</style>
<body>


<table>
    <tr>
        <td>Country</td>
        <td>Type Of Destinaton</td>
    </tr>
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
$t=$_POST["type"];
$c=$_POST["country"];

$sql = "INSERT INTO favourite (country,type) VALUES ('$c','$t')";

$query="SELECT * FROM favourite";
$result = mysqli_query($conn, $query);

if (mysqli_query($conn, $sql)) {
    echo "<script>
alert('Added to favourite list !!!');
</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

if(mysqli_num_rows($result)>0){
      while($i = mysqli_fetch_assoc($result)){
            echo '<tr><td>'.$i['country'].'</td><td>'.$i['type'].'</td></tr>';
        }
    }


mysqli_close($conn);
?>

</table>
</body>
</html>