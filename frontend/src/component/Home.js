import React, { Component} from 'react';
import 'bootstrap/dist/css/bootstrap.css';
import 'font-awesome/css/font-awesome.min.css';
import './Home.css';

class Home extends Component{
    render(){
        return(
            <div className="demo">
                <div className="container">
                    <div className="row">
                        <div className="post-slide">
                            <div className="post-img">
                                <a href="#"><img src="http://bestjquery.com/tutorial/news-slider/demo33/images/img-1.jpg" alt=""/></a>
                            </div>
                            <div className="post-content">
                                <h3 className="post-title"><a href="#">Latest News Post</a></h3>
                                <p className="post-description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec elementum mauris. Praesent vehicula gravida dolor, ac efficitur sem sagittis.
                                </p>
                                <ul className="post-bar">
                                    <li><i className="fa fa-calendar"></i> June 5, 2016</li>
                                    <li>
                                        <i className="fa fa-folder"></i>
                                        <a href="#">Mockup</a>
                                        <a href="#">Graphics</a>
                                        <a href="#">Flayers</a>
                                    </li>
                                </ul>
                                <a href="#" className="read-more">read more</a>
                            </div>
                        </div>
                        <div className="post-slide">
                            <div className="post-img">
                                <a href="#"><img src="http://bestjquery.com/tutorial/news-slider/demo33/images/img-2.jpg" alt=""/></a>
                            </div>
                            <div className="post-content">
                                <h3 className="post-title"><a href="#">Latest News Post</a></h3>
                                <p className="post-description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec elementum mauris. Praesent vehicula gravida dolor, ac efficitur sem sagittis.
                                </p>
                                <ul className="post-bar">
                                    <li><i className="fa fa-calendar"></i> June 7, 2016</li>
                                    <li>
                                        <i className="fa fa-folder"></i>
                                        <a href="#">Mockup</a>
                                        <a href="#">Graphics</a>
                                        <a href="#">Flayers</a>
                                    </li>
                                </ul>
                                <a href="#" className="read-more">read more</a>
                            </div>
                        </div>    
                        <div className="post-slide">
                            <div className="post-img">
                                <a href="#"><img src="http://bestjquery.com/tutorial/news-slider/demo33/images/img-3.jpg" alt=""/></a>
                            </div>
                            <div className="post-content">
                                <h3 className="post-title"><a href="#">Latest News Post</a></h3>
                                <p className="post-description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec elementum mauris. Praesent vehicula gravida dolor, ac efficitur sem sagittis.
                                </p>
                                <ul className="post-bar">
                                    <li><i className="fa fa-calendar"></i> June 5, 2016</li>
                                    <li>
                                        <i className="fa fa-folder"></i>
                                        <a href="#">Mockup</a>
                                        <a href="#">Graphics</a>
                                        <a href="#">Flayers</a>
                                    </li>
                                </ul>
                                <a href="#" className="read-more">read more</a>
                            </div>
                        </div>
                        <div className="post-slide">
                            <div className="post-img">
                                <a href="#"><img src="http://bestjquery.com/tutorial/news-slider/demo33/images/img-4.jpg" alt=""/></a>
                            </div>
                            <div className="post-content">
                                <h3 className="post-title"><a href="#">Latest News Post</a></h3>
                                <p className="post-description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec elementum mauris. Praesent vehicula gravida dolor, ac efficitur sem sagittis.
                                </p>
                                <ul className="post-bar">
                                    <li><i className="fa fa-calendar"></i> June 5, 2016</li>
                                    <li>
                                        <i className="fa fa-folder"></i>
                                        <a href="#">Mockup</a>
                                        <a href="#">Graphics</a>
                                        <a href="#">Flayers</a>
                                    </li>
                                </ul>
                                <a href="#" className="read-more">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
        
    }
}

export default Home;