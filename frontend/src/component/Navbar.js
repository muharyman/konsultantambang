import React from 'react';
import 'bootstrap/dist/css/bootstrap.css';
import { Component } from 'react';
import './Navbar.css';
import 'font-awesome/css/font-awesome.min.css';

class Navbar extends Component{
    render(){
        return(
            <header>
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
                                <a className="nav-link" href={"/"}>Beranda <span class="sr-only">(current)</span></a>
                            </li>
                            <li className="nav-item dropdown">
                                <a className="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Pengurusan Izin
                                </a>
                                <div className="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a className="dropdown-item" href="#">Izin Tambang</a>
                                <a className="dropdown-item" href="#">Izin Lingkungan</a>
                                <div className="dropdown-divider"></div>
                                <a className="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            <li className="nav-item">
                                <a className="nav-link" href={"/Gallery"}>Foto Kegiatan</a>
                            </li>
                            <li className="nav-item">
                                <a className="nav-link" href={"/"}>Tentang</a>
                            </li>
                            <li className="nav-item">
                                <i class="fab fa-facebook-f"></i>
                            </li>
                            <li className="nav-item">
                                <i className="fab fa-twitter"></i>
                            </li>
                        </ul>
                        <form className="form-inline my-2 my-lg-0">
                            <input className="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"/>
                            <button className="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
            </header>
        );
    }
}

export default Navbar;