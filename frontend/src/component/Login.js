import React, { Component} from 'react';
import 'bootstrap/dist/css/bootstrap.css';
import 'font-awesome/css/font-awesome.min.css';
class Login extends Component{
    render(){
        return(
            <div className="container">
                <div id="fullscreen_bg" class="fullscreen_bg"/>

                <div class="container">

                    <form class="form-signin">
                        <h1 class="form-signin-heading text-muted">Sign In</h1>
                        <input type="text" class="form-control" placeholder="Email address" required="" autofocus=""/>
                        <input type="password" class="form-control" placeholder="Password" required=""/>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">
                            Sign In
                        </button>
                    </form>

                </div>
            </div>
        );
    }
}

export default Login;