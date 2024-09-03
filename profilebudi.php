<?php
// You can use PHP to include common elements or set variables if needed
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <style>
        /* Reset and general styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            color: #333;
        }
        .header {
            background: linear-gradient(135deg, #4CAF50, #45a049);
            color: white;
            padding: 20px 30px;
            text-align: center;
            font-size: 28px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .main-content {
            display: flex;
            margin: 20px auto;
            max-width: 1200px;
            padding: 0 15px;
        }
        .sidebar {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            padding: 20px;
            margin-right: 20px;
        }
        .sidebar h2 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #4CAF50;
        }
        .sidebar ul {
            list-style-type: none;
        }
        .sidebar ul li {
            margin-bottom: 12px;
        }
        .sidebar ul li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            padding: 8px;
            border-radius: 4px;
            transition: background-color 0.3s, color 0.3s;
        }
        .sidebar ul li a:hover {
            background-color: #4CAF50;
            color: white;
        }
        .content {
            flex: 1;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .content h2 {
            font-size: 26px;
            margin-bottom: 20px;
            color: #4CAF50;
        }
        .content p {
            line-height: 1.6;
        }
        .footer {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 20px;
            position: fixed;
            width: 100%;
            bottom: 0;
            box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.1);
        }
        @media (max-width: 768px) {
            .main-content {
                flex-direction: column;
                padding: 0;
            }
            .sidebar {
                width: 100%;
                margin-right: 0;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Halaman Utama</h1>
    </div>

    <div class="main-content">
        <div class="sidebar">
            <h2>Sidebar</h2>
            <ul>
                <li><a href="profilbudi.php">Profile</a></li>
                <!-- Add more links here -->
            </ul>
        </div>

        <div class="content">
            <h2>Konten Utama</h2>
            <p>Selamat datang di halaman utama. Ini adalah area konten utama Anda. Di sini Anda dapat menambahkan informasi penting, berita terbaru, atau apapun yang relevan untuk pengunjung situs Anda.</p>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2024 Halaman Utama. All rights reserved.</p>
    </div>
</body>
</html>