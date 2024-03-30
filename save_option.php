<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "idw_groupe";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the selected option from the AJAX request
$selectedOption = $_POST['option'];

// Assign values to the variables
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$education_level = $_POST['education_level'];
$french_level = $_POST['french_level'];
$experience = $_POST['experience'];
$call_center = $_POST['call_center'];
$duration = $_POST['duration'];
$activity_type = $_POST['activity_type'];
$qualities = $_POST['qualities'];
$knowledge = $_POST['knowledge'];
$availability = $_POST['availability'];
$phone_number = $_POST['phone_number'];
$cv_file = $_POST['cv_file'];

// Prepare the SQL statement
$stmt = $conn->prepare("INSERT INTO `candidat` (`first_name`, `last_name`, `education_level`, `french_level`, `experience`, `call_center`, `duration`, `activity_type`, `knowledge`, `qualities`, `availability`, `phone_number`, `cv_file`, `selected_option`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param("ssssssssssssss", $first_name, $last_name, $education_level, $french_level, $experience, $call_center, $duration, $activity_type, $knowledge, $qualities, $availability, $phone_number, $cv_file, $selectedOption);

// Execute the statement
if ($stmt->execute()) {
    echo "Option saved successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and the database connection
$stmt->close();
$conn->close();

?>

<!-- // Prepare the SQL statement
if(!$stmt = $conn->prepare("INSERT INTO `candidat` (`first_name`, `last_name`, `education_level`, `french_level`, `experience`, `call_center`, `duration`, `activity_type`, `knowledge`, `qualities`, `availability`, `phone_number`, `cv_file`, `selected_option`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)")){
    die("Error during prepare: " . $conn->error);
}

if(!$stmt->bind_param("sssssssssssss", $first_name, $last_name, $education_level, $french_level, $experience, $call_center, $duration, $activity_type, $knowledge, $availability, $phone_number, $cv_file, $selected_option)){
    die("Error during binding parameters: " . $stmt->error);
}

if (!$stmt->execute()) {
    die("Error during execution: " . $stmt->error);
}

echo "Option saved successfully";

$stmt->close();
$conn->close(); -->