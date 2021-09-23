<html>

<body>
<?php 

        
    $conn = new mysqli("localhost", "root", "","task_manager" );
    if ($conn->connect_error){
        die("connection failed".$conn->connect_error);
    }
    $sql = "SELECT * FROM tbl_lists";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row(result);

    while($queryRow = $result->fetch_row()){
        echo "";
        for($i = 0; $i < $result->field_count ; $i++){
            echo " $queryRow[$i] ";
    }
    echo " ";
}
    echo implode(" ",$row);
    ?>
</body>
</html>