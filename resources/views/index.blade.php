@extends("layouts.app")
@section('content')
<!-- Home Design -->
<section class="home-one home3-overlay bg-home3 mt0">
    <div class="container">
        <div class="row posr">
            <div class="col-lg-12">
                <div class="home_content home3">
                    <div class="home-text text-center">
                        <h2 class="fz60 mb25">Let’s find a home that’s perfect for you</h2>
                        <p class="fz16 color-white">Search confidently with your trusted source of homes for sale or rent</p>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-xl-9">
                            <div class="home_tabs home3 mt60">
                                <ul class="nav justify-content-center nav-tabs" id="myTab2" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="buy-tab" data-toggle="tab" href="#buy" role="tab" aria-controls="buy" aria-selected="true">Buy</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="rent-tab" data-toggle="tab" href="#rent" role="tab" aria-controls="rent" aria-selected="false">Rent</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="sold-tab" data-toggle="tab" href="#sold" role="tab" aria-controls="sold" aria-selected="false">Just Sold</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent2">
                                    <div class="tab-pane fade show active" id="buy" role="tabpanel" aria-labelledby="buy-tab">
                                        <div class="home_adv_srch_opt home4">
                                            <div class="wrapper">
                                                <div class="home_adv_srch_form home2">
                                                    <form class="bgc-white">
                                                        <div class="form-row">
                                                            <div class="col-auto home_form_input">
                                                                <div class="input-group">
                                                                    <div class="home2_befor_icon"><span class="flaticon-houses"></span></div>
                                                                    <input type="text" class="form-control form_control" placeholder="Enter an address, neighborhood, city, or ZIP code">
                                                                </div>
                                                            </div>
                                                            <div class="col-auto home_form_input2">
                                                                <button type="submit" class="btn search-btn"><span class="fa fa-search"></span></button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="rent" role="tabpanel" aria-labelledby="rent-tab">
                                        <div class="home_adv_srch_opt home4">
                                            <div class="wrapper">
                                                <div class="home_adv_srch_form home2">
                                                    <form class="bgc-white">
                                                        <div class="form-row">
                                                            <div class="col-auto home_form_input">
                                                                <div class="input-group">
                                                                    <div class="home2_befor_icon"><span class="flaticon-houses"></span></div>
                                                                    <input type="text" class="form-control form_control" placeholder="Enter an address, neighborhood, city, or ZIP code">
                                                                </div>
                                                            </div>
                                                            <div class="col-auto home_form_input2">
                                                                <button type="submit" class="btn search-btn"><span class="fa fa-search"></span></button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="sold" role="tabpanel" aria-labelledby="sold-tab">
                                        <div class="home_adv_srch_opt home4">
                                            <div class="wrapper">
                                                <div class="home_adv_srch_form home2">
                                                    <form class="bgc-white">
                                                        <div class="form-row">
                                                            <div class="col-auto home_form_input">
                                                                <div class="input-group">
                                                                    <div class="home2_befor_icon"><span class="flaticon-houses"></span></div>
                                                                    <input type="text" class="form-control form_control" placeholder="Enter an address, neighborhood, city, or ZIP code">
                                                                </div>
                                                            </div>
                                                            <div class="col-auto home_form_input2">
                                                                <button type="submit" class="btn search-btn"><span class="fa fa-search"></span></button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Feature Properties -->
<section class="feature-property bb1 pb70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="main-title text-center">
                    <h2>Recent listings for rent</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="feat_property">
                    <div class="thumb">
                        <img class="img-whp" src="images/property/fl1.jpg" alt="fl1.jpg">
                        <div class="thmb_cntnt">
                            <ul class="tag mb0">
                                <li class="list-inline-item"><a href="#">FEATURED</a></li>
                            </ul>
                            <ul class="tag2 mb0">
                                <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                            </ul>
                        </div>
                        <div class="thmb_cntnt2">
                            <ul class="listing_gallery mb0">
                                <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                                <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="details">
                        <div class="tc_content">
                            <div class="badge_icon"><a href="#"><img src="images/agent/1.png" alt="1.png"></a></div>
                            <h4><a href="page-listing-single-v8.html">New Apartment Nice Wiew</a></h4>
                            <p>Quincy St, Brooklyn, NY, USA</p>
                            <ul class="prop_details mb0">
                                <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>4 Beds</a></li>
                                <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>5 Bath</a></li>
                                <li class="list-inline-item"><a href="#"><span class="flaticon-car pr5"></span> <br>1 Garage</a></li>
                                <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>1200 Sq Ft</a></li>
                            </ul>
                        </div>
                        <div class="fp_footer">
                            <ul class="fp_meta float-left mb0">
                                <li class="list-inline-item"><a href="#"><small><del class="body-color">$2,800/mo</del></small><br>
                                        <span class="heading-color fw600">$7,500/mo</span></a></li>
                            </ul>
                            <ul class="fp_meta float-right mb0">
                                <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                                <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                                <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="feat_property">
                    <div class="thumb"> <img class="img-whp" src="images/property/fl2.jpg" alt="fl2.jpg">
                        <div class="thmb_cntnt">
                            <ul class="tag mb0">
                                <li class="list-inline-item"><a href="#">FEATURED</a></li>
                            </ul>
                            <ul class="tag2 mb0">
                                <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                            </ul>
                        </div>
                        <div class="thmb_cntnt2">
                            <ul class="listing_gallery mb0">
                                <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                                <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="details">
                        <div class="tc_content">
                            <div class="badge_icon"><a href="#"><img src="images/agent/2.png" alt="2.png"></a></div>
                            <h4><a href="page-listing-single-v8.html">Skyper Pool Apartment</a></h4>
                            <p>112 Glenwood Ave Hyde Park, Boston, MA</p>
                            <ul class="prop_details mb0">
                                <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>4 Beds</a></li>
                                <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>5 Bath</a></li>
                                <li class="list-inline-item"><a href="#"><span class="flaticon-car pr5"></span> <br>1 Garage</a></li>
                                <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>1200 Sq Ft</a></li>
                            </ul>
                        </div>
                        <div class="fp_footer">
                            <ul class="fp_meta float-left mb0">
                                <li class="list-inline-item">
                                    <a href="#">
                                        <small><del class="body-color">$2,800/mo</del></small><br>
                                        <span class="heading-color fw600">$5,250/mo</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="fp_meta float-right mb0">
                                <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                                <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                                <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="feat_property">
                    <div class="thumb"> <img class="img-whp" src="images/property/fl3.jpg" alt="fl3.jpg">
                        <div class="thmb_cntnt">
                            <ul class="tag mb0">
                                <li class="list-inline-item"><a href="#">FEATURED</a></li>
                            </ul>
                            <ul class="tag2 mb0">
                                <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                            </ul>
                        </div>
                        <div class="thmb_cntnt2">
                            <ul class="listing_gallery mb0">
                                <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                                <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="details">
                        <div class="tc_content">
                            <div class="badge_icon"><a href="#"><img src="images/agent/3.png" alt="3.png"></a></div>
                            <h4><a href="page-listing-single-v8.html">New Caledonian Wharf</a></h4>
                            <p>251 SW 6th Ln Florida City, FL</p>
                            <ul class="prop_details mb0">
                                <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>4 Beds</a></li>
                                <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>5 Bath</a></li>
                                <li class="list-inline-item"><a href="#"><span class="flaticon-car pr5"></span> <br>1 Garage</a></li>
                                <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>1200 Sq Ft</a></li>
                            </ul>
                        </div>
                        <div class="fp_footer">
                            <ul class="fp_meta float-left mb0">
                                <li class="list-inline-item">
                                    <a href="#">
                                        <small><del class="body-color">$2,800/mo</del></small><br>
                                        <span class="heading-color fw600">$2,300/mo</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="fp_meta float-right mb0">
                                <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                                <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                                <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="feat_property">
                    <div class="thumb"> <img class="img-whp" src="images/property/fl4.jpg" alt="fl4.jpg">
                        <div class="thmb_cntnt">
                            <ul class="tag mb0">
                                <li class="list-inline-item"><a href="#">FEATURED</a></li>
                            </ul>
                            <ul class="tag2 mb0">
                                <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                            </ul>
                        </div>
                        <div class="thmb_cntnt2">
                            <ul class="listing_gallery mb0">
                                <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                                <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="details">
                        <div class="tc_content">
                            <div class="badge_icon"><a href="#"><img src="images/agent/4.png" alt="4.png"></a></div>
                            <h4><a href="page-listing-single-v8.html">Spacious Family Home</a></h4>
                            <p>4 W 21st St Flatiron District, New York, NY</p>
                            <ul class="prop_details mb0">
                                <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>4 Beds</a></li>
                                <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>5 Bath</a></li>
                                <li class="list-inline-item"><a href="#"><span class="flaticon-car pr5"></span> <br>1 Garage</a></li>
                                <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>1200 Sq Ft</a></li>
                            </ul>
                        </div>
                        <div class="fp_footer">
                            <ul class="fp_meta float-left mb0">
                                <li class="list-inline-item">
                                    <a href="#">
                                        <small><del class="body-color">$2,800/mo</del></small><br>
                                        <span class="heading-color fw600">$1,900/mo</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="fp_meta float-right mb0">
                                <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                                <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                                <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Feature Properties -->
<section class="feature-property bb1 pb70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="main-title text-center">
                    <h2>Recent listings for sale</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="feat_property">
                    <div class="thumb">
                        <img class="img-whp" src="images/listing/rlsh31.jpg" alt="rlsh31.jpg">
                        <div class="thmb_cntnt">
                            <ul class="tag mb0">
                                <li class="list-inline-item"><a href="#">FEATURED</a></li>
                            </ul>
                            <ul class="tag2 mb0">
                                <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                            </ul>
                        </div>
                        <div class="thmb_cntnt2">
                            <ul class="listing_gallery mb0">
                                <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                                <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="details">
                        <div class="tc_content">
                            <div class="badge_icon"><a href="#"><img src="images/agent/1.png" alt="1.png"></a></div>
                            <h4><a href="page-listing-single-v8.html">New Apartment Nice Wiew</a></h4>
                            <p>Quincy St, Brooklyn, NY, USA</p>
                            <ul class="prop_details mb0">
                                <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>4 Beds</a></li>
                                <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>5 Bath</a></li>
                                <li class="list-inline-item"><a href="#"><span class="flaticon-car pr5"></span> <br>1 Garage</a></li>
                                <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>1200 Sq Ft</a></li>
                            </ul>
                        </div>
                        <div class="fp_footer">
                            <ul class="fp_meta float-left mb0">
                                <li class="list-inline-item"><a href="#"><small><del class="body-color">$2,800/mo</del></small><br>
                                        <span class="heading-color fw600">$7,500/mo</span></a></li>
                            </ul>
                            <ul class="fp_meta float-right mb0">
                                <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                                <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                                <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="feat_property">
                    <div class="thumb"> <img class="img-whp" src="images/listing/rlsh32.jpg" alt="rlsh32.jpg">
                        <div class="thmb_cntnt">
                            <ul class="tag mb0">
                                <li class="list-inline-item"><a href="#">FEATURED</a></li>
                            </ul>
                            <ul class="tag2 mb0">
                                <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                            </ul>
                        </div>
                        <div class="thmb_cntnt2">
                            <ul class="listing_gallery mb0">
                                <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                                <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="details">
                        <div class="tc_content">
                            <div class="badge_icon"><a href="#"><img src="images/agent/2.png" alt="2.png"></a></div>
                            <h4><a href="page-listing-single-v8.html">Skyper Pool Apartment</a></h4>
                            <p>112 Glenwood Ave Hyde Park, Boston, MA</p>
                            <ul class="prop_details mb0">
                                <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>4 Beds</a></li>
                                <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>5 Bath</a></li>
                                <li class="list-inline-item"><a href="#"><span class="flaticon-car pr5"></span> <br>1 Garage</a></li>
                                <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>1200 Sq Ft</a></li>
                            </ul>
                        </div>
                        <div class="fp_footer">
                            <ul class="fp_meta float-left mb0">
                                <li class="list-inline-item">
                                    <a href="#">
                                        <small><del class="body-color">$2,800/mo</del></small><br>
                                        <span class="heading-color fw600">$5,250/mo</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="fp_meta float-right mb0">
                                <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                                <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                                <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="feat_property">
                    <div class="thumb"> <img class="img-whp" src="images/listing/rlsh33.jpg" alt="rlsh33.jpg">
                        <div class="thmb_cntnt">
                            <ul class="tag mb0">
                                <li class="list-inline-item"><a href="#">FEATURED</a></li>
                            </ul>
                            <ul class="tag2 mb0">
                                <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                            </ul>
                        </div>
                        <div class="thmb_cntnt2">
                            <ul class="listing_gallery mb0">
                                <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                                <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="details">
                        <div class="tc_content">
                            <div class="badge_icon"><a href="#"><img src="images/agent/3.png" alt="3.png"></a></div>
                            <h4><a href="page-listing-single-v8.html">New Caledonian Wharf</a></h4>
                            <p>251 SW 6th Ln Florida City, FL</p>
                            <ul class="prop_details mb0">
                                <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>4 Beds</a></li>
                                <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>5 Bath</a></li>
                                <li class="list-inline-item"><a href="#"><span class="flaticon-car pr5"></span> <br>1 Garage</a></li>
                                <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>1200 Sq Ft</a></li>
                            </ul>
                        </div>
                        <div class="fp_footer">
                            <ul class="fp_meta float-left mb0">
                                <li class="list-inline-item">
                                    <a href="#">
                                        <small><del class="body-color">$2,800/mo</del></small><br>
                                        <span class="heading-color fw600">$2,300/mo</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="fp_meta float-right mb0">
                                <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                                <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                                <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="feat_property">
                    <div class="thumb"> <img class="img-whp" src="images/listing/rlsh34.jpg" alt="rlsh34.jpg">
                        <div class="thmb_cntnt">
                            <ul class="tag mb0">
                                <li class="list-inline-item"><a href="#">FEATURED</a></li>
                            </ul>
                            <ul class="tag2 mb0">
                                <li class="list-inline-item"><a href="#">FOR SALE</a></li>
                            </ul>
                        </div>
                        <div class="thmb_cntnt2">
                            <ul class="listing_gallery mb0">
                                <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr5"></span> 22</a></li>
                                <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr5"></span> 3</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="details">
                        <div class="tc_content">
                            <div class="badge_icon"><a href="#"><img src="images/agent/4.png" alt="4.png"></a></div>
                            <h4><a href="page-listing-single-v8.html">Spacious Family Home</a></h4>
                            <p>4 W 21st St Flatiron District, New York, NY</p>
                            <ul class="prop_details mb0">
                                <li class="list-inline-item"><a href="#"><span class="flaticon-bed pr5"></span> <br>4 Beds</a></li>
                                <li class="list-inline-item"><a href="#"><span class="flaticon-bath pr5"></span> <br>5 Bath</a></li>
                                <li class="list-inline-item"><a href="#"><span class="flaticon-car pr5"></span> <br>1 Garage</a></li>
                                <li class="list-inline-item"><a href="#"><span class="flaticon-ruler pr5"></span> <br>1200 Sq Ft</a></li>
                            </ul>
                        </div>
                        <div class="fp_footer">
                            <ul class="fp_meta float-left mb0">
                                <li class="list-inline-item">
                                    <a href="#">
                                        <small><del class="body-color">$2,800/mo</del></small><br>
                                        <span class="heading-color fw600">$1,900/mo</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="fp_meta float-right mb0">
                                <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-resize"></span></a></li>
                                <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-add"></span></a></li>
                                <li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-heart-shape-outline"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Divider -->
<section class="divider home-style3 parallax" data-stellar-background-ratio="0.2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="main-title text-center">
                    <h2 class="text-white">Why Choose Us</h2>
                    <p class="text-white">We provide full service at every step.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="why_chose_us home3">
                    <div class="icon"> <span class="flaticon-discord"></span> </div>
                    <div class="details">
                        <h4 class="text-white">Trusted By Thousands</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="why_chose_us home3">
                    <div class="icon"> <span class="flaticon-house"></span> </div>
                    <div class="details">
                        <h4 class="text-white">Wide Renge Of Properties</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="why_chose_us home3">
                    <div class="icon"> <span class="flaticon-calculator"></span> </div>
                    <div class="details">
                        <h4 class="text-white">Financing Made Easy</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="why_chose_us home3">
                    <div class="icon"> <span class="flaticon-maps"></span> </div>
                    <div class="details">
                        <h4 class="text-white">See Neighborhoods</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection