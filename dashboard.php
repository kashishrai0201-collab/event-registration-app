<?php
header("Content-Type: application/json");

$conn = new mysqli("sql206.infinityfree.com", "if0_41575876", "KashiRai0208", "iif0_41575876_eventdb");

if ($conn->connect_error) {
    echo json_encode(["error" => "DB connection failed"]);
    exit();
}

// Total
$total = 0;
$result = $conn->query("SELECT COUNT(*) as total FROM registrations");
if ($result) {
    $row = $result->fetch_assoc();
    $total = $row['total'];
}

// Popular
$popular = "None";
$result2 = $conn->query("SELECT event, COUNT(*) as c FROM registrations GROUP BY event ORDER BY c DESC LIMIT 1");
if ($result2 && $result2->num_rows > 0) {
    $row2 = $result2->fetch_assoc();
    $popular = $row2['event'];
}

echo json_encode([
    "total" => $total,
    "popular" => $popular
]);

$conn->close();
?>