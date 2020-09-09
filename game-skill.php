<?php /* Template Name: game-skill-beginner */ ?>
<?php include('partial/nav.php') ?>
<!-- ini nsro title  -->
<title>Redhunter - Belajar Programming secara intensif selama 16 minggu dengan jaminan kerja setelah lulus</title>
<!-- ini naro metatag -->
<meta name="keywords" content="Redhunter,Redhunter Academy,Pelatihan Web programming,Pelatihan,Web programming,Android Programming,Pelatihan android programming,belajar membuat aplikasi android,pelatihan full stack developer,fullstack,hacking for kids, game for kids,coding for kids">
<!-- Meta Robot -->
<meta name="robots" content="index, follow">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/template-sendiri-v2/css/career.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/template-sendiri-v2/css/skill-one.css">
<?php include('partial/nav_next.php') ?>
<div class="head game-basic text-left text-white">
        <div class="container">
            <h1>Tingkatkan Skill, Jadilah Profesional <br> Game Developer Bersama RedHunter <br> Academy</h1>
            <br>
            <p>Belajar coding dan menjadi Profesional Game Developer <br> dalam waktu 15 minggu dengan jaminan kerja!</p>
            <br>
            <br>
            <div class="button">
                  <a href="#learn" class="btn mr-sm-5">Lihat Program</a>
                <a href="https://api.whatsapp.com/send?phone=6289666263522&text=&source=&data=&app_absent=" target="_blank" class="btn">Hubungi Kami</a>
            </div>
            <img style="" src="https://redhunter.id/wp-content/uploads/2020/09/box-game-development-2D-for-beginner-hunter-b.png" alt="">

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
        
       
        <!-- tentang kami -->
        <?php include('partial/media-partner.php') ?>

        <div class="card-detail-program container" id="learn">
			<div class="judul">
                <h2>Apa yang kamu pelajari ?</h2>
                <p>Kamu akan mempelajari secara lengkap pemrograman dan algoritma <br>
                     untuk menjadi seorang Game Developer yang handal walaupun
                      kamu tidak memiliki <br> background IT Sekalipun
                </p>
            </div>
            <br>
            <br>
            <!-- alur -->
            <div class="text-detail soft-id aktive" style="padding-top: 40px;" data-id="soft-id">
                 <div class="row">
                    <div class="col-12 col-md-4">
                        <img src="https://redhunter.id/wp-content/uploads/2020/09/box-game-development-2D-for-beginner-hunter-b.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 col-md-8 text-left">
                        <p class="judul-courses">Game Development 2D for Beginner Hunter</p>
                        <p class="deskripsi">
                            
                        Training ini adalah langkah awal kamu untuk terjun ke dalam Game Development 2D.
                        Di dalam training ini kamu akan mendapatkan:
                        1. Pengenalan Unity Hub & Unity Editor
                        2. Pengenalan C# Fundamental
                        3. Pengenalan Game Object & Component
                        4. Manipulasi Game Object secara Realtime
                        5. Otomatisasi dengan Coroutine
                        6. Publish Game ke dalam Hosting Firebase.
                    </p>
                    </div>
                </div>
                
            </div>


        </div>
        <!-- jadwal kelas -->
        <?php include('partial/tentang-kami.php') ?>
        <!-- testimoni -->
        <?php include('partial/testimoni.php') ?>


        <!-- jadwal kelas -->
        <?php include('partial/jadwal-kelas.php') ?>
    </div>
    <?php include('partial/footer.php') ?>
