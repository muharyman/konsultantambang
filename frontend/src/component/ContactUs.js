import React, { Component} from 'react';
import 'bootstrap/dist/css/bootstrap.css';
import 'font-awesome/css/font-awesome.min.css';
import 'bootstrap/dist/js/bootstrap.js';
import { FacebookProvider, Page, ShareButton } from 'react-facebook';

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
                    <FacebookProvider appId='371609700138968'>
                        <Page href="https://www.facebook.com/radiorodja.rodjatv/?eid=ARCSjSP54MHjJ9L-7oCqUvYJv9V0HRqIQimrMRfbYEAP9vsVrr3wxmiAELYKcYUpRUj8aJmd7dr17Om4" tabs="timeline" />
                    </FacebookProvider>
                </div>
                <div>
                    <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v3.3&appId=371609700138968&autoLogAppEvents=1"></script>
                    <div class="fb-page" 
                        data-href="https://www.facebook.com/radiorodja.rodjatv/?eid=ARCSjSP54MHjJ9L-7oCqUvYJv9V0HRqIQimrMRfbYEAP9vsVrr3wxmiAELYKcYUpRUj8aJmd7dr17Om4" 
                        data-tabs="timeline" 
                        data-width="300" 
                        data-height="250" 
                        data-small-header="false" 
                        data-adapt-container-width="true" 
                        data-hide-cover="false" 
                        data-show-facepile="true">
                        <blockquote 
                            cite="https://www.facebook.com/radiorodja.rodjatv/?eid=ARCSjSP54MHjJ9L-7oCqUvYJv9V0HRqIQimrMRfbYEAP9vsVrr3wxmiAELYKcYUpRUj8aJmd7dr17Om4" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/radiorodja.rodjatv/?eid=ARCSjSP54MHjJ9L-7oCqUvYJv9V0HRqIQimrMRfbYEAP9vsVrr3wxmiAELYKcYUpRUj8aJmd7dr17Om4"
                        >
                            Radio Rodja 756 AM
                            </a></blockquote></div>
                </div>
                <div>
                    <FacebookProvider appId="371609700138968">
                        <ShareButton href="https://www.facebook.com/radiorodja.rodjatv/?eid=ARCSjSP54MHjJ9L-7oCqUvYJv9V0HRqIQimrMRfbYEAP9vsVrr3wxmiAELYKcYUpRUj8aJmd7dr17Om4">
                        Share
                        </ShareButton>
                    </FacebookProvider>
                </div>
                 <div>
                    <iframe width="354" height="214.16"
                        src="https://www.youtube.com/embed/tgbNymZ7vqY">
                    </iframe>
                </div>
                <div>
                <a class="twitter-timeline" data-width="250" data-height="250" href="https://twitter.com/yufid?ref_src=twsrc%5Etfw">Tweets by yufid</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>

                
            </div>
        );
    }
}

export default ContactUs;