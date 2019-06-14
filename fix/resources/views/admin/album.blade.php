<!DOCTYPE html>
<html>
<head>
	<title>Konsultan Tambang - Gallery Admin</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/gallery.css') }}">
</head>
<body>
	<!-- NAVBAR -->
    @include('admin.navbar');
    <!-- END NAVBAR -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h5 class="align-self-center " style="margin-top:11px;margin-left:10px">Foto Kegiatan</h5>
            </div>
            <div class="col-md-6">
                <a role="button" href="/add-album" class="btn btn-rounded btn-dark-green btn-sm" style="float:right;margin-right: 40px;">tambah foto<i class="fas fa-plus pl-1"></i></a>
            </div>
        </div>
        <hr>
    </div>
    <div class="gallery">
        <div class="container-fluid">
            <div class="row">
                @foreach($albums as $key => $album)
                <div class="col-md-2" data-toggle="modal" data-target="#modal">
                    <ul class="social">
                            <li><a href="/edit-album/<?php echo($album->id); ?>"  class="fas fa-edit"></a></li>
                            <li><a href="/delete-album/<?php echo($album->id); ?>" class="fas fa-trash"></a></li>
                    </ul>
                    <a href="#lightbox" data-slide-to="<?php echo($key); ?>"><img src="{{ asset('images/') }}/<?php echo($album->path); ?>" class="img-thumbnail my-3"/></a>
                </div>
                @endforeach
            </div>
        </div>
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="Lightbox Gallery by Bootstrap 4" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div id="lightbox" class="carousel slide" data-ride="carousel" data-interval="5000" data-keyboard="true">
                            <ol class="carousel-indicators">
                                @foreach($albums as $key => $album)
                                <li data-target="#lightbox" data-slide-to="<?php echo($key); ?>"></li>
                                @endforeach
                            </ol>
                            <div class="carousel-inner">
                                @foreach($albums as $key => $album)
                                @if ($key == 0)
                                <div class="carousel-item active">
                                @else
                                <div class="carousel-item">
                                @endif
                                    <ul class="social">
                                        <li><a href="" class="fas fa-edit"></a></li>
                                        <li><a href="" class="fas fa-trash"></a></li>
                                    </ul>
                                    <img src="{{ asset('images/') }}/<?php echo($album->path); ?>" class="w-100" height="400px" width="600px" alt="">
                                    <div class="carousel-caption d-none d-md-block">
                                        <p><?php echo($album->desc); ?></p>
                                    </div>
                                </div>
                                @endforeach
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
        @include('footer');
	<!-- END FOOTER-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>