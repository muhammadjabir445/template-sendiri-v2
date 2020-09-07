<?php /* Template Name: Blog v2 */ ?>
<?php include('partial/nav.php') ?>

	  <!-- Primary Meta Tags -->
<title>Redhunter - Belajar ngoding secara intensif dengan jaminan kerja!</title>
<meta name="title" content="Redhunter - Belajar ngoding secara intensif dengan jaminan kerja!">
<meta name="description" content="Dengan Jaminan Kerja,program ini akan membantu mewujudkan karir impianmu,kamu akan dilatih secara intensif untuk menjadi seorang profesional siap kerja!">
<meta name="keywords" content="Redhunter,Redhunter Academy,Pelatihan Web programming,Pelatihan,Web programming,Android Programming,Pelatihan android programming,belajar membuat aplikasi android,pelatihan full stack developer,fullstack,hacking for kids, game for kids,coding for kids">
<!-- Meta Robot -->
<meta name="robots" content="index, follow">
<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://redhunter.id/">
<meta property="og:title" content="Tingkatkan skill,raih karir impianmu bersama RedHunter">
<meta property="og:description" content="Dengan Jaminan Kerja,program ini akan membantu mewujudkan karir impianmu,kamu akan dilatih secara intensif untuk menjadi seorang profesional siap kerja!">
<meta property = "og:image" content="https://redhunter.id/wp-content/uploads/2020/01/logo-kotak-graph-01.png">

<!-- Twitter -->
<meta property = "twitter:card" content="summary_large_image">
<meta property = "twitter:url" content="https://redhunter.id/">
<meta property = "twitter:title" content="Tingkatkan skill, raih karir impianmu bersama RedHunter Academy">
<meta property = "twitter:description" content="Dengan Jaminan Kerja,program ini akan membantu mewujudkan karir impianmu,kamu akan dilatih secara intensif untuk menjadi seorang profesional siap kerja!">
<meta property = "twitter:image" content="https://redhunter.id/wp-content/uploads/2020/01/logo-kotak-graph-01.png">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/template-sendiri-v2/css/blog.css">
<?php include('partial/nav_next.php') ?>
<section class="content content-blog">
        <div class="container">
            <div class="row justify-content-center">
                <?php
                    
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
                    
                    query_posts(array('post_type'=>'post','per_page'=>5,'paged' => $paged));
                    
                    if ( have_posts() ) : while ( have_posts() ) : the_post();

                ?>
                   
                <div class="col-12 col-md-6 mt-5">
                    <div class="isi-content">
                        <div class="text-tgl">
                            <h1 style="color: #838383;"><?php 
            echo get_the_time('d'); ?></h1>
                            <h3><?php 
            echo get_the_time("M'y"); ?></h3>
                        </div>
                        <div class="img-blog text-center">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid" srcset="">
                        </div>
                    </div>
                    
                </div>
                <div class="col-12 col-md-6">
                    <div class="text-judul">
                        <h2> <a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
                    </div>
                    <div class="text-isi">
                        <p><?php echo get_the_excerpt(); ?></p>
                    </div>
                    <a href="<?php echo get_permalink(); ?>" class="btn text-white" style="background-color: #222222;">Selengkapnya</a>
                </div>
                <?php
                        
                    endwhile;
                    endif;
                    wp_reset_postdata();
                    pagination();
                ?>
                
            </div>
        </div>
    </section>
   <?php include('partial/footer.php') ?>
