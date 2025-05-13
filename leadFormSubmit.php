<?php
if ($_POST) {
    require_once('wp-config.php');

    // Establish connection
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $formType = isset($_POST['formType']) ? $_POST['formType'] : '';

    if ($formType === 'mainForm' || $formType === 'contactUsForm' || $formType === 'popUpForm') {
        // Create main_form table if not exists
        $createTableSql = "CREATE TABLE IF NOT EXISTS main_form (
            id INT AUTO_INCREMENT PRIMARY KEY,
            full_name VARCHAR(255),
            email VARCHAR(255),
            company_name VARCHAR(255),
            company_website VARCHAR(255),
            message TEXT,
            submitted_at DATETIME DEFAULT CURRENT_TIMESTAMP
        )";
        mysqli_query($conn, $createTableSql);

        // Sanitize input
        $name = mysqli_real_escape_string($conn, $_POST['name'] ?? '');
        $email = mysqli_real_escape_string($conn, $_POST['email'] ?? '');
        $company = mysqli_real_escape_string($conn, $_POST['company'] ?? '');
        $website = mysqli_real_escape_string($conn, $_POST['website'] ?? '');
        $message = mysqli_real_escape_string($conn, $_POST['message'] ?? '');

        // Insert into main_form
        $insertSql = "INSERT INTO main_form (full_name, email, company_name, company_website, message) 
                      VALUES ('$name', '$email', '$company', '$website', '$message')";
        if (mysqli_query($conn, $insertSql)) {
            echo "success";
        } else {
            echo "error";
        }

    } elseif ($formType === 'subscribeMailForm') {
        // Create subscribe_mail table if not exists
        $createTableSql = "CREATE TABLE IF NOT EXISTS subscribe_mail (
            id INT AUTO_INCREMENT PRIMARY KEY,
            email VARCHAR(255),
            submitted_at DATETIME DEFAULT CURRENT_TIMESTAMP
        )";
        mysqli_query($conn, $createTableSql);

        // Sanitize input
        $email = mysqli_real_escape_string($conn, $_POST['email'] ?? '');

        // Insert into subscribe_mail
        $insertSql = "INSERT INTO subscribe_mail (email) VALUES ('$email')";
        if (mysqli_query($conn, $insertSql)) {
            echo "success";
        } else {
            echo "error";
        }
    } else {
        echo "invalid_form";
    }

    mysqli_close($conn);
}
?>