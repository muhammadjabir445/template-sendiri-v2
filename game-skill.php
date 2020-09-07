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
<div class="head container text-center text-white">
            <h1>Tingkatkan Skill, Jadilah Profesional <br> Game Developer Bersama RedHunter <br> Academy</h1>
            <br>
            <p>Belajar coding dan menjadi Profesional Game Developer <br> dalam waktu 15 minggu dengan jaminan kerja!</p>
            <br>
            <br>
            <div class="button">
                  <a href="#learn" class="btn mr-sm-5">Lihat Program</a>
                <a href="https://api.whatsapp.com/send?phone=6289666263522&text=&source=&data=&app_absent=" target="_blank" class="btn">Hubungi Kami</a>
            </div>
        </div>

    </header>
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
        <div class="learn container" id="learn">
			<div class="judul">
                <h2>Apa yang kamu pelajari ?</h2>
                <p>Kamu akan mempelajari secara lengkap pemrograman dan algoritma <br>
                     untuk menjadi seorang Game Developer yang handal walaupun
                      kamu tidak memiliki <br> background IT Sekalipun
                </p>
            </div>

            <!-- alur -->
            <div class="text-detail soft-id aktive" style="padding-top: 40px;" data-id="soft-id">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2020/01/Game-Development-2D-For-Beginner-small.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 col-md-8 text-left">
                        <p class="text-white">Game Development 2D for Beginner Hunter</p>
                        <p style="color: #C4C4C4;">
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

        <!-- testimoni -->
        <?php include('partial/tentang-kami.php') ?>
        <?php include('partial/testimoni.php') ?>

      
        <div class="fasilitas-pembayaran container">
            <div class="judul">
                <h2><strong>Fasilitas Pembayaran</strong> </h2>
                <br>
                <p style="color: #808080;">Kami memberikan kemudahan dalam pembayaran program pelatihan dari kami, <br>
                     kamu dapat menggunakan cicilan 0% melalui marketplace yang telah bekerja <br> sama dengan kami.</p>
            </div>

            <div class="row">
                <div class="col-12 col-md-4 text-center">
                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2020/01/logo_shopee.png" alt="" width="100px"  class="img-fluid" srcset="" >

                </div>
                <div class="col-12 col-md-4 text-center">
                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2020/01/logo_bukalapak.png" alt="" width="250px" class="img-fluid " srcset="" >
                </div>
                <div class="col-12 col-md-4 text-center">
                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2020/01/logo_tokopedia.png" alt="" width="200px" class="img-fluid " srcset="" >
                </div>
            </div>
        </div>
        <!-- jadwal kelas -->
        <?php include('partial/jadwal-kelas.php') ?>
    </div>
    <?php include('partial/footer.php') ?>
