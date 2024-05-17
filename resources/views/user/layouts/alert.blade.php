<link href="{{ asset('assets/sweetalert/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ asset('assets/sweetalert/sweetalert2.all.min.js')}}"></script>

<div class="container-fluid">
    @if ($message = Session::get('success'))

    <script>
        Swal.fire({
            icon: 'success',
            title: '{{ __($message) }}',
            showConfirmButton: false,
            timer: 1500
        })
    </script>

    @endif


    @if ($message = Session::get('comment_success'))

    <script>
        Swal.fire({
            icon: 'success',
            title: '{{ __($message) }}',
            showConfirmButton: true
        })
    </script>

    @endif

    @if ($message = Session::get('error'))

    <script>
        Swal.fire({
            icon: 'error',
            title: '{{ __("ERROR !") }}',
            text: '{{ __($message) }}',
        })
    </script>

    @endif


    @if ($message = Session::get('warning'))

    <div class="alert alert-warning alert-block">

        <button type="button" class="close" data-dismiss="alert">×</button>

        <i class="icon fa fa-exclamation-triangle"></i> {{ __($message) }}

    </div>

    @endif


    @if ($message = Session::get('info'))

    <div class="alert alert-info alert-block">

        <button type="button" class="close" data-dismiss="alert">×</button>

        <i class="icon fa fa-info"></i> {{ __($message) }}

    </div>

    @endif


    @if ($errors->any())

    <div class="alert alert-danger">

        <button type="button" class="close" data-dismiss="alert">×</button>

        <i class="icon fa fa-ban"></i> {{__('Please check the errors in the form.')}}
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ __($error) }}</li>
            @endforeach
        </ul>

    </div>

    @endif


</div>