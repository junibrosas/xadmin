@extends('admin.layouts.default')

@section('content')
	<div class="row">
		<div class="col-md-4">
			<!-- My Block -->
		    <div class="block">
			    <div class="block-header">
					<h3 class="block-title">Menu Group</h3>
				</div>
		        <div class="block-content">
		            <div class="row">
		            	<div class="col-md-12">
		            		<p>Link lists help your customers navigate around your website. They can be added to your theme via the Storefront Editor.</p>
			            	<p>Link lists can also be used to create drop-down navigation for your storefront. <br/><br/>
			            		<a href="#" class="btn-square btn-default btn">Add New Group</a>
			            	</p>
		            	</div>		
		            </div>
		        </div>
		    </div>
    		<!-- END My Block -->
		</div>
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-6">
					@include('cms::snippets.table-menu')
				</div>
				<div class="col-md-6">
					@include('cms::snippets.table-menu')
				</div>
				<div class="col-md-6">
					@include('cms::snippets.table-menu')
				</div>
				<div class="col-md-6">
					@include('cms::snippets.table-menu')
				</div>
				<div class="col-md-6">
					@include('cms::snippets.table-menu')
				</div>
				<div class="col-md-6">
					@include('cms::snippets.table-menu')
				</div>
			</div>
		</div>

	</div>
@stop