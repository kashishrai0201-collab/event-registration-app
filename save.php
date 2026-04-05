<?php

$conn = new mysqli("sql206.infinityfree.com", "if0_41575876", "KashiRai0208", "iif0_41575876_eventdb");

if (!$conn) {
    die("Connection failed");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['event'])) {

        $id = $_POST['id'];
        $name = $_POST['name'];
        $event = $_POST['event'];

        $sql = "INSERT INTO registrations (id, name, event) VALUES ('$id', '$name', '$event')";

        if (mysqli_query($conn, $sql)) {
            echo "Saved Successfully";
        } else {
            echo "Insert Error";
        }

    } else {
        echo "Missing data";
    }

} else {
    echo "Invalid request";
}

mysqli_close($conn);

?>