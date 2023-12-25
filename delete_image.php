<?php
session_start();

// Check if the admin is logged in
if (isset($_SESSION['admin'])) {
    if (isset($_POST['delete_image'])) {
        $jsonFile = 'project_images.json';
        $imageDetails = file_exists($jsonFile) ? json_decode(file_get_contents($jsonFile), true) : [];

        // Get the image title or identifier to delete (you need to modify this)
        $imageToDelete = $_POST['image_title']; // Modify this based on your identification method

        foreach ($imageDetails as $key => $image) {
            if ($image['project_title'] === $imageToDelete) {
                // Delete image file from the uploads directory
                unlink($image['image_path']);

                // Remove the image details from the JSON array
                unset($imageDetails[$key]);
                break; // Stop searching once found
            }
        }

        // Update the JSON file
        file_put_contents($jsonFile, json_encode(array_values($imageDetails)));

        // Redirect or display a success message
        header('Location: projects.php'); // Redirect if needed
        // echo "Image deleted successfully!";
    }
}
?>
