<?php
include('../../utils/conn.php');
$sql = 'SELECT epidemic as ep FROM general LIMIT 1';
$ep = mysqli_fetch_assoc(mysqli_query($conn, $sql))['ep'];
if ($ep) {
    $ep = 0;
} else {
    $ep = 1;
}

$sql = 'UPDATE general SET epidemic = ' . $ep;
if ($conn->query($sql) === TRUE) {
    $sql = "UPDATE orders SET status='CANCELED' WHERE status='OFFLINE'";
    if ($conn->query($sql) === FALSE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

