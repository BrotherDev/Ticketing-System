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

    <!-- Body Section -->
    <div class="main">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach(['open' => 'NEW TICKET', 'in_progress' => 'WORKING ON IT', 'solved' => 'SOLVED', 'closed' => 'CLOSED'] as $status => $title)
                    <div class="bg-white p-4 rounded shadow">
                        <h2 class="font-bold mb-2">{{ $title }}</h2>
                        @php
                            $filteredTickets = $tickets->where('status', $status);
                            $ticketCount = $filteredTickets->count(); // Define the ticket count here
                        @endphp
                        <p class="text-gray-500">{{ $ticketCount }}</p> <!-- Show the total count of tickets -->
                        
                        @foreach($filteredTickets->take(5) as $ticket)
                            <div class="border-t mt-2 pt-2">
                                <a href="#" class="text-blue-500 font-bold">{{ $ticket->subject }}</a>
                                <p class="text-gray-500">Open for 20 days</p>
                                <p class="text-gray-500">Ticket owner: {{ $ticket->user->name }}</p>
                                <p class="text-gray-500">Supporter: {{ $ticket->assignedAgent->name ?? 'Not Assigned' }}</p>
                                <span class="text-{{ ['critical' => 'red', 'high' => 'orange', 'medium' => 'yellow', 'low' => 'blue', 'default' => 'green'][$ticket->priority] ?? 'green' }}-500">
                                    {{ $ticket->priority }} <a href="{{ route('ticket.show', $ticket->id) }}" class="btn btn-info btn-sm">View</a>
                                </span>
                            </div>
                        @endforeach

                        @if($ticketCount > 5)
                            <a href="{{ route('ticketViewByStatus', ['status' => $status]) }}" class="text-blue-500 mt-2 inline-block">View All</a>
                        @endif
                    </div>
                @endforeach
        </div>
    </div>
</div>
<style>
    .notification {
        background: linear-gradient(87deg, #172b4d 0, #1a174d 80%) !important;
        color: white !important;
        padding: 10px !important;
        margin: 5px 0;
        border-radius: 5px;
        font-size: 14px;
    }
</style>
<div id="notification-container" class="fixed top-5 right-5 space-y-2"> </div>
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
        <script>
            function previewImage(event) {
                const input = event.target;
                const previewContainer = document.getElementById('imagePreviewContainer');
                const previewImage = document.getElementById('imagePreview');

                if (input.files && input.files[0]) {
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        previewImage.src = e.target.result;
                        previewContainer.classList.remove('hidden'); // Show the image preview
                    };
                    reader.readAsDataURL(input.files[0]); // Read file as a data URL
                } else {
                    previewContainer.classList.add('hidden'); // Hide if no file is selected
                }
            }
        </script>
    @endsection

@endsection

