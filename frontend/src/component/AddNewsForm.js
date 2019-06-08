import React , {Component} from 'react';
import 'bootstrap/dist/css/bootstrap.css';
import 'font-awesome/css/font-awesome.min.css';
import $ from 'jquery';
import axios from 'axios';

class AddNewsForm extends Component{
    state = {
        path:'',
        title: '',
        content: ''
    }

    handleFormSubmit( event ) {
        event.preventDefault();
        var formData = new FormData();
        formData.append('path', this.state.path)
        formData.append('title', this.state.title)
        formData.append('content', this.state.content)
        axios({
            method: 'POST',
            url: 'http://localhost:8080/admin/article/create',
            data: formData,
            config: { headers: {'Content-Type':'multipart/form-data' }}
        })
        .then(function (response) {
            //handle success
            console.log(response)

        })
        .catch(function (response) {
            //handle error
            console.log(response)
        });
    }

    
    render(){
        return(
            <div className="container">
                <div className="col-md-8">
                    <div className="form-group">
                        <label>Judul</label>
                        <div clasName="input-group">
                            <input type="text" className="form-control" id="title" name="title" value={this.state.title}
                            onChange={ e => this.setState({title:e.target.value})}/>
                        </div>
                        <label>Upload Image</label>
                        <div className="input-group">
                            {/* <span className="input-group-btn">
                                <span className="btn btn-default btn-file">
                                    Browse… <input type="file" id="imgInp"/>
                                </span>
                            </span> */}
                            <input type="text" className="form-control" id="path" name="path" value={this.state.path}
                            onChange={ e => this.setState({path:e.target.value})}/>
                        </div>
                        <img id='img-upload'/>
                        <label>Isi Berita</label>
                        <div clasName="input-group">
                            <textarea rows="10" className="form-control" id="content" name="content" value={this.state.content}
                            onChange={ e => this.setState({content:e.target.value})}/>
                        </div>
                        <div className="row">
                            <div className="col-md-3 text-center">
                                <input type="submit" className="btn btn-info" value="cancel">
                                </input>
                            </div>
                            <div className="col-md-6 text-center">
                                <input  type="submit" onClick={e => this.handleFormSubmit(e)} value="add" className="btn btn-success">
                                </input>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}
$(document).ready( function() {
    $(document).on('change', '.btn-file :file', function() {
    var input = $(this),
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [label]);
    });

    $('.btn-file :file').on('fileselect', function(event, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = label;
        
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
    
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#img-upload').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function(){
        readURL(this);
    }); 	
});

export default AddNewsForm;