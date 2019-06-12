<!DOCTYPE html>
<html>
<head>
	<title>Konsultan Tambang - Tambah Pengurusan Izin</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="newsDetail.css">
</head>
<body>
	<!-- NAVBAR -->
    @include('adminNavbar');
    <!-- END NAVBAR -->
    <!-- DETAIL BERITA DAN CONTACT US -->
	<div class="container-fluid">
        <div class="row">
            <!--DETAIL BERITA -->
            <div class="col-md-8">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="title">
                                <!--querykan judul-->
                                <h2>Judul</h2>
                            </div>
                        </div>
                        <div class="col-md-6 text-left" >
                            <button href="/" class="btn btn-primary btn-md">EDIT <i class="far fa-edit pl-1"></i></button>
                        </div>
                    </div>
                    <div class="post-content">
                        <ul class="post-bar">
                            <!--querykan tanggal dibuat-->
                            <li><i class="col-md-2 fa fa-calendar"></i><span>  June 5, 2016 </span></li>
                            <!--querykan views-->
                            <li><i class="col-md-1 fas fa-eye"></i><span>  2013 views </span></li>
                        </ul>
                    </div>
                    <hr>
                    <div class="isiBerita">
                        <!--query semua isi textarea -->
                    </div>
                </div>     
            </div><!--END DETAIL BERITA-->
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
    <script>
        new FroalaEditor('textarea#froala-editor',{
         height:220,
         width:1240
        });
    </script>
</body>
</html>