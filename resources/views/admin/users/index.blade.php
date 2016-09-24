@extends('layouts.admin')


@section('content')

<div class="content container">
    <h2 class="page-title">Users Page <small>Statistics and more</small></h2>
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
                                <td>{{$user->name}}</td>
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