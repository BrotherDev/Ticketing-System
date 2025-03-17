@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <!-- Header Section -->

    <div class="row">
        <div class="col-md-12">
            <div class="tab-pane" id="timeline">
                <!-- The timeline -->
                <div class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <div class="time-label">
                    <span class="bg-danger">
                     Ticket ID: {{ $ticket->id }}
                    </span>
                  </div>
                  <!-- /.timeline-label -->
                  <div class="text-right">
                    <span class="mr-3">
                        <b>Department:</b> <span class="badge badge-success ">{{ $ticket->department }}</span>
                        <b>Priority:</b> <span class="badge badge-success ">{{ $ticket->priority }}</span>
                        <b>Status:</b> <span class="badge badge-success ">{{ $ticket->status }}</span>
                    <!-- Trigger the modal with a button -->
                    @if(auth()->user()->id == $ticket->assigned_agent_id || auth()->user()->role == 'moderator')
                    <a href="#" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#statusModal">Change</a>

                    <!-- Status Modal -->
                    <div class="modal fade" id="statusModal" tabindex="-1" role="dialog" aria-labelledby="statusModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="statusModalLabel">Change Ticket Status</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('ticket.status.update', $ticket->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select class="form-control" id="status" name="status" required>
                                                <option value="open" {{ $ticket->status == 'open' ? 'selected' : '' }}>Open</option>
                                                <option value="in_progress" {{ $ticket->status == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                                                <option value="solved" {{ $ticket->status == 'solved' ? 'selected' : '' }}>Solved</option>
                                                <option value="resolved" {{ $ticket->status == 'resolved' ? 'selected' : '' }}>Resolved</option>
                                                <option value="closed" {{ $ticket->status == 'closed' ? 'selected' : '' }}>Closed</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Update Status</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    </span>
                  </div>
                  <!-- timeline item -->
                  <div>
                    <i class="fas fa-user bg-primary"></i>

                    <div class="timeline-item">
                    <span class="time"><i class="far fa-clock"></i> {{ $ticket->created_at ? \Carbon\Carbon::parse($ticket->created_at)->diffForHumans() : 'Time not available' }}</span>

                      <h3 class="timeline-header"><a href="#">{{ $ticket->user->name }}</a> created this ticket || {{ $ticket->department }} || {{$ticket->priority}}</h3> 

                      <div class="timeline-body">
                        <span class="text-info">
                            <b>{{ $ticket->subject }}</b>
                        </span>
                        <span>
                            <p> {{ $ticket->problem_details }} </p>
                            <div class="mt-3">
                                <img src="{{ asset('storage/' . $ticket->image) }}" alt="Ticket Image" class="img-fluid" width: 300px; height: 300px;>    
                            </div>
                        </span>
                      </div>
                    </div>
                  </div>
                  @foreach($ticket->replies as $reply)
                    <div class="time-label">
                        <span class="bg-success">
                            {{ $reply->created_at ? \Carbon\Carbon::parse($reply->created_at)->format('d M. Y') : 'Date not available' }}
                        </span>
                    </div>
                    <div>
                        <i class="fas fa-reply bg-info"></i>

                        <div class="timeline-item">
                            <span class="time"><i class="far fa-clock"></i> {{ $reply->created_at ? \Carbon\Carbon::parse($reply->created_at)->diffForHumans() : 'Time not available' }}</span>

                            <h3 class="timeline-header"><a href="#">{{ $reply->user->name }}</a> replied</h3>

                            <div class="timeline-body">
                                <p>{{ $reply->message }}</p>
                                <img src="{{ asset('storage/' . $reply->reply_image) }}" alt="Ticket Image" class="img-fluid" width: 300px; height: 300px;>  
                            </div>
                        </div>
                    </div>
                  @endforeach
                </div>
                <div class="timeline-item text-right mb-5 mr-4">
                    <!-- Reply Modal -->
                    <div class="modal fade" id="replyModal" tabindex="-1" role="dialog" aria-labelledby="replyModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="replyModalLabel">Submit Reply</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('ticket.reply', $ticket->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <textarea class="form-control" id="reply" name="message" rows="3" required></textarea>
                                            <div class="mt-3">
                                                <input type="file" class="form-control-file" id="reply-attachment" name="reply_image">
                                            </div>
                                        </div>                                        
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if(auth()->user()->id == $ticket->assigned_agent_id || auth()->user()->role == 'moderator' || auth()->user()->id == $ticket->user_id)
                    <!-- Trigger the modal with a button -->
                    <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#replyModal">Reply</a>
                    @endif
                </div>
            </div>
        </div>
    </div>


</div>
@endsection

<!-- Main Footer -->
@section('footer')
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2021 <a href="#">RMG Project</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
        </div>
    </footer>

    @section('js')
        <!-- jsGrid -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js"></script>
        <script>
            $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
            });
        </script>
    @endsection

@endsection

