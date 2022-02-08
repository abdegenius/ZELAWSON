@extends("layouts.user")

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="invoice_table table-responsive">
            <table class="table table-borderless">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Search Keyword</th>
                        <th scope="col"></th>
                        <th class="dn-sm" scope="col"></th>
                        <th class="dn-sm" scope="col"></th>
                        <th class="dn-sm" scope="col"></th>
                        <th class="dn-lg" scope="col"></th>
                        <th class="dn-lg" scope="col"></th>
                        <th class="dn-lg" scope="col"></th>
                        <th class="dn-lg" scope="col"></th>
                        <th class="dn-lg" scope="col"></th>
                        <th scope="col">Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">List London</th>
                        <td></td>
                        <td class="dn-sm"></td>
                        <td class="dn-sm"></td>
                        <td class="dn-sm"></td>
                        <td class="dn-lg"></td>
                        <td class="dn-lg"></td>
                        <td class="dn-lg"></td>
                        <td class="dn-lg"></td>
                        <td class="dn-lg"></td>
                        <td>30 December 2021</td>
                        <td class="editing_list">
                            <ul>
                                <li class="list-inline-item">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="View"><span class="flaticon-view"></span></a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection