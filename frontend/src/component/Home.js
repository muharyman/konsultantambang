import React, { Component} from 'react';
import 'bootstrap/dist/css/bootstrap.css';
import 'font-awesome/css/font-awesome.min.css';
import './Home.css';
import ImageSlider from './ImageSlider';
import 'bootstrap/dist/js/bootstrap.js';
import Footer from './Footer';
import ProductSection from './ProductSection';
import News from './News';
import ContactUs from './ContactUs';
import UploadPhoto from './UploadPhoto';
class Home extends Component{
    render(){
        return(
            <div className="home">
                <ImageSlider/>
                <ProductSection/>
                <div className="row">
                    <div className="col-md-8">
                        <News/>
                    </div>
                    <div className="col-md-4">
                        <ContactUs/>
                    </div>
                </div>
                <UploadPhoto/>
                <Footer/>
            </div>
        );  
    }
}

export default Home;