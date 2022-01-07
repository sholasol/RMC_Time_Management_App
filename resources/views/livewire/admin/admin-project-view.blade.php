<div class="layout-px-spacing">                
                    
    <div class="account-settings-container layout-top-spacing">

        <div class="account-content">
            <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                        <form id="general-info" class="section general-info">
                            <div class="info">
                                <h6 class="">{{ $name }} </h6>
                                <div class="row">
                                    <div class="col-lg-11 mx-auto">
                                        <div class="row">
                                            <div class="col-xl-2 col-lg-12 col-md-4">
                                                <div class="upload mt-4 pr-md-4">
                                                    <img src="{{ asset('assets/img/200x200.jpg')}}" width="100" height="100" alt="">
                                                </div>
                                            </div>
                                            <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                <div class="form">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="fullName">Project Owner</label>
                                                                <input type="text" class="form-control mb-4" id="fullName" placeholder="Full Name" value="{{ $owner }}" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="dob-input">Start/End Date</label>
                                                            <div class="d-sm-flex d-block">
                                                                <div class="form-group mr-1">
                                                                    <input type="text" class="form-control mb-4" id="profession" placeholder="Designer" value="{{ $start }}" readonly>
                                                                </div>
                                                                <div class="form-group mr-1">
                                                                    <input type="text" class="form-control mb-4" id="profession" placeholder="Designer" value="{{ $end }}" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="profession">Project Title</label>
                                                        <input type="text" class="form-control mb-4" id="profession" placeholder="Designer" value="{{ $name }}" readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-md-12">
                                                            <div class="custom-progress top-right progress-up" style="width: 100%">
                                                                <p class="skill-name">Project Progress</p>
                                                                <input type="range" min="0" max="100" class="custom-range progress-range-counter" value="45">
                                                                <div class="range-count"><span class="range-count-number" data-rangecountnumber="45">45</span> <span class="range-count-unit">%</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                        <form id="about" class="section about">
                            <div class="info">
                                <h5 class="">Project Description</h5>
                                <div class="row">
                                    <div class="col-md-11 mx-auto">
                                        <div class="form-group">
                                            <label for="aboutBio">Description</label>
                                            <textarea class="form-control" id="aboutBio" placeholder="Tell something interesting about yourself" rows="10">
                                                {{ $comment }}
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                        <form id="contact" class="section contact">
                            <div class="info">
                                <h5 class="">Project Team</h5>
                                <div class="row">
                                    <div class="col-md-11 mx-auto">
                                        <div class="row">
                                            @foreach ($teams as $team)
                                            <a class="info-link" href="{{ route('admin.view-usertask', ['project_id'=>$project_id, 'team'=>$team->team_member ]) }}">
                                                <div class="infobox-3 col-sm-4">
                                                    <div class="info-icon">
                                                        <i class="far fa-user fa-3x text-white"></i>
                                                    </div>
                                                    <h5 class="info-heading">{{ $team->team_member }}</h5>
                                                    <p class="info-text">Lorem ipsum dolor sit amet, labore et dolore magna aliqua.</p>
                                                    <a class="info-link" href="{{ route('admin.view-usertask', ['project_id'=>$project_id ]) }}">View Task <i class="far fa-list-alt"> </i></a>
                                                </div>
                                            </a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                        <form id="contact" class="section contact">
                            <div class="info">
                                <h5 class="">Recent Tasks</h5>
                                <div class="row">
                                    <div class="col-md-11 mx-auto">
                                        <div class="row">
                                            <div class="infobox-3 col-sm-4">
                                                <div class="info-icon">
                                                    <i class="far fa-list-alt fa-3x text-white"></i>
                                                </div>
                                                <h5 class="info-heading">Layout Package</h5>
                                                <p class="info-text">Lorem ipsum dolor sit amet, labore et dolore magna aliqua.</p>
                                                <a class="info-link" href="">View Task <i class="far fa-list-alt"> </i></a>
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

        <div class="account-settings-footer">
            
            <div class="as-footer-container">

                <button id="multiple-reset" class="btn btn-primary">Reset All</button>
                <div class="blockui-growl-message">
                    <i class="flaticon-double-check"></i>&nbsp; Settings Saved Successfully
                </div>
                <button id="multiple-messages" class="btn btn-dark">Save Changes</button>

            </div>

        </div>
    </div>

</div>