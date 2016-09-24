@extends('layouts.admin')


@section('content')

    <div class="content container">
        <h2 class="page-title">Edit User <small>Statistics and more</small></h2>
        <div class="row">
            <div class="col-md-3">
                <section class="widget">
                    <header>
                        <h4><i class="fa fa-cogs"></i> Account settings</h4>
                        <div class="actions">
                            <button class="btn btn-xs btn-inverse"><i class="fa fa-arrow-down"></i> View more</button>
                        </div>
                    </header>
                    <div class="body">
                        <form method="post">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="text-align-center">
                                        <img class="img-circle" src="{{$user->photo ? $user->photo->file : '/img/1.png'}}" alt="64x64" style="height: 112px;">
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-sm-12">
                                    <h3 class="mt-sm mb-xs">Maryna Gils</h3>
                                    <address>
                                        <strong>Development manager</strong> at <strong><a href="#">Allexample Inc.</a></strong><br>
                                        <abbr title="Work email">e-mail:</abbr> <a href="mailto:#">maryna.gils@example.com</a><br>
                                        <abbr title="Work Phone">phone:</abbr> (123) 456-7890
                                    </address>
                                </div>
                            </div>
                            {{--<fieldset>
                                <div class="form-group">
                                    <label for="exp">Account expiration date</label>
                                    <input id="exp" class="form-control date-picker" type="text" name="exp" value="">
                                    <p class="help-block">Bootstrap datepicker</p>
                                </div>
                                <div class="form-group">
                                    <label for="website">Associate to Website</label>
                                    <select id="website" class="select2 select-block-level"
                                            data-width="off"
                                            data-minimum-results-for-search="10"
                                            name="website">
                                        <option selected="selected" value="0">Admin</option>
                                        <option value="1">Main Website</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="created_by">Created By</label>

                                    <input id="created_by" class="form-control" type="text" name="created_by"
                                           value="Admin" disabled="disabled">

                                </div>
                                <div class="form-group">
                                    <label for="groups">Account Group</label>
                                    <select id="groups" name="groups" class="select2 select-block-level" multiple
                                            data-placeholder="Choose one or more groups for account"
                                            data-width="off">
                                        <option value="0">Subscriber</option>
                                        <option value="1">Retailer</option>
                                        <option value="2">Supplier</option>
                                        <option value="3">Manager</option>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <input type="checkbox" id="change-password" name="change-password">
                                        <label class="checkbox" for="change-password">
                                            Request password change
                                        </label>
                                    </div>
                                </div>
                            </fieldset>--}}
                        </form>
                    </div>
                </section>
            </div>
            <div class="col-md-9">
                <section class="widget">


                    <div class="row">

                        <div class="col-md-12">

                            {!! Form::model($user, ['method'=>'PATCH','id'=>'user-form' ,'class'=>'form-horizontal form-label-left', 'files'=>true, 'action'=> ['AdminUsersController@update', $user->id]]) !!}


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
                                <div class="col-sm-8">{!! Form::select('role_id',$roles, null, ['class'=>'form-control input-transparent']) !!}</div>
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
                                <div class="col-sm-8">{!! Form::select('status', array(1 => 'Active', 0=> 'Not Active'), null, ['class'=>'form-control input-transparent']) !!}</div>
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
                                    {!! Form::submit('Edit User', ['class'=>'btn btn-primary active']) !!}
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