<div class="layout-px-spacing">

    <div class="layout-top-spacing">
        <div class="account-settings-container layout-top-spacing">

            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                        <div class="table-responsive ">
                            <table id="zero-config" class="table table-hover" >
                                <thead style="width: 100% !important;">
                                    <tr>
                                        <th>#</th>
                                        <th>Project Type</th>
                                        <th>Code</th>
                                        <th>Created</th>
                                        <th class="no-content"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($projs as $key=> $proj)
                                    <tr>
                                        <td>{{ $key+1 }}</td> 
                                        <td>{{ $proj->type }}</td>
                                        <td>{{ $proj->code }}</td>
                                        <td>{{ $proj->created_at->diffForHumans() }}</td>
                                        <td>
                                            <a href="#" onclick="confirm('Are you sure, you want to delete this project type?') ||event.stopImmediatePropagation()" wire:click.prevent="deleteType({{ $proj->id }})" >
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle table-cancel"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
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
