<div class="layout-px-spacing">

    <div class="layout-top-spacing">
        <div class="account-settings-container layout-top-spacing">

            <div class="account-content">
                <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                            <form wire:submit.prevent="createProject" class="section work-experience" enctype="multipart/form-data">
                                @csrf
                            {{-- <form id="work-experience" class="section work-experience"> --}}
                                <div class="info">
                                    <h5 class="">Create Project</h5>
                                    <div class="row">
                                        <div class="col-md-11 mx-auto">

                                            <div class="work-section">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="degree3">Project Name</label>
                                                                    <select class="form-control mb-4" id="wes-from1" wire:model="name" >
                                                                        <option value="">Select</option>
                                                                        @foreach ($types as $type)
                                                                        <option>{{ $type->type}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error('name')<p style="color: crimson;">{{ $message }}</p> @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="degree3">Project Code</label>
                                                                    <select class="form-control mb-4" id="wes-from1" wire:model="code">
                                                                        <option value="">Select</option>
                                                                        @foreach ($types as $type)
                                                                        <option>{{ $type->code}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error('code')<p style="color: crimson;">{{ $message }}</p> @enderror
                                                                </div>
                                                            </div> 
                                                            {{-- <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="degree3">Slug</label>
                                                                    <input type="text" class="form-control mb-4" id="degree3" placeholder="Project Slug" wire:model="slug">
                                                                    @error('slug')<p style="color: crimson;">{{ $message }}</p> @enderror
                                                                </div>
                                                            </div> --}}
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="degree4">Project Owner</label>
                                                                    <select class="form-control mb-4" id="wes-from1" wire:model="owner">
                                                                        <option value="">Select</option>
                                                                        @foreach ($users as $lead)
                                                                        <option>{{ $lead->fname.' '.$lead->lname }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error('owner')<p style="color: crimson;">{{ $message }}</p> @enderror
                                                                </div> 
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="degree3">Status</label>
                                                                    <select class="form-control mb-4" id="wes-from1" wire:model="status">
                                                                        <option value="">Select</option>
                                                                        <option>Started</option>
                                                                        <option>Completed</option>
                                                                        <option>On-going</option>
                                                                        <option>On-Hold</option>
                                                                        <option>Cancelled</option>
                                                                    </select>
                                                                    @error('status')<p style="color: crimson;">{{ $message }}</p> @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="degree3">Start</label>
                                                                    <input type="date" class="form-control mb-4" id="degree3"  wire:model="start">
                                                                    @error('start')<p style="color: crimson;">{{ $message }}</p> @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="degree3">End</label>
                                                                    <input type="date" class="form-control mb-4" id="degree3"  wire:model="end">
                                                                    @error('end')<p style="color: crimson;">{{ $message }}</p> @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <textarea class="form-control" placeholder="Description" rows="5" wire:model="comment"></textarea>
                                                        @error('comment')<p style="color: crimson;">{{ $message }}</p> @enderror
                                                    </div>
                                                    <hr/>
                                                    <div class="col-md-12">
                                                        <div class="form-group" wire:ignore>
                                                            <label for="degree4">Assign Project Team</label>
                                                            <select class="form-control tagging" multiple wire:model="members">
                                                                <option value="">Select</option>
                                                                @foreach ($users as $lead)
                                                                <option>{{ $lead->fname.' '.$lead->lname }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('members')<p style="color: crimson;">{{ $message }}</p> @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 pt-5">
                                                        <button id="multiple-reset" class="btn btn-primary">Reset </button>
                                                        <button type="submit" id="multiple-messages" class="btn btn-dark">Save Changes</button>
                                
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        $(".tagging").select2({
            tags: true
        }).on('change', function (){
            //alert('here');
            @this.set('members', $(this).val());
        });
    </script>
@endpush