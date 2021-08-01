@extends('layouts.app')
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
         {{-- Page header --}}
         <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">Products</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Products</li>
                    </ul>
                </div>
                <div class="col-auto float-right ml-auto">
                    <a href="{{ route('products.index') }}" class="btn btn-dark btn-sm"><i class="fa fa-chevron-left"></i> Back</a>

                </div>
            </div>
        </div>
        {{-- page header --}}
        <div class="page-body">
             <div class="card">
                 <div class="card-header">
                     <h2 class="card-title">Create Product</h2>
                 </div>
                 <div class="card-body">
                     @if (session('message'))
                         <div class="alert alert-success">
                             <a href="#" data-dismiss="alert" class="close">&times;</a>
                             <p>{{ session('message') }}</p>
                         </div>
                     @endif
                     <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                         <div class="row">
                             <div class="col-md-6">
                                 <div class="form-group">
                                     <label for="">Product Name</label>
                                     <input type="text" name="product_name" class="form-control" required>
                                 </div>
                             </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Collection</label>
                                     <select name="collection_id" class="form-control" id="" required>
                                         <option value="">Select</option>
                                         @foreach ($collections as $item)
                                             <option value="{{ $item->id }}">{{ $item->collection_name }}</option>
                                         @endforeach
                                     </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Earlier Price</label>
                                    <input type="number" class="form-control" name="former_price" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Current Price</label>
                                    <input type="number" class="form-control" name="new_price" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Product Photo</label>
                                    <input type="file" class="form-control" name="photo" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button class="btn btn-primary pull-right">Submit</button>
                                </div>
                            </div>
                         </div>
                     </form>
                 </div>
             </div>
        </div>
    </div>
</div>
@endsection
