@extends('layouts.admin')


@section('content')


    <div class="content container">
        <h2 class="page-title">Posts <small>Statistics and more</small></h2>
        <div class="row">


            <div class="col-md-12">
                <section class="widget">
                    <h3>Hover <span class="fw-semi-bold">Table</span></h3>
                    <p>Trace only what's really important. <code>.table-hover</code> is made for it.</p>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Picture</th>
                                <th>Owner</th>
                                <th>Category</th>
                                <th>Title</th>
                                <th>Body</th>
                                <th>Created</th>
                                <th>updated</th>
                            </tr>
                            </thead>
                            <tbody>

                            @if($posts)

                                @foreach($posts as $post)

                                    <tr>
                                        <td>{{$post->id}}</td>
                                        <td>
                                            <img class="img-rounded" src="{{$post->photo ? $post->photo->file : '/img/3.png'}}" alt="" height="50">
                                        </td>
                                        <td>
                                            {{--<img class="img-rounded" src="{{$user->photo ? $user->photo->file : '/img/14.png'}}" alt="" height="50">--}}
                                            {{$post->user->name}}
                                        </td>
                                        <td><a href="#">{{$post->category ? $post->category->name : 'Uncategorized'}}</a></td>
                                        <td><a href="#">{{$post->title}}</a></td>
                                        <td>
                                            {{--<span class="badge bg-gray-lighter text-gray fw-semi-bold">{{$user->status == 1 ? 'Active' : 'Not Active'}}</span>--}}
                                            {{$post->body}}
                                        </td>
                                        <td>{{$post->created_at->diffForHumans()}}</td>
                                        <td>{{$post->updated_at->diffForHumans()}}</td>
                                    </tr>

                                @endforeach

                            @endif

                            </tbody>
                        </table>
                    </div>
                </section>
            </div>

        </div>
    </div>


@endsection


@section('page_specific_scripts')

    <!-- page specific scripts -->
    <!-- page specific libs -->
    <script src="{{asset('lib/jquery.sparkline/index.js')}}"></script>

    <!-- page application js -->
    <script src="{{asset('js/tables-static.js')}}"></script>

@endsection