<!DOCTYPE html>
<html>
<head>
	<title>Konsultan Tambang - Tentang Kami</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="add-edit-photo.css">
    <script src="add-edit-photo.js"></script>
    <link rel="stylesheet" href="editAboutUs.css">
</head>
<body>
    <!-- NAVBAR -->
    @include('adminNavbar');
    <!-- END NAVBAR -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h5 class="align-self-center " style="margin-top:11px;margin-left:10px">Tentang Kami</h5>
            </div>
        </div>
        <hr>
    </div>
    <div class="aboutUs">
        <div class="col-md-10 container">
            <form action="/">
                <div class="form-group">
                    <label style="margin-left: 10px;">Nama Perusahaan</label>
                    <div class="input-group">
                        <input type="text" id="nama_perusahaan" name="nama_perusahaan">
                    </div>
                    <label style="margin-left: 10px;">Alamat Perusahaan</label>
                    <div class="input-group">
                        <input type="text" id="alamat_perusahaan" name="alamat_perusahaan">
                    </div>
                    <label style="margin-left: 10px;">Upload Logo Perusahaan</label>
                    <div class="input-group">
                        <span class="input-group-btn">
                            <span class="btn btn-default btn-file">
                                Browse… <input type="file" id="imgInp">
                            </span>
                        </span>
                        <input type="text" class="form-control" readonly>
                    </div>
                    <img id='img-upload'/>
                    <label style="margin-left: 10px;">Profil Perusahaan</label>
                    <div class="input-group">
                        <textarea name="caption" class="form-control" id="caption" style="resize: none;margin-left: 5px;" rows="5" cols="55"></textarea>
                    </div>
                    <label style="margin-left: 10px;">Contact Person</label>
                    <div class="input-group">
                        <input type="text" id="contact_person" name="contact_person">
                    </div>
                    <label style="margin-left: 10px;">Email</label>
                    <div class="input-group">
                        <input type="email" id="email" name="email">
                    </div>
                    <label style="margin-left: 10px;">Facebook</label>
                    <div class="input-group">
                        <input type="text" id="facebook" name="facebook">
                    </div>
                    <label style="margin-left: 10px;">Twitter</label>
                    <div class="input-group">
                        <input type="text" id="twitter" name="twitter">
                    </div>
                    <label style="margin-left: 10px;">Google+</label>
                    <div class="input-group">
                        <input type="text" id="googleplus" name="googleplus">
                    </div>
                    <label style="margin-left: 10px;">Linkedin</label>
                    <div class="input-group">
                        <input type="text" id="linkedin" name="linkedin">
                    </div>
                    <label style="margin-left: 10px;">Instagram</label>
                    <div class="input-group">
                        <input type="text" id="instagram" name="instagram">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <button type="reset" class="btn btn-primary btn-md"><i class="fas fa-arrow-left pl-1"></i> BACK</button>
                        </div>
                        <div class="col-md-6 text-right">
                            <button type="submit" class="btn btn-dark-green btn-md"><strong>SAVE </strong><i class="fas fa-check pl-1"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
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