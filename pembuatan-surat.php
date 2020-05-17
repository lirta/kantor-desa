<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DESA KARYA INDAH</title>
    <link rel="stylesheet" href="assets/css/components.css">
    <link rel="stylesheet" href="assets/css/icons.css">
    <link rel="stylesheet" href="assets/css/responsee.css">
    <link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="assets/css/template-style.css">
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="assets/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-ui.min.js"></script>
</head>

<body class="size-1140">
    <!-- PREMIUM FEATURES BUTTON -->
    <!-- <a target="_blank" class="hide-s" href="../template/eleganter-premium-responsive-business-template/"
    style="position:fixed;top:120px;right:-14px;z-index:10;"><img src="assets/img/premium-features.png" alt=""></a> -->
    <!-- HEADER -->
    <header role="banner" class="position-absolute">
        <!-- Top Navigation -->
        <nav class="background-transparent background-transparent-hightlight full-width sticky">
            <div class="s-12 l-2">
                <a href="index.html" class="logo">
                    <!-- Logo White Version -->
                    <img class="logo-white" width="40xp" src="assets/img/logo.png" alt="">
                    <!-- Logo Dark Version -->
                    <img class="logo-dark" src="assets/img/logo-dark.png" alt="">
                </a>
            </div>
            <?php include 'menu.php'; ?>
        </nav>
    </header>

    <!-- MAIN -->
    <main role="main">
        <!-- Content -->
        <article>
            <header class="section background-dark">
                <div class="line">
                    <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1">Syarat syarat dalam pembuatan surat</h1>
                    <p class="margin-bottom-0 text-size-16">Silahkan lihat syarat syarat pembuatan surat yang ingin anda urus,
                        pastikan anda inputkan seluruh persyaratan yang di butuhkan supaya pengurusan lancar.<br>
                        Untuk proses selanjutnya silahkan menunggu konfirmasi dari petugas yang berwenang.</p>
                </div>
            </header>
            <section class="section background-white">
                <div class="line">
                    <h2 class="text-size-40 margin-bottom-30">Pelayanan Pembuatan Surat</h2>
                    <hr class="break-small background-primary margin-bottom-30">
                </div>
                <div class="line ">
                    <div class="margin">
                        <?php
                        include 'assets/coneksi/config.php';
                        $qsurat = mysqli_query($koneksi, "SELECT * FROM jenis_surat ");
                        while ($surat = mysqli_fetch_assoc($qsurat)) { ?>
                            <h2 class="text-thin text-center text-primary"><?php echo "$surat[nama_surat]"; ?></h2>
                            <hr>
                            <p class="margin-bottom-30">
                                <ul>
                                    <?php
                                    $qsyarat = mysqli_query($koneksi, "SELECT * FROM syarat WHERE id_jenis_surat='$surat[id_jenis_surat]' ");
                                    while ($syarat = mysqli_fetch_assoc($qsyarat)) {
                                        echo "<li>$syarat[syarat]</li>";
                                    } ?>
                                </ul>
                            </p>
                            <hr>
                            <?php echo "<div class='button button-primary-stroke text-size-14'><a  href='pengajuan.php?id=$surat[id_jenis_surat]'>Pengajuan</a></div>"; ?>
                            <hr>
                        <?php } ?>
                    </div>
                </div>
            </section>
        </article>
    </main>

    <!-- FOOTER -->
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
    <script type="text/javascript" src="assets/js/responsee.js"></script>
    <script type="text/javascript" src="assets/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="assets/js/template-scripts.js"></script>
</body>

</html>