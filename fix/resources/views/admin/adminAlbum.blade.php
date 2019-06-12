<!DOCTYPE html>
<html>
<head>
	<title>Konsultan Tambang - Gallery Admin</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="gallery.css">
</head>
<body>
	<!-- NAVBAR -->
    @include('adminNavbar');
    <!-- END NAVBAR -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h5 class="align-self-center " style="margin-top:11px;margin-left:10px">Foto Kegiatan</h5>
            </div>
            <div class="col-md-6">
                <a role="button" href="/" class="btn btn-rounded btn-dark-green btn-sm" style="float:right;margin-right: 40px;">tambah foto<i class="fas fa-plus pl-1"></i></a>
            </div>
        </div>
        <hr>
    </div>
    <div class="gallery">
        <div class="container-fluid">
            <div class="row">
                <!--for each semua gambar-->
                <div class="col-md-2" data-toggle="modal" data-target="#modal">
                <a href="#lightbox" data-slide-to="0"><img src="https://dummyimage.com/160x120/000000/fff.png&text=Photo+1" class="img-thumbnail my-3"/></a>
                </div>
                <div class="col-md-2" data-toggle="modal" data-target="#modal">
                <a href="#lightbox" data-slide-to="1"><img src="https://dummyimage.com/160x120/000000/fff.png&text=Photo+2" class="img-thumbnail my-3"/></a>
                </div>
                <div class="col-md-2" data-toggle="modal" data-target="#modal">
                <a href="#lightbox" data-slide-to="2"><img src="https://dummyimage.com/160x120/000000/fff.png&text=Photo+3" class="img-thumbnail my-3"/></a>
                </div>
                <div class="col-md-2" data-toggle="modal" data-target="#modal">
                <a href="#lightbox" data-slide-to="3"><img src="https://dummyimage.com/160x120/000000/fff.png&text=Photo+4" class="img-thumbnail my-3"/></a>
                </div>
                <div class="col-md-2" data-toggle="modal" data-target="#modal">
                <a href="#lightbox" data-slide-to="4"><img src="https://dummyimage.com/160x120/000000/fff.png&text=Photo+5" class="img-thumbnail my-3"/></a>
                </div>
                <div class="col-md-2" data-toggle="modal" data-target="#modal">
                <a href="#lightbox" data-slide-to="5"><img src="https://dummyimage.com/160x120/000000/fff.png&text=Photo+6" class="img-thumbnail my-3"/></a>
                </div>
                <div class="col-md-2" data-toggle="modal" data-target="#modal">
                <a href="#lightbox" data-slide-to="6"><img src="https://dummyimage.com/160x120/000000/fff.png&text=Photo+7" class="img-thumbnail my-3"/></a>
                </div>
                <div class="col-md-2" data-toggle="modal" data-target="#modal">
                <a href="#lightbox" data-slide-to="7"><img src="https://dummyimage.com/160x120/000000/fff.png&text=Photo+8" class="img-thumbnail my-3"/></a>
                </div>
                <div class="col-md-2" data-toggle="modal" data-target="#modal">
                <a href="#lightbox" data-slide-to="8"><img src="https://dummyimage.com/160x120/000000/fff.png&text=Photo+9" class="img-thumbnail my-3"/></a>
                </div>
                <div class="col-md-2" data-toggle="modal" data-target="#modal">
                <a href="#lightbox" data-slide-to="9"><img src="https://dummyimage.com/160x120/000000/fff.png&text=Photo+10" class="img-thumbnail my-3"/></a>
                </div>
                <div class="col-md-2" data-toggle="modal" data-target="#modal">
                <a href="#lightbox" data-slide-to="10"><img src="https://dummyimage.com/160x120/000000/fff.png&text=Photo+11" class="img-thumbnail my-3"/></a>
                </div>
                <div class="col-md-2" data-toggle="modal" data-target="#modal">
                <a href="#lightbox" data-slide-to="11"><img src="https://dummyimage.com/160x120/000000/fff.png&text=Photo+12" class="img-thumbnail my-3"/></a>
                </div>
                <div class="col-md-2" data-toggle="modal" data-target="#modal">
                <a href="#lightbox" data-slide-to="12"><img src="https://dummyimage.com/160x120/000000/fff.png&text=Photo+13" class="img-thumbnail my-3"/></a>
                </div>
                <div class="col-md-2" data-toggle="modal" data-target="#modal">
                <a href="#lightbox" data-slide-to="13"><img src="https://dummyimage.com/160x120/000000/fff.png&text=Photo+14" class="img-thumbnail my-3"/></a>
                </div>
                <div class="col-md-2" data-toggle="modal" data-target="#modal">
                <a href="#lightbox" data-slide-to="14"><img src="https://dummyimage.com/160x120/000000/fff.png&text=Photo+15" class="img-thumbnail my-3"/></a>
                </div>
                <div class="col-md-2" data-toggle="modal" data-target="#modal">
                <a href="#lightbox" data-slide-to="15"><img src="https://dummyimage.com/160x120/000000/fff.png&text=Photo+16" class="img-thumbnail my-3"/></a>
                </div>    
            </div>
        </div>
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="Lightbox Gallery by Bootstrap 4" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div id="lightbox" class="carousel slide" data-ride="carousel" data-interval="5000" data-keyboard="true">
                            <ol class="carousel-indicators">
                                <!--for each semua gambar-->
                                <li data-target="#lightbox" data-slide-to="0"></li>
                                <li data-target="#lightbox" data-slide-to="1"></li>
                                <li data-target="#lightbox" data-slide-to="2"></li>
                                <li data-target="#lightbox" data-slide-to="3"></li>
                                <li data-target="#lightbox" data-slide-to="4"></li>
                                <li data-target="#lightbox" data-slide-to="5"></li>
                                <li data-target="#lightbox" data-slide-to="6"></li>
                                <li data-target="#lightbox" data-slide-to="7"></li>
                                <li data-target="#lightbox" data-slide-to="8"></li>
                                <li data-target="#lightbox" data-slide-to="9"></li>
                                <li data-target="#lightbox" data-slide-to="10"></li>
                                <li data-target="#lightbox" data-slide-to="11"></li>
                                <li data-target="#lightbox" data-slide-to="12"></li>
                                <li data-target="#lightbox" data-slide-to="13"></li>
                                <li data-target="#lightbox" data-slide-to="14"></li>
                                <li data-target="#lightbox" data-slide-to="15"></li>
                            </ol>
                            <div class="carousel-inner">
                                <!--for each semua gambar beserta captionnya dibagian <p>..</p>
                                catatan: liat di slide pertama ada bagian activenya-->
                                <div class="carousel-item active">
                                    <img src="https://dummyimage.com/1280x1024/000000/fff.png&text=Photo+1" class="w-100" height="400px" width="600px" alt="">
                                    <div class="carousel-caption d-none d-md-block">
                                        <p>...</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="https://dummyimage.com/1280x1024/000000/fff.png&text=Photo+2" class="w-100" height="400px" width="600px" alt="">
                                    <div class="carousel-caption d-none d-md-block">
                                        <p>...</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="https://dummyimage.com/1280x1024/000000/fff.png&text=Photo+3" class="w-100" height="400px" width="600px" alt="">
                                    <div class="carousel-caption d-none d-md-block">
                                        <p>...</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="https://dummyimage.com/1280x1024/000000/fff.png&text=Photo+4" class="w-100" height="400px" width="600px" alt="">
                                    <div class="carousel-caption d-none d-md-block">
                                        <p>...</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="https://dummyimage.com/1280x1024/000000/fff.png&text=Photo+5" class="w-100" height="400px" width="600px" alt="">
                                    <div class="carousel-caption d-none d-md-block">
                                        <p>...</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="https://dummyimage.com/1280x1024/000000/fff.png&text=Photo+6" class="w-100" height="400px" width="600px" alt="">
                                    <div class="carousel-caption d-none d-md-block">
                                        <p>...</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="https://dummyimage.com/1280x1024/000000/fff.png&text=Photo+7" class="w-100" height="400px" width="600px" alt="">
                                    <div class="carousel-caption d-none d-md-block">
                                        <p>...</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="https://dummyimage.com/1280x1024/000000/fff.png&text=Photo+8" class="w-100" height="400px" width="600px" alt="">
                                    <div class="carousel-caption d-none d-md-block">
                                        <p>...</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="https://dummyimage.com/1280x1024/000000/fff.png&text=Photo+9" class="w-100" height="400px" width="600px" alt="">
                                    <div class="carousel-caption d-none d-md-block">
                                        <p>...</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="https://dummyimage.com/1280x1024/000000/fff.png&text=Photo+10" class="w-100" height="400px" width="600px" alt="">
                                    <div class="carousel-caption d-none d-md-block">
                                        <p>...</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="https://dummyimage.com/1280x1024/000000/fff.png&text=Photo+11" class="w-100" height="400px" width="600px" alt="">
                                    <div class="carousel-caption d-none d-md-block">
                                        <p>...</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="https://dummyimage.com/1280x1024/000000/fff.png&text=Photo+12" class="w-100" height="400px" width="600px" alt="">
                                    <div class="carousel-caption d-none d-md-block">
                                        <p>...</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="https://dummyimage.com/1280x1024/000000/fff.png&text=Photo+13" class="w-100" height="400px" width="600px" alt="">
                                    <div class="carousel-caption d-none d-md-block">
                                        <p>...</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="https://dummyimage.com/1280x1024/000000/fff.png&text=Photo+14" class="w-100" height="400px" width="600px" alt="">
                                    <div class="carousel-caption d-none d-md-block">
                                        <p>...</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="https://dummyimage.com/1280x1024/000000/fff.png&text=Photo+15" class="w-100" height="400px" width="600px" alt="">
                                    <div class="carousel-caption d-none d-md-block">
                                        <p>...</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="https://dummyimage.com/1280x1024/000000/fff.png&text=Photo+16" class="w-100" height="400px" width="600px" alt="">
                                    <div class="carousel-caption d-none d-md-block">
                                        <p>...</p>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#lightbox" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
                            <a class="carousel-control-next" href="#lightbox" role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!--FOOTER-->
        <!-- isi dengan footer nama file footer.blade.php-->
	<!-- END FOOTER-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>