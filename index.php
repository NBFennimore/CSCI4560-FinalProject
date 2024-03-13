<?php
    include_once 'dbconnect.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>DBMS Project Homepage</title>
    

</head>
<body>
    <h1> DBMS Project Home Page</h1>
    <?php 

    
    if (!($conn->connect_error)){
        echo "<p>connected to db</p>";
    }
    ?>
</body>
</html>