

<?php
include "koneksi/koneksi.php";
include "header1.php";
$q = "SELECT * FROM sehat";
$tampil = mysqli_query($koneksi,$q)
?>

<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
          <div class="container">
            <h2>Welcome to <span>Medicio</span></h2>
            <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel.</p>
            <a href="#catatan" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
          <div class="container">
            <h2>Lorem Ipsum Dolor</h2>
            <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel.</p>
            <a href="#catatan" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
          <div class="container">
            <h2>Sequi ea ut et est quaerat</h2>
            <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel.</p>
            <a href="#catatan" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="fas fa-heartbeat"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="fas fa-pills"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="fas fa-thermometer"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="fas fa-dna"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Featured Services Section -->


  <br>
  <br>
  <br>
  <br>

  <section id="catatan" class="catatan">
<div class="container">
    <div class="card">
        <div class="text-center">
            <div id="">
	<div class="main-page">
	<div class="card-header" style="background-color: #222d32; display: flex; align-items: center; justify-content: space-between; padding: 10px; border-radius: 10px 10px 0 0;">
            <h3 style="color: #fff;">Data <span class="fw-bold">Prestasi</span></h3>
            <a class="btn btn-success fw-bold text-center" style="margin-left: auto; " href="formulir_tambah_data.php"><i class="fa fa-plus-circle fa-lg" aria-hidden="true" style="padding: 5px;"></i> <b>Tambah Data</b></a>
        </div>

            <div class="card-body">
                <table class="table table-hover">    
                    
                        <tr>
                            <thead>
                                <th scope="col" >#</th>
                                <th scope="col" >Tanggal</th>
                                <th scope="col" >Waktu</th>
                                <th scope="col" >Lokasi Yang Dikunjungi</th>
                                <th scope="col" >Suhu Tubuh</th>
                                <th scope="col" >Action</th>
                            </thead>
                        </tr>
                        <?php
$no = 1;
// Gunakan $no=1; dan id_profil diganti $no++ agar menjadi urut
while ($t = mysqli_fetch_assoc($tampil)):
?>
<tr>
    <td><?php echo $no++ ?></td>
    <td><?php echo strftime('%d-%m-%Y', strtotime($t['tanggal'])); ?></td>
    <td><?php echo date('H:i', strtotime($t['waktu'])); ?></td>
    <td><?php echo $t['lokasi'] ?></td>
    <td><?php echo $t['suhu'] ?></td>
    <td>
        <a class="btn fw-bold text-center ms-auto" style="" href='delet.php?id=<?php echo $t['id'];?>'><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a>
        <!-- <a class="btn fw-bold text-center ms-auto" style="" href='prestasi.form_edit.php?id=<?php echo $t['id'];?>'><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></a>                          -->
    </td>    
</tr>
<?php endwhile; ?>

                </table>
            </div>
        </div>
	</div>
</div>
        </div>
    </div>
</div>
</section>
<?php
include "footer.php";
?>
