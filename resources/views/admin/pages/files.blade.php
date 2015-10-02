@extends('admin.layouts.default')

@section('content')
	<div class="block">
	    <div class="block-content">
    		
    		@include('admin.snippets.ui-dropzone')

	    </div>
	</div>
	<div class="block">
		<div class="block-content">
			@if(count($files) > 0)
				<table class="table">
	                <thead>
	                    <tr>
	                    	<th>Preview</th>
	                        <th>Filename</th>
	                        <th class="hidden-xs" style="width: 15%;">Size</th>
	                        <th class="text-center" style="width: 100px;">Actions</th>
	                    </tr>
	                </thead>
	                <tbody>
	                    @foreach ($files as $key => $file)
	                    	<tr>
	                    		<td></td>
	                            <td><b>{{ $file->filename }}</b></td>
	                            <td>{{ $file->size }}</td>
	                            <td class="text-center">
	                                <div class="btn-group">
	                                	{!! Form::open([ 'method' => 'delete', 'route' => ['admin.files.destroy', $file->id ] ]) !!}
											<input type="hidden" name="_method" value="DELETE">
											<button class="btn btn-xs btn-default" type="submit" data-toggle="tooltip" title="Remove File"><i class="fa fa-times"></i></button>
										{!! Form::close() !!}
	                                </div>
	                            </td>
	                        </tr>
	                    @endforeach
	                </tbody>
	            </table>
			@else
				<div class="not-available text-center">
					No files available
				</div> 
			@endif
		</div>
	</div>
	
@stop

@section('header')
	<link rel="stylesheet" href="{{ asset('js/plugins/dropzonejs/dropzone.min.css') }}">
@stop


@section('footer')
	<script src="{{ asset('js/plugins/dropzonejs/dropzone.min.js') }}"></script>
	<script type="text/javascript">
		Dropzone.options.fileMediaUploader = {
			init: function() {
				this.on("queuecomplete", function(file) { 
					location.reload();
				});
			}
		};
	</script>
@stop