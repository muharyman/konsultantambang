<!DOCTYPE html>
<html>
<head>
	<title>Konsultan Tambang</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/news.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>
	<header> 
        <nav class="navbar fixed-top navbar-expand-md custom-navbar navbar-dark">
            <img class="navbar-brand align-self-center" src="http://acmsocc.github.io/2016/assets/img/googlelogo_color_324x112dp.png" id="logo_custom" width="10%"  alt="logo">
            <button class="navbar-toggler navbar-toggler-right custom-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse " id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item">
                        <a class="nav-link" href="/"><b>Beranda</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/gallery"><b>Foto Kegiatan</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about"><b>Tentang Kami</b></a>
                    </li>  
                </ul>
                <form action="/search" method="post" class="form-inline my-2 mylg-0">
					<input type="search" name="search" id="search" class="form-control mr-sm-2" placeholder="search" aria-label="search" style="color:#0098A8">
					<button class="btn btn-outline-primary" type="submit" name="submit" style="color:#0098A8">search</button>
				</form>
            </div>  
        </nav>
    </header><br>
    <!--CAROUSEL-->
    <div class="container-fluid image-carousel">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <!--query dari gambar 1 sampe 3 aja tapi triknya coba yang pertama liat ada tulisan activenya 
                jadi kalo gk mau report yang satu fix yang gambar kedua baru di for-->
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('images/kucing1.jpeg') }}" width="600" height="500" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Ayam</h5>
                        <p>...</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('images/kucing2.jpeg') }}" width="600" height="500" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>ayam</h5>
                        <p>...</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img  class="d-block w-100" src="{{ asset('images/kucing3.jpeg') }}" width="600" height="500" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>ayam</h5>
                        <p>...</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div><br><!--END CAROUSEL-->

	<!-- PENGURUSAN IZIN DAN CONTACT US -->
	<div class="container-fluid">
		<div class="row">
			<!--PENGURUSAN IZIN -->
			<div class="col-md-8">
				<div class="container">
					<div class="title-1 text-left">
						<h3>Pengurusan Izin</h3>
						<hr/>
					</div>
					<div class="row">
                        <!--mulai dari sini for each dari jumlah laporan-->
                        <!--satu laporan-->
						<div class="post-slide">
							<div class="post-img">
								<a href="#"><img src="http://bestjquery.com/tutorial/news-slider/demo33/images/img-1.jpg" alt=""/></a>
							</div>
							<div class="post-content">
								<h3 class="post-title"><a href="#">Judul</a></h3>
								<ul class="post-bar">
									<li><i class="fa fa-calendar"></i> June 5, 2016</li>
									<li>
										<i class="fas fa-eye"></i>
										<a href="#">200 views</a>
									</li>
								</ul>
								<a href="#" class="read-more">read more</a>
							</div>
						</div><!--end satu laporan-->
						<div class="post-slide">
							<div class="post-img">
								<a href="#"><img src="http://bestjquery.com/tutorial/news-slider/demo33/images/img-2.jpg" alt=""/></a>
							</div>
							<div class="post-content">
								<h3 class="post-title"><a href="#">Judul</a></h3>
								<ul class="post-bar">
									<li><i class="fa fa-calendar"></i> June 7, 2016</li>
									<li>
										<i class="fas fa-eye"></i>
										<a href="#">200 views</a>
									</li>
								</ul>
								<a href="#" class="read-more">read more</a>
							</div>
						</div>    
						<div class="post-slide">
							<div class="post-img">
								<a href="#"><img src="http://bestjquery.com/tutorial/news-slider/demo33/images/img-3.jpg" alt=""/></a>
							</div>
							<div class="post-content">
								<h3 class="post-title"><a href="#">Judul</a></h3>
								<ul class="post-bar">
									<li><i class="fa fa-calendar"></i> June 5, 2016</li>
									<li>
										<i class="fas fa-eye"></i>
										<a href="#">200 views</a>
									</li>
								</ul>
								<a href="#" class="read-more">read more</a>
							</div>
						</div>
						<div class="post-slide">
							<div class="post-img">
								<a href="#"><img src="http://bestjquery.com/tutorial/news-slider/demo33/images/img-4.jpg" alt=""/></a>
							</div>
							<div class="post-content">
								<h3 class="post-title"><a href="#">Judul</a></h3>
								<ul class="post-bar">
									<li><i class="fa fa-calendar"></i> June 5, 2016</li>
									<li>
										<i class="fas fa-eye"></i>
										<a href="#">200 views</a>
									</li>
								</ul>
								<a href="#" class="read-more">read more</a>
							</div>
						</div>
					</div>
				</div>
			</div><!--END PENGURUSAN IZIN-->
			<!--CONTACT US-->
			<div class="col-md-4">
                <div class="container">
                    <div class="title-2 text-left">
                        <h3>Contact Us</h3>
                        <hr/>
                    </div>
                    <!--query nilai contact person-->
                    <div class="contact-person">
                        <h6>Contact Person :098343743347 - Adasda</h6>
                    </div>
                    <!--query nilai email-->
                    <div class="contact-person">
                        <h6>Email :</h6>
                    </div>
                    <!--cukup query nilai src facebooknya aja-->
                    <div class="facebook-widget">
                        <div id="fb-root"></div>
                        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v3.3&appId=133849539992596&autoLogAppEvents=1"></script>
                        <div class="fb-page" 
                            data-tabs="timeline,events,messages"
                            data-href="https://www.facebook.com/radiorodja.rodjatv/?eid=ARCSjSP54MHjJ9L-7oCqUvYJv9V0HRqIQimrMRfbYEAP9vsVrr3wxmiAELYKcYUpRUj8aJmd7dr17Om4"
                            data-width="380" 
                            data-hide-cover="false">
                        </div>
                    </div>
                </div>
			</div><!--END CONTACT US-->
		</div>
    </div><!--END PENGURUSAN IZIN DAN CONTACT US-->

    <button class="btn-floating btn-success btn-lg fixed-bottom " style="left:85%;margin:40px; width: 60px; height: 60px;"><i class="fab fa-whatsapp"></i></button>

	<!--FOOTER-->
	<div class="footer">
		<!-- Footer -->
		<footer class="page-footer font-small cyan darken-2">

		  <!-- Footer Elements -->
		  <div class="container">

		    <!-- Grid row-->
		    <div class="row">
		      <!-- Grid column -->
		      <div class="col-md-12 py-1">
		        <div class="mb-3 flex-center">
                    <!--query nilai masing2-->
		            <!-- Facebook -->
		            <button type="button" class="btn btn-fb" href="/">
                        <i class="fab fa-facebook-f pr-1"></i>
                        <span>Facebook</span>
                    </button>
                    <!-- Twitter -->
                    <button type="button" class="btn btn-tw" href="/">
                        <i class="fab fa-twitter pr-1"></i>
                        <span>Twitter</span>
                    </button>
		            <!-- Google +-->
                    <button type="button" class="btn btn-gplus" href="/">
                        <i class="fab fa-google-plus-g pr-1"></i>
                        <span>Google+</span>
                    </button>
		            <!--Linkedin -->
                    <button type="button" class="btn btn-li" href="/">
                        <i class="fab fa-linkedin-in pr-1"></i>
                        <span>Linkedin</span>
                    </button>
		          <!--Instagram-->
                    <button type="button" class="btn btn-ins" href="/">
                        <i class="fab fa-instagram pr-1"></i>
                        <span>Instagram</span>
                    </button>
		        </div>
		      </div>
		      <!-- Grid column -->

		    </div>
		    <!-- Grid row-->

		  </div>
		  <!-- Footer Elements -->

		  <!-- Copyright -->
		  <div class="footer-copyright text-center py-1">© 2019 Copyright:
		    <a href="https://mdbootstrap.com/education/bootstrap/"> Konsultan Tambang</a>
		  </div>
		  <!-- Copyright -->

		</footer><!-- Footer -->
    </div><!-- END FOOTER-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>