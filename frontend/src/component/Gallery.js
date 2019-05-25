import React, { Component} from 'react';
import 'bootstrap/dist/css/bootstrap.css';
import 'font-awesome/css/font-awesome.min.css';
import 'bootstrap/dist/js/bootstrap.js';
import './Gallery.css';
import jQuery from 'jquery';

var $ = jQuery.noConflict();
class Gallery extends Component{
    componentDidMount(){
        $(document).on("click", '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
    }
    render(){
        return(
            <div class="container">
                <div class="row">
                <a href="https://unsplash.it/1200/768.jpg?image=251" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                    <img src="https://unsplash.it/600.jpg?image=251" class="img-fluid rounded"/>
                </a>
                <a href="https://unsplash.it/1200/768.jpg?image=252" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                    <img src="https://unsplash.it/600.jpg?image=252" class="img-fluid rounded"/>
                </a>
                <a href="https://unsplash.it/1200/768.jpg?image=253" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                    <img src="https://unsplash.it/600.jpg?image=253" class="img-fluid rounded"/>
                </a>
                </div>
                <div class="row">
                <a href="https://unsplash.it/1200/768.jpg?image=254" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                    <img src="https://unsplash.it/600.jpg?image=254" class="img-fluid rounded"/>
                </a>
                <a href="https://unsplash.it/1200/768.jpg?image=255" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                    <img src="https://unsplash.it/600.jpg?image=255" class="img-fluid rounded"/>
                </a>
                <a href="https://unsplash.it/1200/768.jpg?image=256" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                    <img src="https://unsplash.it/600.jpg?image=256" class="img-fluid rounded"/>
                </a>
                </div>
          </div>
        );
    }
}


export default Gallery;