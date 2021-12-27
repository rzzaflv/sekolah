<html>
    <head>
        <title>Membuat Halaman Web Dinamis Dengan PHP</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script type="text/javascript" src="jquery.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <div class="content">
            <header>
                <h1 class="judul">MUHAMMAD REZA FAHLEVI - XI RPL A</h1>
                <h3 class="deskripsi">Membuat Halaman Web Dinamis Dengan PHP</h3>
            </header>

            <div class="menu">
                <ul>
                    <li><a href="index.php?page=home">HOME</a></li>
                    <li><a href="index.php?page=tentang">TENTANG</a></li>
                    <li><a href="index.php?page=belajar">KONTAK</a></li>
                </ul>
            </div>
            
            <div class="badan">
                <?php
                    if(isset($_GET['page'])){
                        $page = $_GET['page'];
                        switch ($page) {
                            case 'home':
                                include "halaman/home.php";
                                break;

                            case 'tentang':
                                include "halaman/tentang.php";
                                break;

                            case 'belajar':
                                include "halaman/kontak.php";
                                break;

                            default:
                                echo "<center><h3>Maaf. Halaman tidak di temukan!</h3></center>";
                                break;
                        }
                    }
                    else{
                        include "halaman/home.php";
                    }
                ?>
            </div>
        </div>
    </body>
</html>