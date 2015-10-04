@extends('admin.layouts.default')

@section('content')

	<div class="text-right page-block-btns"> 
		<a href="{{ route('admin.pages.create') }}" class="btn btn-primary btn-square"><i class="fa fa-plus"></i> Add New Post</a>
	</div>
	<div class="block">
	    <div class="block-content">
    		<div class="row">
    			<div class="col-md-2">
    				<div class="btn-group">
                        <button class="btn btn-default" type="button">Filter Pages</button>
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
	            <table class="table table-striped table-vcenter">
	                <thead>
	                    <tr>
	                    	<td>
	                    		<label class="css-input css-checkbox css-checkbox-default">
                                    <input type="checkbox" checked=""><span></span> 
                                </label>
	                    	</td>
	                        <th>Title</th>
	                        <th style="width: 30%;">Categories</th>
	                        <th style="width: 15%;">Status</th>
	                        <th class="text-center" style="width: 100px;">Date</th>
	                    </tr>
	                </thead>
	                <tbody>
	                    <tr>
	                        <td>
	                    		<label class="css-input css-checkbox css-checkbox-default">
                                    <input type="checkbox" checked=""><span></span> 
                                </label>
	                    	</td>
	                    	<td class="font-w600">The Importance of Social Media</td>
	                        <td>Information</td>
	                        <td>
	                            <span class="label label-info">Published</span>
	                        </td>
	                         <td class="text-center">
	                            8/13/2015 5:00 PM
	                        </td>
	                    </tr>
	                    <tr>
	                        <td>
	                    		<label class="css-input css-checkbox css-checkbox-default">
                                    <input type="checkbox" checked=""><span></span> 
                                </label>
	                    	</td>
	                    	<td class="font-w600">How To Keep Your Information Private</td>
	                        <td>Information</td>
	                        <td>
	                            <span class="label label-danger">Disabled</span>
	                        </td>
	                         <td class="text-center">
	                            8/13/2015 5:00 PM
	                        </td>
	                    </tr>
	                    <tr>
	                        <td>
	                    		<label class="css-input css-checkbox css-checkbox-default">
                                    <input type="checkbox" checked=""><span></span> 
                                </label>
	                    	</td>
	                    	<td class="font-w600">Learn To Code #Programming</td>
	                        <td>Programming</td>
	                        <td>
	                            <span class="label label-info">Published</span>
	                        </td>
	                         <td class="text-center">
	                            8/13/2015 5:00 PM
	                        </td>
	                    </tr>
	                    <tr>
	                        <td>
	                    		<label class="css-input css-checkbox css-checkbox-default">
                                    <input type="checkbox" checked=""><span></span> 
                                </label>
	                    	</td>
	                    	<td class="font-w600">Building a Secure Network For Your Business</td>
	                        <td>Network</td>
	                        <td>
	                            <span class="label label-info">Published</span>
	                        </td>
	                         <td class="text-center">
	                            8/13/2015 5:00 PM
	                        </td>
	                    </tr>
	                    <tr>
	                        <td>
	                    		<label class="css-input css-checkbox css-checkbox-default">
                                    <input type="checkbox" checked=""><span></span> 
                                </label>
	                    	</td>
	                    	<td class="font-w600">Assessing IT Service Management</td>
	                        <td>Management</td>
	                        <td>
	                            <span class="label label-info">Published</span>
	                        </td>
	                         <td class="text-center">
	                            8/13/2015 5:00 PM
	                        </td>
	                    </tr>
	                </tbody>
	            </table>
	        </div>
	    </div>
	</div>
@stop