@extends('layouts.admin')


@section('content')

<div class="content container">
    <h2 class="page-title">Create Users <small>Statistics and more</small></h2>
    <div class="row">

        <div class="col-md-9">
            <section class="widget">


                <div class="row">

                    <div class="col-md-12">

                        {!! Form::open(['method'=>'POST', 'action'=> 'AdminUsersController@store', 'id'=>'user-form' ,'class'=>'form-horizontal form-label-left', 'files'=>true]) !!}


                        <fieldset class="mt-sm">
                            <legend>Create User Form <small>Some explanation text</small></legend>
                        </fieldset>

                        <div class="form-group">
                            {!! Form::label('name', 'Name:', ['class'=>'control-label col-sm-4']) !!}
                            <div class="col-sm-8">{!! Form::text('name', null, ['class'=>'form-control input-transparent']) !!}</div>
                            {{--<label class="control-label col-sm-4" for="prefix">Prefix</label>
                            <div class="col-sm-4"><input type="text" id="prefix" name="prefix" class="form-control input-transparent"></div>--}}
                        </div>

                        <div class="form-group">
                            {!! Form::label('role_id', 'Role:', ['class'=>'control-label col-sm-4']) !!}
                            <div class="col-sm-8">{!! Form::select('role_id',[''=>'Choose Options'] + $roles, null, ['class'=>'form-control input-transparent']) !!}</div>
                            {{--<label class="control-label col-sm-4" for="prefix">Prefix</label>
                            <div class="col-sm-4"><input type="text" id="prefix" name="prefix" class="form-control input-transparent"></div>--}}
                        </div>

                        <div class="form-group">
                            {!! Form::label('email', 'Email:', ['class'=>'control-label col-sm-4']) !!}
                            <div class="col-sm-8">{!! Form::email('email', null, ['class'=>'form-control input-transparent']) !!}</div>
                            {{--<label class="control-label col-sm-4" for="prefix">Prefix</label>
                            <div class="col-sm-4"><input type="text" id="prefix" name="prefix" class="form-control input-transparent"></div>--}}
                        </div>

                        <div class="form-group">
                            {!! Form::label('status', 'Status:', ['class'=>'control-label col-sm-4']) !!}
                            <div class="col-sm-8">{!! Form::select('status', array(1 => 'Active', 0=> 'Not Active'), 0, ['class'=>'form-control input-transparent']) !!}</div>
                            {{--<label class="control-label col-sm-4" for="prefix">Prefix</label>
                            <div class="col-sm-4"><input type="text" id="prefix" name="prefix" class="form-control input-transparent"></div>--}}
                        </div>

                        <div class="form-group">
                            {!! Form::label('password', 'Password:', ['class'=>'control-label col-sm-4']) !!}
                            <div class="col-sm-8">{!! Form::password('password', ['class'=>'form-control input-transparent']) !!}</div>
                            {{--<label class="control-label col-sm-4" for="prefix">Prefix</label>
                            <div class="col-sm-4"><input type="text" id="prefix" name="prefix" class="form-control input-transparent"></div>--}}
                        </div>

                        <div class="form-group">
                            {!! Form::label('photo_id', 'Upload Picture:', ['class'=>'control-label col-sm-4']) !!}
                            <div class="col-sm-8">{!! Form::file('photo_id', null, ['class'=>'form-control input-transparent']) !!}</div>
                            {{--<label class="control-label col-sm-4" for="prefix">Prefix</label>
                            <div class="col-sm-4"><input type="text" id="prefix" name="prefix" class="form-control input-transparent"></div>--}}
                        </div>

                        <div class="form-group">
                            <div class="col-sm-8 col-sm-offset-4">
                                {!! Form::submit('Create User', ['class'=>'btn btn-primary active']) !!}
                            </div>
                        </div>

                        {!! Form::close() !!}


                    </div>
                </div>





{{--            {{csrf_field()}}

            <div class="body">
                {!! Form::open(['id'=>'user-form', 'class'=>'form-horizontal form-label-left', 'novalidate'=>'novalidate', 'method'=>'POST', 'action'=> 'AdminUsersController@store']) !!}
                <form id="user-form" class="form-horizontal form-label-left"
                      novalidate="novalidate"
                      method="post"
                      data-parsley-priority-enabled="false"
                      data-parsley-excluded="input[name=gender]">
                    {{csrf_field()}}
                    <fieldset class="mt-sm">
                        <legend>Account Edit Form <small>Some explanation text</small></legend>
                    </fieldset>
                    <fieldset>
                        <legend class="section">Personal Info</legend>

                        <div class="form-group">
                            {!! Form::label('name', 'Name:', ['class'=>'control-label col-sm-4', 'for'=>'title']) !!}
                            <label class="control-label col-sm-4" for="first-name">First Name <span class="required">*</span></label>
                            {!! Form::text('name', null, ['class'=>'form-control input-transparent']) !!}
                            <div class="col-sm-8"><input type="text" id="first-name" name="first-name" required="required" class="form-control input-transparent" ></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="last-name">Last Name <span class="required">*</span></label>
                            <div class="col-sm-8"><input type="text" id="last-name" name="last-name" required="required" class="form-control input-transparent" ></div>
                        </div>
                        <div class="form-group">
                            <label for="middle-name" class="control-label col-sm-4">Middle Name / Initial</label>
                            <div class="col-sm-8"><input id="middle-name" class="form-control input-transparent" type="text" name="middle-name" value=""></div>
                        </div>

                    </fieldset>
                    <fieldset>
                        <legend class="section">Contact Info</legend>
                        <div class="form-group">
                            <label id="email-label" for="email" class="control-label col-sm-4">Email <span class="required">*</span></label>
                            <div class="col-xs-12 col-sm-6">
                                <div class="input-group">
                                    <input id="email" type="email"
                                           data-trigger="change" required="required"
                                           class="form-control input-transparent"
                                           name="email">
                                    <span class="input-group-btn">
                                        <button class="btn btn-success" type="button">Write an email</button>
                                    </span>
                                </div>
                            </div>
                        </div>


                    </fieldset>

                    <div class="form-actions">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-4">
                                <button type="submit" class="btn btn-primary">Validate &amp; Submit</button>
                                <button type="button" class="btn btn-default">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>--}}

            </section>
        </div>

    </div>

    <div class="row">
        @include('includes.form_error')
    </div>
</div>

@endsection