<!DOCTYPE html>
<html>
<head>
	<title>Konsultan Tambang - Edit Pengurusan Izin</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/add-edit-news.css') }}">
    <link href='https://cdn.jsdelivr.net/npm/froala-editor@3.0.0-rc.2/css/froala_editor.pkgd.min.css' rel='stylesheet' type='text/css' />

    <!-- Include JS file. -->
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@3.0.0-rc.2/js/froala_editor.pkgd.min.js'></script>

</head>
<body>
	<!-- NAVBAR -->
    @include('admin.navbar');
    <!-- END NAVBAR -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h5 class="align-self-center " style="margin-top:11px;margin-left:10px">Tambah Pengurusan Izin</h5>
            </div>
        </div>
        <hr>
    </div>
    <div class="editIzin">
        <div class="container">
            <form action="/">
                <div class="form-group">
                    <label style="margin-left: 10px;">Judul Perizinan</label>
                    <div class="input-group">
                        <input type="text" id="judul_berita" name="judul_berita">
                    </div><br>
                    <label style="margin-left: 10px;">Isi Perizinan</label>
                    <div class="input-group">
                        <textarea id="froala-editor"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <button type="reset" class="btn btn-primary btn-md"><i class="fas fa-arrow-left pl-1"></i> BACK</button>
                        </div>
                        <div class="col-md-4 text-center">
                            <button class="btn btn-warning btn-md"><i class="fas fa-ban pl-1"></i><strong> DELETE</strong></button>
                        </div>
                        <div class="col-md-4 text-right">
                            <button type="submit" class="btn btn-dark-green btn-md"><strong>SAVE </strong><i class="fas fa-check pl-1"></i></button>
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
    <script>
        new FroalaEditor('textarea#froala-editor',{
         height:220,
         width:1240
        });
    </script>
</body>
</html>