import React, { Component } from 'react';
import Navbar from '../component/Navbar';
import Footer from '../component/Footer';
import Gallery from '../component/Gallery';
// import GalleryAdmin from '../component/GalleryAdmin';

class GalleryPage extends Component{
    render(){
        return (
        <div className="App">
            <Navbar/>
            <Gallery/>
            <Footer /> 
        </div>
        );
    }
}

export default GalleryPage;