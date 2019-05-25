import React from 'react';
import './App.css';
import Navbar from './Navbar';
import { Component } from 'react';
import 'bootstrap/dist/js/bootstrap.js';
import 'bootstrap/dist/css/bootstrap.css';
import Details from './Details';
import Home from './Home';
class App extends Component {
  render(){
    return (
      <div className="App">
      <Navbar/>
      <Home/>
      <Details/>
      </div>
    );
  }
}

export default App;
