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
                                        <th>Activities</th>
                                        <th>Owner</th>
                                        <th>Status</th>
                                        <th>Started</th>
                                        <th>End</th>
                                        <th>Created</th>
                                        <th width="10%"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($projs as $key=> $proj)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>
                                            <a href="{{ route('admin.view-project', ['project_id'=>$proj->id])}}">
                                                {{ $proj->name }}
                                            </a>
                                        </td>
                                        <td>
                                            <a class="info-link" href="{{ route('admin.view-usertask', ['project_id'=>$proj->id]) }}">
                                                <span class="btn btn-info"><i class="far fa-file"></i> View </span>
                                            </a>
                                        </td>
                                        <td>{{ $proj->owner }}</td>
                                        <td>{{ $proj->status }}</td>
                                        <td>{{ $proj->start }}</td>
                                        <td>{{ $proj->end }}</td>
                                        <td>{{ $proj->created_at->diffForHumans() }}</td>
                                        <td>
                                             <a href="{{ route('admin.view-project', ['project_id'=>$proj->id])}}">
                                                <i class="far fa-list-alt text-info"></i>
                                            </a>
                                            <a href="{{ route('admin.editproject', ['project_id'=>$proj->id])}}">
                                                <i class="far fa-edit text-success"></i>
                                            </a>
                                            <a href="#" onclick="confirm('Are you sure, you want to delete this project?') ||event.stopImmediatePropagation()" wire:click.prevent="deleteProject({{ $proj->id }})" >
                                                <i class="far fa-trash-alt  text-danger"></i>
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
