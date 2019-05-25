import React, { Component} from 'react';
import 'bootstrap/dist/css/bootstrap.css';
import 'font-awesome/css/font-awesome.min.css';
import 'bootstrap/dist/js/bootstrap.js';
import './Gallery.css';
import Navbar from './Navbar';
import Footer from './Footer';
class Gallery extends Component{
    render(){
        return(
        <div>
            <div className="container-fluid">
                <div className="row">
                    <div className="col-md-2" data-toggle="modal" data-target="#modal">
                    <a href="#lightbox" data-slide-to="0"><img src="https://dummyimage.com/160x120/000000/fff.png&text=Photo+1" className="img-thumbnail my-3"/></a>
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
                                </div>
                                <a className="carousel-control-prev" href="#lightbox" role="button" data-slide="prev"><span className="carousel-control-prev-icon" aria-hidden="true"></span><span className="sr-only">Previous</span></a>
                                <a className="carousel-control-next" href="#lightbox" role="button" data-slide="next"><span className="carousel-control-next-icon" aria-hidden="true"></span><span className="sr-only">Next</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        );
    }
}

export default Gallery;
