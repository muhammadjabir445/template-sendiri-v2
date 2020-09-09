<?php /* Template Name: game-skill-advvance */ ?>
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
<div class="head text-left game-expert text-white">
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
            <img style="" src="https://redhunter.id/wp-content/uploads/2020/09/box-game-development-2D-for-advanced-hunter-b.png" alt="">
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
                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2020/01/Game-Development-2D-For-Intermediate-small.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 col-md-8 text-left">
                        <p class="judul-courses">Game Development 2D For Advanced Hunter</p>
                        <p class="deskripsi">
                        Ingin memiliki Game 2D online sendiri?
						Tidak perlu pusing memikirkan cara membangun server sendiri karena kita menggunakan aplikasi Photon untuk menyiapkannya untuk kita.
						Di dalam training ini kamu akan mendapatkan:
						1. Membuat Lobby dan Rooms
						2. Sinkronisasi antar Pemain
						3. Pengenalan Remote Procedure Call    
                        </p>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- testimoni -->
		<?php include('partial/tentang-kami.php') ?>
        <!-- testimoni -->
        <?php include('partial/testimoni.php') ?>


        <!-- jadwal kelas -->
        <?php include('partial/jadwal-kelas.php') ?>
    </div>
    <?php include('partial/footer.php') ?>
