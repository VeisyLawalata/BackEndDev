<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Recording System</title>
    <!-- Tambahkan link ke file CSS yang Anda butuhkan -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* CSS untuk tampilan header */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .header-container {
            text-align: center;
            background-color: #f8f9fa;
            padding: 29.5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 0; /* Menghilangkan margin bottom */
        }
        h1 {
            margin: 0;
            color: #333;
        }
        .nav-menu {
            text-align: center;
            background-color: #f8f9fa;
            padding: 15px 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .nav-menu ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        .nav-menu ul li {
            display: inline-block; /* Mengubah tipe tampilan menjadi horizontal */
            width: 120px; /* Memberikan lebar tetap pada setiap elemen <li> */
            text-align: center;
        }
        .nav-menu ul li a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }
        .nav-menu ul li a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="header-container">
        <h1><b>BOOK RECORDING SYSTEM</b></h1>
    </div>
    <div class="nav-menu">
        <ul>
            <li><a class="nav-link active" aria-current="page" href="<?php echo APP_PATH; ?>">Book List</a></li>
            <li><a class="nav-link" href="<?php echo APP_PATH; ?>/home/page/">Borrowing</a></li>
            <li><a class="nav-link" href="<?php echo APP_PATH; ?>/project/index">Returning</a></li>
        </ul>
    </div>
</body>
</html>
	