<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>IMS</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend/assets/imgs/theme/favicon.svg')}}">
    <!-- Template CSS -->
    <link href="{{ asset('backend/assets/css/main.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="screen-overlay"></div>
    {{-- navbar --}}
     @include('layouts.partials.navbar')
    <main class="main-wrap">        
        {{-- header --}}
        @include('layouts.partials.header')
        <section class="content-main">  
            @include('flash::message')          
            @yield('content')
        </section> <!-- content-main end// -->
        {{-- footers --}}
      @include('layouts.partials.footer')
    </main>
    <script src=" {{ asset('backend/assets/js/vendors/jquery-3.6.0.min.js')}}"></script>
    <script src=" {{ asset('backend/assets/js/vendors/bootstrap.bundle.min.js')}}"></script>
    <script src=" {{ asset('backend/assets/js/vendors/select2.min.js')}}"></script>
    <script src=" {{ asset('backend/assets/js/vendors/perfect-scrollbar.js')}}"></script>
    <script src=" {{ asset('backend/assets/js/vendors/jquery.fullscreen.min.js')}}"></script>
    <script src=" {{ asset('backend/assets/js/vendors/chart.js')}}"></script>
    <!-- Main Script -->
    <script src=" {{ asset('backend/assets/js/main.js')}}" type="text/javascript"></script>
    <script src=" {{ asset('backend/assets/js/custom-chart.js')}}" type="text/javascript"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        $('div.alert').not('.alert-important').delay(3000).fadeOut(350);


      // delete category message  
      $('.sa-delete').on('click', function (){         
        // find id for delete
        let form_id = $(this).data('form-id');
          // alert fire message 
          swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })

          .then((willDelete) => {

            if (willDelete) {
              $('#'+form_id).submit();
            } 
            
            else {
              swal("Your imaginary file is safe!");
            }

          });

      });

 </script>
</body>

</html>