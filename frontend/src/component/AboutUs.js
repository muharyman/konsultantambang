import React from 'react';
import 'bootstrap/dist/css/bootstrap.css';
import { Component } from 'react';
import './Navbar.css';
import 'font-awesome/css/font-awesome.min.css';
import { BrowserRouter as Router, Switch, Route, Link } from 'react-router-dom';
import Gallery from './Gallery';
import Home from './Home';

class AboutUs extends Component{
    render(){
        return(
            <div>
                About Us
            </div>
        );
    }
}

export default AboutUs;