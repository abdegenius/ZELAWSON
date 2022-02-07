@extends("layouts.app")
@section('content')

<section class="our-log bgc-alice-blue">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-4 offset-lg-4">
                <div class="login_form inner_page bgc-white mb30">
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
</section>

@endsection