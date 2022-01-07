<div class="layout-px-spacing">

    <div class="row layout-top-spacing">
        <div class="account-settings-container layout-top-spacing">

            <div class="account-content">
                <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                            <form wire:submit.prevent="createTask" class="section work-experience" enctype="multipart/form-data">
                                @csrf
                            {{-- <form id="work-experience" class="section work-experience"> --}}
                                <div class="info">
                                    <h5 class="">Create Tasks</h5>
                                    <div class="row">
                                        <div class="col-md-11 mx-auto">

                                            <div class="work-section">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="degree2">Company Name</label>
                                                            <input type="text" class="form-control mb-4" id="degree2" readonly value="Ripen Marine Contractors">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="degree3">Task </label>
                                                                    <input type="text" class="form-control mb-4" id="degree3" placeholder="Tasks" wire:model="task" wire:keyup="generateCode">
                                                                    @error('task')<p style="color: crimson;">{{ $message }}</p> @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="degree3"> Task Code</label>
                                                                    <input type="text" class="form-control mb-4" id="degree3" placeholder="Task Code" wire:model="code">
                                                                    @error('code')<p style="color: crimson;">{{ $message }}</p> @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-12 pt-5">
                                                        <button type="reset" id="multiple-reset" class="btn btn-primary">Reset </button>
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
