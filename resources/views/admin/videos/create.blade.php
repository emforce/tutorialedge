@extends('admin.admin')


@section('content')


{!! Form::open(array('route' => 'admin.videos.store', 'class' => 'form', 'files'=>true, 'novalidate' => 'novalidate')) !!}
   
    <div class="row">
        <div class="col-lg-6 col-md-offset-2">
            <div class="info-box">
                <h2>Add a New Video</h2>
                <div class="form-group">
                   <h2>Title</h2>
                    {!! Form::text('title', null,
                        array('required',
                        'class'=>'form-control',
                        'placeholder'=>'Video Title')) !!}
                </div>
                <div class="form-group">
                    <h2>Description</h2>
                    {!! Form::textarea('desc', null,
                        array('required',
                            'class'=>'form-control',
                            'placeholder'=>'Post Excerpt')) !!}
                </div>
                <div class="form-group">
                    <h2>Video URL</h2>
                    {!! Form::text('video_url', null,
                        array('required',
                        'class'=>'form-control',
                        'placeholder'=>'Youtube Video URL')) !!}
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="info-box">
                <div class="form-group">
                    {!! Form::text('slug', null,
                    array('required',
                        'class'=>'form-control',
                        'placeholder'=>'Post_slug')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Course ID') !!}
                    {!! Form::text('course_id', null,
                        array('required',
                        'class'=>'form-control',
                        'placeholder'=>'course id')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Image URL') !!}
                    {!! Form::text('image_url', null,
                        array('required',
                        'class'=>'form-control',
                        'placeholder'=>'Post_slug')) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Submit',
                        array('class'=>'btn btn-primary')) !!}
                </div>
            </div>
        </div>
    </div>

{!! Form::close() !!}