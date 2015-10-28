@if($tag->id)
{!! Form::open(['route' => ['admin.tags.update', $tag->id], 'method' => 'POST', 'class' => 'form-horizontal push-10-t']) !!}
<input name="_method" type="hidden" value="PUT">
<input type="hidden" name="tagId" value="{{ $tag->id }}" />   
@else
{!! Form::open(['route' => 'admin.tags.store', 'method' => 'POST', 'class' => 'form-horizontal push-10-t']) !!} 
@endif

	{{-- Name --}}
	<div class="form-group">
        <div class="col-lg-12">
            <div class="form-material">
                <label>Name</label>
                <input class="form-control" type="text" name="name" value="{{ $tag->name }}" required="required">
                <em>The name is how it appears on your site.</em>
            </div>
        </div>
    </div>
    {{-- Slug --}}
    <div class="form-group">
        <div class="col-lg-12">
            <div class="form-material">
                <label>Slug</label>
                <input class="form-control" type="text" name="slug" value="{{ $tag->slug }}">
                <em>The “slug” is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.</em>
            </div>
        </div>
    </div>
    {{-- Description --}}
    <div class="form-group">
        <div class="col-lg-12">
            <div class="">
                <label>Description</label>
            	<textarea name="description" class="form-control">{{ $tag->description }}</textarea>
                <em>The description is not prominent by default; however, some themes may show it.</em>
            </div>
        </div>
    </div>
    {{-- Parent --}}
    <div class="form-group">
        <label class="col-xs-12" for="example-select">Type</label>
        <div class="col-sm-12">
            <select class="form-control" name="type" size="1">
                <option value="0">Please select</option>
                <option value="category">Category</option>
                <option value="tag">Tag</option>
            </select>
            <em>Choose a specific type of tag, either it could be a category or a normal tag.</em>
        </div>
    </div>
    {{-- Parent --}}
    <div class="form-group">
        <label class="col-xs-12" for="example-select">Parent</label>
        <div class="col-sm-12">
            <select class="form-control" name="parent" size="1">
                <option value="0">Please select</option>
                <option value="1">Option #1</option>
                <option value="2">Option #2</option>
                <option value="3">Option #3</option>
            </select>
            <em>Categories, unlike tags, can have a hierarchy. You might have a Jazz category, and under that have children categories for Bebop and Big Band. Totally optional.</em>
        </div>
    </div>
    {{-- Submit Button --}}
	<div class="form-group">
		<div class="col-sm-12">
			<button type="submit" class="btn btn-primary btn-square pull-right"><i class="fa fa-plus"></i> {{ trans('admin.tags.add') }}</button>
		</div>
    </div>
{!! Form::close() !!}