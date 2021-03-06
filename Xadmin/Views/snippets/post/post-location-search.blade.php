<div class="block">
    <div class="block-header bg-gray-lighter">
        <h3 class="block-title">{{ trans('admin.posts.blog_title') }}</h3>
    </div>
    <div class="block-content">
        <div class="form-group">
            <div class="col-sm-12">
                <div class="form-material">
                    <label for="blog-title">Give your blog post a title.</label><br/>
                    <input class="form-control" type="text" id="blog-title" name="title" value="{{ $post->title }}" required="required">
                </div>
            </div>
        </div> 
    </div>
</div>