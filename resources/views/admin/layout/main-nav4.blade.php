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

{{-- edit land image--}}
    @if ($propType=='land')
        <script>
            function loadData(){
            var response;
            $.ajax({ type: "POST",   
                url: "/image-fetch-land",   
                async: false,
                data:{
                        "_token": "{{ csrf_token() }}",
                        "id": "{{$land->id}}"
                        },
                success : function(text)
                {
                    response= text;
                }
            });
            $('#fetchImage').html(response);
        }

        $(document).ready(function(){
            loadData();
            $(document).on('click', '.deleteImage', function(){


var id = $(this).data("id");
var token = $(this).data("token");
var image=$(this).attr('name')
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
        url: "/image-delete-land",
        type: 'POST',
        dataType: "JSON",
        data: {
            "id": id,
            "_method": 'POST',
            "_token": token,
            "name":image
        },
        success: function (data){
            console.log(data);
            if(data=='1'){
            loadData();
            }
        }
    });

    console.log("It failed");

}
})
//alert(token);
   
});
            
        });
        </script>
    @endif
  {{--end of edit house image--}}


    {{-- edit house image--}}
    @if ($propType=='house')
        <script>
            function loadData(){
            var response;
            $.ajax({ type: "POST",   
                url: "/image-fetch-house",   
                async: false,
                data:{
                        "_token": "{{ csrf_token() }}",
                        "id": "{{$house->id}}"
                        },
                success : function(text)
                {
                    response= text;
                }
            });
            $('#fetchImage').html(response);
        }

        $(document).ready(function(){
            loadData();
            $(document).on('click', '.deleteImage', function(){


var id = $(this).data("id");
var token = $(this).data("token");
var image=$(this).attr('name')
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
        url: "/image-delete-house",
        type: 'POST',
        dataType: "JSON",
        data: {
            "id": id,
            "_method": 'POST',
            "_token": token,
            "name":image
        },
        success: function (data){
            console.log(data);
            if(data=='1'){
            loadData();
            }
        }
    });

    console.log("It failed");

}
})
//alert(token);
   
});
            
        });
        </script>
    @endif
 {{--end of edit house image--}}


    {{-- edit apartment image--}}
    @if ($propType=='apartment')
        <script>
            function loadData(){
            var response;
            $.ajax({ type: "POST",   
                url: "/image-fetch-apartment",   
                async: false,
                data:{
                        "_token": "{{ csrf_token() }}",
                        "id": "{{$apartment->id}}"
                        },
                success : function(text)
                {
                    response= text;
                }
            });
            $('#fetchImage').html(response);
        }

        $(document).ready(function(){
            loadData();
            $(document).on('click', '.deleteImage', function(){


var id = $(this).data("id");
var token = $(this).data("token");
var image=$(this).attr('name')
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
        url: "/image-delete-apartment",
        type: 'POST',
        dataType: "JSON",
        data: {
            "id": id,
            "_method": 'POST',
            "_token": token,
            "name":image
        },
        success: function (data){
            console.log(data);
            if(data=='1'){
            loadData();
            }
        }
    });

    console.log("It failed");

}
})
//alert(token);
   
});
            
        });
        </script>
    @endif

        {{-- edit commercial prop image--}}
        @if ($propType=='commercial')
        <script>
            function loadData(){
            var response;
            $.ajax({ type: "POST",   
                url: "/image-fetch-commercial-property",   
                async: false,
                data:{
                        "_token": "{{ csrf_token() }}",
                        "id": "{{$commercial->id}}"
                        },
                success : function(text)
                {
                    response= text;
                }
            });
            $('#fetchImage').html(response);
        }

        $(document).ready(function(){
            loadData();
            $(document).on('click', '.deleteImage', function(){


var id = $(this).data("id");
var token = $(this).data("token");
var image=$(this).attr('name')
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
        url: "/image-delete-commercial-property",
        type: 'POST',
        dataType: "JSON",
        data: {
            "id": id,
            "_method": 'POST',
            "_token": token,
            "name":image
        },
        success: function (data){
            console.log(data);
            if(data=='1'){
            loadData();
            }
        }
    });

    console.log("It failed");

}
})
//alert(token);
   
});
            
        });
        </script>
    @endif

    {{-- edit holyday rent image--}}
    @if ($propType=='holyday')
    <script>
        function loadData(){
        var response;
        $.ajax({ type: "POST",   
            url: "/image-fetch-holyday-rental",   
            async: false,
            data:{
                    "_token": "{{ csrf_token() }}",
                    "id": "{{$holydayRental->id}}"
                    },
            success : function(text)
            {
                response= text;
            }
        });
        $('#fetchImage').html(response);
    }

    $(document).ready(function(){
        loadData();
        $(document).on('click', '.deleteImage', function(){


var id = $(this).data("id");
var token = $(this).data("token");
var image=$(this).attr('name')
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
    url: "/image-delete-holyday-rental",
    type: 'POST',
    dataType: "JSON",
    data: {
        "id": id,
        "_method": 'POST',
        "_token": token,
        "name":image
    },
    success: function (data){
        console.log(data);
        if(data=='1'){
        loadData();
        }
    }
});

console.log("It failed");

}
})
//alert(token);

});
        
    });
    </script>
@endif

{{-- edit room potion image--}}
@if ($propType=='room')
<script>
    function loadData(){
    var response;
    $.ajax({ type: "POST",   
        url: "/image-fetch-room",   
        async: false,
        data:{
                "_token": "{{ csrf_token() }}",
                "id": "{{$room->id}}"
                },
        success : function(text)
        {
            response= text;
        }
    });
    $('#fetchImage').html(response);
}

$(document).ready(function(){
    loadData();
    $(document).on('click', '.deleteImage', function(){


var id = $(this).data("id");
var token = $(this).data("token");
var image=$(this).attr('name')
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
url: "/image-delete-room",
type: 'POST',
dataType: "JSON",
data: {
    "id": id,
    "_method": 'POST',
    "_token": token,
    "name":image
},
success: function (data){
    console.log(data);
    if(data=='1'){
    loadData();
    }
}
});

console.log("It failed");

}
})
//alert(token);

});
    
});
</script>
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

            $('#formData').submit(function (event) {
                    event.preventDefault();
                    var url = $('#formData').attr('action');
                    var form = $('#formData').serialize();
                    $.ajax({
                        type:"POST",
                        url: url,
                        data: form,
                        dataType:"json",
                        success:function(data){
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
                                        'Data Updated!',
                                        'success'
                                        )
                            
                }
                        },
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
            // Disable AutoDiscover
  Dropzone.autoDiscover = false;

// Set Dropzone Options
    Dropzone.options.myDropZone1 = {
        autoProcessQueue: true,
        uploadMultiple: true,
        parallelUploads: 20,
        maxFiles: 4,
       
        acceptedFiles: "image/*",
      
        maxFilesize: 5,
        
        dictDefaultMessage: "Drop your files here!",
    }
    var url1 = $('#drop').data("id");
    var prop_id = $('#drop').data("token");
    //var url1 = $('#imageUpload').attr('action');
    var myDropzone = new Dropzone("#myDropZone1", {url: url1});
       // on sending via dropzone append token and form values (using serializeObject jquery Plugin)
       myDropzone.on("sendingmultiple", function(file, xhr, formData) {
        formData.append('_token', '{{ csrf_token() }}');
        formData.append('id',prop_id);
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
                            html: data.error,
                            type: 'error',
                            confirmButtonText: 'Cool'
                            })
                    }else{
                        // if dropzone has no files store item without images
                       
                                        loadData();   
                }
                myDropzone.removeFile(file);
                                   
    });
           
   
        });
    </script>
  
    </body>
    
    <!-- Mirrored from expert-themes.com/html/willies/admin/submit-property.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Dec 2018 11:31:39 GMT -->
    </html>