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
                    <h4 class="card-title float-left mt-2">All Products</h4>
                    <a href="{{ route('booking.add') }}" class="btn btn-primary float-right veiwbutton ">Add Product</a>
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
                                    <th>Product ID</th>
                                    <th>Name</th>
                                    <th>Phone Number</th>
                                    <th>Car Model</th>
                                    <th>Car Manufacturing Year</th>
                                    <th>Request Part</th>
                                    <th>Text Area</th>
                                    <th>Status</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $product)
                                <tr>
                                    <td>{{$product->p_id}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->p_number}}</td>
                                    <td>{{$product->car_model}}</td>
                                    <td>{{$product->car_year}}</td>
                                    <td>{{$product->req_part}}</td>
                                    <td>{{$product->textarea}}</td>
                                    <td>
                                        <div class="actions">
                                            <a href="#" class="btn btn-sm bg-success-light mr-2">Active</a>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v ellipse_color"></i>
                                            </a>
                                            <form method="post" action="">
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="">
                                                        <i class="fas fa-pencil-alt m-r-5"></i> Edit </a>
                                                    @csrf
                                                    <button class="dropdown-item" data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Delete </button>
                                                </div>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
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