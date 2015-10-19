@extends('cms::layouts.default')

@section('content')
    @if($post->id)
        <form class="form-horizontal push-10-t" action="{{ route('admin.posts.update', $post->id) }}" method="POST">
        <input name="_method" type="hidden" value="PUT">
    @else 
        <form class="form-horizontal push-10-t" action="{{ route('admin.posts.store') }}" method="POST">
    @endif
    
        {!! csrf_field() !!}
        <div class="pull-left page-block-btns"> 
            <a href="{{ route('admin.posts.index') }}" class="btn btn-primary btn-square"><i class="fa fa-list"></i> {{ trans('admin.posts.all') }}</a>
        </div>
        <div class="pull-right page-block-btns"> 
            <button type="submit" class="btn btn-primary btn-square"><i class="fa fa-floppy-o"></i> {{ trans('admin.posts.store') }}</a>
        </div>
        <div class="clearfix"></div>

        <div class="row">

            <div class="col-lg-12">
               
                @include('cms::snippets.post-title-content')
                
            </div>
            <div class="col-lg-12">
                @include('cms::snippets.post-tags')

                @include('cms::snippets.post-settings')

                @if($post->id)
                    @include('cms::snippets.post-feature-image')    
                @endif
            </div>
        </div>
        <div class="text-right page-block-btns"> 
            <button type="submit" class="btn btn-primary btn-square"><i class="fa fa-floppy-o"></i> {{ trans('admin.posts.store') }}</button>
        </div>
    </form>
@stop

@section('header')
    <link rel="stylesheet" id="css-main" href="{{ asset('xadmin/js/plugins/summernote/summernote.min.css') }}">
    <link rel="stylesheet" id="css-main" href="{{ asset('xadmin/js/plugins/summernote/summernote-bs3.min.css') }}">
    <link rel="stylesheet" href="{{ asset('xadmin/js/plugins/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('xadmin/js/plugins/select2/select2-bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('xadmin/js/plugins/jquery-tags-input/jquery.tagsinput.min.css') }}">
    <link rel="stylesheet" href="{{ asset('xadmin/js/plugins/bootstrap-datepicker/bootstrap-datepicker3.min.css') }}">
@stop

@section('footer')
    <script src="{{ asset('xadmin/js/plugins/summernote/summernote.min.js') }}"></script>
    <script src="{{ asset('xadmin/js/plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('xadmin/js/plugins/jquery-tags-input/jquery.tagsinput.min.js') }}"></script>
    <script src="{{ asset('xadmin/js/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('xadmin/js/plugins/masked-inputs/jquery.maskedinput.min.js') }}"></script>


    <!-- Page JS Code -->
    <script>
        $(function () {
            // Init page helpers (Summernote + CKEditor plugins)
            App.initHelpers(['summernote', 'select2', 'tags-inputs', 'datepicker', 'masked-inputs']);
        });
    </script>
@stop