<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Management System - Menu</title>
    <style>
        /* CSS untuk tampilan header */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        header {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h1 {
            margin: 0;
            color: #333;
        }
        .menu-container {
            max-width: 800px;
            margin: 20px auto;
            padding: 0 20px;
        }
        .menu-item {
            border-bottom: 1px solid #ccc;
            padding: 20px 0;
        }
        .menu-item:last-child {
            border-bottom: none;
        }
        .menu-item h2 {
            margin: 0;
            color: #007bff;
        }
        .menu-item p {
            margin: 5px 0;
            color: #555;
        }
    </style>
</head>
<body>
    <header>
        <h1> Menu</h1>
    </header>
    
    <div class="menu-container">
        <?php
        // Data menu (biasanya didapatkan dari database)
        $menus = array(
            array("name" => "Nasi Goreng", "price" => 15000),
            array("name" => "Mie Goreng", "price" => 12000),
            array("name" => "Ayam Bakar", "price" => 25000)
        );

        // Menampilkan setiap menu
        foreach ($menus as $menu) {
            echo "<div class='menu-item'>";
            echo "<h2>{$menu['name']}</h2>";
            echo "<p>Rp. {$menu['price']}</p>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>
