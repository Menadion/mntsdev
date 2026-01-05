<?php

    include "connection.php";

    $sql = "SELECT * FROM customers";
    $result = $connection->query($sql);

    $data = [];

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }

?>