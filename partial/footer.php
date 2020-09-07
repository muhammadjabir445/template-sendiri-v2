<div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-3">
                    <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2020/01/redhunter-logo-1.png" alt="" width="200px" class="img-fluid logo">
                    <p> Ruko Sedayu Square Blok K No 03,
                        Jl. Outer Ring Road Cengkareng, Jakarta Barat
                        Daerah Khusus Ibukota Jakarta 11730</p>
                </div>
                <div class="col-12 col-md-3">
                    <h3>Program Pelatihan</h3>
                    <span><a href="https://redhunter.id/career-program">Career Program</a></span>
                    <br>
                    <span><a href="https://redhunter.id/skill-accelerator/">Skill Accelerator</a> </span>
                    <br>
                    <span><a href="https://redhunter.id/kids-journey/">Kids Journey</a> </span>
                    <br>          
                </div>
                <div class="col-12 col-md-3">
                    <h3>Waktu Oprasional</h3>
                    <span>Senin-Sabtu</span>
                    <br>
                    <span>08.00 - 17.00</span>
                    <br>
                    <p>Tel. +62 896 6626 3522</p>
                 
                </div>
                <div class="col-12 col-md-3">
                    <h3>ikuti kami di</h3>
					<a href""> <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2020/01/icon_logo_instagram-1.png" alt="" srcset="" width="30px"></a>
					<a href"">  <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2020/01/icon_logo_fb-1.png" alt="" srcset="" width="30px"></a>
					<a href""> <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2020/01/icon_logo_linkedin-1.png" alt="" srcset="" width="30px"></a>
                   
                </div>
            </div>     
        </div>
        
    
    </div>
        
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script type="text/javascript" defer>
        $.ajax({
            type: 'get',
            dataType: 'JSON',
            url : 'https://development.codehunter.academy/api/class-register',
            success: function(ress) {
                console.log(ress)
                let html = ''
				let html_info = ''
				let table = ''
                ress.data.forEach((value,index) => {
					if(value.status_pendaftaran >= 0){
					     html = html + `<option value="${value.slug}">${value.name}</option>`
					   }
                  
					var status = value.status_pendaftaran < 0 ? `Selesai` : `<a href="https://redhunter.id/daftar/" class="btn-daftar">Daftar Sekarang</a>`
					table = table + `
							<tr>
                            <td>${index + 1}</td>
                            <td class="text-left">${value.name}</td>
                            <td>${value.awal_pendaftaran}</td>
                          <td>${value.akhir_pendaftaran}</td>
                            <td>
								${status}
							</td>
                        </tr>
		
						`
                });
				 ress.data_info.forEach(value=>{
                    html_info = html_info + `<option value="${value.description}">${value.description}</option>`
                })
                $('#info').append(html_info)
                $('#kelas').append(html)
				$('.jadwal-kelas-api').append(table)
            },
            error: function(err) {
                console.log(err)
                console.log(err.response)
            }
        })
    </script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js ">
		
</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "Redhunter Academy",
    "url": "https://redhunter.id",
    "address": "Ruko Sedayu Square Blok K No 03, Jl. Outer Ring Road Cengkareng, Jakarta Barat Daerah Khusus Ibukota Jakarta 11730",
    "sameAs": [
      "https://web.facebook.com/redhunteracademy",
      "https://www.linkedin.com/company/redhunter-academy"
	  "https://instagram.com/redhunter.academy
    ]
  }
</script>
    <script type="text/javascript">
		AOS.init();
      $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('.navbar').addClass('colorChange')
          
      
        } 
        if ($(this).scrollTop() < 50) {
            $('.navbar').removeClass('colorChange')
           
        } 
        });
		 $(document).ready(function(){
			$(".owl-carousel").owlCarousel({
				items:1,
				autoplay:true,
				rewind:true,
				dots:true
			});
        });
		$(document).on('submit','.form-register',function(e) {
			e.preventDefault();
			$('.btn-daftar').prop('disabled', true);
			$('.alert').remove()
			let data = $(this).serialize()
			$.ajax({
				type: "POST",
				data: data,
				url: 'https://development.codehunter.academy/api/register-calon',
				success:function(ress) {
					console.log(ress)
					$('#form-register').html(`
						<div class="row">
                <div class="col-12 col-md-4">
                    <img src="https://redhunter.id/wp-content/uploads/2020/01/maskot_2_thanks.png" width="100%" class="img-fluid" alt="">
                </div>
                <div class="col-12 col-md-8">
                    <h2 style="font-weight: bold;"><span style="color:#c80a00">Terima Kasih</span> <br>
                    Telah Menghubungi Kami</h2>
                    <br>
                    <p>
                        Pendaftaran dan pertanyaan kamu akan segera dibalas
                        oleh tim RedHunter Academy.
                        Pastikan kontak yang kamu berikan sudah benar dan aktif.
                        <br>
                        <br>
                        Salam Hangat,
                        <br>
                        RedHunter Academy
                    </p>
                    <a href="https://redhunter.id/" class="btn" style="color:#c80a00">Back To Home</a>
                </div>
            </div>
					`)
					
				},
				error:function(err) {
			
					$('#form-register').prepend(`
							<div class="alert alert-danger" role="alert" style="background-color: rgba(200,10,0,0.71)!important; color:black !important;border:none">
							  ${err.responseJSON.message}
							</div>
					`)
					window.location.hash= "#form-register"
				}
			})
			$('.btn-daftar').prop('disabled', false);
// 			Swal.fire({
// 			  icon: 'success',
// 			  title: 'Berhasil mendaftar',
// 			  text: 'Terimakasih Telah Mendaftar CS kami akan segera menghubungi anda',
			
// 			})
		})
		$('.banner').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            dots:true,
            arrows:false,
            centerMode: true,
            customPaging: function(slider, i) {
            // this example would render "tabs" with titles
            return '<span class="dot"></span>';
            },
            variableWidth: true,
            infinite: true,
            cssEase: 'linear',
        });
		  $('.autoplay').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        });
                
        $(document).on('click','.tentang-kami .btn-program-route', function(e) {
            e.preventDefault()
            $('.tentang-kami .btn-program-route').removeClass('aktive');
            $(this).addClass('aktive');
            console.log($(this).attr('data-id'))
            let kelas_text = '.text-detail' + `.` + $(this).attr('data-id')
            $('.tentang-kami .text-detail').removeClass('aktive');
            console.log(kelas_text)
            $('.tentang-kami ' + kelas_text).addClass('aktive');
        })
		
		 $(document).on('click','.learn .btn-program-route', function(e) {
            e.preventDefault()
            $('.learn .btn-program-route').removeClass('aktive');
            $(this).addClass('aktive');
            console.log($(this).attr('data-id'))
            let kelas_text = '.text-detail' + `.` + $(this).attr('data-id')
            $('.learn .text-detail').removeClass('aktive');
            console.log(kelas_text)
            $('.learn ' + kelas_text).addClass('aktive');
        })
		
      </script>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DJRXV9"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  </body>
</html>