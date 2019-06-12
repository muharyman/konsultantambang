<!DOCTYPE html>
<html>
<head>
	<title>Konsultan Tambang - Tentang Kami</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/add-edit-photo.css') }}">
    <script src="{{ asset('js/add-edit-photo.js') }}"></script>
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
            <div class="col-md-6">
                <div class="col-md-6 text-right" >
                    <button href="/" class="btn btn-primary btn-md">EDIT <i class="far fa-edit pl-1"></i></button>
                </div>
            </div>
        </div>
        <hr>
    </div>
    <div class="aboutUs">
        <div class="col-md-10 container">
            <div class="title">
                <h5>Nama Perusahaan</h5>
            </div>
            <div class="alamat">
                <h5>Alamat</h5>
            </div>
            <div class="profil-perusahaan">
                <div class="sub-profil text-center">
                    <img src="..." alt="LOGO PERUSAHAAN" height="200px" width="300">
                </div>
                <div class="isi-profil">
                    <h6>Profil Perusahaan</h6>
                    <hr>
                    <p>sadashdiasdoaslkdashgduiasodjkasjkhduasjikdljashdgasjokdolasjkhjkdalsldkajkhjkasdlsakjdhajd</p>
                </div>
            </div>
            <div class="contact-person">
                <h6>Contact Person</h6>
            </div>
            <div class="email-contact-person">
                <h6>Email</h6>
            </div>
        </div>
    </div>
	<!--FOOTER-->
    @include('./footer');
    <!-- END FOOTER-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>