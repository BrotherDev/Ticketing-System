@extends('layouts.app')

@section('content')
<div class="container mt-3 mb-5 pr-5 pl-5">
    <div class="flex justify-between items-center mb-4">
        <button class="bg-green-500 text-white px-4 py-2 rounded flex items-center">
            <i class="fas fa-plus mr-2"></i>
                Ticket System
        </button>
        <div class="relative">
            <input class="border border-gray-300 rounded px-4 py-2" placeholder="Search Knowledge Base" type="text"/>
            <i class="fas fa-search absolute right-3 top-3 text-gray-500"></i>
        </div>
    </div>
    <div class="flex items-center justify-center">
        <div class="bg-white p-4 rounded shadow mb-4 text-center">
            <h1 class="text-4xl md:text-5xl text-gray-900" style="font-family: 'Pacifico', cursive;">
                Your support team deserves an upgrade
            </h1>
            <p class="mt-6 text-lg text-gray-700">
                <strong>Setera Group Helpdesk</strong> - the ticketing platform that supports your team, so they can support your customers. Say goodbye to complicated and embrace a new era of seamless, efficient, and customer-centric support with SGH.
            </p>
            <div class="mt-8 space-x-4">
                <a href="#" class="bg-purple-700 text-white px-6 py-3 rounded hover:bg-purple-800">How to use</a>
                <a href="#" class="bg-gray-200 text-gray-700 px-6 py-3 rounded hover:bg-gray-300">Why Use</a>
            </div>
            <p class="mt-4 text-sm text-gray-500">Free, forever, with unlimited users. <a href="#" class="text-blue-500 hover:underline">See why</a></p>
        </div>
    </div>
    <div class="bg-white p-4 rounded shadow">
        <h2 class="text-lg font-bold mb-2">Knowledge Base</h2>
        <div class="grid grid-cols-3 gap-4">
            <div>
                <h3 class="font-bold mb-2">General</h3>
                <ul class="space-y-2">
                    <li class="flex items-center">
                        <i class="fas fa-file-alt text-green-500 mr-2"></i>
                        Getting Started
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-file-alt text-green-500 mr-2"></i>
                        Your Account
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-file-alt text-green-500 mr-2"></i>
                        Setup Instructions for the Desk365 Support Bot
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="font-bold mb-2">FAQ</h3>
                <ul class="space-y-2">
                    <li class="flex items-center">
                    <i class="fas fa-file-alt text-green-500 mr-2"></i>
                    Account FAQs
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-file-alt text-green-500 mr-2"></i>
                        Billing FAQs
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="font-bold mb-2">Billing</h3>
                <ul class="space-y-2">
                    <li class="flex items-center">
                        <i class="fas fa-file-alt text-green-500 mr-2"></i>
                        Billing Cycles
                    </li>
                    <li class="flex items-center">
                        <i class="fas fa-file-alt text-green-500 mr-2"></i>
                        Refunds and Cancellation
                    </li>
                </ul>
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

