@extends('layouts.admin')


@section('content')

<div class="content container">
    <h2 class="page-title">Users Page <small>Statistics and more</small></h2>
    <div class="row">

        @if(Session::has('delete_user'))

            <p class="bg-danger">{{session('delete_user')}}</p>

        @endif

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
                            <th>Name</th>
                            <th>Role</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Created</th>
                            <th>updated</th>
                        </tr>
                        </thead>
                        <tbody>

                        @if($users)

                            @foreach($users as $user)

                            <tr>
                                <td>{{$user->id}}</td>
                                <td>
                                    <img class="img-rounded" src="{{$user->photo ? $user->photo->file : '/img/14.png'}}" alt="" height="50">
                                </td>
                                <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>
                                <td>{{$user->role->name}}</td>
                                <td><a href="#">{{$user->email}}</a></td>
                                <td><span class="badge bg-gray-lighter text-gray fw-semi-bold">{{$user->status == 1 ? 'Active' : 'Not Active'}}</span></td>
                                <td>{{$user->created_at->diffForHumans()}}</td>
                                <td>{{$user->updated_at->diffForHumans()}}</td>
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