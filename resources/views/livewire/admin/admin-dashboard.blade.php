
            <div class="layout-px-spacing">

                <div class="row layout-top-spacing">

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing alert-primary">
                        <div class="widget widget-card-four">
                            <div class="widget-content">
                                <div class="w-content">
                                    <div class="w-info">
                                        <h6 class="value">{{ $projs->count() }}</h6>
                                        <p class="">Projects</p>
                                    </div>
                                    <div class="">
                                        <div class="w-icon">
                                            <i class="far fa-list-alt fa-2x"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-gradient-secondary" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing">
                        <div class="widget widget-card-four">
                            <div class="widget-content">
                                <div class="w-content">
                                    <div class="w-info">
                                        <h6 class="value">{{ $tms->count() }}</h6>
                                        <p class="">Visitations</p>
                                    </div>
                                    <div class="">
                                        <div class="w-icon">
                                            <i class="far fa-calendar-alt fa-2x"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 80%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-12 layout-spacing alert-info">
                        <div class="widget widget-account-invoice-two">
                            <div class="widget-content">
                                <div class="account-box">
                                    <div class="info">
                                        <h5 class="">Users</h5>
                                        <p class="inv-balance">{{ $usrs->count() }}</p>
                                    </div>
                                    <div class="acc-action">
                                        <div class="">
                                            <a href="{{ route('admin.newUser') }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></a>
                                            <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg></a>
                                        </div>
                                        <a href="{{ route('admin.manageUsers') }}">System Users</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                        
                        <div class="widget widget-chart-three">
                            <div class="widget-heading">
                                <div class="">
                                    <h5 class=""> Visitors Time Chart</h5>
                                </div>

                                {{-- <div class="dropdown  custom-dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="uniqueVisitors" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="uniqueVisitors">
                                        <a class="dropdown-item" href="javascript:void(0);">View</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Update</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Download</a>
                                    </div>
                                </div> --}}
                            </div>

                            <div class="widget-content">
                                <div id="chart"></div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="widget widget-activity-three">

                            <div class="widget-heading">
                                <h5 class="">Notifications</h5>
                            </div>

                            <div class="widget-content">

                                <div class="mt-container mx-auto">
                                    <div class="timeline-line">
                                        @foreach ($tms as $tm)
                                        <div class="item-timeline timeline-new">
                                            <div class="t-dot">
                                                @if ($tm->approved_by !='')
                                                    <div class="t-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                                    </div>
                                                @else
                                                        <div class="t-warning"><i class="far fa-check-circle fa-2x text-white"></i></div>
                                                @endif
                                            </div>
                                            <div class="t-content">
                                                <div class="t-uppercontent">
                                                    <h5>{{ $tm->project }}</h5>
                                                    <span class="">{{ $tm->created_at->diffForHumans() }}</span>
                                                </div>
                                                <p> {{ $tm->comment }}</p>
                                                <div class="tags">
                                                    <div class="badge badge-primary">{{ $tm->fname.' '.$tm->lname }}</div>
                                                </div>
                                            </div>
                                        </div> 
                                        @endforeach 
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget widget-card-one">
                    <div class="widget-content">
                        <div class="table-responsive ">
                            <h3 style="margin-left: 15px;">Site Visitation</h3>
                            <table id="zero-config" class="table table-hover" >
                                <thead style="width: 100% !important;">
                                    <tr>
                                        <th>#</th>
                                        <th>Project</th>
                                        <th>Staff</th>
                                        <th>Time In</th>
                                        <th>Time Out</th>
                                        <th width="10%">Approval</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tms as $key=> $tm)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $tm->project }}</td>
                                        <td>{{ $tm->fname.' '. $tm->lname}}</td>
                                        <td>{{ $tm->start }}</td>
                                        <td>{{ $tm->created_at->diffForHumans() }}</td>
                                        <td>
                                            @if ($tm->approved_by !='')
                                                <span class="btn btn-success">Approved</span>
                                            @else
                                            <span class="btn btn-warning">Pending</span>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            @push('scripts')
            <script>
                var options = {
                    chart: {
                        type: 'line',
                        height:'350px'
                    },
                    series: [{
                        name: 'Activity',
                        data: [30,40,35,50,49,60,70]
                    }],
                    xaxis: {
                        categories: ['Mon','Tue','Wed','Thur','Fri','Sat','Sun']
                    }
                    }
        
                    var chart = new ApexCharts(document.querySelector("#chart"), options);
        
                    chart.render();
            </script>  
            @endpush