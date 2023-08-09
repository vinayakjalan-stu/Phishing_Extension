<?php
// connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "VMM";

$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// process form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $url = $_POST["url"];
  $source = $_POST["source"];
  $location = $_POST["location"];

  // prepare and bind SQL statement
  $stmt = $conn->prepare("INSERT INTO form (url, source, location) VALUES (?, ?, ?)");
  $stmt->bind_param("sss", $url, $source, $location);

  // execute SQL statement
  if ($stmt->execute()) {
    
  } else {
    echo "Error inserting record: " . $stmt->error;
  }

  // close statement and connection
  $stmt->close();
  $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  <div class="login-box">
    <h1>Save yourself and Others from Phishing</h1>
    <form method="POST">
      <div class="user-box">
        <input type="text" name="url" required="">
        <label>URL</label>
      </div>
      <div class="user-box">
        <input type="text" name="source" required="">
        <label>Source of the URL(Ex. Telegram,Whatsapp, Email,etc.)</label>
      </div>
      <div class="user-box">
        <input type="text" name="location" required="">
        <label>Your Current Location (Only City Name)*</label>
      </div>
      <div class="user-box">
        <h3>*This is taken to protect you and others from such phishing URLs in your residing location.The data you submit is kept confidential with us.<br></h3>
      </div>
      <a href="#">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <button>
          Submit
        </button>
      </a>
    </form>
  </div>
</body>
</html>
