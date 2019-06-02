import React, { Component} from 'react';
import 'bootstrap/dist/css/bootstrap.css';
import 'font-awesome/css/font-awesome.min.css';
import './News.css';
class News extends Component{
    render(){
        return(
            <div className="demo">
                <div className="container">
                    <div className="title text-left">
                        <h3>Pengurusan Izin</h3>
                        <hr/>
                    </div>
                    <div className="add-perizinan text-right">
                        <button>Tambah Perizinan</button>
                        <hr/>
                    </div>
                    <div className="row">
                        <div className="post-slide">
                            <div className="post-img">
                                <a href="#"><img src="http://bestjquery.com/tutorial/news-slider/demo33/images/img-1.jpg" alt=""/></a>
                                <ul class="social">
                                    <li><a href="" class="fa fa-search"></a></li>
                                    <li><a href="" class="fa fa-shopping-bag"></a></li>
                                    <li><a href="" class="fa fa-shopping-cart"></a></li>
                                </ul>
                            </div>
                            <div className="post-content">
                                <h3 className="post-title"><a href="#">Judul</a></h3>
                                <ul className="post-bar">
                                    <li><i className="fa fa-calendar"></i> June 5, 2016</li>
                                    <li>
                                        <i className="fas fa-eye"></i>
                                        <a href="#">200 views</a>
                                    </li>
                                </ul>
                                <a href="#" className="read-more">read more</a>
                            </div>
                        </div>
                        <div className="post-slide">
                            <div className="post-img">
                                <a href="#"><img src="http://bestjquery.com/tutorial/news-slider/demo33/images/img-2.jpg" alt=""/></a>
                                <ul class="social">
                                    <li><a href="" class="fa fa-search"></a></li>
                                    <li><a href="" class="fa fa-shopping-bag"></a></li>
                                    <li><a href="" class="fa fa-shopping-cart"></a></li>
                                </ul>
                            </div>
                            <div className="post-content">
                                <h3 className="post-title"><a href="#">Judul</a></h3>
                                <ul className="post-bar">
                                    <li><i className="fa fa-calendar"></i> June 7, 2016</li>
                                    <li>
                                        <i className="fas fa-eye"></i>
                                        <a href="#">200 views</a>
                                    </li>
                                </ul>
                                <a href="#" className="read-more">read more</a>
                            </div>
                        </div>    
                        <div className="post-slide">
                            <div className="post-img">
                                <a href="#"><img src="http://bestjquery.com/tutorial/news-slider/demo33/images/img-3.jpg" alt=""/></a>
                                <ul class="social">
                                    <li><a href="" class="fa fa-search"></a></li>
                                    <li><a href="" class="fa fa-shopping-bag"></a></li>
                                    <li><a href="" class="fa fa-shopping-cart"></a></li>
                                </ul>
                            </div>
                            <div className="post-content">
                                <h3 className="post-title"><a href="#">Judul</a></h3>
                                <ul className="post-bar">
                                    <li><i className="fa fa-calendar"></i> June 5, 2016</li>
                                    <li>
                                        <i className="fas fa-eye"></i>
                                        <a href="#">200 views</a>
                                    </li>
                                </ul>
                                <a href="#" className="read-more">read more</a>
                            </div>
                        </div>
                        <div className="post-slide">
                            <div className="post-img">
                                <a href="#"><img src="http://bestjquery.com/tutorial/news-slider/demo33/images/img-4.jpg" alt=""/></a>
                                <ul class="social">
                                    <li><a href="" class="fa fa-search"></a></li>
                                    <li><a href="" class="fa fa-shopping-bag"></a></li>
                                    <li><a href="" class="fa fa-shopping-cart"></a></li>
                                </ul>
                            </div>
                            <div className="post-content">
                                <h3 className="post-title"><a href="#">Judul</a></h3>
                                <ul className="post-bar">
                                    <li><i className="fa fa-calendar"></i> June 5, 2016</li>
                                    <li>
                                        <i className="fas fa-eye"></i>
                                        <a href="#">200 views</a>
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

export default News;