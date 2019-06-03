import React , {Component} from 'react';
import 'bootstrap/dist/css/bootstrap.css';
import 'font-awesome/css/font-awesome.min.css';
import $ from 'jquery';

class EditNewsForm extends Component{
    render(){
        return(
            <div className="container">
                <div className="col-md-8">
                    <div className="form-group">
                        <label>Judul</label>
                        <div clasName="input-group">
                            <input type="text" className="form-control" id="judul"/>
                        </div>
                        <label>Upload Image</label>
                        <div className="input-group">
                            <span className="input-group-btn">
                                <span className="btn btn-default btn-file">
                                    Browse… <input type="file" id="imgInp"/>
                                </span>
                            </span>
                            <input type="text" className="form-control" readOnly/>
                        </div>
                        <img id='img-upload'/>
                        <label>Isi Berita</label>
                        <div clasName="input-group">
                            <textarea rows="10" className="form-control" id="berita"/>
                        </div>
                    </div>
                </div>
                <div className="row">
                    <div className="col-md-3 text-center">
                        <a href="#" class="btn btn-info">
                            <span class="glyphicon glyphicon-remove"></span> cancel
                        </a>
                    </div>
                    <div className="col-md-6 text-center">
                        <a href="#" class="btn btn-success">save
                            <span class="glyphicon glyphicon-ok"></span>
                        </a>
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

export default EditNewsForm;