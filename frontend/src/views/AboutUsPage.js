import React, { Component } from 'react';
import Navbar from '../component/Navbar';
import Footer from '../component/Footer';
import AboutUs from '../component/AboutUs';

class AboutUsPage extends Component{
    render() {
        return (
        <div className="App">
            <Navbar/>
            <AboutUs />
            <Footer /> 
        </div>
        );
    }
}

export default AboutUsPage;