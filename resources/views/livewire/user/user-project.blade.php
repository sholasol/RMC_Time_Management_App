<div class="layout-px-spacing">

    <div class="layout-top-spacing">
        <div class="account-settings-container layout-top-spacing">

            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <h2>Projects</h2><hr/>
                    <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                        <div class="table-responsive ">
                            <table id="zero-config" class="table table-hover" >
                                <thead style="width: 100% !important;">
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Owner</th>
                                        <th>Status</th>
                                        <th>Started</th>
                                        <th>End</th>
                                        <th>Created</th>
                                        <th class="no-content"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($projs as $key=> $proj)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $proj->name }}</td>
                                        <td>{{ $proj->owner }}</td>
                                        <td>{{ $proj->status }}</td>
                                        <td>{{ $proj->start }}</td>
                                        <td>{{ $proj->end }}</td>
                                        <td>{{ $proj->created_at->diffForHumans() }}</td>
                                        <td>
                                            <a>
                                                <i class="far fa-list-alt  text-primary"></i>
                                            </a>
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
