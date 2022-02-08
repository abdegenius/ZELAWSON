@extends("layouts.user")
@section('content')

<div class="row">
    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
        <div class="ff_one">
            <div class="icon"><span class="flaticon-house-1"></span></div>
            <div class="detais">
                <div class="timer">15</div>
                <h4>Purchases</h4>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
        <div class="ff_one">
            <div class="icon"><span class="flaticon-view"></span></div>
            <div class="detais">
                <div class="timer">22</div>
                <h4>Views</h4>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
        <div class="ff_one">
            <div class="icon"><span class="flaticon-mail-inbox-app"></span></div>
            <div class="detais">
                <div class="timer">4</div>
                <h4>Chats</h4>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
        <div class="ff_one">
            <div class="icon"><span class="flaticon-heartbeat"></span></div>
            <div class="detais">
                <div class="timer">148</div>
                <h4>Favorites</h4>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-xl-12">
        <div class="application_statics">
            <h4>Activities</h4>
            <canvas id="myChartweave" width="100" height="50"></canvas>
            <canvas class="dn" id="myChart"></canvas>
        </div>
    </div>
    <!-- <div class="col-xl-4">
        <div class="recent_job_activity">
            <h4 class="title"></h4>
            <div class="grid">
                <ul>
                    <li class="list-inline-item">
                        <div class="icon"><span class="flaticon-house"></span></div>
                    </li>
                    <li class="list-inline-item">
                        <p>Your listing <span class="text-thm">Luxury Family Home</span> has been approved!.</p>
                    </li>
                </ul>
            </div>
            <div class="grid">
                <ul>
                    <li class="list-inline-item">
                        <div class="icon"><span class="flaticon-house"></span></div>
                    </li>
                    <li class="list-inline-item">
                        <p>Kathy Brown left a review on <span class="text-thm">Renovated Apartment</span></p>
                    </li>
                </ul>
            </div>
            <div class="grid">
                <ul>
                    <li class="list-inline-item">
                        <div class="icon"><span class="flaticon-house"></span></div>
                    </li>
                    <li class="list-inline-item">
                        <p>Someone favorites your <span class="text-thm">Gorgeous Villa Bay</span> View listing!</p>
                    </li>
                </ul>
            </div>
            <div class="grid">
                <ul>
                    <li class="list-inline-item">
                        <div class="icon"><span class="fa fa-heart-o"></span></div>
                    </li>
                    <li class="list-inline-item">
                        <p>Your listing <span class="text-thm">Luxury Family Home</span> has been approved!.</p>
                    </li>
                </ul>
            </div>
            <div class="grid">
                <ul>
                    <li class="list-inline-item">
                        <div class="icon"><span class="flaticon-house"></span></div>
                    </li>
                    <li class="list-inline-item">
                        <p>Kathy Brown left a review on <span class="text-thm">Renovated Apartment</span></p>
                    </li>
                </ul>
            </div>
            <div class="grid">
                <ul>
                    <li class="list-inline-item">
                        <div class="icon"><span class="flaticon-house"></span></div>
                    </li>
                    <li class="list-inline-item">
                        <p>Someone favorites your <span class="text-thm">Gorgeous Villa Bay</span> View listing!</p>
                    </li>
                </ul>
            </div>
            <div class="grid mb0">
                <ul class="pb0 mb0 bb_none">
                    <li class="list-inline-item">
                        <div class="icon"><span class="flaticon-house"></span></div>
                    </li>
                    <li class="list-inline-item">
                        <p>Your listing <span class="text-thm">Luxury Family Home</span> has been approved!.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div> -->
</div>

@endsection