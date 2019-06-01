import React, { Component} from 'react';
import 'bootstrap/dist/css/bootstrap.css';
import 'font-awesome/css/font-awesome.min.css';
import 'bootstrap/dist/js/bootstrap.js';
import { FacebookProvider, Page } from 'react-facebook';

// import {FacebookProvider, EmbeddedPost, Share} from 'react-facebook';
// import {FBEmbedPost} from 'facebook-plugins';

class ContactUs extends Component{
    render(){
        return(
            <div className="contactus">
                <div className="container">
                    <div className="title text-left">
                        <h3>Contact Us</h3>
                        <hr/>
                    </div>
                </div>
                <div className="contact-person">
                    <h4>Contact Person :098343743347 - Adasda</h4>
                </div>
                <div className="contact-person">
                    <h4>Email :</h4>
                </div>
                <div>
                <FacebookProvider appId='123456789'>
                    <Page href="https://www.facebook.com/" tabs="timeline" />
                </FacebookProvider>
                </div>
                           <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fnuha.adinata&tabs=timeline&width=500&height=0&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" 
                    width="200" 
                    height="200" 
                    // style="border:none;overflow:hidden" 
                    scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                 <div>
                <iframe width="420" height="315"
                    src="https://www.youtube.com/embed/tgbNymZ7vqY">
                </iframe>
                </div>
                <div>
                    <iframe width='230' height= '230'
                        src="https://www.facebook.com/nuha.adinata">
                    </iframe>
                </div>
                <div class="fb-page" 
                    data-href="https://www.facebook.com/facebook"
                    data-width="380" 
                    data-hide-cover="false"
                    data-show-facepile="false"></div>
            </div>
        );
    }
}

export default ContactUs;