<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dhiva Runkat</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <style>
        /* Style CSS here */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header, nav, main, footer {
            display: block;
            padding: 20px;
        }
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin-right: 20px;
        }
        nav ul li a {
            text-decoration: none;
            color: #333;
        }
        .gallery img {
            width: 100%;
            max-width: 300px;
            height: auto;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Selamat Datang di Website Saya</h1>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <center>
        <section id="home">
            <h2>Home</h2>
            <p>Selamat Datang. Ini home page.</p>
        </section>
        <section id="gallery">
            <h2>Gallery</h2>
            <div class="gallery">
                <img src="Dhiva1.jpg" alt="Image 1">
                <img src="Dhiva2.jpg" alt="Image 2">
                <img src="Dhiva3.jpg" alt="Image 3">
            </div>
        </section>
        <section id="blog">
            <h2>Blog</h2>
            <?php
            $sql = "SELECT JUDUL, LINK FROM blog";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<article>";
                    echo "<h3>" . $row["title"] . "</h3>";
                    echo "<p><a href='" . $row["url"] . "'>" . $row["title"] . "</a></p>";
                    echo "</article>";
                }
            } else {
                echo "<p>No blog posts found.</p>";
            }
            ?>
        </div>
        </section>
        </center>
        <section id="contact">
            <h2>Contact</h2>
            <div style="display: flex; align-items: center;">
                <img src="gmail.png" alt="gambar" width="2%" height="3%">
                <p>dhivarunkat026@student.unsrat.ac.id</p>
            </div>
            <div style="display: flex; align-items: center;">
                <img src="IG.jpg" alt="gambar2" width="2%" height="3%">
                <p>dhivarunkat</p>
            </div>
        </section>
    </main>
    <script src="script.js"></script>
</body>
</html>
