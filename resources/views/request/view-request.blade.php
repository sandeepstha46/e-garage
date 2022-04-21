@extends('layouts.app')
@section('body')
<div class="content container-fluid">
    <div class="page-header">
        @if (session('error'))
        <div id="mess-age">
            <p class="alert alert-danger">{{ session('errors') }}</p>
        </div>
        @endif

        @if (session('success'))
        <div id="mess-age">
            <p class="alert alert-success">{{ session('success') }}</p>
        </div>
        @endif

        <div class="row align-items-center">
            <div class="col">
                <div class="mt-5">
                    <h4 class="card-title float-left mt-2">All Requests</h4>
                    <a href="" class="btn btn-primary float-right veiwbutton ">Add Request</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body booking_card">
                    <div class="table-responsive">
                        <table class="datatable table table-stripped table table-hover table-center mb-0">
                            <thead>
                                <tr>
                                    <th>Request ID</th>
                                    <th>Your Name</th>
                                    <th>Product For</th>
                                    <th>Vehicle Model</th>
                                    <th>Vehicle Manufacturing Year</th>
                                    <th>Required Product</th>
                                    <th>Remark</th>
                                    <th>Status</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function closeMessage() {
        document.getElementById("mess-age").style.display = " none";
    }

    window.setTimeout(closeMessage, 3000);
</script>
@endsection