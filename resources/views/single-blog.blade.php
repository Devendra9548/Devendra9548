@extends('templates.front.singleblog')
@section('title')
{{ $blog->title }}
@endsection
@section('customcss')
<link rel="stylesheet" href="/assets/css/front/singleblog.css">
@endsection
@section('body')
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <p><a href="/" class="fs-5 text-dark">Home</a> <i class="fa-solid fa-chevron-right mx-1"></i><a href="/blog"
                    class="fs-5 text-dark"> Our Blogs</a> <i class="fa-solid fa-chevron-right mx-1"></i> <a
                    href="/blog/{{ $blog->title }}" class="fs-5 text-dark">{{ $blog->title }}</a></p>
        </div>
    </div>
</div>
<div class="container mt-4 single-blog">
    <div class="row">
        <div class="col-8 pe-3">
            <div class="feature-image">
                @if(isset($blog->file))
                <img src="/blogs/{{ $blog->file }}" width="100%" alt="{{ $blog->file }}" class="img-thumbnail">
                @endif
            </div>
            <h1 class="mt-4">{{ $blog->title }}</h1>
            <hr>
            <a href="#"><b>Category :</b> {{ $cblog[0]->bcname }}</a><br><a href="#"> <b>Publish Date :</b>
                {{ $blog->created_at }}</a><br><a href="#"> <b>Publisher Name :</b> EarlyLifeStyle</a>
            <hr>
            {!! $blog->description !!}
            <hr>
            <div class="comment py-3">
                <form action="">
                    <h3 class="mb-3">Leave A Reply</h3>
                    <p style="font-size:16px!important">Thanks for choosing to leave a comment. Please keep in mind that
                        all comments are moderated according to our comment policy, and your email address will NOT be
                        published. Please Do NOT use keywords in the name field. Let's have a personal and meaningful
                        conversation.
                    </p>
                    <input class="form-control" type="text" placeholder="Your Real Name" name="name" required>
                    <input class="form-control" type="email" placeholder="Email Address" name="email" required>
                    <textarea class="form-control mb-3" name="message" id="" cols="30" rows="10">Write Message</textarea>
                    <input class="form-check-input" type="checkbox" name="checkbox"> Notify me of followup comments via e-mail. You can also subscribe without commenting. <br>
                    <input type="submit" class="gbluebtn" value="Submit Comment">
                </form>
            </div>
        </div>
        <div class="col-4 ps-5 pe-5">
            <form action="/search" method="GET" style="position:relative">
                <input type="text" class="form-control" placeholder="Search Blogs" name="s" style="padding: 13px 15px;">
                <button type="submit" class="bg bg-primary"
                    style="position: absolute;top: 0px;right: 0px;height: 100%;border: 0px;border-radius: 5px;background-color: #18704c !important;"><i
                        class="fa-solid fa-magnifying-glass"
                        style="padding: 0px 8px;font-size: 26px;color: #fff;position: relative;top: 2px;"></i></button>
            </form><br>
            <h2 class="mt-3 mb-3" style="font-size:26px!important">Related Posts</h2>
            @foreach($cblog as $allblogs)
            @if($allblogs->title == $blog->title)
            @continue;
            @endif
            <a href="/blog/{{ $allblogs->slug }}">
                <div class="related-posts d-flex align-items-center mb-4">
                    <img src="/recent-blogs-thumb/{{ $allblogs->file }}" alt="{{ $allblogs->file }}">
                    <p style="margin-left:10px;font-size: 18px !important;">
                        {{ Illuminate\Support\Str::limit($allblogs->title, $limit = 55, $end = '...') }}</p>
                </div>
            </a>

            @endforeach

        </div>
    </div>
</div>
@endsection