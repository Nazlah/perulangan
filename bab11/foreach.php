<?php

//array artikel
$artikel = array(
    (object) array (
        'judul' => 'card title 1',
        'image' => '2.jpg',
        'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas laboriosam provident possimus minima officia cupiditate perferendis itaque commodi animi undeLorem ipsum dolor sit amet consectetur adipisicing elit. Quas laboriosam provident possimus minima officia cupiditate perferendis itaque commodi animi unde.'
    ),
    (object) array (
        'judul' => 'card title 2',
        'image' => '5.jpg',
        'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas laboriosam provident possimus minima officia cupiditate perferendis itaque commodi animi undeLorem ipsum dolor sit amet consectetur adipisicing elit. Quas laboriosam provident possimus minima officia cupiditate perferendis itaque commodi animi unde.'
    ), 
    (object) array (
        'judul' => 'card title 3',
        'image' => '4.jpg',
        'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas laboriosam provident possimus minima officia cupiditate perferendis itaque commodi animi undeLorem ipsum dolor sit amet consectetur adipisicing elit. Quas laboriosam provident possimus minima officia cupiditate perferendis itaque commodi animi unde.'
    ),
    (object) array (
        'judul' => 'card title 4',
        'image' => '1.jpg',
        'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas laboriosam provident possimus minima officia cupiditate perferendis itaque commodi animi undeLorem ipsum dolor sit amet consectetur adipisicing elit. Quas laboriosam provident possimus minima officia cupiditate perferendis itaque commodi animi unde.'
    ), 
    (object) array (
      'judul' => 'card title 5',
      'image' => '2.jpg',
      'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas laboriosam provident possimus minima officia cupiditate perferendis itaque commodi animi undeLorem ipsum dolor sit amet consectetur adipisicing elit. Quas laboriosam provident possimus minima officia cupiditate perferendis itaque commodi animi unde.'
    ),
    (object) array (
      'judul' => 'card title 6',
      'image' => '3.jpg',
      'text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas laboriosam provident possimus minima officia cupiditate perferendis itaque commodi animi undeLorem ipsum dolor sit amet consectetur adipisicing elit. Quas laboriosam provident possimus minima officia cupiditate perferendis itaque commodi animi unde.'
  )  

    );
    $carausel = array(
      (object) array (
        'judul' => 'Wisata Indonesia 1',
        'text' => ' representative placeholder content for the first slide.',
        'image' => '4.jpg.'
      ),
      (object) array (
        'judul' => 'Wisata Indonesia 2',
        'image' => '2.jpg.',
        'text' => ' representative placeholder content for the first slide.'
        
      ),
      (object) array (
        'judul' => 'Wisata Indonesia 3',
        'text' => ' representative placeholder content for the first slide.',
        'image' => '3.jpg.'
        
      )
      );
    ?>

    <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
    <!-- my css -->
   <!-- My CSS -->
   <style>
      section {
        min-height: 420px;
      }
      .carousel-inner .carousel-item img{
	    height: 531px;
	    /* max-height: 720px; */
	    object-fit: cover;
}
      .explore {
        background-color: rgb(228, 228, 228);
        padding-bottom: 50px;
        
      }
    </style>

    <title>portofolio| Iffah nurin nazlah</title>
  </head>

  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#">Iffah_Nazlah</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Galery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contect</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- akhir -->
<!-- carousel -->

<!-- Carousel Indicator -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
		<!-- Carousel Indicator -->
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>

		<!-- Carousel Inner -->
		<div class="carousel-inner">
		<?php 
			$i = 0;
			foreach ($carausel as $slide) {
				if ($i == 0) {
					$i++; ?>
			<div class="carousel-item active">
				<?php }
				else { ?>
			<div class="carousel-item">
				<?php } ?>
				<img src="<?=$slide->image ?>" class="d-block w-100" alt="jalan bareng kawan">
				<div class="carousel-caption d-none d-md-block">
					<h5><?=$slide->judul ?></h5>
					<p><?=$slide->text ?></p>
				</div>
			</div> <!-- Penutup carousel-item -->
		<?php } ?>
		</div>
		<!-- Carousel Navigation -->
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>

		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
  <!-- batas -->

    <!-- about -->
    <section id="about">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>About me</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-center">
          <div class="col-md-4">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas laboriosam provident possimus minima officia cupiditate perferendis itaque commodi animi unde.</p>
          </div>

          <div class="col-md-4">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat voluptatibus inventore dolorem animi impedit? Mollitia accusamus soluta porro perspiciatis voluptate aperiam ea voluptatum vitae beatae delectus.</p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#b0eaea"
          fill-opacity="1"
          d="M0,192L34.3,181.3C68.6,171,137,149,206,149.3C274.3,149,343,171,411,170.7C480,171,549,149,617,133.3C685.7,117,754,107,823,117.3C891.4,128,960,160,1029,170.7C1097.1,181,1166,171,1234,170.7C1302.9,171,1371,181,1406,186.7L1440,192L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
        ></path>
      </svg>
    </section>

    <!-- project -->
    <section id="projects">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>My Projects</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <?php foreach($artikel as $data) {
            ?>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="1.jpg" class="card-img-top" alt="project 1" />
              <div class="card-body">
                <h5 class="card.title"><?=$data->judul?> </h5>
                <p class="card-text"><?=$data->text?></p>
              </div>
            </div>
          </div>
          <?php }?>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,192L40,208C80,224,160,256,240,245.3C320,235,400,181,480,144C560,107,640,85,720,106.7C800,128,880,192,960,213.3C1040,235,1120,213,1200,192C1280,171,1360,149,1400,138.7L1440,128L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- ahirr -->

    <!-- contact -->
    <div class="contact">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <h2>Contact Me</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8">
            <form>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" />
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="Email1" aria-describedby="email" />
              </div>
              <div class="mb-3">
                <label for="pesan" class="form-label">pesan</label>
                <textarea class="form-control" id="pesan" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- ahirr contact -->
    <!-- Footer -->
<footer class="bg-dark text-white">
  <div class="container">
    <div class="row pt-3">
      <div class="col text-center">
        <p>Copyright @2021 by iffahnurinnazlah.</p>
      </div>
    </div>
  </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
  
</html>