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
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/news.css') }}">
</head>
<body>
    <!-- NAVBAR-->
        extends('navbar');
    <!-- END NAVBAR -->
    <!--CAROUSEL-->
        <!-- isi dengan carousel nama filenye carousel.blade.php-->
    <!--END CAROUSEL-->

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
                <!-- isi dengan contact us dengan nama file contactUs.blade.php-->
            <!--END CONTACT US-->
		</div>
    </div><!--END PENGURUSAN IZIN DAN CONTACT US-->

    <button class="btn-floating btn-success btn-lg fixed-bottom " style="left:85%;margin:40px; width: 60px; height: 60px;"><i class="fab fa-whatsapp"></i></button>

    <!--FOOTER-->
        <!-- isi dengan footer nama file footer.blade.php-->
	<!-- END FOOTER-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>