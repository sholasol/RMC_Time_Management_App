<div class="layout-px-spacing">

    <div class="row layout-top-spacing">
        <div class="account-settings-container layout-top-spacing">

            <div class="account-content">
                <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                            <form wire:submit.prevent="editUsr" class="section work-experience" enctype="multipart/form-data">
                                @csrf
                                <div class="info">
                                    <h5 class="">Create User</h5>
                                    <div class="row">
                                        <div class="col-md-11 mx-auto">

                                            <div class="work-section">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="degree2">First Name</label>
                                                            <input type="text" class="form-control mb-4" id="degree2" placeholder="First Name" wire:model="fname">
                                                            @error('fname')<p style="color: crimson;">{{ $message }}</p> @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="degree2">Last Name</label>
                                                            <input type="text" class="form-control mb-4" id="degree2" placeholder="Last Name" wire:model="lname">
                                                            @error('lname')<p style="color: crimson;">{{ $message }}</p> @enderror
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="degree2">Email</label>
                                                            <input type="email" class="form-control mb-4" id="degree2" placeholder="Email" wire:model="email">
                                                            @error('email')<p style="color: crimson;">{{ $message }}</p> @enderror
                                                        </div>
                                                    </div>
                                                    
                                                    

                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="degree2">Phone</label>
                                                                    <input type="text" class="form-control mb-4" id="degree2" placeholder="Phone" wire:model="phone">
                                                                    @error('phone')<p style="color: crimson;">{{ $message }}</p> @enderror
                                                                </div>
                                                            </div>
                                                            {{-- <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="degree2">Enter New Password</label>
                                                                    <input type="password" class="form-control mb-4" id="degree2" placeholder="********" wire:model="password">
                                                                    @error('password')<p style="color: crimson;">{{ $message }}</p> @enderror
                                                                </div>
                                                            </div> --}}
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Department</label>
                                                                    <select class="form-control mb-4" id="wes-from1" wire:model="department">
                                                                        <option value =" ">Select Department</option>
                                                                        @foreach ($depts as $dept)
                                                                        <option>{{ $dept->name }}</option>
                                                                        @endforeach
                                                                        
                                                                    </select>
                                                                    @error('department')<p style="color: crimson;">{{ $message }}</p> @enderror
                                                                </div>
                                                            </div>
                  
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Role</label>
                                                                    <select class="form-control mb-4" id="wes-from1" wire:model="utype">
                                                                        <option value ="">Select Role</option>
                                                                        <option value ="ADM">Admin User</option>
                                                                        <option value ="MGR">Department Head</option>
                                                                        <option value ="USR">Users</option>
                                                                    </select>
                                                                    @error('utype')<p style="color: crimson;">{{ $message }}</p> @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="degree2">Profile Image </label>
                                                                    <input type="file" class="form-control mb-4" id="degree2" wire:model="newimage">
                                                                    @if ($newimage)
                                                                        <img src="{{ $newimage->temporaryUrl() }}" width="120" alt="">
                                                                    @else
                                                                        <img src="{{ asset('asset/image/users') }}/{{ $profile_photo_path }}" width="120" alt="">
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    
                                                    <div class="col-md-12 pt-5">
                                                        <button id="multiple-reset" class="btn btn-danger">Reset </button>
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
