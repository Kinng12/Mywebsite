<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user data from the form
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Validate and process the data as needed
    // For example, you can save it to a text file on the server
    $data = "Name: $name\nEmail: $email\n";

    // Set the file path where you want to save the data
    $file_path = "userdata.txt";

    // Open the file for writing (create it if it doesn't exist)
    $file = fopen($file_path, "a");

    if ($file) {
        // Write the data to the file
        fwrite($file, $data);

        // Close the file
        fclose($file);

        echo "Data has been saved successfully!";
    } else {
        echo "Error: Unable to save data.";
    }
}
?>

