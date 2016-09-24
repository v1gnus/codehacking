@if(count($errors) > 0)

    <div class="alert alert-danger">

        {{--<ul>--}}

        @foreach($errors->all() as $error)

            {{--<li>{{$error}}</li>--}}
            <p><a class="btn btn-danger" id="show-error-message" href="#">{{$error}}</a></p>

        @endforeach

        {{--</ul>--}}


    </div>


@endif