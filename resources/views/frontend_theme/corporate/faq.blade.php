@extends('frontend_theme.corporate.front_layout.app')

@section('styles')

@endsection

@section('content')

                    @php
                    $page = \App\Models\Pagebuilder\Custompage::where([['type','=','main-page'],['status','=',true]])->orderBy('id','desc')->first();
                    @endphp



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

                                    <div class="entry-title">
                                        <h2>FAQ</h2>
                                    </div>
                                    </br>

                                    <p>
                                       <a data-bs-toggle="collapse" href="#collapseExample1"  aria-expanded="false" aria-controls="collapseExample">
                                        <i class="icon-line-square-plus"> </i>   How do I join The IIA Bangladesh?
                                        </a>
                                      </p>
                                      <div class="collapse" id="collapseExample1">

                                            <p>
                                                To join IIA Bangladesh please visit the membership section of this website. (Link the How to Join page in blue colored words)
                                            </p>
                                      </div>

                                      <p>
                                        <a data-bs-toggle="collapse" href="#collapseExample2"  aria-expanded="false" aria-controls="collapseExample">
                                         <i class="icon-line-square-plus"> </i>   What are the benefits of membership in The IIA?
                                         </a>
                                       </p>
                                       <div class="collapse" id="collapseExample2">

                                             <p>
                                                A list of membership benefits is available in the membership section of this website. (link the benefit page in blue colored words)
                                             </p>
                                       </div>



                            </div>
                        </div>




@endsection()

@section('scripts')

@endsection
