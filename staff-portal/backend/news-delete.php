<?php

include('../../utils/conn.php');

$id = $_POST['id'];


$sql = "DELETE FROM news WHERE id= " . $id . ";";
if ($conn->query($sql) === TRUE) {
    echo "删除成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
