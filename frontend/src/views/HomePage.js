import React, { Component } from 'react';
import Navbar from '../component/Navbar';
import Home from '../component/Home';
import Footer from '../component/Footer';

class HomePage extends Component{
    render() {
        return (
        <div className="App">
            <Navbar/>
            <Home />
            <Footer /> 
        </div>
        );
    }
}

export default HomePage;