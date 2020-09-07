<?php /* Template Name: daftar */ ?>
<?php include('partial/nav.php') ?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/template-sendiri-v2/css/register.css">
<title>Pendaftaran Kelas Redhunter Academy</title>
<?php include('partial/nav_next.php') ?>

    <div class="content">
         <div class="register container  text-center">
            <h2 class="text-center">Formulir Pendaftaran</h2>
            <form class="form-register text-left"  id="form-register">
                <div class="row">
                    <div class="form-group col-12 col-md-6">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" id="nama" aria-describedby="emailHelp" placeholder="Nama Lengkap">
                      </div>
                    
                      <div class="form-group col-12 col-md-6">
                          <label for="email">Email</label>
                          <input type="text" class="form-control"  name="email" id="email" aria-describedby="emailHelp" placeholder="Email">
                      </div>
                      <div class="form-group col-12 col-md-6">
                          <label for="Nomor Handphone">Nomor Handphone</label>
                          <input type="text" class="form-control" name="nohp" id="Nomor Handphone" aria-describedby="emailHelp" placeholder="Nomot Handphone">
                      </div>
                      <div class="form-group col-12 col-md-6">
                          <label for="whatsapp">Nomor Wahtsapp</label>
                          <input type="text" class="form-control" name="nowa" id="whatsapp" aria-describedby="emailHelp" placeholder="whatsapp">
                      </div>

                      <div class="form-group col-12 col-md-4">
                        <label for="kelas">Kelas</label>
                        <select class="form-control" name="kelas" id="kelas">
                            <option value="">Pilih Kelas</option>
                        </select>
                        </div>
                      <div class="form-group col-12 col-md-4">
                          <label for="tgl_lahir">Tanggal Lahir</label>
                          <input type="date" class="form-control" name="tgl_lahir" id="" aria-describedby="emailHelp" placeholder="Nomot Handphone">

                      </div>

      
                      <div class="form-group col-12 col-md-4">
                          <label for="status">Status</label>
                          <select class="form-control" name="status" id="status">
                             <option value="mahasiswa">Pelajar/Mahasiswa</option>
                             <option value="karyawan">Karyawan</option>
                          </select>
                      </div>

                      <div class="form-group col-12 col-md-6">
                        <label for="status">Jenis Kelamin</label>
                        <select class="form-control" name="kelamin" id="status">
                           <option value="Pria">Pria</option>
                           <option value="Wanita">Wanita</option>
                        </select>
                        
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="kelas">Dapat Info Darimana</label>
                            <select class="form-control" name="info" id="info">
                                <option value="">Pilih</option>
                            </select>
                        </div>
                        <div class="form-group col-12 col-md-6">
                            <label for="exampleFormControlTextarea1">Alamat</label>
                          <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                      <div class="form-group col-12 col-md-6">
                          <label for="exampleFormControlTextarea1">Pertanyaan</label>
                          <textarea class="form-control" name="catatan" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                </div>
                
                <button type="submit" class="btn btn-primary btn-daftar btn-block">Daftar</button>
              </form>
        </div>
    </div>


    <?php include('partial/footer.php') ?>
