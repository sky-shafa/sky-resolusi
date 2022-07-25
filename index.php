<!DOCTYPE html>
<html>

<head>
    <title>Testing</title>
    <!-- menghubungkan dengan file css -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- menghubungkan dengan file jquery -->
    <script type="text/javascript" src="jquery.js"></script>
    <link href='logo2.png' rel='shortcut icon'>
</head>

<body>
    <div class="content">
        <header>
            <h1 class="judul">Selamat Datang</h1>
            <h3 class="deskripsi">Membuat Halaman Web Dinamis Dengan PHP</h3>
        </header>

        <div class="menu">
            <ul>
                <li><a href="index.php?page=home">HOME</a></li>
                <li><a href="index.php?page=tentang">TENTANG</a></li>
                <li><a href="index.php?page=tutorial">TUTORIAL</a></li>
            </ul>
        </div>

        <div class="badan">


            <?php
            if (isset($_GET['page'])) {
                $page = $_GET['page'];

                switch ($page) {
                    case 'home':
                        include "home.php";
                        break;
                    case 'tentang':
                        include "tentang.php";
                        break;
                    case 'tutorial':
                        include "tutorial.php";
                        break;
                    default:
                        echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                        break;
                }
            } else {
                include "home.php";
            }

            ?>

        </div>
    </div>
</body>

</html>
