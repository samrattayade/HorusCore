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
        // Mock data (static array)
        $inventory = [
            ["inventory_id" => 1001, "name" => "COG", "description" => "convenience goods"],
            ["inventory_id" => 2001, "name" => "SHG", "description" => "shopping goods"],
            ["inventory_id" => 2008, "name" => "SPG", "description" => "specialty goods"],
            ["inventory_id" => 3001, "name" => "UNG", "description" => "unsought goods"]
        ];

        // Check if the mock data array has items
        if (count($inventory) > 0) {
            echo "<table class='table table-bordered table-hover'>";
            echo "<thead class='thead-dark'><tr><th>Inventory ID</th><th>Name</th><th>Description</th></tr></thead>";
            echo "<tbody>";

            // Loop through each item in the mock data and display it
            foreach ($inventory as $item) {
                echo "<tr><td>" . $item["inventory_id"] . "</td><td>" . $item["name"] . "</td><td>" . $item["description"] . "</td></tr>";
            }

            echo "</tbody></table>";
        } else {
            echo "<div class='alert alert-warning text-center'>No inventory data found</div>";
        }
        ?>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
