@extends('layouts.app')
@section('title', 'SPK List')
@section('content')

    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Home /</span> @yield('title') </h4>

        <!-- Basic Bootstrap Table -->
        @if (session('error'))
            <div class="alert alert-danger" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                {{ session('error') }}
            </div>
        @elseif (session('success'))
            <div class="alert alert-success" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                {{ session('success') }}
            </div>
        @endif
        <!-- DataTable with Buttons -->
        <div class="card">
            <div class="card-datatable table-responsive">
                <table class="datatables-basic table border-top">
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th>id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Date</th>
                            <th>Salary</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
        <!--/ Basic Bootstrap Table -->

    </div>
    <!-- / Content -->
@endsection
