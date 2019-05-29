import React from 'react';
import { Component } from 'react';
import 'bootstrap/dist/js/bootstrap.js';
import 'bootstrap/dist/css/bootstrap.css';
import { List, ListItem, withStyles } from "@material-ui/core";

class Details extends Component{
    render(){
        return(
        <div className="container-fluid">
            <div className="row">
                <div className="col-md-8">
                    <div className="title">
                        <h2>Judul</h2>
                    </div>
                    <div className="post-content text-left">
                        <ul className="post-bar">
                            <li>
                                <i className="properti fa fa-calendar"><p> June 5, 2016</p></i> 
                                <i className="properti fas fa-eye"><p> 2013</p></i>
                                <i className="properti fas comments"><p> 5</p></i>
                            </li>
                        </ul>
                    </div>
                    <hr/>
                    <div className="gambar">
                        <div className="img-src">
                            <img className="d-block w-100" src="https://s3.us-east-2.amazonaws.com/dzuz14/thumbnails/aurora.jpg" alt="First slide"/>
                        </div>
                        <div className="deskripsi-gambar text-center">
                            <p>gambar ayam</p>
                        </div>
                    </div>
                    <div className="konten text-justify">
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et sollicitudin sapien, eu egestas nunc. Morbi arcu mauris, pharetra id elementum a, fringilla in nisi. Etiam egestas a orci sit amet blandit. Nullam enim risus, iaculis tincidunt ante sollicitudin, euismod interdum nunc. Cras sem tortor, feugiat aliquam euismod ac, pharetra iaculis lacus. Aenean vel scelerisque ligula. Duis elit mi, mollis sit amet enim id, rutrum auctor orci. Aliquam et tortor at nisl vulputate vehicula eget id massa. Sed sodales, mauris in iaculis pulvinar, metus purus vestibulum erat, nec laoreet mi nunc eget enim.

                    Vestibulum non enim sit amet ante aliquam pulvinar. Vivamus vitae commodo tellus, quis accumsan lectus. Nullam scelerisque rutrum arcu in dictum. Curabitur magna lectus, luctus ut euismod quis, finibus eu lorem. Curabitur sed urna sodales, pretium odio vel, egestas nisl. Nullam turpis arcu, varius sed risus ac, posuere viverra mauris. Duis consectetur elementum risus nec euismod.

                    Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer elementum volutpat justo in convallis. Sed congue ex nec pretium pulvinar. Donec in libero non quam vehicula semper. Nullam sodales et turpis at tempus. Cras accumsan odio sit amet nibh dapibus, vel convallis diam mollis. Etiam nec odio cursus mi dignissim pharetra non vulputate arcu. Curabitur ut erat euismod, ornare tellus eget, malesuada lacus. Morbi sodales, urna eu porttitor ornare, velit orci porta erat, et finibus ligula odio eget quam. Phasellus at blandit turpis. In eget lacinia tortor.

                    Nullam dignissim ornare mollis. Morbi porta elit nec dapibus tristique. Aenean congue sed nulla eget bibendum. Praesent eu nunc congue, mattis urna non, imperdiet urna. Sed ante est, ornare vel ultricies quis, auctor at neque. Phasellus at efficitur lacus, non vehicula purus. Nulla et bibendum mi, ac volutpat enim. Phasellus a mauris venenatis, sodales justo eget, pretium lorem. Vivamus et ante vel enim dictum semper. Proin posuere ornare tempus. Sed non efficitur dolor, eget viverra erat. Suspendisse accumsan sapien id mi auctor, at hendrerit sapien dignissim. Nam tempor, nunc ut iaculis venenatis, orci enim sollicitudin lorem, sit amet tristique ligula elit id metus. Nam eleifend molestie nisi. Proin faucibus vitae augue vel venenatis.

                    Nulla id suscipit erat, id pulvinar velit. Donec ac scelerisque urna. Aliquam erat volutpat. Nulla fermentum velit sit amet nibh dignissim, in sodales lorem pellentesque. Aliquam in egestas diam. Pellentesque hendrerit ex vitae turpis elementum congue. Aenean eu lacus lacus. Nulla faucibus ac turpis id sollicitudin.
                    </p>
                    </div>
                    <div class="share-social-media">
                    {/* <!-- Twitter --> */}
                    <a href="http://twitter.com/home?status=SHAREMESSAGE" title="Share on Twitter" target="_blank" class="btn btn-twitter"><i class="fa fa-twitter"></i> Twitter</a>
                    {/* <!-- Facebook --> */}
                    <a href="https://www.facebook.com/sharer/sharer.php?u=SHAREMESSAGE" title="Share on Facebook" target="_blank" class="btn btn-facebook"><i class="fa fa-facebook"></i> Facebook</a>
                    {/* <!-- Google+ --> */}
                    <a href="https://plus.google.com/share?url=SHAREMESSAGE" title="Share on Google+" target="_blank" class="btn btn-googleplus"><i class="fa fa-google-plus"></i> Google+</a>
                    {/* <!-- StumbleUpon --> */}
                    <a href="http://www.stumbleupon.com/submit?url=SHAREMESSAGE" title="Share on StumbleUpon" target="_blank" data-placement="top" class="btn btn-stumbleupon"><i class="fa fa-stumbleupon"></i> Stumbleupon</a>
                    {/* <!-- LinkedIn -->  */}
                    <a href="http://www.linkedin.com/shareArticle?mini=true&url=&title=&summary=SHAREMESSAGE" title="Share on LinkedIn" target="_blank" class="btn btn-linkedin"><i class="fa fa-linkedin"></i> LinkedIn</a>
                    </div>
                </div>
                <div className="col-md-4">
                    <div className="social-media-api">
                        
                    </div>
                </div>
            </div>
        </div>
        );
    }
}

export default Details;