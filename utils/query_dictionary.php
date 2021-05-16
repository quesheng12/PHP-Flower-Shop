<?php
include('conn.php');
if ($_POST['type'] == 'input') {
    $sql = 'SELECT value FROM dictionary WHERE input=' . $_POST['value'] . ' LIMIT 1';
    echo mysqli_fetch_assoc(mysqli_query($conn, $sql))['value'];
} else {
    $sql = 'SELECT input FROM dictionary WHERE value =' . $_POST['value'] . ' LIMIT 1';
    echo mysqli_fetch_assoc(mysqli_query($conn, $sql))['input'];
}