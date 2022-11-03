@extends('admin.layouts.main')
@section('content')
<style type="text/css">
    .bootstrap-tagsinput{
        width: 100%!important;
    }
    .bootstrap-tagsinput .tag{
        background-color: #556ee6;
        padding: 2px 7px;

    }
</style>
  <style type="text/css">
        svg {width: 30%; height: auto;}
        /*  svg path {fill: #000 !important;
        }*/


        .svg-container {
          display: inline-block;
        }

       /* .svg-container svg:hover path {
          fill: blue !important;
        }*/
        .kangaroo img{
            width: 30%;
            height: auto;
        }
    </style>
<script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
<link rel="stylesheet" href="{{ URL::to('/admin') }}/assets/bootstrap-tagsinput.css">
 <div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Create</h4>


                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                       
                         @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Opps!</strong> Something went wrong, please check below errors.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                           {!! Form::model($post, ['route' => ['vector.update', $post->id], 'method'=>'PATCH','enctype' => 'multipart/form-data']) !!}
                        <div class="row">
                           <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="form-group m-0">
                                        <label  class="form-label">Title</label>
                                        {!! Form::text('title', null, array('placeholder' => 'Name','class' => 'form-control','required' =>'required')) !!}
                                    </div>
                                </div>
                            </div>   

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <div class="form-group m-0">

                                        <label  class="form-label">Price</label>
                                        {!! Form::text('price', null, array('placeholder' => 'Price','class' => 'form-control','required' =>'required')) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 m-0">
                                <div class="mb-3">
                                     <label  class="form-label">Size</label>
                                     {!! Form::text('size[]', null, array('placeholder' => 'for more add press Tab','id'=>'size','class' => 'form-control','required' =>'required','data-role'=>"tagsinput")) !!}
                                </div>
                            </div>
                            <div class="col-md-6 m-0">
                                <div class="mb-3">
                                     <label  class="form-label">Color</label>
                                     {!! Form::text('color[]', null, array('placeholder' => 'for more add press Tab','id'=>'color','class' => 'form-control','required' =>'required','data-role'=>"tagsinput")) !!}
                                </div>
                            </div>
                            <div class="col-md-6 m-0">
                                <button type="button" class="btn btn-sm btn-success" id="fetch_color">Fetch Colors</button>
                                <p id="color_list"></p>
                                 <div class="img">
                                        <div class="svg-container">
                                           <img class="svg" src="{{ URL::to('/') }}/{{ $post->image}}" alt="Microsoft" width="350" height="350">
                                        </div>
                                </div>
                             </div>

                            <div class="col-md-4">

                                <div class="mb-3">
                                    <div class="form-group">
                                        <strong>Image:</strong>
                                        {!! Form::file('image', array('placeholder' => 'image','id' => 'image','class' => 'form-control','accept' =>'image/*')) !!}
                                    </div>
                                </div>
                            </div>  
                          
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <div class="form-group">
                                        <strong>Banner Image:</strong>
                                        {!! Form::file('banner', array('placeholder' => 'banner image','id' => 'image','class' => 'form-control','accept' =>'image/*')) !!}
                                    </div>
                                </div>
                            </div>    

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <div class="form-group">
                                        <strong>Video:</strong>
                                        {!! Form::file('video', array('placeholder' => 'image','id' => 'image','class' => 'form-control','accept' =>'image/*')) !!}
                                    </div>
                                </div>
                            </div>    
                            @if($images)
                            @foreach($images as $value)
                            
                            <div class="col-md-2">
                            
                            <img src="{{URL::to('/')}}/{{$value['image']}}" style="width: 50%; height: 50%;">
                            <a href="{{URL::to('/')}}/delete-image/{{$value['id']}}">Delete</a>
                            </div> 
                            @endforeach
                            @endif   
                            <div class="col-md-12 m-0">
                                <div class="mb-3">
                                    <div class="form-group">

                                        <label  class="form-label"> Video Description</label>
                                        {!! Form::textarea('v_description', null, array('placeholder' => 'Video Description','class' => 'form-control','id'=> 'description','required' =>'required','value'=>'')) !!}
                                    </div>
                                    
                                </div>
                            </div>    

                            <div class="col-md-12 m-0">
                                <div class="mb-3">
                                    <div class="form-group">

                                        <label  class="form-label"> Features </label>
                                       
                                        <table class="table table-bordered" id="dynamicAddRemove">
                                        <tr>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="ftitle[]" placeholder="Enter subject" class="form-control" />
                                            </td>
                                            <td><textarea type="text" name="fdescription[]" placeholder="Enter subject" class="form-control" ></textarea>
                                            </td>
                                            <td><button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary">Add Subject</button></td>
                                        </tr>
                                        <?php 
                                        if(!empty($post['ftitle'])){
                                            $ftitle = explode('|', $post['ftitle']);
                                            $fdescription = explode('|', $post['fdescription']);
                                            foreach ($ftitle as $key => $value) {
                                        ?>
                                        <tr>
                                            <td><input type="text" name="ftitle[]" placeholder="Enter subject" class="form-control" value="{{ $ftitle[$key] }}" />
                                            </td>
                                            <td><textarea type="text" name="fdescription[]" placeholder="Enter subject" class="form-control" >{{ $fdescription[$key] }}</textarea>
                                            </td>
                                            <td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td>
                                        </tr>
                                        <?php } } ?>
                                    </table>
                                    </div>
                                </div>
                            </div>      
                            
                            
                            <div class="col-md-3 m-0">
                                <div class="mb-3">
                                    <div class="form-group">

                                        <label  class="form-label">Status</label>
                                        {!! Form::select('status', array(1=>'Active',0 => 'Disable'),null, array('class' => 'form-control')) !!}
                                    </div>
                                </div>
                            </div>   
                             
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                     {!! Form::close() !!}
                    </div>
                </div>
                <!-- end card -->
            </div> <!-- end col -->

           
        </div>
      

    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->

@endsection
@section('script')
<script src="{{ URL::to('/admin') }}/assets/bootstrap-tagsinput.min.js"></script>
<script src="{{ URL::to('/admin') }}/assets/bootstrap-tagsinput/bootstrap-tagsinput-angular.min.js"></script>
<script type="text/javascript">
    
$("#size").tagsinput('items');
</script>
<script type="text/javascript">
    var i = 0;
    $("#dynamic-ar").click(function () {
        ++i;
        $("#dynamicAddRemove").append('<tr><td><input type="text" name="ftitle[]" placeholder="Enter subject" class="form-control" /></td><td><textarea type="text" name="fdescription[]" placeholder="Enter subject" class="form-control" ></textarea></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'
            );
    });
    $(document).on('click', '.remove-input-field', function () {
        $(this).parents('tr').remove();
    });
</script>
 <script>
        CKEDITOR.replace( 'description' );
</script>


 <script type="text/javascript">
        
$(function(){
    jQuery('img.svg').each(function(){
        var $img = jQuery(this);
        var imgID = $img.attr('id');
        var imgClass = $img.attr('class');
        var imgURL = $img.attr('src');
    
        jQuery.get(imgURL, function(data) {
            // Get the SVG tag, ignore the rest
            var $svg = jQuery(data).find('svg');
    
            // Add replaced image's ID to the new SVG
            if(typeof imgID !== 'undefined') {
                $svg = $svg.attr('id', imgID);
            }
            // Add replaced image's classes to the new SVG
            if(typeof imgClass !== 'undefined') {
                $svg = $svg.attr('class', imgClass+' replaced-svg');
            }
    
            // Remove any invalid XML tags as per http://validator.w3.org
            $svg = $svg.removeAttr('xmlns:a');
            
            // Check if the viewport is set, else we gonna set it if we can.
            if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
                $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
            }
    
            // Replace image with new SVG
            $img.replaceWith($svg);
    
        }, 'xml');
    
    });
});


$(document).ready(function(){
    $('#fetch_color').click(function(){
        var color = [];
            $('.replaced-svg path').each(function() {
                var text = rgb2hex($(this).css('fill'));
               if (!color.includes(text)) {
                   color.push(text);
               }
            }); 
           $('#color_list').html(color.toString());
    })


     var hexDigits = new Array
        ("0","1","2","3","4","5","6","7","8","9","a","b","c","d","e","f");  
    
    function rgb2hex(rgb) {
         rgb = rgb.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
         return "#" + hex(rgb[1]) + hex(rgb[2]) + hex(rgb[3]);
    }

    function hex(x) {
      return isNaN(x) ? "00" : hexDigits[(x - x % 16) / 16] + hexDigits[x % 16];
     }

})

    </script>
@endsection