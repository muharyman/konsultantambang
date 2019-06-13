<!DOCTYPE html>
<html>
<head>
	<title>Konsultan Tambang - Tambah Foto</title>
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
    @include('admin.navbar');
    <!-- END NAVBAR -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h5 class="align-self-center " style="margin-top:11px;margin-left:10px">Tambah Foto</h5>
            </div>
        </div>
        <hr>
    </div>
    <div class="addPhoto">
        <div class="container">
            <form action="/post-add-album" method="post" name="addAlbum" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="form-group">
                    <label style="margin-left: 10px;">Upload Image</label>
                    <div class="input-group">
                        <span class="input-group-btn">
                            <span class="btn btn-default btn-file">
                                Browse… <input type="file" id="imgInp" name="album-photo">
                            </span>
                        </span>
                        <input type="text" class="form-control" readonly>
                    </div>
                    <img id='img-upload'/>
                    <label style="margin-left: 9px;">Caption</label>
                    <div class="input-group">
                        <textarea name="album-desc" class="form-control" id="caption" style="resize: none;margin-left: 5px;" rows="5" cols="55"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <button type="reset" class="btn btn-primary btn-md"><i class="fas fa-arrow-left pl-1"></i> BACK</button>
                        </div>
                        <div class="col-md-6 text-right">
                            <button type="submit" class="btn btn-dark-green btn-md"><strong>ADD </strong><i class="fas fa-check pl-1"></i></button>
                        </div>
                    </div>
                </div>
            </form>
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