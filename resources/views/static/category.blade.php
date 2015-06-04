@extends('app')

@section('title')
Course Homepage
@endsection

@section('content')
     <div class="latest-posts">
       <h2>Category Homepage</h2>
        <div class="row">
           @foreach ($articles as $article)
            <div class="col-sx-12 col-sm-6 col-md-3">
                <img class="img-responsive image-responsive-centered" alt="Woman writing in a notebook" title="Woman writing in a notebook" src="//lh5.ggpht.com/bkmfzv_U-lHdif9miQDh9bquTN-d35VM6c1TGIHJmmCr7YzFmgWB0EtawFh4zadk02BDo5VP2zmCdfOc9g=s355#w=1724&amp;h=1060">
                <h3><a href="/{{ $article->slug }}">{{ $article->title }}</a></h3>
                <div>
                    {{ $article->excerpt }}
                </div>
            </div>
            @endforeach

        </div>
    </div>
@endsection
