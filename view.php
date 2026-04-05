<?php
$conn = new mysqli("sql206.infinityfree.com", "if0_41575876", "KashiRai0208", "iif0_41575876_eventdb");

if ($conn->connect_error) {
    die("Connection failed");
}

$result = $conn->query("SELECT * FROM registrations");

echo "<h2>Registrations</h2>";
echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Event</th></tr>";

while($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['event']}</td>
    </tr>";
}

echo "</table>";

$conn->close();
?>