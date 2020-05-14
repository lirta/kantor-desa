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
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
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
            <div class="section background-white">
                <div class="line">
                    <div class="margin">
                        <!-- Contact Form -->
                        <div class="s-12 m-12 l-6">
                            <?php include 'assets/coneksi/config.php';
                            $qsurat = mysqli_query($koneksi, "SELECT * FROM jenis_surat WHERE id_jenis_surat='$_GET[id]' ");
                            $surat = mysqli_fetch_assoc($qsurat); ?>
                            <h2 class="margin-bottom-10"><?php echo "$surat[nama_surat]"; ?><br>
                                <hr>Formulir Pengajuan</h2>

                            <form name="contactForm" class="customform" method="post" enctype="multipart/form-data" action="pengajuan_proses.php">
                                <div class="s-12" hidden>
                                    <label>Jenis Surat</label>
                                    <input name="surat" placeholder="Nik" type="text" />
                                </div>
                                <div class="s-12">
                                    <label>Nik</label>
                                    <input name="nik" placeholder="Nik" type="text" />
                                </div>
                                <div class="s-12">
                                    <label>Nama</label>
                                    <input name="nama" placeholder="Nama" type="text" />
                                </div>
                                <div class="line">
                                    <div class="margin">
                                        <div class="s-12 m-12 l-6">
                                            <label>Tempat Lahir</label>
                                            <input name="tmpl" placeholder="Tempat Lahir" type="text" />
                                        </div>
                                        <div class="s-12 m-12 l-6">
                                            <label>Tanggal Lahir</label>
                                            <input name="tgll" placeholder="Tanggal Lahir" type="text" />
                                        </div>
                                    </div>
                                </div>
                                <div class="s-12">
                                    <label>Agama</label>
                                    <input name="agama" placeholder="Agama" type="text" />
                                </div>
                                <div class="s-12">
                                    <label>Pekerjaan</label>
                                    <input name="pk" placeholder="Pekerjaan" type="text" />
                                </div>
                                <div class="s-12">
                                    <label>No Hp</label>
                                    <input name="hp" placeholder="No Hp" type="text" />
                                </div>
                                <div class="s-12">
                                    <label>Alamat</label>
                                    <input name="alamat" placeholder="Alamat" type="text" />
                                </div>
                                <h3>File Persyaratan</h3>
                                <?php
                                $qsyarat = mysqli_query($koneksi, "SELECT * FROM syarat WHERE id_jenis_surat='$surat[id_jenis_surat]' ");
                                $jml = mysqli_num_rows($qsyarat);
                                while ($syarat = mysqli_fetch_assoc($qsyarat)) { ?>
                                    <div class="s-12" hidden>
                                        <label><?php echo "$syarat[syarat]"; ?></label>
                                        <input name="sya[]" type="text" value="<?php echo "$syarat[id_syarat]"; ?>" />
                                    </div>
                                    <div class="s-12">
                                        <label><?php echo "$syarat[syarat]"; ?></label>
                                        <input name="gm[<?php echo "$syarat[id_syarat]"; ?>]" placeholder="File" type="file" />
                                    </div>
                                <?php } ?>
                                <div class="s-12" hidden>
                                    <label>jml</label>
                                    <input name="jml" placeholder="Alamat" type="text" value="<?php echo "$jml"; ?>" />
                                </div>
                                <div class=" s-4"><button class="s-4 submit-form button background-primary text-white" type="submit">Submit</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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