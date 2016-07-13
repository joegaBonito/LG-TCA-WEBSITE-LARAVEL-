@extends("layouts/master")

@section("content")
    <div class="container">
        <div class="row">
            <div id="my-slider" class="carousel slide" data-ride="carousel">
                <!-- wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="{{URL::asset('/img/main-banner-1.jpg')}}" alt="banner1" class="img-responsive"/>
                        <div class="carousel-caption">
                            <h1>Promise for a Better Life</h1>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{URL::asset('/img/main-banner-2.jpg')}}" alt="banner2" class="img-responsive"/>
                        <div class="carousel-caption">
                            <h1>Changing the World</h1>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{URL::asset('/img/main-banner-3.jpg')}}" alt="banner3" class="img-responsive"/>
                        <div class="carousel-caption">
                            <h1 style="color:#333333">Research for Worldwide Advancement</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div id="banner1" class="span4">
                <div class="banner-description">
                    <span style="font-size:50px;">Innovation</span>
                    Strategic Direction of LG Energy Solution -Innovation <br/>
                    for a Better Life <br/><br/>
                    <a href="{{route("Innovation")}}">
                        <button type="button" id="button1" class="btn btn-primary">Read More</button>
                    </a>
                </div>
            </div>
            <div id="banner2" class="span4">
                <div class="banner-description">
                    <span style="font-size:50px;">Newsroom</span></br>
                    Read about the latest in LG<br/>
                    technology <br/><br/>
                    <a href="{{route("Newsroom")}}">
                        <button type="button" id="button2" class="btn btn-primary">Read More</button>
                    </a>
                </div>
            </div>
            <div id="banner3" class="span4">
                <div class="banner-description">
                    <span style="font-size:50px; margin-bottom:5px;">Connect With LGTCA</span><br/>
                    <a href="{{route("ContactUs")}}">
                        <button type="button" id="button3" class="btn btn-primary">Read More</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection