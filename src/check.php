<?php
    mysql_connect("localhost", "root","") or die(mysql_error());
    mysql_select_db("searchbox") or die(mysql_error());
$u=$_POST["user"];
$p=$_POST["password"];
$h = mysql_query("SELECT * FROM login WHERE User = '$u' and password = '$p'") or die(mysql_error());

 if(mysql_num_rows($h) == 0) {
     echo "<script>
alert('You Have To Register Yourself First By Signing Up!!!');
window.location.href='http://localhost/phpcodes/result.php';
</script>";
} else {
     echo "<script>
alert('You Have logged In :)');
window.location.href='http://localhost/phpcodes/result.php';
</script>";
}
?>