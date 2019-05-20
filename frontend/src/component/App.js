import React from 'react';
import './App.css';
import Navbar from './Navbar';
import { Component } from 'react';
import Home from './Home';
import ImageSlider from './ImageSlider';

class App extends Component {
  render(){
    return (
      <div className="App">
        <Navbar></Navbar>
        <ImageSlider/>
        <Home></Home>
      </div>
    );
  }
}

export default App;
