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
                                        <th>Name</th>
                                        <th>Department</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Created</th>
                                        <th class="no-content"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($usrs as $key=> $usr)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>
                                            <img src="{{ asset('asset/image/users')}}/{{ $usr->profile_photo_path }}" width="30" height="30" alt="{{ $usr->fname }}">
                                            {{ $usr->fname.' '.$usr->lname  }}
                                        </td>
                                        <td>{{ $usr->department }}</td> 
                                        <td>{{ $usr->email }}</td>
                                        <td>{{ $usr->phone }}</td>
                                        <td>{{ $usr->created_at->diffForHumans() }}</td>
                                        <td>
                                            <a href="{{ route('admin.admin-edituser',  ['user_id'=>$usr->id]) }}">
                                                <i class="far fa-edit  text-success"></i>
                                            </a>
                                            {{-- <a>
                                                <i class="far fa-list-alt  text-primary"></i>
                                            </a> --}}
                                            <a href="#" onclick="confirm('Are you sure, you want to delete this user?') ||event.stopImmediatePropagation()" wire:click.prevent="deleteProject({{ $usr->id }})" >
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
