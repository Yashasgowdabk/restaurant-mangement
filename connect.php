<?php


$conn = new mysqli('localhost','root','','abcd');

$sql = "INSERT INTO contact (name, email, phone) VALUES ('$_POST[name]', '$_POST[email]', '$_POST[phone]')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
    echo "contact details succesfully received.............";
?>

