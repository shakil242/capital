<aside class="sidebar">
        <div class="sidebar-holder">
            <div class="subscribe-blog">
                <div class="title text-uppercase"><span class="ico-holder"><i class="icon-rss"></i></span> <span class="label-holder">subscribe to the blog</span></div>
                <div class="text-holder text-center">
                    {!! Form::open(['route' => 'blog.subscribe', 'class' => 'subscribe-form', 'role'=>"search"]) !!}
                        <div class="form-group @if($errors->has('blog_Email')) has-error has-feedback @endif">
                            {!! Form::text('blog_Email', null,["class" => 'form-control', 'placeholder' => 'Your email address']) !!}
                            @if($errors->has('blog_Email')) <span class="fa fa-remove form-control-feedback" aria-hidden="true"></span> @endif
                        </div>
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>Success!</strong> {{Session::get('success')}}
                            </div>
                        @endif
                        @if(Session::has('error'))
                            <div class="alert alert-danger">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>Error!</strong> {{Session::get('error')}}
                            </div>
                        @endif
                        @if($errors->has('blog_Email'))
                            <div class="alert alert-danger">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>Error!</strong> {{$errors->first('blog_Email')}}
                            </div>
                        @endif
                    <button type="submit" class="btn btn-primary">Sign me up</button>

                    {!! Form::close() !!}
                </div>
            </div>
            <div class="social-media">
                <div class="title text-uppercase"><span class="ico-holder"><i class="fa fa-share-alt"></i></span> <span class="label-holder">Social Media</span>
                    <div class="social-media-container">
                        <a class="" href="https://www.facebook.com/capitaladvisorsltd"><i class="fa fa-fw fa-facebook-square"></i></a>
                        <a class="" href="https://www.linkedin.com/in/abramszachary"><i class="fa fa-fw fa-linkedin-square"></i></a>
                    </div>
                </div>

            </div>

            <div class="about-me ">
                <div class="title text-uppercase"><span class="ico-holder"><i class="icon-user"></i></span>
                    <span class="label-holder">About me</span></div>
                <div class="text-holder text-center">
                    <div class="img-holder">
                        <img src="/images/img-aboutme.jpg" alt="image description">
                    </div>
                    <strong class="add-info"><span class="text-uppercase">reCap is written by Zachary Abrams, CFP&reg;, Manager, Wealth Management</span></strong>
                    <a href="{{route('bio', ['slug' => 'zachary-abrams'])}}" class="btn btn-primary">learn more</a>
                </div>
            </div>

            <div class="categories open-close active">
                <a href="#" class="opener">
                    <div class="title text-uppercase"><span class="ico-holder"><i class="icon-mark"></i></span><span class="label-holder">categories</span></div>
                </a>
                <div class="text-holder slide">
                    <ul class="text-uppercase">
                        @foreach($categories as $category)
                            <li><a href="{{route("category.list",$category->slug)}}">{{$category->name}} ({{$category->posts()->count()}})</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    <div class="form-holder">
        {!! Form::open(["route" => "blog.search", "method" => "GET", 'class' => 'search-form', 'role' => 'search']) !!}
        <div class="form-group">
            {!! Form::text('search', null, ['placeholder' => 'Search', 'class' => 'form-control text-uppercase']) !!}
        </div>
        <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
        {!! Form::close() !!}
    </div>
</aside>
