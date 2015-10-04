@extends('admin.layouts.default')

@section('content')
	<div class="text-right page-block-btns"> 
		<a href="{{ route('admin.posts.create') }}" class="btn btn-primary btn-square"><i class="fa fa-plus"></i> {{ trans('admin.posts.add') }}</a>
	</div>
	<div class="block">
	    <div class="block-content">
    		<div class="row">
    			<div class="col-md-2">
    				<div class="btn-group">
                        <button class="btn btn-default" type="button">Filter Posts</button>
                        <div class="btn-group">
                            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li class="dropdown-header">Profile</li>
                                <li>
                                    <a tabindex="-1" href="javascript:void(0)"><span class="badge pull-right">3</span>News</a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="javascript:void(0)"><span class="badge pull-right">1</span>Messages</a>
                                </li>
                                <li class="divider"></li>
                                <li class="dropdown-header">More</li>
                                <li>
                                    <a tabindex="-1" href="javascript:void(0)">Edit Profile..</a>
                                </li>
                            </ul>
                        </div>
                    </div>
    			</div>

    			<div class="col-md-10" style="padding-left: 0;">
					<form class="form-horizontal" action="start_backend.html" method="post">
		                <div class="form-material form-material-primary input-group remove-margin-t remove-margin-b">
		                	<span class="input-group-addon"><i class="si si-magnifier"></i></span>
		                    <input class="form-control" type="text" id="base-material-text" name="base-material-text" placeholder="Start typing to search...">
		                </div>
		            </form>
    			</div>
    		</div>
		    
			<br><br>
	        <div class="table-responsive">
	            @if( count($posts) > 0 )
	            	@include('cms::snippets.table-posts')
	            @else
	            	<div class="not-available">
	            		No posts available
	            	</div>
	            @endif
	        </div>
	    </div>
	</div>
@stop