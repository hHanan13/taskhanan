<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> 
            {{isset($page_title) ? trans('lang.site_name') .'-'. $page_title  :   trans('cpanel.site_name')  }}

   </title>
    <!-- Favicon -->
    <link href="{{ asset('assets/front/images/brand/favicon.png') }}" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Extra details for Live View on GitHub Pages -->
    {{--//notify--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('noty/noty.css') }}">
    <script src="{{ asset('noty/noty.min.js') }}"></script>
    {{--        end notify--}}
<!-- Icons -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.css"></script>

    <!-- Argon CSS -->
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{asset('assets/front/vendor/nucleo/css/nucleo.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/argon.css')}}">

    @livewireStyles
    {{--        <livewire:styles />--}}
    @yield('styles')
    @if(app()->getLocale()=='ar')

        
        <link href="{{asset('assets/front/css/argon_rtl.css')}}" rel="stylesheet">
@endif

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container-fluid" style="height:100%;min-height: 100%;">

@include('dashboard.layouts.sidebar')


<div class="main-content">
    <div class="container">
        @include('dashboard.layouts.navbar')

        @yield('content')
    </div>
</div>
</div>
<!-- Argon JS -->

<script src="{{asset('assets/front/vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('assets/front/js/jquery-3.3.1.min.js')}}"></script>

<script src="{{asset('assets/front/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/front/js/popper1.16.min.js')}}"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>

<script src="{{asset('assets/front/js/argon.js')}}"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}

@livewireScripts


@yield('scripts')

<script>
    $(document).ready(function () {
        jQuery('.delete').click(function (event) {
            event.preventDefault();
            console.log("Tapped Delete button")
            var that = $(this)
            // e.preventDefault();
            var n = new Noty({
                text: "@lang('lang.confirm_delete')",
                type: "error",
                killer: true,
                buttons: [
                    Noty.button("@lang('lang.yes')", 'btn btn-success mr-2', function () {
                        // that.click();
                        that.closest('form').submit();
                    }),
                    Noty.button("@lang('lang.no')", 'btn btn-primary mr-2', function () {
                        n.close();
                    })
                ]
            });
            n.show();
        });
    });
</script>


<script type="text/javascript">
    window.livewire.on('userStore', () => {
        $('#exampleModal').modal('hide');
    });
</script>

<script type="text/javascript">
    window.livewire.on('userStore', () => {
        $('#updateModal').modal('hide');
    });

</script>

</body>
</html>
