import React, { Component } from 'react';
import Navbar from '../component/Navbar';
import Footer from '../component/Footer';
import Gallery from '../component/Gallery';

class GalleryPage extends Component{
    render() {
        return (
        <div className="App">
            <Navbar/>
            <Gallery />
            <Footer /> 
        </div>
        );
    }
}

export default GalleryPage;