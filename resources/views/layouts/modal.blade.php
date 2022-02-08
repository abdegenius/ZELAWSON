<!-- Modal -->
<div class="sign_up_modal modal fade" id="logInModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body container pb30 pl0 pr0 pt0">
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="sign_up_tab nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Sign in</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content container" id="myTabContent">
                    <div class="row mt30 tab-pane fade show active pl20 pr20" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="col-lg-12">
                            <div class="login_form">
                                <form action="#">
                                    <div class="mb-2 mr-sm-2">
                                        <label class="form-label mb0">Login</label>
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Email Address">
                                    </div>
                                    <div class="form-group mb5">
                                        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="exampleCheck2">
                                        <label class="custom-control-label" for="exampleCheck2">Remember me</label>
                                        <a class="btn-fpswd float-right text-thm" href="#">Forgot</a>
                                    </div>
                                    <button type="submit" class="btn btn-log btn-block btn-thm mt20">Sign in</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row mt30 tab-pane fade pl20 pr20" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="col-lg-12">
                            <div class="sign_up_form">
                                <form action="#">
                                    <label class="form-label mb-5">Create Account</label>
                                    <div class="form-group input-group">
                                        <input type="email" class="form-control" placeholder="Email address">
                                    </div>
                                    <div class="form-group input-group">
                                        <input type="text" class="form-control" placeholder="First name">
                                    </div>
                                    <div class="form-group input-group">
                                        <input type="text" class="form-control" placeholder="Last name">
                                    </div>
                                    <div class="form-group input-group">
                                        <select class="selectpicker form-control" data-width="100%">
                                            <option value="male" data-tokens="male">Male</option>
                                            <option value="female" data-tokens="female">Female</option>
                                            <option value="prefer not to say" data-tokens="prefer not to say">Prefer not to say</option>
                                        </select>
                                    </div>
                                    <div class="form-group input-group">
                                        <input type="number" class="form-control" placeholder="Phone number">
                                    </div>
                                    <div class="form-group input-group mb20">
                                        <input type="password" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="form-group input-group mb30">
                                        <input type="password" class="form-control" placeholder="Re-enter password">
                                    </div>
                                    <button type="submit" class="btn btn-signup btn-block btn-dark mb0">REGISTER</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mobile_nav_modal modal fade d-md-none" id="mobileNavModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body container pb30 pl0 pr0 pt0">
                <div class="container">
                    <div class="row mt30 pl20 pr20">
                        <div class="col-lg-12">
                            <div class="user_set_header">
                                <img class="float-left" src="{{ asset('images/team/e1.png') }}" alt="e1.png">
                                <p>Darrell Steward <br><span class="address">alitufan@gmail.com</span></p>
                            </div>
                            <div class="">
                                <a class="dropdown-item block active" href="#">My Profile</a>
                                <a class="dropdown-item block" href="#">Messages</a>
                                <a class="dropdown-item block" href="#">Purchase history</a>
                                <a class="dropdown-item block" href="#">Help</a>
                                <a class="dropdown-item block" href="#">Log out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>