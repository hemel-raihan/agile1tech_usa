@extends('frontend_theme.corporate.front_layout.app')

@section('styles')

@endsection

@section('content')



                {{-- <div class="single-post mb-0" style="width: 80%; margin-left:10%;"> --}}
                    <div class="single-post mb-0" >

                    <!-- Single Post
                    ============================================= -->
                    <div class="entry clearfix">

                    {{-- <div class="form-widget" data-loader="button" data-alert-type="inline"> --}}

                        <div class="row">
                            <div class="col-12 col-sm-12" id="contact_us_address" style="width: 50%; margin-left: 25%;">
                                <div class="address1" style="border: 2px solid #9f0075; padding: 25px; width: 50%; margin-left: 25%;">
                                    <label>Bangladesh (Corporate Office)</label></br>

                                    <label><i style="color: #9f0075;" class="icon-building"></i>
                                        House # 27 Road + Lane # 01,</br>
                                        Block #H,H/E, Halishahar</br>
                                        Chittagong, Bangladesh.</br>
                                        Cell # 01819363620
                                    </label> </br>
                                    <label><i style="color: #9f0075;" class="icon-email3"></i>
                                        Email:</br> MD helal@colombiafashionbd.com</label></br>
                                    <label>Email:</br> CEO rinku@colombiafashionbd.com </br>
                                        info@colombiafashionbd.com </br>
                                        www.colombiafashionbd.com
                                    </label>
                                </div>
                            </br>
                            </br>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="" style="border: 2px solid #9f0075; padding: 25px;">
                                            <label>USA Office</label></br>

                                            <label><i style="color: #9f0075;" class="icon-building"></i>
                                                5101 13th Avenue Apt# 5b, Brooklyn,</br>
                                                11219, Ny, Usa cell #0019173488714
                                            </label> </br>
                                            <label><i style="color: #9f0075;" class="icon-email3"></i>
                                                Email:</br> alam@colombiafashionbd.com</br>
                                                <a href="www.colombiafashionbd.com">www.colombiafashionbd.com</a>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="" style="border: 2px solid #9f0075; padding: 25px; ">
                                            <label>Germany Office</label></br>

                                            <label><i style="color: #9f0075;" class="icon-building"></i>
                                                Gottschedstrasse 3, D-13347,</br>
                                                Berlin, Germany
                                            </label> </br>
                                            <label><i style="color: #9f0075;" class="icon-email3"></i>
                                                Email:</br> tamir@colombiafashionbd.com </br>
                                                <a href="www.colombiafashionbd.com">www.colombiafashionbd.com</a>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                            </br>
                        </br>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="" style="border: 2px solid #9f0075; padding: 25px;">
                                        <label>China Office</label></br>

                                        <label><i style="color: #9f0075;" class="icon-building"></i>
                                            Building A, Lian’an Industrial,</br>
                                            Zone, Yanbu, Nanhai, Foshan</br>
                                            City, Guangdong, China 528247</br>
                                            Cell# 00861866374226
                                        </label> </br>
                                        <label><i style="color: #9f0075;" class="icon-email3"></i>
                                            Email:</br> wingarli@colombiafashionbd.com</br>
                                            <a href="www.colombiafashionbd.com">www.colombiafashionbd.com</a>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="" style="border: 2px solid #9f0075; padding: 25px; ">
                                        <label>Hong Kong Office</label></br>

                                        <label><i style="color: #9f0075;" class="icon-building"></i>
                                            Room 10a, 9/F, Block B, GoodView</br>
                                            Industrial Building, No.11 Kin fat Street,</br>
                                            Tuen Mun N.T. ong Kong</br>
                                        </label> </br>
                                        <label><i style="color: #9f0075;" class="icon-email3"></i>
                                            Email:</br> ming@colombiafashionbd.com</br>
                                            <a href="www.colombiafashionbd.com">www.colombiafashionbd.com</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </br>
                    </br>
                            </div>
                            <div class="col-12 col-sm-12" id="contact_us_form" style="width: 50%; margin-left: 25%;">
                                <form id="coming-soon-registration" class="mb-0" action="{{route('contact.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-process"></div>
                                    <div class="row form-section px-4 py-5 bg-white rounded shadow-lg">
                                        <div class="col-12 form-group">
                                            <label>Name:</label>
                                            <input type="text" name="name" id="landing-enquiry-name" class="form-control form-control-lg required" value="" placeholder="John Doe">
                                        </div>
                                        <div class="col-12 form-group">
                                            <label>Email:</label>
                                            <input type="email" name="email" id="landing-enquiry-email" class="form-control form-control-lg required" value="" placeholder="user@company.com">
                                        </div>
                                        <div class="col-12 form-group">
                                            <label>Phone:</label>
                                            <input type="tel" name="phone" id="landing-enquiry-phone" class="form-control form-control-lg required" value="" placeholder="123-45-678" maxlength="12">
                                        </div>
                                        <div class="col-12 form-group">
                                            <label>Message</label>
                                            <textarea name="msg" id="landing-enquiry-phone" class="form-control form-control-lg required" value="" placeholder="Write your message" ></textarea>
                                        </div>
                                        <div class="col-12 d-none">
                                            <input type="text" id="landing-enquiry-botcheck" name="landing-enquiry-botcheck" value="" />
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" name="landing-enquiry-submit" class="btn w-100 text-white bg-color rounded-3 py-3 fw-semibold text-uppercase mt-2">Get Notified</button>
                                        </div>

                                        <input type="hidden" name="prefix" value="landing-enquiry-">
                                    </div>
                                </br>
                                </br>
                                    {{-- <div class="result-section center">
                                        <div class="form-result"></div>
                                        <a class="btn w-100 text-white btn-danger rounded-3 py-3 fw-semibold text-uppercase mt-3 button-back">Thank You.</a>
                                    </div> --}}
                                </form>
                            </div>

                        </div>






                </div>
    </div>



@endsection()

@section('scripts')

@endsection
