<div class="layout-px-spacing">

    <div class="row layout-top-spacing">
        <div class="account-settings-container layout-top-spacing">
            <div class="row app-notes layout-top-spacing" id="cancel-row">
                <div class="col-lg-12">
                    <div class="app-hamburger-container">
                        <div class="hamburger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu chat-menu d-xl-none"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></div>
                    </div>

                    <div class="app-container">
                        
                        <div class="app-note-container">

                            <div class="app-note-overlay"></div>

                            <div class="tab-title">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-12 text-center">
                                        <a wire:click.prevent="AddNew"  class="btn btn-primary" href="javascript:void(0);">Add New</a>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-12 mt-5">
                                        <ul class="nav nav-pills d-block" id="pills-tab3" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link list-actions active" id="all-notes"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg> All Notes</a>
                                            </li>
                                        </ul>

                                        <hr/>

                                        <p class="group-section"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7" y2="7"></line></svg> Tags</p>

                                        <ul class="nav nav-pills d-block group-list" id="pills-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link list-actions g-dot-primary" id="note-personal">Approved</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link list-actions g-dot-warning" id="note-work">Under Review</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                            <div id="ct" class="note-container note-grid">
                                @foreach ($tms as $tm)
                                <div class="note-item all-notes 
                                    @if ($tm->approved_by !='')
                                        note-personal
                                    @else
                                    note-work
                                    @endif">
                                    <div class="note-inner-content">
                                        <div class="note-content">
                                            <p class="note-title" data-noteTitle="{{ $tm->project }}">{{ $tm->project }} Report</p>
                                            <p class="meta-time">{{ $tm->created_at->diffForHumans() }}</p>
                                            <div class="note-description-content">
                                                <p class="note-description" data-noteDescription="{{ $tm->comment }}">{{ $tm->comment }}</p>
                                                <p>Task: {{ $tm->task.' ('.$tm->code.')' }}</p>
                                                <p>Site: {{ $tm->location }}</p>
                                                <p>By: {{ $tm->fname.' '.$tm->lname }}</p>
                                            </div>
                                        </div>
                                        <div class="note-action">
                                            @if ($tm->approved_by !='')
                                                <a class="btn btn-success">Approved</a>
                                            @else
                                            <a href="#" onclick="confirm('Do you want to approve this activity?') ||event.stopImmediatePropagation()" wire:click.prevent="approveAct({{ $tm->id }})" class="far fa-check-circle  text-danger"> Pending</a>
                                            {{-- <a href="#" onclick="confirm('Disapprove this activity?') ||event.stopImmediatePropagation()" wire:click.prevent="disApprove({{ $tm->id }})"  class="far fa-trash-alt fa-2x text-danger"></a> --}}
                                            @endif 
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>

                        </div>
                        
                    </div>

                    <!-- Modal -->
                        <div wire:ignore.self class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="notesMailModalTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <form wire:submit.prevent="createTime"  enctype="multipart/form-data">
                                    @csrf
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="modal"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                        <div class="notes-box">
                                            <div class="notes-content">  
                                                    <h2> Activity Report</h2>  
                                                    <div class="row">
                                                        <div class="col-md-6 mb-4 mt-4">
                                                            <label for="degree3">Time In</label>
                                                            <div class="d-flex note-title">
                                                                <input type="time" class="form-control" wire:model="start" placeholder="Time In"/>
                                                            </div>
                                                            @error('start')<p style="color: crimson;">{{ $message }}</p> @enderror
                                                        </div>

                                                        <div class="col-md-6 mb-4 mt-4">
                                                            <label for="degree3">Time Out</label>
                                                            <div class="d-flex note-title">
                                                                <input type="time" class="form-control" wire:model="end" placeholder="Time In"/>
                                                            </div>
                                                            @error('end')<p style="color: crimson;">{{ $message }}</p> @enderror
                                                        </div>
                                      
                                                        <div class="col-md-12 mb-4">
                                                            <label for="degree3">Select Project</label>
                                                            <div class="d-flex note-title">
                                                                <select class="form-control"  wire:model.defer="project">
                                                                    <option value="">Select</option>
                                                                    @foreach ($projs as $proj)
                                                                    <option>{{ $proj->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            @error('project')<p style="color: crimson;">{{ $message }}</p> @enderror
                                                        </div>
                                                        <div class="col-md-6 mb-4">
                                                            <label for="degree3">Select Task</label>
                                                            <div class="d-flex note-title">
                                                                <select class="form-control"  wire:model.defer="task">
                                                                    <option value="">Select</option>
                                                                    @foreach ($tasks as $task)
                                                                    <option>{{ $task->task}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            @error('task')<p style="color: crimson;">{{ $message }}</p> @enderror
                                                        </div>

                                                        <div class="col-md-6 mb-4">
                                                            <label for="degree3"> Task Code</label>
                                                            <div class="d-flex note-title">
                                                                <select class="form-control"  wire:model.defer="code">
                                                                    <option value="">Select</option>
                                                                    @foreach ($tasks as $task)
                                                                    <option>{{ $task->code}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            @error('code')<p style="color: crimson;">{{ $message }}</p> @enderror
                                                        </div>

                                                        <div class="col-md-12 mb-4 mt-4">
                                                            <label for="degree3">Location</label> 
                                                            <div class="d-flex note-title">
                                                                <input type="text" class="form-control" placeholder="Location" wire:model.defer="location"/>
                                                            </div>
                                                            @error('location')<p style="color: crimson;">{{ $message }}</p> @enderror
                                                        </div>

                                                        <div class="col-md-12">
                                                            <label for="degree3">Work Activity Report</label>
                                                            <div class="d-flex ">
                                                                <textarea class="form-control"  rows="7" wire:model.defer="description"></textarea>
                                                            </div>
                                                            @error('description')<p style="color: crimson;">{{ $message }}</p> @enderror
                                                        </div>
                                                    </div>

                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn" data-dismiss="modal"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg> Discard</button>
                                        <button type="submit" class="btn btn-primary">Add</button>
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
