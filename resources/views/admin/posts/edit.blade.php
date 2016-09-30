@extends('layouts.admin')


@section('content')


    <div class="content container">
        <h2 class="page-title">Edit Posts <small>Statistics and more</small></h2>
        <div class="row">


        </div>
    </div>


@endsection

@section('page_specific_scripts')

    <!-- page specific scripts -->
    <!-- page libs -->
    <script src="{{asset('lib/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('lib/select2/select2.min.js')}}"></script>
    <script src="{{asset('lib/moment/moment.js')}}"></script>
    <script src="{{asset('lib/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{asset('lib/jquery.maskedinput/dist/jquery.maskedinput.min.js')}}"></script>
    <script src="{{asset('lib/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.all.js')}}"></script>
    <script src="{{asset('lib/parsleyjs/dist/parsley.min.js')}}"></script>

    <!-- page application js -->
    <script src="{{asset('js/forms-article.js')}}"></script>
    <script src="{{asset('js/forms-account.js')}}"></script>

@endsection