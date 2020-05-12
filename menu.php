<div id="hornav" class="row text-light">
    <div class="col-md-12">
        <div class="text-center visible-lg">
            <ul id="hornavmenu" class="nav navbar-nav">
                <li>
                    <a href="index.php" class="fa-home active">Home</a>
                </li>
                <li>
                    <span class="fa-copy ">Pembuatan Surat</span>
                    <ul>
                        <?php
                        include 'assets/coneksi/config.php';
                        $hasila = mysqli_query($koneksi, "SELECT * FROM jenis_surat ");
                        while ($menu = mysqli_fetch_assoc($hasila)) {
                            echo "<li>
                                    <a href='syarat.php?id=$menu[id_jenis_surat]'>$menu[nama_surat]</a>
                                </li>";
                        } ?>
                    </ul>
                </li>
                <li>
                    <a href="contact.php" class="fa-comment ">Contact</a>
                </li>
                <li>
                    <a href="sistem/index.php" class="fa-sign-in ">Log In</a>
                </li>
            </ul>
        </div>
    </div>
</div>