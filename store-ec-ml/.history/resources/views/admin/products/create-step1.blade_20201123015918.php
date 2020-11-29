@extends('admin.layout')
@section('content')
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="row">
            <div id="custom_styles" class="col-lg-12 layout-spacing col-md-12">
                <div class="breadcrumb-five">
                    <ul class="breadcrumb">
                        <li class="mb-2"><a href="javscript:void(0);">Home</a>
                        </li>
                        <li class="active mb-2"><a href="javscript:void(0);">Components</a></li>
                        <li class="mb-2"><a href="javscript:void(0);">UI Kit</a></li>
                    </ul>
                </div>
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>@lang('admin/category.edit_category')</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-10">
                                    <form action="{{ route('products.create.step.one.post') }}" method="POST">
                                        @csrf
                          
                                        <div class="card">
                                            <div class="card-header">Step 1: Basic Info</div>
                          
                                            <div class="card-body">
                          
                                                    @if ($errors->any())
                                                        <div class="alert alert-danger">
                                                            <ul>
                                                                @foreach ($errors->all() as $error)
                                                                    <li>{{ $error }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    @endif
                          
                                                    <div class="form-group">
                                                        <label for="title">Product Name:</label>
                                                        <input type="text" value="{{ $product->name ?? '' }}" class="form-control" id="taskTitle"  name="name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="description">Product Amount:</label>
                                                        <input type="text"  value="{{{ $product->amount ?? '' }}}" class="form-control" id="productAmount" name="amount"/>
                                                    </div>
                           
                                                    <div class="form-group">
                                                        <label for="description">Product Description:</label>
                                                        <textarea type="text"  class="form-control" id="taskDescription" name="description">{{{ $product->description ?? '' }}}</textarea>
                                                    </div>
                                                  
                                            </div>
                          
                                            <div class="card-footer text-right">
                                                <button type="submit" class="btn btn-primary">Next</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                     
    </div>
</div>
</div>
</div>
</div>
</div>
</div>

<!--  END CONTENT AREA  -->
@endsection