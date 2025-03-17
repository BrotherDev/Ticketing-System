@extends('layouts.app')

@section('content')
<div class="container mt-3">

    <div class="row">
        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-info"><i class="far fa-bookmark"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Tickets</span>
              <span class="info-box-number">{{ $tickets->count() }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Solved</span>
              <span class="info-box-number">{{ $tickets->where('status', 'closed')->count() }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Pending</span>
              <span class="info-box-number">{{ $tickets->where('status', 'in_progress')->count() }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-danger"><i class="far fa-star"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Watting</span>
              <span class="info-box-number">{{ $tickets->where('status', 'open')->count() }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>

     <!-- Body Section -->
    <div class="main mb-5">
        <div class="container mx-auto">
            <div class="flex justify-between items-center mb-4">
                <button type="button" data-toggle="modal" data-target="#createTicketModal" class="flex items-center px-4 py-2 bg-blue-100 text-blue-600 rounded-md">
                    <i class="fas fa-filter mr-2">
                    </i>
                    Create Ticket
                </button>

                <!-- Modal -->
                <div class="modal fade" id="createTicketModal" tabindex="-1" role="dialog" aria-labelledby="createTicketModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="createTicketModalLabel">Create Ticket</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body bg-white p-6 rounded-lg shadow-lg w-full max-w-lg">
                                <form action="{{route('user.create.ticket')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="subject">Subject</label>
                                        <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="subject" name="subject" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="problem_details">Problem Details</label>
                                        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="problem_details" name="problem_details" rows="3" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="department" class="block text-gray-700 font-bold mb-2">Choose your Section</label>
                                        <select id="department" name="department" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                            <option value="">Select Section</option>
                                            <option value="Accounts">Accounts</option>
                                            <option value="Admin">Admin</option>
                                            <option value="Admin & Maintenance">Admin & Maintenance</option>
                                            <option value="Commercial">Commercial</option>
                                            <option value="Compliance">Compliance</option>
                                            <option value="Cutting">Cutting</option>
                                            <option value="Cutting Quality">Cutting Quality</option>
                                            <option value="External">External</option>
                                            <option value="Finishing">Finishing</option>
                                            <option value="Finishing Quality">Finishing Quality</option>
                                            <option value="Fire & Safety">Fire & Safety</option>
                                            <option value="House Keeping">House Keeping</option>
                                            <option value="HR & Admin">HR & Admin</option>
                                            <option value="Industrial Engineering">Industrial Engineering</option>
                                            <option value="Laboratory">Laboratory</option>
                                            <option value="Maintenance">Maintenance</option>
                                            <option value="Marketing & Merchandising">Marketing & Merchandising</option>
                                            <option value="Merchandising">Merchandising</option>
                                            <option value="MIS & IT">MIS & IT</option>
                                            <option value="Planning">Planning</option>
                                            <option value="Production">Production</option>
                                            <option value="Quality">Quality</option>
                                            <option value="Sample">Sample</option>
                                            <option value="Security">Security</option>
                                            <option value="Sewing">Sewing</option>
                                            <option value="Sewing Quality">Accounts</option>
                                            <option value="Store">Store</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Problem Screenshot</label>
                                        <div class="flex items-center justify-center w-full">
                                            <label class="flex flex-col items-center px-4 py-6 bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue-600 hover:text-white">
                                                <i class="fas fa-cloud-upload-alt fa-3x"></i>
                                                <span class="mt-2 text-base leading-normal">Choose a file</span>
                                                <input type="file" id="image-upload" class="hidden" name="image" accept="image/*" onchange="previewImage(event)">
                                            </label>
                                        </div>
                                    </div>
                                    <!-- Image preview container -->
                                    <div id="imagePreviewContainer" class="mt-2 hidden">
                                        <img id="imagePreview" class="w-32 h-32 object-cover rounded border" alt="Image Preview">
                                    </div>                                
                                    <div class="flex justify-end">
                                        <button class="bg-blue-600 text-white font-bold py-2 px-4 rounded mr-2 hover:bg-blue-700 focus:outline-none focus:shadow-outline">Create Ticket</button>
                                        <button class="bg-gray-200 text-gray-700 font-bold py-2 px-4 rounded hover:bg-gray-300 focus:outline-none focus:shadow-outline" class="close" data-dismiss="modal" aria-label="Close">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <h1 class="text-2xl font-semibold">
                    Tickets 
                </h1>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <table class="min-w-full bg-white">
                    <thead>
                        <tr class="w-full bg-gray-50 text-left text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6">
                                Requester
                            </th>
                            <th class="py-3 px-6">
                                Subject
                            </th>
                            <th class="py-3 px-6">
                                Agent
                            </th>
                            <th class="py-3 px-6">
                                Status
                            </th>
                            <th class="py-3 px-6">
                                Last Message
                            </th>
                            <th class="py-3 px-6">
                            Supporter
                            </th>
                            <th class="py-3 px-6">
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        @foreach($tickets as $ticket)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 flex items-center">
                                    <img alt="HelpDesk logo" class="w-8 h-8 rounded-full mr-2" height="30" src="https://storage.googleapis.com/a1aa/image/5tIPst9bXnpoqqaFTc53JDBH1yHhesDaZTdGv4-vC6A.jpg" width="30"/>
                                    <span>
                                    {{$ticket->user->name}}
                                    </span>
                                </td>
                                <td class="py-3 px-6">
                                    🔝{{$ticket->subject}}
                                </td>
                                <td class="py-3 px-6"> 
                                                                  
                                    <form action="{{ route('asign.agent', $ticket->id) }}" method="POST">
                                        @csrf                                        
                                        <select id="agent-select" name="agent_id"
                                            class="bg-white border border-gray-300 rounded-md py-2 px-4 w-full focus:ring focus:ring-blue-300 transition"
                                            onchange="this.form.submit()">
                                            
                                            @if(!$ticket->assigned_agent_id)
                                                <option value="">Select Agent</option>
                                            @endif
                                            
                                            @foreach($agents as $agent)
                                                @if($agent->role == 'agent')
                                                    <option value="{{ $agent->id }}" {{ (isset($ticket) && $ticket->assigned_agent_id == $agent->id) ? 'selected' : '' }} >                                                        
                                                        {{ $agent->name }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </form>
                                </td>
                                <td class="py-3 px-6">
                                    <span class="bg-blue-100 text-blue-600 py-1 px-3 rounded-full text-xs">
                                        {{ $ticket->status }}
                                    </span>
                                </td>
                                <td class="py-3 px-3">
                                    {{ $ticket->created_at ? \Carbon\Carbon::parse($ticket->created_at)->diffForHumans() : 'Time not available' }}
                                </td>
                                <td class="py-3 px-3">
                                    {{ $ticket->assignedAgent ? $ticket->assignedAgent->name : 'Not Assigned' }}
                                </td>
                                <td class="py-3 px-6 text-right">
                                    <a href="{{ route('ticket.show', $ticket->id) }}" class="btn btn-info btn-sm">View</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="p-4 border-t flex justify-between items-center">
                    <div class="text-gray-600">
                        
                    </div>
                    <div class="flex items-center space-x-2">
                        <p class="small text-muted">{{ $tickets->onEachSide(5)->links() }} <p>
                    </div>
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

