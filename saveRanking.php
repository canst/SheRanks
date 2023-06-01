<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sheranks_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$universityName = $_POST['university-name'];
$country = $_POST['country'];
$city = $_POST['city'];
$address = $_POST['address'];
$safetyRanking = $_POST['safety'];
$genderViolenceRanking = $_POST['gender-violence'];
$inclusivityRanking = $_POST['inclusivity'];

// Prepare and execute the SQL statement to insert ranking data into the universities table
$sql = "INSERT INTO universities (university_name,country, city, address, safety_ranking, gender_violence_ranking, inclusivity_ranking)
        VALUES ('$universityName', '$country', '$city', '$address', '$safetyRanking', '$genderViolenceRanking', '$inclusivityRanking')";

if ($conn->query($sql) === TRUE) {
    echo "Ranking submitted successfully";
    // Redirect back to index.php after successful submission
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
