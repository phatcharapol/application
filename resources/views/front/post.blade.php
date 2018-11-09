@extends('layouts.blog-post')

@section('content')
     <!-- Blog Post -->

                <!-- Title -->
                <h1>{{$post->title}}</h1>

                <!-- Author -->
                <p class="lead">
                    by <a href="#">{{$post->user->name}}</a>
                </p>

                <hr>

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> Posted {{$post->created_at->diffForHumans()}}</p>

                <hr>

                <!-- Preview Image -->
                <img class="img-responsive" src="{{ $post->photo()->exists() ? $post->photo->file : $post->placeHolder() }}" alt="">

                <hr>

                <!-- Post Content -->
                <p class="lead">{!!$post->body!!}</p>

                <hr>


                <!-- Blog Comments -->

                <!-- Comments Form -->
                {{-- <div class="well">
                    <h4>Leave a Comment:</h4>

                    {!! Form::open(['method'=>'post','action' => ['PostCommentController@store']]) !!}
                    <input type="hidden" name="post_id" value="{{$post->id}}">
                       <div class="form-group">
                              {!! Form::textarea('body',null,['class'=>'form-control','rows' => 5, 'cols' => 40]) !!}
                       </div>
                       <div class="form-group">
                            {!! Form::submit('Submit',['class'=>'btn btn-primary']) !!}
                       </div>
                    {!! Form::close() !!}

                </div>


                    @if (Session::has('comment_massage'))
                        <div class="bg-color-green">
                            {{$session('comment_massage')}}
                        </div>
                    @endif


                <hr> --}}

                <!-- Posted Comments -->

                <div id="disqus_thread"></div>
                <script>

                /**
                *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                /*
                var disqus_config = function () {
                this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                };
                */
                (function() { // DON'T EDIT BELOW THIS LINE
                var d = document, s = d.createElement('script');
                s.src = 'https://blog-app-nut.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
                })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

                <script id="dsq-count-scr" src="//blog-app-nut.disqus.com/count.js" async></script>
                <!-- Comment -->
                {{-- @if (!empty($comments))
                    @foreach ($comments->all() as $comment)

                        <div class="media">
                            <a class="pull-left" href="#">
                                <img height="64px" class="media-object" src="{{$comment->post->user->photo->file}}" alt="">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">{{$comment->author}}
                                    <small>{{$comment->created_at}}</small>
                                </h4>
                                {{$comment->body}}
                                <!-- Nested Comment -->
                                @foreach ($comment->replies->all() as $comment_reply)

                                    <div class="media">
                                            <a class="pull-left" href="#">
                                                <img height="64px" class="media-object" src="{{$comment_reply->photo}}" alt="">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading">{{$comment_reply->author}}
                                                    <small>{{$comment_reply->created_at->diffForHumans()}}</small>
                                                </h4>
                                                {{$comment_reply->body}}
                                            </div>
                                    </div>
                                @endforeach
                                {!! Form::open(['method'=>'post','action' => ['CommentReplyController@store']]) !!}
                                    <input type="hidden" name="comment_id" value="{{$comment->id}}">
                                    <div class="form-group">
                                        {!! Form::label('body','Reply') !!}
                                        {!! Form::textarea('body',null,['class'=>'form-control','rows' => 3, 'cols' => 2]) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::submit('Submit Reply',['class'=>'btn btn-primary']) !!}
                                    </div>
                                {!! Form::close() !!}
                                <!-- End Nested Comment -->
                            </div>
                        </div>
                    @endforeach
                @endif --}}

@endsection
