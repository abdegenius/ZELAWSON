@extends("layouts.app")

@section("content")

<style>
    .contact_icon_box {
        position: relative;
    }

    .contact_icon_box .icon {
        background-color: rgba(0, 97, 223, .03);
        border-radius: 50%;
        height: 70px;
        line-height: 70px;
        margin-right: 20px;
        text-align: center;
        width: 70px;
    }

    .contact_icon_box .icon span {
        color: #0061DF;
        font-size: 24px;
    }

    .contact_icon_box .details .title {
        font-size: 16px;
        line-height: 24px;
        font-weight: 600;
    }

    .contact_icon_box .details p {
        font-size: 14px;
        line-height: 30px;
    }
</style>
<section class="our-contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="main-title text-center">
                    <h2>We're always eager to hear from you!</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4 col-xl-3 pr0 pl0 plpr15-lg">
                <div class="contact_icon_box mb50">
                    <div class="icon float-left"><span class="flaticon-map"></span></div>
                    <div class="details">
                        <h5 class="title">Address</h5>
                        <p>329 Queensberry Street, North<br>Melbourne VIC 3051, Australia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="contact_icon_box mb50">
                    <div class="icon float-left"><span class="flaticon-phone"></span></div>
                    <div class="details">
                        <h5 class="title">Contact</h5>
                        <p>Mobile: 123 456 7890<br>Mail: support@houzing.com</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 pr0 pl0 plpr15-lg">
                <div class="contact_icon_box mb50">
                    <div class="icon float-left"><span class="flaticon-clock"></span></div>
                    <div class="details">
                        <h5 class="title">Hour of operation</h5>
                        <p>Monday - Friday: 09:00 - 20:00<br>Sunday & Saturday: 10:30 - 22:00</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="form_grid mt100">
                    <h2 class="text-center mb50">Send Us An Email</h2>
                    <form class="contact_form" name="contact_form" action="#" method="post" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="form_name" class="form-control" required="required" type="text" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="form_email" class="form-control required email" required="required" type="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea name="form_message" class="form-control required" rows="6" required placeholder="Enter Your Message"></textarea>
                                </div>
                                <div class="form-group mb0">
                                    <button type="button" class="btn btn-thm">SUBMIT</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection