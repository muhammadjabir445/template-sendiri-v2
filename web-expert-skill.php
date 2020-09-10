<?php /* Template Name: web-skill-vue-laravel */ ?>
<?php include('partial/nav.php') ?>
<!-- ini nsro title  -->
<title>Redhunter - Belajar Programming secara intensif selama 16 minggu dengan jaminan kerja setelah lulus</title>
<!-- ini naro metatag -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/template-sendiri-v2/css/career.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/template-sendiri-v2/css/skill-one.css">
<?php include('partial/nav_next.php') ?>
<div class="head web-expert text-center text-white">
        <div class="container text-left">
            <h1>Tingkatkan Skill, Jadilah Profesional <br> Web Developer Bersama RedHunter <br> Academy</h1>
            <br>
            <p>Belajar coding dan menjadi Profesional Web Developer <br> dalam waktu 15 minggu dengan jaminan kerja!</p>
            <br>
            <br>
            <div class="button">
                <a href="#learn" class="btn mr-sm-5">Pilih Program</a>
                <a href="https://api.whatsapp.com/send?phone=6289666263522&text=&source=&data=&app_absent=" target="_blank" class="btn">Hubungi Kami</a>
            </div>
            <img style="" src="https://redhunter.id/wp-content/uploads/2020/09/box-Full-Stack-Developer-with-laravel-vue-JS-b.png" alt="">
        </div>
            
</div>
    <div class="content text-center">

        <!-- media -->
        <div class="level container text-left">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="content-level">
                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2020/01/icon_karir_kelas.png" class="float-left" style="width: 50px;
                        height: 50px;" alt="">
                        <div>
                            <span class="judul">Kelas</span>
                            <br>
                            <span class="sub-judul">Skill Accelerator</span>
                        </div>
                    </div>
                   
                </div>

                <div class="col-12 col-md-6">
                    <div class="content-level">
                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2020/01/icon_karir_level.png" class="float-left" style="width: 50px;
                        height: 50px;" alt="">
                        <div>
                            <span class="judul">Level</span>
                            <br>
                            <span class="sub-judul">Expert</span>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>


        <!-- learn by -->
        
      
        <br>
        <br>
        <?php include('partial/media-partner.php') ?>
        <!-- tentang kami -->
        <div class="card-detail-program container" id="learn">
			<div class="judul">
                <h2>Apa yang kamu pelajari ?</h2>
                <p>Kamu akan mempelajari secara lengkap pemrograman dan algoritma <br>
                     untuk menjadi seorang Web Developer yang handal walaupun
                      kamu tidak memiliki <br> background IT Sekalipun
                </p>
            </div>

            <br>
            <br>
            <!-- alur -->
            <div class="text-detail soft-id aktive" style="padding-top: 40px;" data-id="soft-id">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <img src="https://redhunter.id/wp-content/uploads/2020/09/box-modul-flashdicsk-web-3.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 col-md-8 text-left">
                        <p class="judul-courses">Full Stack Developer with laravel & vue JS</p>
                        <p class="deskripsi">
                            Kamu akan mempelajari framework javascript untuk frontend vueJS yg akan di padukan dengan backend laravel. Dimana kedua framework ini sangat cocok di gabungkan. Di dalam training ini kamu akan mempelajari: Cara membuat backend dengan laravel, serta menghubungkan laravel dengan vue JS dan membuat project aplikasi.Kelas ini merupakan kelas penyempurna dari kelas-kelas yang telah kamu ikuti sebelumnya, kelas ini akan menentukan apakah kamu berhasil dan layak menjadi seorang profesional Web Developer.</p>                    
                    </div>
                </div>
            </div>
        </div>

        <!-- testimoni -->
        <?php include('partial/tentang-kami.php') ?>
        <?php include('partial/testimoni.php') ?>

        <!-- jadwal kelas -->
        <?php include('partial/jadwal-kelas.php') ?>
    </div>
    <?php include('partial/footer.php') ?>
