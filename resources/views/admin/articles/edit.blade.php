@extends('admin.admin')


@section('content')

{!! Form::model($article, ['url' => 'admin/articles/' . $article->slug, 'method' => 'PATCH', 'files'=>true, 'novalidate' => 'novalidate']) !!}
    <div class="row">
        <div class="col-lg-8">
            <h2>Update: {{ $article->title }}</h2>
             <div class="form-group">
                    {!! Form::label('Post Title') !!}
                    {!! Form::text('title', null,
                        array('required', 
                            'class'=>'form-control',
                            'placeholder'=>'Post Title')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Excerpt') !!}
                    {!! Form::textarea('excerpt', null,
                        array('required',
                            'class'=>'form-control',
                            'placeholder'=>'Post Excerpt')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Article Body') !!}
                    {!! Form::textarea('body', null,
                        array('required',
                            'class'=>'form-control',
                            'placeholder'=>'Article Body')) !!}
                </div>
        </div>
        <div class="col-lg-4">
            <h2>Publishing Options</h2>
            <div class="form-group">
                {!! Form::label('Post Slug') !!}
                {!! Form::text('slug', null,
                    array('required',
                        'class'=>'form-control',
                        'placeholder'=>'slug')) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Category ID') !!}
                {!! Form::text('cat_id', null,
                    array('required',
                        'class'=>'form-control',
                        'placeholder'=>'cat_id')) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Image URL') !!}
                {!! Form::text('image_url', null,
                    array('required',
                        'class'=>'form-control',
                        'placeholder'=>'Post_slug')) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Post Image') !!}
                {!! Form::file('image', null) !!}
            </div>
            
           
            <div class="form-group">
                {!! Form::submit('Update Article', ['class'=>'btn btn-success']) !!}
            </div>
        </div>
    </div>

{!! Form::close() !!}

<script>
CKEDITOR.replace('excerpt');
CKEDITOR.replace('body');
</script>


@stop