<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from expert-themes.com/html/willies/admin/submit-property.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Dec 2018 11:30:35 GMT -->
<head>
<meta charset="utf-8">
<title>RightPlace.lk | My Property</title>
<!-- Stylesheets -->
<link href="{{ URL::asset('dashboard/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{ URL::asset('dashboard/css/style.css')}}" rel="stylesheet">
<link href="{{ URL::asset('dashboard/css/responsive.css')}}" rel="stylesheet">
<!--Color Themes-->
<link id="theme-color-file" href="{{ URL::asset('dashboard/css/blue-theme.css')}}" rel="stylesheet">
<link rel="shortcut icon" href="{{ URL::asset('dashboard/images/favicon.png')}}" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https:////cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<style>
.list-group{
	border-radius: 0px
}
.sub-list-group{
	margin: 10px;
	}
.list-group-item{

}
.list-group-item:hover , .list-group-item:active{
	border-left: 3px solid #0074D9;
}
.act{
	border-left: 3px solid #0074D9;
}
.popover{
    border: 2px dotted #0074D9;
    background: #a7f3f9;
    width: 150px;
    border-radius: 5px;
}
.arrow{
   
}
.popover-header{
    color: black;
    font-weight: 1600;
    background-color: #a7f3f9;
    text-align: center;
    text-transform: none;
    font-size: 11px;
}
.popover-body{
  
    text-align: center;
color: black;

}


</style>
</head>

<body>

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Header Span -->
    <span class="header-span"></span>

    <!-- Main Header-->
    <header class="main-header">
        <div class="main-box clearfix">
        	<!-- Logo Box -->
            <div class="logo-box">
                <div class="logo"><a href="/"><img src="{{ URL::asset('dashboard/images/ed-logo.png')}}" alt="" title=""></a></div>
            </div>

            <!-- Upper Right-->
            <div class="upper-right">
                <ul class="clearfix">
                    <li class="dropdown option-box">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <img src="{{ URL::asset('dashboard/images/resource/thumb-1.jpg')}}" alt="avatar" class="thumb">My Account</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="dashboard.html">My Account</a>
                            <a class="dropdown-item" href="/dashboard/my-add">My ads</a>
                         
                            <a class="dropdown-item" href="../index-2.html">Logout</a>
                        </div>
                    </li>
                    <li class="submit-property">
                    	<a href="/dashboard/add-type" class="theme-btn btn-style-one">Submit Property <i class="pe-7s-up-arrow"></i></a>
                    </li>
                   
                </ul>
            </div>
        </div>
       
        <!--End Header Lower-->
    </header>
      
    @yield('content')
 
    <script src="{{ URL::asset('dashboard/js/jquery.js')}}"></script> 
    <script src="{{ URL::asset('dashboard/js/popper.min.js')}}"></script>
    <script src="{{ URL::asset('dashboard/js/bootstrap.min.js')}}"></script>
    <script src="{{ URL::asset('dashboard/js/jquery-ui.js')}}"></script>
    <script src="{{ URL::asset('dashboard/js/wow.js')}}"></script>
    <script src="{{ URL::asset('dashboard/js/dropzone.js')}}"></script>
    <script src="{{ URL::asset('dashboard/js/appear.js')}}"></script>
    <script src="{{ URL::asset('dashboard/js/script.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    
    @if(session()->has('success'))
    <script>
  
            $(document).ready(function() {
                
                Swal.fire(
      'Success!',
      'You ad has been deleted!',
      'success'
    )
            });
            </script>
           <?php session()->forget('success'); ?>
    @endif
    <script>
  
        $(document).ready(function() {
            
      
        $('#js-example-basic-single').select2({
            placeholder: 'Select Your City'
        });
        $('#loadcity').select2();
    });
    $('.popoverDat').popover();
    $('#popoverData1').popover();

        $(document).ready(function(){
            $('#js-example-basic-single').change(function(){
                $('#loadcity').val();
                var value=$("#js-example-basic-single").val();
                //alert(value);
                $.ajax({
                    url:"{{ route('loadCity.fetch') }}",
                    method:"POST",
                    data:{
                        "_token": "{{ csrf_token() }}",
                        "district": value
                        },
                    success: function(data){
                        $('#loadcity').find('option')
                                        .remove()
                                        .end()
                                        .append(data); 
                    }
                });
            });
        });

        function countChar(val) {
        var len = val.value.length;
        if (len >= 5000) {
          val.value = val.value.substring(0, 5000);
        } else {
          $('#charNum').text(5000 - len +' characters allowed');
        }
      };

      function countChar2(val) {
        var len = val.value.length;
        if (len >= 50) {
          val.value = val.value.substring(0, 50);
        } else {
          $('#charNum2').text(50 - len +' characters allowed');
        }
      };

        $(document).ready(function(){
           
            //-----delete function confirmation
            $('.deleteBtn').click(function(e) {
                e.preventDefault();
                var href = $(this).attr('href');
                Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.value) {
    window.location.href = href;
  }
})       
            });



            //-------------------------------------
           

            // Disable AutoDiscover
            Dropzone.autoDiscover = false;

        // Set Dropzone Options
            Dropzone.options.myDropZone1 = {
                autoProcessQueue: false,
                uploadMultiple: true,
                parallelUploads: 20,
                maxFiles: 5,
                addRemoveLinks: true,
                acceptedFiles: "image/*",
                maxFilesize: 3,
                addRemoveLinks: true,
                dictDefaultMessage: "Drop your files here!",
            }
            var url1 = $('#formData').attr('action');
            // Initialize Dropzone
            var myDropzone = new Dropzone("#myDropZone1", {url: url1});

            // Initialize Submit Button
            var submitButton = document.querySelector("#submit");


    // Submit Button Event on click
    $('#formData').submit( function(e) {
        e.preventDefault();
    // Serialize Form
        var form = $('#formData').serialize();

        // if dropzone has files processqueue and submit formdata with dropzone
        if (myDropzone.getQueuedFiles().length > 0) {
                    myDropzone.processQueue();
            } else {
        //-------post the all data without image-----------------
        $.ajax({
            type: 'post',
    // First, validate form
            url: url1,
            data: form,
            dataType:"json",
            success: function(data){
                //check the validatins
                if(data.error.length>0){
                        var error_html='';
                       
                        for (var index = 0; index < data.error.length; index++) {
                            error_html+=data.error[index]+'<br/>';
                            
                        }
                       // $('#result').html(error_html);
                                                    Swal.fire({
                            title: 'Error!',
                            html: error_html,
                            type: 'error',
                            confirmButtonText: 'Cool'
                            })
                    }else{
                        // if dropzone has no files store item without images
                                         Swal.fire(
                                        'Good job!',
                                        'Data Saved!',
                                        'success'
                                        )
                                        $("#formData")[0].reset()
                            
                }
            },
            error: function(data){
        // on validate error show errors (using sweet alert)
                var result = $.parseJSON(data.responseText);
                var arr = [];
                $.each(result, function(key, value) {
                    arr += value + "\n";
                });
                swal({
                    title: "Error!",
                    text: arr,
                    type: "error",
                    confirmButtonText: "Ok"
                });
            }
        });
                            }
        //----------end of ajax post without image
    });

    //--------end of submit--------------

    // on sending via dropzone append token and form values (using serializeObject jquery Plugin)
    myDropzone.on("sendingmultiple", function(file, xhr, formData) {
        formData.append('_token', '{{ csrf_token() }}');
        // var form = $('#formData')[0]; // You need to use standard javascript object here
        // var formValues = new FormData(form);
          var formValues = $('#formData').serializeArray();
        // $.each(formValues, function(key, value){
        //     formData.append(key, value);
        // });
        for (var i=0; i<formValues.length; i++){
        formData.append(formValues[i].name, formValues[i].value);
        }
           // formData.append('formData',formValues);  
       
        //formData=formData+formValues;
    });

     // on success redirect
     myDropzone.on("success", function(file, response){
        var data = jQuery.parseJSON(response); 
       
       //check the validatins
       if(data.error.length>0){
                        var error_html='';
                        for (var index = 0; index < data.error.length; index++) {
                            error_html+=data.error[index]+'<br/>';
                            
                        }
                       // $('#result').html(error_html);
                                                    Swal.fire({
                            title: 'Error!',
                            html: error_html,
                            type: 'error',
                            confirmButtonText: 'Ok'
                            })
                    }else{
                        // if dropzone has no files store item without images
                        myDropzone.removeFile(file);
                        $("#formData")[0].reset()
                                         Swal.fire(
                                        'Good job!',
                                        'Data Saved!',
                                        'success'
                                        )
                            
                }
                                       
    });

    // on error show errors
    myDropzone.on("errormultiple", function(file, errorMessage, xhr){
        var arr = [];
        $.each(errorMessage, function(key, value) {
            arr += value + "\n";
        });
        swal({
            title: "Error!",
            text: arr,
            type: "error",
            confirmButtonText: "Ok"
        });
    });
    //-----end of document.ready -----------
        });
    </script>
  
    </body>
    
    <!-- Mirrored from expert-themes.com/html/willies/admin/submit-property.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Dec 2018 11:31:39 GMT -->
    </html>