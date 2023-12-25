<?php
session_start();

// Check if admin is logged in, if not, redirect to login page
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

// Handle image upload
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image']) && isset($_POST['project_title'])) {
    $targetDirectory = "uploads/"; // Directory to store uploads
    $targetFile = $targetDirectory . basename($_FILES['image']['name']); // Get the file name
    $projectTitle = $_POST['project_title']; // Get the project title from the form

    // Move the uploaded file to the specified location
    if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
        // Prepare image details for JSON
        $imageDetails = array(
            'project_title' => $projectTitle,
            'image_name' => basename($_FILES['image']['name']),
            'image_path' => $targetFile
        );

        $jsonFile = 'project_images.json'; // JSON file to store image details

        // Read existing JSON data
        $existingData = file_exists($jsonFile) ? json_decode(file_get_contents($jsonFile), true) : array();

        // Add new image details to existing data
        $existingData[] = $imageDetails;

        // Encode and save data back to JSON file
        file_put_contents($jsonFile, json_encode($existingData, JSON_PRETTY_PRINT));

        echo "File uploaded successfully!";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>


<!-- Your HTML form to capture project title and image upload -->
<!DOCTYPE html>
<html>
<head>
    <title>Admin Image Upload</title>
    <style>
        /* Your existing styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            width: 30%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            padding-right: 5px;
            padding-left: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 5px;
            text-align: left;
        }

        input[type="text"],
        input[type="file"],
        input[type="submit"] {
            width: 70%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            margin-top: 10px; /* Added top margin to input elements */
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Close button styles */
        .close-button {
            background-color: #ff3333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
            display: block;
            width: 150px;
            margin: 20px auto;
            text-align: center;
        }

        .close-button:hover {
            background-color: #cc0000;
        }
    </style>
</head>
<body>
    <h1>Upload New Project Image</h1>
    <form method="post" action="uploadprojects.php" enctype="multipart/form-data">
        <label for="project_title">Project Title:</label>
        <input type="text" id="project_title" name="project_title" required><br><br>

        <label for="image">Select Image:</label>
        <input type="file" id="image" name="image" required><br><br>

        <input type="submit" value="Upload Image">
    </form>

    <!-- Close button -->
    <a href="javascript:void(0)" class="close-button" onclick="closeWindow()">Close</a>

    <!-- JavaScript function to close the window and navigate to projects.php -->
    <script>
        function closeWindow() {
            window.location.href = 'projects.php'; // Redirect to projects.php
            window.close(); // Close the window/tab
        }
    </script>
</body>
</html>