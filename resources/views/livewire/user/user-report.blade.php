<div class="layout-px-spacing">

    <div class="layout-top-spacing">
        <div class="account-settings-container layout-top-spacing">

            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <h2>Staff Activities</h2><hr/>
                    <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                        <div class="table-responsive ">
                            <table id="zero-config" class="table table-hover" >
                                <thead style="width: 100% !important;">
                                    <tr>
                                        <th>#</th>
                                        <th>Project</th>
                                        <th>Staff</th>
                                        <th>Approval</th>
                                        <th>Created</th>
                                        <th>Timeline</th>
                                        <th class="no-content"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tms as $key=> $tm)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $tm->project }}</td>
                                        <td>{{ $tm->fname.' '. $tm->lname}}</td>
                                        <td>
                                            @if ($tm->approved_by !='')
                                                <span class="btn btn-success">Approved</span>
                                            @else
                                            <span class="btn btn-warning">Pending</span>
                                            @endif
                                        </td>
                                        <td>{{ $tm->start }}</td>
                                        <td>{{ $tm->created_at->diffForHumans() }}</td>
                                        <td>
                                            @if ($tm->approved_by !='')
                                            <i class="far fa-check-circle fa-2x text-success"></i>
                                            @else
                                            <a href="#"  class="far fa-check-circle text-warning"></a>
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
        </div>
    </div>
</div>
