@extends('adminlte::page')

@section('title', 'Incident Notification')

@section('content_header')
    <div class="container-fluid">
        <div class="row align-items-center mb-3">
            <!-- Judul kiri -->
            <div class="col">
                <h1 class="m-0">Incident Notification</h1>
            </div>
            <!-- Logo kanan -->
            {{-- <div class="col-auto">
                <img src="/Image/logo/LOGO-K3-TRANSPARANT.png" alt="Logo" style="height: 100px; object-fit: contain;">
            </div> --}}
        </div>

    </div>
@stop

@section('content')
    <style>
        .text-truncate-custom {
            max-width: 300px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-success">
                        <p class="p-0 m-0"><b>incident Notification</b></p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-sm btn-success">Add</button>
                                <button class="btn btn-sm btn-secondary">Search...</button>
                                <button class="btn btn-sm btn-secondary">Export To Excel</button>
                                <button class="btn btn-sm btn-secondary">Request</button>
                                <button class="btn btn-sm btn-info">Approval</button>
                                <button class="btn btn-sm btn-info">Approval History</button>
                                <button class="btn btn-sm btn-warning">Departement Monitoring</button>
                                <button class="btn btn-sm btn-warning">Monitoring</button>
                            </div>
                        </div>
                        <hr>
                        <div class="table-responsive">
                            <table class="table table-sm table-hover align-middle text-nowrap">
                                <thead>
                                    <tr>
                                        <th scope="col">Action</th>
                                        <th scope="col">ID</th>
                                        <th scope="col">No</th>
                                        <th scope="col">Report Date</th>
                                        <th scope="col">Event Title</th>
                                        <th scope="col">Date/Time</th>
                                        <th scope="col">Event Type</th>
                                        <th scope="col">Location</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Reporter</th>
                                        <th scope="col">Remarks</th>
                                        <th scope="col">Next Action</th>
                                        <th scope="col">Next User</th>
                                        <th scope="col">Last Update Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $incident_notification as $data)
                                        <tr>
                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm">View</a>
                                            </td>
                                            <td>{{ $data->id }}</td>
                                            <td>1</td>
                                            <td>2025-01-25</td>
                                            <td>
                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum, commodi?
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, quaerat.
                                            </td>
                                            <td>2025-01-25 13:00</td>
                                            <td>Lorem, ipsum.</td>
                                            <td>Lorem ipsum dolor sit amet.</td>
                                            <td><span class="badge bg-warning text-dark">Waiting...</span></td>
                                            <td>Lorem, ipsum.</td>
                                            <td></td>
                                            <td>Lorem ipsum dolor sit amet consectetur.</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                                            <td>2025-01-25</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="pt-5">
                            <nav aria-label="Page navigation">
                                <ul class="pagination pagination-sm">
                                    <li class="page-item disabled">
                                        <a class="page-link text-secondary" href="#" aria-label="Previous">
                                            &laquo;
                                        </a>
                                    </li>

                                    <li class="page-item active">
                                        <a class="page-link bg-secondary border-secondary" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link text-secondary" href="#">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link text-secondary" href="#">3</a>
                                    </li>

                                    <li class="page-item">
                                        <a class="page-link text-secondary" href="#" aria-label="Next">
                                            &raquo;
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
