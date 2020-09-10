<?php /* Template Name: security-karir */ ?>
<?php include('partial/nav.php') ?>
<!-- ini nsro title  -->
<title>Redhunter - Belajar Programming secara intensif selama 16 minggu dengan jaminan kerja setelah lulus</title>
<!-- ini naro metatag -->
<meta name="keywords" content="Redhunter,Redhunter Academy,Pelatihan Web programming,Pelatihan,Web programming,Android Programming,Pelatihan android programming,belajar membuat aplikasi android,pelatihan full stack developer,fullstack,hacking for kids, game for kids,coding for kids">
<!-- Meta Robot -->
<meta name="robots" content="index, follow">

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/template-sendiri-v2/css/career.css">
<?php include('partial/nav_next.php') ?>
<div class="head text-center text-white">
    <div class="container">
            <h1>Tingkatkan Skill, Jadilah Pentester <br> Bersama RedHunter Academy</h1>
            <br>
            <p>Kembangkan kemampuanmu, pecahkan kasus, dan jadilah Pentester <br> yang handal, dengan jaminan Pekerjaan!</p>
            <br>
            <br>
            <div class="button">
                  <a href="#learn" class="btn mr-sm-5">Lihat Program</a>
                <a href="https://api.whatsapp.com/send?phone=628118889611&text=&source=&data=&app_absent=" target="_blank" class="btn">Hubungi Kami</a>
            </div>
    </div>
            
</div>
    <div class="content text-center">

        <!-- media -->
        <div class="level container text-left">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="content-level">
                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2020/01/icon_karir_kelas.png" class="float-left" style="width: 50px;
                        height: 50px;" alt="">
                        <div>
                            <span class="judul">Kelas</span>
                            <br>
                            <span class="sub-judul">Career Program</span>
                        </div>
                    </div>
                   
                </div>

                <div class="col-12 col-md-4">
                    <div class="content-level">
                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2020/01/icon_karir_level.png" class="float-left" style="width: 50px;
                        height: 50px;" alt="">
                        <div>
                            <span class="judul">Level</span>
                            <br>
                            <span class="sub-judul">Profesional</span>
                        </div>
                    </div>
                   
                    
                </div>

                <div class="col-12 col-md-4">
                    <div class="content-level">
                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2020/01/icon_karir_profesi.png" class="float-left" style="width: 50px;
                        height: 50px;" alt="">
                        <div>
                            <span class="judul">Profesi</span>
                            <br>
                            <span class="sub-judul">Profesional
                                Pentester</span>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
        <?php include('partial/media-partner.php') ?>
        <!-- tentang kami -->
        <div class="tentang-kami container" id="learn">
			<div class="judul">
                <h2>Apa yang kamu pelajari ?</h2>
                <p>Belajar keamanan dengan struktur sistem yang sedang dibutuhkan di dalam dunia kerja.
                </p>
            </div>
            <div class="menu text-center text-white">
                <a href="#" class="btn text-white btn-program-route aktive" data-id="expert-id">Professional Level</a> 
                <a href="#" class="btn text-white btn-program-route" data-id="soft-id">Soft Level</a> 
            </div>

            <!-- fasilitas -->
            <div class="text-detail aktive expert-id" data-id="expert-id">
                <div class="row text-detail-card">
                    <div class="col-12 col-md-4">
                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2020/09/box-modul-flashdicsk-security.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 col-md-8 text-left">
                        <p class="judul-courses">RedHunter Security Course</p>
                        <p class="deskripsi">
							Kamu akan belajar dan dibimbing secara intensif mulai dari dasar-dasar untuk menjadi seorang Profesional Pentesting yang handal hingga menjadi Expert Pentester yang dapat menguasai sistem keamanan secara general maupun specialist terhadap keamanan platform  tertentu.
Materi yang akan kamu pelajari berasal dari pengalaman lebih dari 30 tahun seseorang yang aktif serta bekerja sebagai Specialist Pentester, pengalaman dari seseorang yang telah menjaga lebih dari ribuan sistem keamanan dimasa hidupnya, seperti yang kita tahu “Jika ingin menjadi yang terbaik, belajar lah dari yang terbaik”.

</p>                    </div>
                </div>
            </div>

            <div class="text-detail soft-id" data-id="soft-id">
                <div class="row text-detail-card">
                    <div class="col-12 col-md-4">
                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2020/01/banner_karir_web_level_softskill.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 col-md-8 text-left">
                        <p class="judul-courses">Soft Skill yang akan kamu pelajari</p>
                        <p class="deskripsi">
                            Setelah kamu selesai mengikuti pelatihan mulai dari beginner hingga expert,
                             kamu akan dibekali soft skill yang berguna untuk menunjang kesuksesan karir kamu kelak,
                              kamu akan belajar bagaimana memimpin sebuah team disini,
                               bagaimana membuat dan menyampaikan presentasi yang memukau, dan juga kamu akan belajar bagaimana meningkatkan kepercayaan diri, serta bagaimana menghadapi proses interview dan juga CV yang baik saat melamar pekerjaan,
                             dengan soft skill ini kamu akan dengan cepat beradaptasi di karir impianmu.                   
                             </div>
                </div>
            </div>



        </div>

        <!-- testimoni -->

         <?php include('partial/testimoni.php') ?>

        <!-- jadwal kelas -->
        <?php include('partial/jadwal-kelas.php') ?>
    </div>
    <?php include('partial/footer.php') ?>
