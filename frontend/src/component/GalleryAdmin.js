import React, { Component} from 'react';
import 'bootstrap/dist/css/bootstrap.css';
import 'font-awesome/css/font-awesome.min.css';
import 'bootstrap/dist/js/bootstrap.js';
import './Gallery.css';
import Footer from './Footer';
class GalleryAdmin extends Component{
    render(){
        return(
        <div className="gallery">
            <div className="container-fluid">
                <div className="row">
                    <div className="col-md-7 admin title text-left">
                        <h3>Gallery</h3>
                    </div>
                    <div className="col-md-4 admin button-add text-right">
                        <button>Tambah foto</button>
                    </div>
                </div>
                <hr/>
                <div className="row">
                    <div className="col-md-2" data-toggle="modal" data-target="#modal">
                    <a href="#lightbox" data-slide-to="0"><img src="https://dummyimage.com/160x120/000000/fff.png&text=Photo+1" className="img-thumbnail my-3"/></a>
                        <ul class="social">
                            <li><a href="" class="fa fa-search"></a></li>
                        </ul>
                    </div>
                    <div className="col-md-2" data-toggle="modal" data-target="#modal">
                    <a href="#lightbox" data-slide-to="1"><img src="https://dummyimage.com/160x120/000000/fff.png&text=Photo+2" className="img-thumbnail my-3"/></a>
                    </div>
                    <div className="col-md-2" data-toggle="modal" data-target="#modal">
                    <a href="#lightbox" data-slide-to="2"><img src="https://dummyimage.com/160x120/000000/fff.png&text=Photo+3" className="img-thumbnail my-3"/></a>
                    </div>
                    <div className="col-md-2" data-toggle="modal" data-target="#modal">
                    <a href="#lightbox" data-slide-to="3"><img src="https://dummyimage.com/160x120/000000/fff.png&text=Photo+4" className="img-thumbnail my-3"/></a>
                    </div>
                    <div className="col-md-2" data-toggle="modal" data-target="#modal">
                    <a href="#lightbox" data-slide-to="4"><img src="https://dummyimage.com/160x120/000000/fff.png&text=Photo+5" className="img-thumbnail my-3"/></a>
                    </div>
                    <div className="col-md-2" data-toggle="modal" data-target="#modal">
                    <a href="#lightbox" data-slide-to="5"><img src="https://dummyimage.com/160x120/000000/fff.png&text=Photo+6" className="img-thumbnail my-3"/></a>
                    </div>
                    <div className="col-md-2" data-toggle="modal" data-target="#modal">
                    <a href="#lightbox" data-slide-to="6"><img src="https://dummyimage.com/160x120/000000/fff.png&text=Photo+7" className="img-thumbnail my-3"/></a>
                    </div>
                    <div className="col-md-2" data-toggle="modal" data-target="#modal">
                    <a href="#lightbox" data-slide-to="7"><img src="https://dummyimage.com/160x120/000000/fff.png&text=Photo+8" className="img-thumbnail my-3"/></a>
                    </div>
                    <div className="col-md-2" data-toggle="modal" data-target="#modal">
                    <a href="#lightbox" data-slide-to="8"><img src="https://dummyimage.com/160x120/000000/fff.png&text=Photo+9" className="img-thumbnail my-3"/></a>
                    </div>
                    <div className="col-md-2" data-toggle="modal" data-target="#modal">
                    <a href="#lightbox" data-slide-to="9"><img src="https://dummyimage.com/160x120/000000/fff.png&text=Photo+10" className="img-thumbnail my-3"/></a>
                    </div>
                    <div className="col-md-2" data-toggle="modal" data-target="#modal">
                    <a href="#lightbox" data-slide-to="10"><img src="https://dummyimage.com/160x120/000000/fff.png&text=Photo+11" className="img-thumbnail my-3"/></a>
                    </div>
                    <div className="col-md-2" data-toggle="modal" data-target="#modal">
                    <a href="#lightbox" data-slide-to="11"><img src="https://dummyimage.com/160x120/000000/fff.png&text=Photo+12" className="img-thumbnail my-3"/></a>
                    </div>
                    <div className="col-md-2" data-toggle="modal" data-target="#modal">
                    <a href="#lightbox" data-slide-to="12"><img src="https://dummyimage.com/160x120/000000/fff.png&text=Photo+13" className="img-thumbnail my-3"/></a>
                    </div>
                    <div className="col-md-2" data-toggle="modal" data-target="#modal">
                    <a href="#lightbox" data-slide-to="13"><img src="https://dummyimage.com/160x120/000000/fff.png&text=Photo+14" className="img-thumbnail my-3"/></a>
                    </div>
                    <div className="col-md-2" data-toggle="modal" data-target="#modal">
                    <a href="#lightbox" data-slide-to="14"><img src="https://dummyimage.com/160x120/000000/fff.png&text=Photo+15" className="img-thumbnail my-3"/></a>
                    </div>
                    <div className="col-md-2" data-toggle="modal" data-target="#modal">
                    <a href="#lightbox" data-slide-to="15"><img src="https://dummyimage.com/160x120/000000/fff.png&text=Photo+16" className="img-thumbnail my-3"/></a>
                    </div>    
                </div>
            </div>
            <div className="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="Lightbox Gallery by Bootstrap 4" aria-hidden="true">
                <div className="modal-dialog modal-dialog-centered" role="document">
                    <div className="modal-content">
                        <div className="modal-body">
                            <div id="lightbox" className="carousel slide" data-ride="carousel" data-interval="5000" data-keyboard="true">
                                <ol className="carousel-indicators">
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
                                <div className="carousel-inner">
                                    <div className="carousel-item active"><img src="https://dummyimage.com/1280x1024/000000/fff.png&text=Photo+1" className="w-100"
                                        alt=""/></div>
                                    <div className="carousel-item"><img src="https://dummyimage.com/1280x1024/000000/fff.png&text=Photo+2" className="w-100"
                                        alt=""/></div>
                                    <div className="carousel-item"><img src="https://dummyimage.com/1280x1024/000000/fff.png&text=Photo+3" className="w-100"
                                        alt=""/></div>
                                    <div className="carousel-item"><img src="https://dummyimage.com/1280x1024/000000/fff.png&text=Photo+4" className="w-100"
                                        alt=""/></div>
                                    <div className="carousel-item"><img src="https://dummyimage.com/1280x1024/000000/fff.png&text=Photo+5" className="w-100"
                                        alt=""/></div>
                                    <div className="carousel-item"><img src="https://dummyimage.com/1280x1024/000000/fff.png&text=Photo+6" className="w-100"
                                        alt=""/></div>
                                    <div className="carousel-item"><img src="https://dummyimage.com/1280x1024/000000/fff.png&text=Photo+7" className="w-100"
                                        alt=""/></div>
                                    <div className="carousel-item"><img src="https://dummyimage.com/1280x1024/000000/fff.png&text=Photo+8" className="w-100"
                                        alt=""/></div>
                                    <div className="carousel-item"><img src="https://dummyimage.com/1280x1024/000000/fff.png&text=Photo+9" className="w-100"
                                        alt=""/></div>
                                    <div className="carousel-item"><img src="https://dummyimage.com/1280x1024/000000/fff.png&text=Photo+10" className="w-100"
                                        alt=""/></div>
                                    <div className="carousel-item"><img src="https://dummyimage.com/1280x1024/000000/fff.png&text=Photo+11" className="w-100"
                                        alt=""/></div>
                                    <div className="carousel-item"><img src="https://dummyimage.com/1280x1024/000000/fff.png&text=Photo+12" className="w-100"
                                        alt=""/></div>
                                    <div className="carousel-item"><img src="https://dummyimage.com/1280x1024/000000/fff.png&text=Photo+13" className="w-100"
                                        alt=""/></div>
                                    <div className="carousel-item"><img src="https://dummyimage.com/1280x1024/000000/fff.png&text=Photo+14" className="w-100"
                                        alt=""/></div>
                                    <div className="carousel-item"><img src="https://dummyimage.com/1280x1024/000000/fff.png&text=Photo+15" className="w-100"
                                        alt=""/></div>
                                    <div className="carousel-item"><img src="https://dummyimage.com/1280x1024/000000/fff.png&text=Photo+16" className="w-100"
                                        alt=""/></div>
                                </div>
                                <a className="carousel-control-prev" href="#lightbox" role="button" data-slide="prev"><span className="carousel-control-prev-icon" aria-hidden="true"></span><span className="sr-only">Previous</span></a>
                                <a className="carousel-control-next" href="#lightbox" role="button" data-slide="next"><span className="carousel-control-next-icon" aria-hidden="true"></span><span className="sr-only">Next</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <Footer/>
        </div>
        );
    }
}

export default GalleryAdmin;
