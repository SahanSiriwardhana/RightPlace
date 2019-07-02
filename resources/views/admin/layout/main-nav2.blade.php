<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from expert-themes.com/html/willies/admin/submit-property.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Dec 2018 11:30:35 GMT -->
<head>
<meta charset="utf-8">
<title>RightPlace.lk | Dashboard</title>
<!-- Stylesheets -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<!--Color Themes-->
<link id="theme-color-file" href="css/blue-theme.css" rel="stylesheet">
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />

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
                <div class="logo"><a href="/"><img src="images/ed-logo.png" alt="" title=""></a></div>
            </div>

            <!-- Upper Right-->
            <div class="upper-right">
                    <ul class="clearfix">
                      
                        <li class="dropdown option-box">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> 
                                <span style="font-size:150%">
                                <i class="fas fa-user-circle"></i>
                                {{-- <img src="images/resource/user-circle-solid.png" alt="avatar" class="thumb"> --}}
                                {{Auth::user()->first_name}}
                               </span>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="/dashboard/my-account">My Account</a>
                                <a class="dropdown-item" href="/dashboard/my-add">My ads</a>
                                @can('isAdmin')
                                <a class="dropdown-item" href="/dashboard/approve-panel">Approve ads</a>
                                @endcan
                            <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
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
 
    <script src="js/jquery.js"></script> 
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/dropzone.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
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

      function loadData(){
            var response;
            $.ajax({ type: "GET",   
                url: "/video-fetch",   
                async: false,
                success : function(text)
                {
                    response= text;
                }
            });
            $('#fetchData').html(response);
        }
    function deleteVideo(id){

       
    }
   
$(document).ready(function(){
    loadData();
    $(document).on('click', '.deleteVideo', function(){


        var id = $(this).data("id");
        var token = $(this).data("token");
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
    // alert(token);
    $.ajax({
                url: "/video-delete/"+id,
                type: 'DELETE',
                dataType: "JSON",
                data: {
                    "id": id,
                    "_method": 'DELETE',
                    "_token": token,
                },
                success: function (data){
                    console.log(data);
                    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
                    loadData();
                }
            });

            console.log("It failed");
    
  }
})
        //alert(token);
           
    });
   
  // Disable AutoDiscover
  Dropzone.autoDiscover = false;

// Set Dropzone Options
    Dropzone.options.myDropZone2 = {
        autoProcessQueue: true,
        uploadMultiple: true,
        parallelUploads: 20,
        maxFiles: 5,
       
        acceptedFiles: ".mp4,.mkv,.avi",
      
        maxFilesize: 25,
        
        dictDefaultMessage: "Drop your files here!",
    }
    var url1 = $('#imageUpload').attr('action');
    var myDropzone = new Dropzone("#myDropZone2", {url: url1});
       // on sending via dropzone append token and form values (using serializeObject jquery Plugin)
       myDropzone.on("sendingmultiple", function(file, xhr, formData) {
        formData.append('_token', '{{ csrf_token() }}');
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
                            confirmButtonText: 'Cool'
                            })
                    }else{
                        // if dropzone has no files store item without images
                        Swal.fire(
                                        'Success',
                                        'Video has uploaded!',
                                        'success'
                                        )
                                        myDropzone.removeFile(file);    
                                        loadData();   
                }
                                   
    });

});
    </script>
    </body>
    
    <!-- Mirrored from expert-themes.com/html/willies/admin/submit-property.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Dec 2018 11:31:39 GMT -->
    </html>