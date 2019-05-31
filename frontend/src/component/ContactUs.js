import React, { Component} from 'react';
import 'bootstrap/dist/css/bootstrap.css';
import 'font-awesome/css/font-awesome.min.css';
import 'bootstrap/dist/js/bootstrap.js';

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
            </div>
        );
    }
}

export default ContactUs;