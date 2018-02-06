<!DOCTYPE html>
<html lang="de">

<?php
include('parts/head.php');
?>

<body>

    <?php include('parts/header.php'); ?>

    <div class="wrapper c-galerie">
        <div class="mover">
            <div class="side-image">

                <div class="si-inner" id="si-galerie"></div>
                <div class="si-inner-overlay">
                    <a href="index.php"><img class="logo" src="gx/logo.png" alt="logo"></a>
                </div>

                <!-- custom image here -->

            </div>
            <div class="content">

                <h2>Galerie</h2>

                <div class="gallery">
                    <div class="record" id="rec-sommer">
                        <div class="record-inner">
                            <h3>Sommer</h3>
                        </div>
                    </div>
                    <div class="record" id="rec-business">
                        <div class="record-inner">
                            <h3>Business</h3>
                        </div>
                    </div>
                    <div class="record" id="rec-elegant">
                        <div class="record-inner">
                            <h3>Elegant</h3>
                        </div>
                    </div>
                    <div class="record" id="rec-hochzeit">
                        <div class="record-inner">
                            <h3>Hochzeit</h3>
                        </div>
                    </div>
                </div>

            </div>
            <div class="menu"><?php include('parts/menu.php'); ?></div>
        </div>
    </div>

    <?php include('parts/footer.php'); ?>

    </body>
</html>