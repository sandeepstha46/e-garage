@extends('layouts.app')
@section('body')
<div class="content container-fluid">
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title mt-5">Add Product</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <form method="POST" action="{{ route('product.add') }}" enctype="multipart/form-data">
                @csrf
                <div class="row formtype">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Product Name</label>
                            <input class="form-control" type="text" name="name" placeholder="Product Name">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Product For</label>
                            <select class="form-control" id="sel2" name="pfor">
                                <option value="0">Select option</option>
                                <option value="bike">Bike Service</option>
                                <option value="car">Car Serivce</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Model</label>
                            <input type="text" name="car_model" class="form-control" id="usr1">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Manufacturing Year</label>
                            <input type="number" name="car_year" class="form-control" id="usr1">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary buttonedit1">Create Product</button>
            </form>
        </div>
    </div>
</div>

@endsection