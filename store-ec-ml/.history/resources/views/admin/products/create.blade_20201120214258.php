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

                        
                        {{-- <div id="toggleAccordion">
                          <div class="card">
                            <div class="card-header" id="headingOne1">
                              <section class="mb-0 mt-0">
                                <div role="menu" class="collapsed" data-toggle="collapse" data-target="#defaultAccordionOne" aria-expanded="true" aria-controls="defaultAccordionOne">
                                    Fill in the basic data of the product <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                </div>
                              </section>
                            </div>

                            <div id="defaultAccordionOne" class="collapse" aria-labelledby="headingOne1" data-parent="#toggleAccordion">
                              <div class="card-body">
                                <form class="needs-validation" novalidate action="{{route('store.product')}}" method="post">
                                    @csrf
                                        <div class="form-row">
                                            <div class="col-md-5 mb-6">
                                                <label for="validationCustom01">@lang('admin/category.name')</label>
                                                <input type="text" class="form-control" id="validationCustom01" placeholder="" value="{{old('name')}}" name="name" required>
                                                @error('name')
                                                <p class="text-danger"> {{$message}}</p>
                                                @enderror
                                                    <div class="valid-feedback">
                                                    
                                                    </div>
                                            </div>
                                            <div class="col-md-5 mb-6">
                                                <label for="validationCustom01">@lang('admin/category.link')</label>
                                                <input type="text" class="form-control" id="validationCustom01" placeholder="" value="{{old('slug')}}" name="slug" required>
                                                @error('slug')
                                                <p class="text-danger"> {{$message}}</p>
                                                @enderror
                                                    <div class="valid-feedback">
                                                    
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-5 mb-6">
                                                <label for="validationCustom01">description</label>
                                                <div id="content-container">
                                                    <div id="toolbar-container">
                                                        <button class="ql-bold" data-toggle="tooltip" data-placement="bottom" title="Bold"></button>
                                                        <button class="ql-underline" data-toggle="tooltip" data-placement="bottom" title="Underline"></button>
                                                        <button class="ql-italic" data-toggle="tooltip" data-placement="bottom" title="Add italic text <cmd+i>"></button>
                                                        <button class="ql-image" data-toggle="tooltip" data-placement="bottom" title="Upload image"></button>
                                                        <button class="ql-code-block" data-toggle="tooltip" data-placement="bottom" title="Show code"></button>
                                                    </div>
                                                    <div id="quill-tooltip">
                                                        <h1>This is a heading text...</h1>
                                                        <br/>
                                                         <p>Aliquam diam felis, vehicula ut ipsum eu, consectetur tincidunt ipsum. Vestibulum sed metus ac nisi tincidunt mollis sed non urna. Vivamus lacinia ullamcorper interdum. Sed sed erat vel leo venenatis pretium. Sed aliquet sem nunc, ut iaculis dolor consectetur et. Vivamus ligula sapien, maximus nec pellentesque ut, imperdiet at libero. Vivamus semper nulla lectus, id dapibus nulla convallis id. Quisque elementum lectus ac dui gravida, ut molestie nunc convallis. Pellentesque et odio non dolor convallis commodo sit amet a ante. </p>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" id="validationCustom01" placeholder="" value="{{old('description')}}" name="description" required>
                                                @error('description')
                                                <p class="text-danger"> {{$message}}</p>
                                                @enderror
                                                    <div class="valid-feedback">
                                                    
                                                    </div>
                                            </div>
                                            <div class="col-md-5 mb-6">
                                                <label for="validationCustom01">short_description</label>
                                                <input type="text" class="form-control" id="validationCustom01" placeholder="" value="{{old('short_description')}}" name="short_description" required>
                                                @error('short_description')
                                                <p class="text-danger"> {{$message}}</p>
                                                @enderror
                                                    <div class="valid-feedback">
                                                    
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-4 mb-6">
                                                <label for="validationCustom01">category</label>
                                                <select class="form-control tagging" name="categories[]" multiple="multiple">
                                                    @if ($data['categories'] && $data['categories']->count()>0)
                                                     @foreach ($data['categories'] as $category)
                                                     <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                        
                                                    @endforeach
                                                        
                                                    @endif
                                                   
                                                </select>
                                                @error('categories[0]')
                                                <p class="text-danger"> {{$message}}</p>
                                                @enderror
                                                    <div class="valid-feedback">
                                                    
                                                    </div>
                                            </div>
                                         
                                            <div class="col-md-4 mb-6">
                                                <label for="validationCustom01">tags</label>
                                                <select class="form-control tagging" name="tags[]" multiple="multiple">
                                                    @if ($data['tags'] && $data['tags']->count()>0)
                                                    @foreach ($data['tags'] as $tag)
                                                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                                       
                                                   @endforeach
                                                       
                                                   @endif
                                                </select>
                                                @error('tags.0')
                                                <p class="text-danger"> {{$message}}</p>
                                                @enderror
                                                    <div class="valid-feedback">
                                                    
                                                    </div>
                                            </div>
                                            <div class="col-md-4 mb-6">
                                                <label for="validationCustom01">brands</label>
                                                <select class="form-control form-small" name="brand">
                                                    @if ($data['brands'] && $data['brands']->count()>0)
                                                    @foreach ($data['brands'] as $brand)
                                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                                       
                                                   @endforeach
                                                       
                                                   @endif
                                                  </select>
                                                @error('brand')
                                                <p class="text-danger"> {{$message}}</p>
                                                @enderror
                                                    <div class="valid-feedback">
                                                    
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-4">
                                            <div class="form-check pl-0">
                                                <div class="custom-control custom-checkbox checkbox-success">
                                                    <input type="checkbox" class="custom-control-input" name="is_active" id="invalidCheck" >
                                                    <label class="custom-control-label" for="invalidCheck">@lang('admin/category.status')</label>
                                                </div>
                                            </div>
                                        </div>
                                         
                                        <button class="btn btn-primary mt-3" type="submit">Submit form</button>
                                    </form>
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingTwo1">
                              <section class="mb-0 mt-0">
                                <div role="menu" class="" data-toggle="collapse" data-target="#defaultAccordionTwo" aria-expanded="false" aria-controls="defaultAccordionTwo">
                                  Collapsible Group Item #2  <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                </div>
                              </section>
                            </div>
                            <div id="defaultAccordionTwo" class="collapse show" aria-labelledby="headingTwo1" data-parent="#toggleAccordion">
                                <div class="card-body">
                               
                               
                               
                                  

                                </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingThree1">
                              <section class="mb-0 mt-0">
                                <div role="menu" class="collapsed" data-toggle="collapse" data-target="#defaultAccordionThree" aria-expanded="false" aria-controls="defaultAccordionThree">
                                  Collapsible Group Item #3 <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></div>
                                </div>
                              </section>
                            </div>
                            <div id="defaultAccordionThree" class="collapse" aria-labelledby="headingThree1" data-parent="#toggleAccordion">
                              <div class="card-body">
                                <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>

                                <button class="btn btn-primary mt-4">Accept</button>
                              </div>
                            </div>
                          </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

    <!--  END CONTENT AREA  -->
@endsection 