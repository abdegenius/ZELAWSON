@extends("layouts.app")
@section('content')

<section class="our-log bgc-alice-blue">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-4 offset-lg-4">
                <div class="login_form inner_page bgc-white mb30">
                    <form action="#">
                        <div class="mb-2">
                            <label class="form-label mb0">Login</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email Address">
                        </div>
                        <div class="form-group mb5">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="exampleCheck2">
                            <label class="custom-control-label" for="exampleCheck2">Remember me</label>
                            <a class="btn-fpswd float-right text-thm" href="{{ route('reset.password') }}">Forgot Password</a>
                        </div>
                        <button type="submit" class="btn btn-log btn-block btn-thm mt20">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection