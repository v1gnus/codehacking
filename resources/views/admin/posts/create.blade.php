@extends('layouts.admin')


@section('content')


    <div class="content container">
        <h2 class="page-title">Create Posts <small>Statistics and more</small></h2>

        <div class="row">
            @include('includes.form_error')
        </div>
        <div class="row">

            <div class="col-md-8">
                <section class="widget">

                    <header>
                        <h4><i class="fa fa-file-alt"></i> Article <small>Create new or edit existing article</small></h4>
                    </header>

                        <div class="body">

                            {!! Form::open(['method'=>'POST', 'action'=> 'AdminPostsController@store', 'id'=>'article-form', 'role'=>'form' ,'class'=>'form-horizontal form-label-left', 'files'=>true]) !!}


                            <fieldset>
                                <div class="form-group">
                                    {!! Form::label('title', 'Title:', ['class'=>'col-sm-3 control-label']) !!}
                                    {{--<label class="col-sm-3 control-label" for="title">Title <span class="required">*</span></label>--}}
                                    <div class="col-sm-9">
                                        {!! Form::text('title', null, ['class'=>'form-control input-transparent']) !!}
                                        {{--<input type="text" id="title" name="title" class="form-control input-transparent"--}}
                                               {{--required="required">--}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('category_id', 'Category:', ['class'=>'col-sm-3 control-label']) !!}
                                    {{--<label for="article-category" class="control-label col-sm-4">Category</label>--}}
                                    <div class="col-sm-9">
                                        {!! Form::select('category_id', [''=>'Choose Categories'] + $categories, null, ['class'=>'selectpicker', 'id' => 'article-category', 'data-style' => 'btn-warning', 'data-width' => 'auto']) !!}
                                        {{--<select id="article-category" name="article-category"
                                                data-style="btn-warning"
                                                data-width="auto"
                                                class="selectpicker">
                                            <option value="0">Design</option>
                                            <option value="1">Bootstrap</option>
                                            <option value="2">ThemeForest</option>
                                            <option value="3">Personal Developement</option>
                                        </select>--}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    {!! Form::label('photo_id', 'Upload Picture:', ['class'=>'control-label col-sm-3']) !!}
                                    <div class="col-sm-9">{!! Form::file('photo_id', null, ['class'=>'form-control input-transparent']) !!}</div>
                                    {{--<label class="control-label col-sm-4" for="prefix">Prefix</label>
                                    <div class="col-sm-4"><input type="text" id="prefix" name="prefix" class="form-control input-transparent"></div>--}}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('body', 'Description:', ['class'=>'col-sm-3 control-label']) !!}
                                    {{--<label class="col-sm-3 control-label" for="content">--}}
                                        {{--Content--}}
                                    {{--</label>--}}
                                    <div class="col-sm-9">
                                        {!! Form::textarea('body', null, ['class'=>'form-control input-transparent', 'id'=>'description', 'rows'=>10]) !!}
                                        {{--<textarea rows="10" class="form-control input-transparent" id="content"></textarea>--}}
                                    </div>
                                </div>
                                {{--<div class="form-group">
                                    <label for="description" class="col-sm-3 control-label">Description</label>
                                    <div class="col-sm-9">
                                        <textarea id="description" rows="3" name="text" class="form-control input-transparent"></textarea>
                                        <span class="help-block">Optional summary of your article that can be used in previews</span>
                                    </div>
                                </div>--}}
                            </fieldset>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-sm-9 col-sm-offset-3">
                                        <div class="btn-toolbar">
                                            {!! Form::submit('Create Post', ['class'=>'btn btn-success']) !!}
                                            {{--<button type="submit" class="btn btn-success">Submit</button>
                                            <button type="button" class="btn btn-default">Cancel</button>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{--<fieldset class="mt-sm">
                                <legend>Create User Form <small>Some explanation text</small></legend>
                            </fieldset>

                            <div class="form-group">
                                {!! Form::label('name', 'Name:', ['class'=>'control-label col-sm-4']) !!}
                                <div class="col-sm-8">{!! Form::text('name', null, ['class'=>'form-control input-transparent']) !!}</div>
                                --}}{{--<label class="control-label col-sm-4" for="prefix">Prefix</label>
                                <div class="col-sm-4"><input type="text" id="prefix" name="prefix" class="form-control input-transparent"></div>--}}{{--
                            </div>

                            <div class="form-group">
                                {!! Form::label('role_id', 'Role:', ['class'=>'control-label col-sm-4']) !!}
                                <div class="col-sm-8">{!! Form::select('role_id',[''=>'Choose Options'] + $roles, null, ['class'=>'form-control input-transparent']) !!}</div>
                                --}}{{--<label class="control-label col-sm-4" for="prefix">Prefix</label>
                                <div class="col-sm-4"><input type="text" id="prefix" name="prefix" class="form-control input-transparent"></div>--}}{{--
                            </div>

                            <div class="form-group">
                                {!! Form::label('email', 'Email:', ['class'=>'control-label col-sm-4']) !!}
                                <div class="col-sm-8">{!! Form::email('email', null, ['class'=>'form-control input-transparent']) !!}</div>
                                --}}{{--<label class="control-label col-sm-4" for="prefix">Prefix</label>
                                <div class="col-sm-4"><input type="text" id="prefix" name="prefix" class="form-control input-transparent"></div>--}}{{--
                            </div>

                            <div class="form-group">
                                {!! Form::label('status', 'Status:', ['class'=>'control-label col-sm-4']) !!}
                                <div class="col-sm-8">{!! Form::select('status', array(1 => 'Active', 0=> 'Not Active'), 0, ['class'=>'form-control input-transparent']) !!}</div>
                                --}}{{--<label class="control-label col-sm-4" for="prefix">Prefix</label>
                                <div class="col-sm-4"><input type="text" id="prefix" name="prefix" class="form-control input-transparent"></div>--}}{{--
                            </div>

                            <div class="form-group">
                                {!! Form::label('password', 'Password:', ['class'=>'control-label col-sm-4']) !!}
                                <div class="col-sm-8">{!! Form::password('password', ['class'=>'form-control input-transparent']) !!}</div>
                                --}}{{--<label class="control-label col-sm-4" for="prefix">Prefix</label>
                                <div class="col-sm-4"><input type="text" id="prefix" name="prefix" class="form-control input-transparent"></div>--}}{{--
                            </div>

                            <div class="form-group">
                                {!! Form::label('photo_id', 'Upload Picture:', ['class'=>'control-label col-sm-4']) !!}
                                <div class="col-sm-8">{!! Form::file('photo_id', null, ['class'=>'form-control input-transparent']) !!}</div>
                                --}}{{--<label class="control-label col-sm-4" for="prefix">Prefix</label>
                                <div class="col-sm-4"><input type="text" id="prefix" name="prefix" class="form-control input-transparent"></div>--}}{{--
                            </div>

                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-4">
                                    {!! Form::submit('Create User', ['class'=>'btn btn-primary active']) !!}
                                </div>
                            </div>--}}

                            {!! Form::close() !!}

                    </div>


                </section>
            </div>

            {{--<div class="col-lg-4">
                <section class="widget">
                    <header>
                        <h4><i class="fa fa-cog"></i> Options <small>Publishing, categories</small></h4>
                    </header>
                    <div class="body">
                        <form id="article-options" class="form-horizontal form-label-left"
                              method="post">
                            <fieldset>
                                <legend class="section">Publishing</legend>
                                <div class="form-group">
                                    <label for="article-status" class="control-label col-sm-4">Status</label>
                                    <div class="col-sm-8">
                                        <select id="article-status" name="article-status"
                                                data-style="btn-success"
                                                data-width="auto"
                                                class="selectpicker">
                                            <option value="0">Draft</option>
                                            <option value="1">Published</option>
                                            <option value="2">Pending Review</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="publish-date" class="control-label col-sm-4">Publish at</label>
                                    <div class="col-sm-8">
                                        <input type="text" id="publish-date" name="publish-date" class="form-control date-picker">
                                        <input type="text" id="publish-time" name="publish-time" class="form-control mt-sm">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="article-language" class="control-label col-sm-4">Language</label>
                                    <div class="col-sm-8">
                                        <select id="article-language" name="article-language"
                                                data-style="btn-success"
                                                data-width="auto"
                                                class="selectpicker">
                                            <option value="0">All Languages</option>
                                            <option value="1">English</option>
                                            <option value="2">Belarusian</option>
                                        </select>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend class="section">Category & Tags</legend>
                                <div class="form-group">
                                    <label for="article-category" class="control-label col-sm-4">Category</label>
                                    <div class="col-sm-8">
                                        <select id="article-category" name="article-category"
                                                data-style="btn-warning"
                                                data-width="auto"
                                                class="selectpicker">
                                            <option value="0">Design</option>
                                            <option value="1">Bootstrap</option>
                                            <option value="2">ThemeForest</option>
                                            <option value="3">Personal Developement</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="article-tags" class="control-label col-sm-4">Tags</label>
                                    <div class="col-sm-8">
                                        <input type="text" id="article-tags" name="article-tags"
                                               class="select-block-level">
                                        <span class="help-block">Write or select a tag and press "Enter" to add it.</span>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </section>
                <section class="widget">
                    <header>
                        <h4><i class="fa fa-key"></i> Access</h4>
                    </header>
                    <div class="body">
                        <form id="article-access" class="form-horizontal form-label-left"
                              method="post">
                            <fieldset>
                                <div class="form-group">
                                    <label for="article-visibility" class="control-label col-sm-4">Visibility</label>
                                    <div class="col-sm-8">
                                        <select id="article-visibility" name="article-visibility"
                                                data-style="btn-warning"
                                                data-width="auto"
                                                class="selectpicker">
                                            <option value="0">Everyone</option>
                                            <option value="1">Registered</option>
                                            <option value="2">Editors</option>
                                            <option value="3">Admins</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="article-password" class="control-label col-sm-4">Password</label>
                                    <div class="col-sm-8">
                                        <input type="password" id="article-password" class="form-control" name="article-password">
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </section>
            </div>--}}

        </div>

        <div class="loader-wrap hiding hide">
            <i class="fa fa-circle-o-notch fa-spin"></i>
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