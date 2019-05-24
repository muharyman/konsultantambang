import React from 'react';
import './App.css';
import Navbar from './Navbar';
import { Component } from 'react';
import Home from './Home';
import ImageSlider from './ImageSlider';
import Slider from './Slider';
import Footer from './Footer';
import ProductSection from './ProductSection';

class App extends Component {
  render(){
    return (
      <div className="App">
        <Navbar></Navbar>
        {/* <Slider /> */}
        <ImageSlider/>
        <ProductSection />
        <Home></Home>
        <Footer />
      </div>
    );
  }
}

export default App;
