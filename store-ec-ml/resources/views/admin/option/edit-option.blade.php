@extends('admin.layout')
@section('content')
     <!--  BEGIN CONTENT AREA  -->
     <div id="content" class="main-content">
        <div class="layout-px-spacing">
     <div class="row">
        <div id="custom_styles" class="col-lg-12 layout-spacing col-md-12">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>@lang('admin/category.edit_category')&nbsp;{{$data['option']->name}}</h4>
                        </div>                 
                    </div>
                </div>
                <div class="widget-content widget-content-area">                                
                <form class="needs-validation" novalidate action="{{route('update.option',$data['option']->id)}}"  enctype="multipart/form-data" method="post">
                    @csrf
                        <div class="form-row">
                        <input type="hidden" value="{{$data['option']->id}}" name="id">
                      
                            <div class="col-md-5 mb-6">
                                @error('id')
                                <p class="text-danger"> {{$message}}</p>
                               
                                @enderror
                                <label for="validationCustom01">@lang('admin/category.name')</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="" value="{{$data['option']->name}}" name="name" required>
                                @error('name')
                                <p class="text-danger"> {{$message}}</p>
                               
                                @enderror
                                <div class="valid-feedback">
                                 
                                </div>
                            </div>
                            <div class="col-md-5 mb-6">
                                <label for="validationCustom01">price</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="" value="{{$data['option']->price}}" name="price" required>
                                @error('price')
                                <p class="text-danger"> {{$message}}</p>
                               
                                @enderror
                                <div class="valid-feedback">
                                 
                                </div>
                            </div>
                        
                        </div>
                        <div class="form-row">
                     
                            <div class="col-md-5 mb-6">
                                <label for="validationCustom02">attribute</label>
                                <select class="form-control  basic" name="attribute_id" required>
                                    <option selected="selected">select attribute</option>
                                    @isset ($data['attribute'])
                                    @foreach($data['attribute'] as $item)
                                <option value="{{$item->id}}"  @if($item->id == $data['option']->attribute_id ) selected @endif>{{$item->name}}</option>
                                    @endforeach
                                    @endisset
                                </select>
                                @error('attribute_id')
                                <p class="text-danger"> {{$message}}</p>
                             
                                @enderror
                                <div class="valid-feedback">
                                </div>

                            </div>
                            <div class="col-md-5 mb-6">
                                <label for="validationCustom02">product</label>
                                <select class="form-control  basic" name="product_id" required>
                                    <option selected="selected">select product</option>
                                    @isset ($data['product'])
                                    @foreach($data['product'] as $item)
                                <option value="{{$item->id}}" @if($item->id == $data['option']->product_id ) selected @endif>{{$item->name}}</option>
                                    @endforeach
                                    @endisset
                                </select>
                                @error('product_id')
                                <p class="text-danger"> {{$message}}</p>
                             
                                @enderror
                                <div class="valid-feedback">
                                </div>
                            </div>
                        </div>
                         
                        <button class="btn btn-primary mt-3" type="submit">Submit form</button>
                    </form>

                  
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>

    <!--  END CONTENT AREA  -->
@endsection