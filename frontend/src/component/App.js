import React from 'react';
import './App.css';
import Navbar from './Navbar';
import { Component } from 'react';
import Home from './Home';
import ImageSlider from './ImageSlider';
import Slider from './Slider';
import 'bootstrap/dist/js/bootstrap.js';
import 'bootstrap/dist/css/bootstrap.css';
import Footer from './Footer';
import ProductSection from './ProductSection';
import PictureSection from './PictureSection';
import Gallery from './Gallery';

class App extends Component {
  render(){
    return (
      <div className="App">
        <Navbar></Navbar>
        {/* <Slider /> */}
        <ImageSlider/>
        <ProductSection />
        <Home></Home>
        {/* <PictureSection /> */}
        <Footer />
        <Gallery/>
      </div>
    );
  }
}

export default App;
