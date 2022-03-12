@extends('frontend_theme.corporate.front_layout.app')

@section('styles')

@endsection

@section('content')
@isset($custom_page)
@include('frontend_theme.corporate.front_layout.vertical.banner',['custom_page'=>$custom_page])
@endisset
@isset($servicc)
@include('frontend_theme.corporate.front_layout.vertical.banner',['servicc'=>$servicc])
@endisset


                    @php
                    $page = \App\Models\Pagebuilder\Custompage::where([['type','=','main-page'],['status','=',true]])->orderBy('id','desc')->first();
                    @endphp
<div class="container-sm">


                                @if ($page->rightsidebar_id == 0 && $page->leftsidebar_id == 0)
                                <div class="postcontent col-lg-12">
                                @elseif(!$page->rightsidebar_id == 0 && $page->leftsidebar_id == 0)
                                <div class="postcontent col-lg-9">
                                @elseif($page->rightsidebar_id == 0 && !$page->leftsidebar_id == 0)
                                <div class="postcontent col-lg-9">
                                @elseif(!$page->rightsidebar_id == 0 && !$page->leftsidebar_id == 0)
                                <div class="postcontent col-lg-6">
                                @endif

                                    {{-- <div class="single-post mb-0" style="width: 80%; margin-left:10%;"> --}}
                                <div class="single-post mb-0" >

                                        <!-- Single Post
                                        ============================================= -->
                                <div class="entry clearfix">


                                @isset($custom_page)
                                <div class="entry-title">
                                    <h2>{{$custom_page->title}}</h2>
                                </div>
                                </br>
                                <div class="body_content">
                                    {!!$custom_page->body!!}
                                </div>


                                @if ($custom_page->files)

                                <a class="button button-3d button-large" target="blank" href="{{ asset('uploads/pagefile/'.$custom_page->files) }}">
                                    <img src="{{ asset('frontend/images/pdf.png') }}" alt="001-converted (1)_compressed (1).pdf" class="file-icon" />
                                    Click here to View in new tab
                                </a>

                                @endif


                                {{-- @if ($blog->files)

                                <a target="blank" href="{{ asset('uploads/files/'.$page->files) }}">
                                    <img src="{{ asset('frontend/images/pdf.png') }}" alt="001-converted (1)_compressed (1).pdf" class="file-icon" />
                                    Click here to View in new tab
                                </a>
                            </br>
                                <div class="row justify-content-center">
                                    <iframe src="{{ asset('uploads/files/'.$blog->files) }}" width="50%" height="800">
                                            This browser does not support PDFs. Please download the PDF to view it: <a href="{{ asset('uploads/files/'.$blog->files) }}">Download PDF</a>
                                    </iframe>
                                </div>
                                @endif --}}


                                @if(!$custom_page->gallaryimage == null)

                                <div class="masonry-thumbs grid-container grid-5" data-big="1" data-lightbox="gallery">
                                    @php
                                        $galaryimage = explode("|", $custom_page->gallaryimage);
                                    @endphp
                                    @foreach ($galaryimage as $key => $images)
                                    <a class="grid-item" href="{{asset('uploads/pagegallary_image/'.$images)}}" data-lightbox="gallery-item"><img src="{{asset('uploads/pagegallary_image/'.$images)}}" alt="Gallery Thumb 1"></a>
                                    @endforeach
                                </div>
                                @endif
                                @endisset


                                @isset($blogposts)
                                <div class="entry-title">
                                    <h2>{{$blog->name}}</h2>
                                </div>
                            </br>
                                <div id="posts" class="post-grid row grid-container gutter-40">
                                    @foreach ($blogposts as $post)
                                    <div class="entry col-md-4 col-sm-6 col-12">
                                        <div class="grid-inner">
                                            <div class="entry-image">
                                                <a href="{{route('blog.details',$post->slug)}}"><img src="{{asset('uploads/postphoto/'.$post->image)}}" alt="Standard Post with Image"></a>
                                            </div>
                                            <div class="entry-title">
                                                <h2><a href="{{route('blog.details',$post->slug)}}">{{$post->title}}</a></h2>
                                            </div>
                                            <div class="entry-content">
                                                <p>{!!Str::limit($post->desc, 70)!!}</p>
                                                <a href="{{route('blog.details',$post->slug)}}" class="more-link">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                @endisset


                                @isset($servicc)
                                <p>{!!$servicc->body!!}</p>
                                @endisset



                            </div>
                        </div>

</div>


@endsection()

@section('scripts')

@endsection
