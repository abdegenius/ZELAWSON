@extends("layouts.app")
@section('content')

<section class="our-log bgc-alice-blue">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-4 offset-lg-4">
                <div class="login_form inner_page bgc-white mb30">
                    <form action="#">
                        <div class="mb-2">
                            <label class="form-label mb0">Reset Password</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email Address">
                        </div>
                        <div class="custom-control custom-checkbox">
                            <a class="btn-fpswd float-right text-thm" href="#">Back to login</a>
                        </div>
                        <button type="submit" class="btn btn-signup btn-block btn-danger mb0">CONTINUE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection