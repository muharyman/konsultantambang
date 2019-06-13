<!DOCTYPE html>
<html>
<head>
	<title>Konsultan Tambang Admin</title>
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
    <!-- NAVBAR -->
    	@include('admin.navbar');
    <!-- END NAVBAR -->

    <!-- CAROUSEL -->
        @include('carousel');
    <!-- END CAROUSEL -->
    
    <!-- PENGURUSAN IZIN DAN CONTACT US -->
	<div class="container-fluid">
		<div class="row">
			<!--PENGURUSAN IZIN -->
			<div class="col-md-8">
				<div class="container">
					<div class="title-1 text-left">
						<h3>Pengurusan Izin</h3>
                        <hr/>
                        <div class="add-laporan">
                            <a role="button" href="/" class="btn btn-rounded btn-dark-green btn-sm">tambah laporan<i class="fas fa-plus pl-1"></i></a>
                        </div>
                    </div>
					<div class="row">
                        <!--mulai dari sini for each dari jumlah laporan-->
                        <!--satu laporan-->
						<div class="post-slide">
							<div class="post-img">
                                <ul class="social">
                                    <li><a href="" class="fas fa-edit"></a></li>
                                    <li><a href="" class="fas fa-trash"></a></li>
                                </ul>
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
                                <ul class="social">
                                        <li><a href="" class="fas fa-edit"></a></li>
                                        <li><a href="" class="fas fa-trash"></a></li>
                                </ul>
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
                                <ul class="social">
                                        <li><a href="" class="fas fa-edit"></a></li>
                                        <li><a href="" class="fas fa-trash"></a></li>
                                </ul>
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
                                <ul class="social">
                                        <li><a href="" class="fas fa-edit"></a></li>
                                        <li><a href="" class="fas fa-trash"></a></li>
                                </ul>
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
                        <h6>Contact Person : 098343743347 - Adasda</h6>
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

    <!-- FOOTER -->
        @include('.footer');
    <!-- END FOOTER-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>