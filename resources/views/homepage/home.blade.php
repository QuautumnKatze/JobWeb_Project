@extends("homepage_layout")
@section("homepage_content")
<div class="clearfix"></div>
<div class="banner home-5" style="background-image:url(img/6604.jpg);">
    <div class="container">
        <div class="banner-caption">
            <div class="col-md-12 col-sm-12 banner-text">
                <h1>7,000+ Browse Jobs</h1>

                <form class="form-horizontal">
                    <div class="col-md-4 no-padd">
                        <div class="input-group"><input type="text" class="form-control right-bor" id="joblist"
                                placeholder="Skills, Designations, Companies"></div>
                    </div>
                    <div class="col-md-3 no-padd">
                        <div class="input-group"><input type="text" class="form-control right-bor" id="location"
                                placeholder="Search By Location.."></div>
                    </div>
                    <div class="col-md-3 no-padd">
                        <div class="input-group">
                            <select id="choose-city" class="form-control">
                                <option>Choose City</option>
                                <option>Chandigarh</option>
                                <option>London</option>
                                <option>England</option>
                                <option>Pratapcity</option>
                                <option>Ukrain</option>
                                <option>Wilangana</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2 no-padd">
                        <div class="input-group">
                            <button type="submit" class="btn btn-primary">Search Job</button>
                        </div>
                    </div>
                </form>
                <div class="video-box"><a href="#" class="btn btn-video"><i class="fa fa-play"
                            aria-hidden="true"></i></a></div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<section>
    <div class="container">
        <div class="row">
            <div class="main-heading">
                <p>200 New Jobs</p>

                <h2>New & Random <span>Jobs</span></h2>
            </div>
        </div>
        <div class="row extra-mrg">
            <div class="col-md-3 col-sm-6">
                <div class="grid-view brows-job-list">
                    <div class="brows-job-company-img"><img src="{{asset('img/com-1.jpg')}}" class=" img-responsive"
                            alt="" /></div>
                    <div class="brows-job-position">
                        <h3><a href="job-detail.html">Web Developer</a></h3>

                        <p><span>Google</span></p>
                    </div>
                    <div class="job-position"><span class="job-num">5 Position</span></div>
                    <div class="brows-job-type"><span class="part-time">Part Time</span></div>
                    <ul class="grid-view-caption">
                        <li>
                            <div class="brows-job-location">
                                <p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
                            </div>
                        </li>
                        <li>
                            <p><span class="brows-job-sallery"><i class="fa fa-money"></i>$110 - 200</span></p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="grid-view brows-job-list">
                    <div class="brows-job-company-img"><img src="{{asset('img/com-2.jpg')}}" class=" img-responsive"
                            alt="" /></div>
                    <div class="brows-job-position">
                        <h3><a href="job-detail.html">Web Developer</a></h3>

                        <p><span>Google</span></p>
                    </div>
                    <div class="job-position"><span class="job-num">5 Position</span></div>
                    <div class="brows-job-type"><span class="freelanc">Freelancer</span></div>
                    <ul class="grid-view-caption">
                        <li>
                            <div class="brows-job-location">
                                <p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
                            </div>
                        </li>
                        <li>
                            <p><span class="brows-job-sallery"><i class="fa fa-money"></i>$110 - 200</span></p>
                        </li>
                    </ul>
                    <span class="tg-themetag tg-featuretag">Premium</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="grid-view brows-job-list">
                    <div class="brows-job-company-img"><img src="{{asset('img/com-3.jpg')}}" class=" img-responsive"
                            alt="" /></div>
                    <div class="brows-job-position">
                        <h3><a href="job-detail.html">Web Developer</a></h3>

                        <p><span>Google</span></p>
                    </div>
                    <div class="job-position"><span class="job-num">5 Position</span></div>
                    <div class="brows-job-type"><span class="enternship">Enternship</span></div>
                    <ul class="grid-view-caption">
                        <li>
                            <div class="brows-job-location">
                                <p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
                            </div>
                        </li>
                        <li>
                            <p><span class="brows-job-sallery"><i class="fa fa-money"></i>$110 - 200</span></p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="grid-view brows-job-list">
                    <div class="brows-job-company-img"><img src="{{asset('img/com-4.jpg')}}" class=" img-responsive"
                            alt="" /></div>
                    <div class="brows-job-position">
                        <h3><a href="job-detail.html">Web Developer</a></h3>

                        <p><span>Google</span></p>
                    </div>
                    <div class="job-position"><span class="job-num">5 Position</span></div>
                    <div class="brows-job-type"><span class="full-time">Full Time</span></div>
                    <ul class="grid-view-caption">
                        <li>
                            <div class="brows-job-location">
                                <p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
                            </div>
                        </li>
                        <li>
                            <p><span class="brows-job-sallery"><i class="fa fa-money"></i>$110 - 200</span></p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="grid-view brows-job-list">
                    <div class="brows-job-company-img"><img src="{{asset('img/com-5.jpg')}}" class=" img-responsive"
                            alt="" /></div>
                    <div class="brows-job-position">
                        <h3><a href="job-detail.html">Web Developer</a></h3>

                        <p><span>Google</span></p>
                    </div>
                    <div class="job-position"><span class="job-num">5 Position</span></div>
                    <div class="brows-job-type"><span class="part-time">Part Time</span></div>
                    <ul class="grid-view-caption">
                        <li>
                            <div class="brows-job-location">
                                <p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
                            </div>
                        </li>
                        <li>
                            <p><span class="brows-job-sallery"><i class="fa fa-money"></i>$110 - 200</span></p>
                        </li>
                    </ul>
                    <span class="tg-themetag tg-featuretag">Premium</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="grid-view brows-job-list">
                    <div class="brows-job-company-img"><img src="{{asset('img/com-6.jpg')}}" class=" img-responsive"
                            alt="" /></div>
                    <div class="brows-job-position">
                        <h3><a href="job-detail.html">Web Developer</a></h3>

                        <p><span>Google</span></p>
                    </div>
                    <div class="job-position"><span class="job-num">5 Position</span></div>
                    <div class="brows-job-type"><span class="full-time">Full Time</span></div>
                    <ul class="grid-view-caption">
                        <li>
                            <div class="brows-job-location">
                                <p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
                            </div>
                        </li>
                        <li>
                            <p><span class="brows-job-sallery"><i class="fa fa-money"></i>$110 - 200</span></p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="grid-view brows-job-list">
                    <div class="brows-job-company-img"><img src="{{asset('img/com-7.jpg')}}" class=" img-responsive"
                            alt="" /></div>
                    <div class="brows-job-position">
                        <h3><a href="job-detail.html">Web Developer</a></h3>

                        <p><span>Google</span></p>
                    </div>
                    <div class="job-position"><span class="job-num">5 Position</span></div>
                    <div class="brows-job-type"><span class="freelanc">Freelancer</span></div>
                    <ul class="grid-view-caption">
                        <li>
                            <div class="brows-job-location">
                                <p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
                            </div>
                        </li>
                        <li>
                            <p><span class="brows-job-sallery"><i class="fa fa-money"></i>$110 - 200</span></p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="grid-view brows-job-list">
                    <div class="brows-job-company-img"><img src="{{asset('img/com-1.jpg')}}" class=" img-responsive"
                            alt="" /></div>
                    <div class="brows-job-position">
                        <h3><a href="job-detail.html">Web Developer</a></h3>

                        <p><span>Google</span></p>
                    </div>
                    <div class="job-position"><span class="job-num">5 Position</span></div>
                    <div class="brows-job-type"><span class="enternship">Enternship</span></div>
                    <ul class="grid-view-caption">
                        <li>
                            <div class="brows-job-location">
                                <p><i class="fa fa-map-marker"></i>QBL Park, C40</p>
                            </div>
                        </li>
                        <li>
                            <p><span class="brows-job-sallery"><i class="fa fa-money"></i>$110 - 200</span></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<section class="video-sec dark" id="video" style="background-image:url(img/banner-10.jpg);">
    <div class="container">
        <div class="row">
            <div class="main-heading">
                <p>Best For Your Projects</p>

                <h2>Watch Our <span>video</span></h2>
            </div>
        </div>
        <div class="video-part"><a href="#" data-toggle="modal" data-target="#my-video" class="video-btn"><i
                    class="fa fa-play"></i></a></div>
    </div>
</section>
<div class="clearfix"></div>
<section class="wp-process">
    <div class="container">
        <div class="row">
            <div class="main-heading">
                <p>How We Work</p>

                <h2>Our Work <span>Process</span></h2>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="work-process">
                <div class="work-process-icon"><span class="icon-search"></span></div>
                <div class="work-process-caption">
                    <h4>Search Job</h4>

                    <p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue
                        posuere lacus</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="work-process">
                <div class="work-process-icon"><span class="icon-mobile"></span></div>
                <div class="work-process-caption">
                    <h4>Find Job</h4>

                    <p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue
                        posuere lacus</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="work-process">
                <div class="work-process-icon"><span class="icon-profile-male"></span></div>
                <div class="work-process-caption">
                    <h4>Hire Employee</h4>

                    <p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue
                        posuere lacus</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="work-process">
                <div class="work-process-icon"><span class="icon-layers"></span></div>
                <div class="work-process-caption">
                    <h4>Start Work</h4>

                    <p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue
                        posuere lacus</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="work-process">
                <div class="work-process-icon"><span class="icon-wallet"></span></div>
                <div class="work-process-caption">
                    <h4>Pay Money</h4>

                    <p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue
                        posuere lacus</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="work-process">
                <div class="work-process-icon"><span class="icon-happy"></span></div>
                <div class="work-process-caption">
                    <h4>Happy</h4>

                    <p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue
                        posuere lacus</p>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<section class="testimonial" id="testimonial">
    <div class="container">
        <div class="row">
            <div class="main-heading">
                <p>What Say Our Client</p>

                <h2>Our Success <span>Stories</span></h2>
            </div>
        </div>
        <div class="row">
            <div id="client-testimonial-slider" class="owl-carousel">
                <div class="client-testimonial">
                    <div class="pic"><img src="{{asset('img/client-1.jpg')}}" alt=""></div>
                    <p class=" client-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor et dolore magna aliqua.</p>

                    <h3 class="client-testimonial-title">Lacky Mole</h3>
                    <ul class="client-testimonial-rating">
                        <li class="fa fa-star-o"></li>
                        <li class="fa fa-star-o"></li>
                        <li class="fa fa-star"></li>
                    </ul>
                </div>
                <div class="client-testimonial">
                    <div class="pic"><img src="{{asset('img/client-2.jpg')}}" alt=""></div>
                    <p class=" client-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor et dolore magna aliqua.</p>

                    <h3 class="client-testimonial-title">Karan Wessi</h3>
                    <ul class="client-testimonial-rating">
                        <li class="fa fa-star-o"></li>
                        <li class="fa fa-star"></li>
                        <li class="fa fa-star"></li>
                    </ul>
                </div>
                <div class="client-testimonial">
                    <div class="pic"><img src="{{asset('img/client-3.jpg')}}" alt=""></div>
                    <p class=" client-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor et dolore magna aliqua.</p>

                    <h3 class="client-testimonial-title">Roul Pinchai</h3>
                    <ul class="client-testimonial-rating">
                        <li class="fa fa-star-o"></li>
                        <li class="fa fa-star-o"></li>
                        <li class="fa fa-star"></li>
                    </ul>
                </div>
                <div class="client-testimonial">
                    <div class="pic"><img src="{{asset('img/client-4.jpg')}}" alt=""></div>
                    <p class=" client-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor et dolore magna aliqua.</p>

                    <h3 class="client-testimonial-title">Adam Jinna</h3>
                    <ul class="client-testimonial-rating">
                        <li class="fa fa-star-o"></li>
                        <li class="fa fa-star-o"></li>
                        <li class="fa fa-star"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pricing">
    <div class="container">
        <div class="row">
            <div class="main-heading">
                <p>Check Our Packages</p>

                <h2>Our Best <span>Offers</span></h2>
            </div>
        </div>
        <div class="col-md-4 col-sm-4">
            <div class="pr-table">
                <div class="pr-header">
                    <div class="pr-plan">
                        <h4>Basic</h4>
                    </div>
                    <div class="pr-price">
                        <h3><sup>$</sup>29<sub>/Mon</sub></h3>
                    </div>
                </div>
                <div class="pr-features">
                    <ul>
                        <li>1 GB Ram</li>
                        <li>2 GB Memory</li>
                        <li>1 Core Processor</li>
                        <li>32 GB SSD Disk</li>
                        <li>1 TB Transfer</li>
                    </ul>
                </div>
                <div class="pr-buy-button"><a href="#" class="pr-btn" title="Price Button">Get Started</a></div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4">
            <div class="pr-table">
                <div class="pr-header active">
                    <div class="pr-plan">
                        <h4>Premium</h4>
                    </div>
                    <div class="pr-price">
                        <h3><sup>$</sup>40<sub>/Mon</sub></h3>
                    </div>
                </div>
                <div class="pr-features">
                    <ul>
                        <li>1 GB Ram</li>
                        <li>2 GB Memory</li>
                        <li>1 Core Processor</li>
                        <li>32 GB SSD Disk</li>
                        <li>1 TB Transfer</li>
                    </ul>
                </div>
                <div class="pr-buy-button"><a href="#" class="pr-btn active" title="Price Button">Get Started</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4">
            <div class="pr-table">
                <div class="pr-header">
                    <div class="pr-plan">
                        <h4>Ultimate</h4>
                    </div>
                    <div class="pr-price">
                        <h3><sup>$</sup>120<sub>/Mon</sub></h3>
                    </div>
                </div>
                <div class="pr-features">
                    <ul>
                        <li>1 GB Ram</li>
                        <li>2 GB Memory</li>
                        <li>1 Core Processor</li>
                        <li>32 GB SSD Disk</li>
                        <li>1 TB Transfer</li>
                    </ul>
                </div>
                <div class="pr-buy-button"><a href="#" class="pr-btn" title="Price Button">Get Started</a></div>
            </div>
        </div>
    </div>
</section>
<section class="download-app" style="background-image:url(img/banner-10.jpg);">
    <div class="container">
        <div class="col-md-5 col-sm-5 hidden-xs"><img src="{{asset('img/iphone.png')}}" alt=" iphone"
                class="img-responsive" /></div>
        <div class="col-md-7 col-sm-7">
            <div class="app-content">
                <h2>Download Our Best Apps</h2>
                <h4>Best oppertunity in your hand</h4>

                <p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue
                    posuere lacus, id tincidunt nisi porta sit amet. Suspendisse et sapien varius, pellentesque dui
                    non, semper orci. Curabitur blandit, diam ut ornare ultricies.</p>
                <a href="#" class="btn call-btn"><i class="fa fa-apple"></i>Download</a><a href="#"
                    class="btn call-btn"><i class="fa fa-android"></i>Download</a>
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>
@endsection