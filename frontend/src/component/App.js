import React from 'react';
import './App.css';
import { Component } from 'react';
import 'bootstrap/dist/js/bootstrap.js';
import 'bootstrap/dist/css/bootstrap.css';
import Home from './Home';
import './Navbar.css';
import 'font-awesome/css/font-awesome.min.css';
import { BrowserRouter as Router, Switch, Route, Link } from 'react-router-dom';
import Gallery from './Gallery';
import AboutUs from './AboutUs';
class App extends Component {
  render(){
    return (
      <div className="App">
       <Router>
                <nav className=" navbar fixed-top navbar-expand-lg navbar-light bg-dark">
                    <a className="navbar-brand" href="">
                    <img className="logo" src="https://www.google.com/url?sa=i&source=images&cd=&cad=rja&uact=8&ved=2ahUKEwizquXdh6fiAhUQP6wKHaw-CWcQjRx6BAgBEAU&url=https%3A%2F%2Fwww.mongabay.co.id%2F2018%2F09%2F12%2Fgubernur-baru-ntt-janjikan-moratorium-tambang-akankah-terwujud%2F&psig=AOvVaw0TT9PoF6C9vMyjMAYD-dXU&ust=1558336965063429"/>
                    </a>
                    <button className="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span className="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul className="navbar-nav mr-auto">
                            <li className="nav-item active">
                                <a className="nav-link" >
                                    <Link to={"/"}>Home</Link><span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li className="nav-item">
                                <a className="nav-link">
                                    <Link to={"/gallery"}>Foto Kegiatan</Link>
                                </a>
                            </li>
                            <li className="nav-item">
                                <a className="nav-link">
                                    <Link to={"/about"}>Tentang Kami</Link>
                                </a>
                            </li>
                        </ul>
                        <hr />
                        <form className="form-inline my-2 my-lg-0">
                            <input className="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"/>
                            <button className="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
              <Switch>
                  <Route exact path='/' component={Home} />
                  <Route exact path='/gallery' component={Gallery} />
                  <Route path='/about' component={AboutUs} />
            </Switch>
            </Router> 
      </div>
    );
  }
}

export default App;
