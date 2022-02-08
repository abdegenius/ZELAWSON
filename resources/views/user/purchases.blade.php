@extends("layouts.user")

@section("content")
    <div class="row">
        <div class="col-lg-12">
            <div class="invoice_table property table-responsive">
                <table class="table table-borderless">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Listing Title</th>
                            <th scope="col">Date Purchased</th>
                            <th scope="col">Type</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">
                                <div class="feat_property list property">
                                    <div class="thumb"> <img class="img-whp" src="images/listing/s1.png" alt="s1.png">
                                        <div class="thmb_cntnt">
                                            <ul class="tag mb0">
                                                <li class="list-inline-item"><a href="#">FEATURED</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <div class="tc_content">
                                            <h4 class="title">New Apartment Nice Wiew <small class="tag2">FOR SALE</small></h4>
                                            <p>Quincy St, Brooklyn, NY, USA</p>
                                            <div class="fp_meta">
                                                <a href="#">
                                                    <small><del class="body-color">$2,800/mo</del></small> <br>
                                                    <span class="heading-color fw600">$7,500/mo</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </th>
                            <td>30 December 2021</td>
                            <td class="pending_color">Pending</td>
                            <td>5.933</td>
                            <td class="editing_list">
                                <ul>
                                    <li class="list-inline-item">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Chat"><span class="flaticon-discord"></span></a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="mbp_pagination mt10">
                    <ul class="page_navigation">
                        <li class="page-item">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> <span class="fa fa-arrow-left"></span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">3 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">15</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#"><span class="fa fa-arrow-right"></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection