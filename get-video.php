<?php
header("Content-Type: application/json");

// Database credentials
$host = "localhost"; // Change if needed
$user = "heconseq_johnpauldominic";
$password = "Queen_Boherha_1975";
$database = "heconseq_johnpauldominic";

// Connect to MySQL
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die(json_encode(["error" => "Database connection failed"]));
}

// Fetch the latest video ID
$sql = "SELECT video_id FROM videos ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo json_encode(["videoId" => $row["video_id"]]);
} else {
    echo json_encode(["error" => "No video found"]);
}

// Close connection
$conn->close();
?>
