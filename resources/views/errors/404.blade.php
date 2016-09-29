<!-- light-blue - v3.3.0 - 2016-03-08 -->

<!DOCTYPE html>
<html>
<head>
    <title>Light Blue - Responsive Admin Dashboard Template</title>

    <link href="{{asset('css/application.min.css')}}" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('')}}img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="utf-8">
    <script>
        /* yeah we need this empty stylesheet here. It's cool chrome & chromium fix
         chrome fix https://code.google.com/p/chromium/issues/detail?id=167083
         https://code.google.com/p/chromium/issues/detail?id=332189
         */
    </script>
</head>
<body>
<div class="error-page container">
    <main id="content" class="error-container" role="main">
        <div class="row">
            <div class="col-lg-4 col-sm-6 col-xs-10 col-lg-offset-4 col-sm-offset-3 col-xs-offset-1">
                <div class="error-container">
                    <h1 class="error-code">404</h1>
                    <p class="error-info">
                        Opps, it seems that this page does not exist.
                    </p>
                    <p class="error-help mb">
                        If you are sure it should, search for it.
                    </p>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Search Pages">
                    </div>
                    <a href="special_search.html" class="btn btn-transparent">
                        Search <i class="fa fa-search text-warning ml-xs"></i>
                    </a>
                </div>
            </div>
        </div>
    </main>

    <footer class="page-footer">
        2014-2016 &copy; Light Blue. Admin Dashboard Template
    </footer>
</div>
<!-- common libraries. required for every page-->
<script src="{{asset('lib/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('lib/jquery-pjax/jquery.pjax.js')}}"></script>
<script src="{{asset('lib/bootstrap-sass/assets/javascripts/bootstrap.min.js')}}"></script>
<script src="{{asset('lib/widgster/widgster.js')}}"></script>
<script src="{{asset('lib/underscore/underscore.js')}}"></script>

<!-- common application js -->
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/settings.js')}}"></script>