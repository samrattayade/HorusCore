<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HorusCore Inventory</title>
    
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <!-- Custom CSS -->
    <style>
        body {
            margin: 20px;
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        .table-container {
            width: 100%;
            max-width: 800px;
            margin: auto;
        }
        table {
            margin: auto;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>HorusCore Inventory</h1>

    <div class="table-container">
        <?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        // MySQL connection
        $servername = "localhost";
        $username = "root";
        $password = "";  // No password for default XAMPP setup
        $dbname = "horuscore_inventory";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch data from inventory table
        $sql = "SELECT inventory_id, name, description FROM inventory";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table class='table table-bordered table-hover'>";
            echo "<thead class='thead-dark'><tr><th>Inventory ID</th><th>Name</th><th>Description</th></tr></thead>";
            echo "<tbody>";

            // Output data for each row
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["inventory_id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["description"] . "</td></tr>";
            }

            echo "</tbody></table>";
        } else {
            echo "<div class='alert alert-warning text-center'>No inventory data found</div>";
        }

        $conn->close();
        ?>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
