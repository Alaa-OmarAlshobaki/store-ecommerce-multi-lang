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
                                    <form class="needs-validation" id="saveGen" novalidate action="{{route('products.create.step.one.post')}}"
                                    method="post">
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-md-5 mb-6">
                                            <label for="validationCustom01">@lang('admin/category.name')</label>
                                            <input type="text" class="form-control" id="validationCustom01"
                                                placeholder="" value="{{old('name')}}" name="name" required>
                                            @error('name')
                                            <p class="text-danger"> {{$message}}</p>
                                            @enderror
                                            <div class="valid-feedback">

                                            </div>
                                        </div>
                                        <div class="col-md-5 mb-6">
                                            <label for="validationCustom01">@lang('admin/category.link')</label>
                                            <input type="text" class="form-control" id="validationCustom01"
                                                placeholder="" value="{{old('slug')}}" name="slug" required>
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
                                            <div class="card card-custom">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        TinyMCE with Hidden Menubar
                                                    </h3>
                                                </div>
                                                <div class="card-body">
                                                    <div class="tinymce">
                                                        <textarea id="kt-tinymce-4" name="kt-tinymce-4" class="tox-target">
                                                            <h1>Quick and Simple TinyMCE 5 Integration</h1>
                                                            <p>Here goes the&nbsp;<a href="#">Minitial content of the editor</a>. Lorem Ipsum is simply dummy text of the&nbsp;<em>printing and typesetting</em>&nbsp;industry.</p>
                                                            <blockquote>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</blockquote>
                                                            <h3 style="text-align: right;">Flexible &amp; Powerful</h3>
                                                            <p style="text-align: right;"><strong>Lorem Ipsum has been the industry's</strong>&nbsp;standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
                                                            <ul>
                                                                <li>List item 1</li>
                                                                <li>List item 2</li>
                                                                <li>List item 3</li>
                                                                <li>List item 4</li>
                                                            </ul>
                                                        </textarea>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                           
                                            @error('description')
                                            <p class="text-danger"> {{$message}}</p>
                                            @enderror
                                            <div class="valid-feedback">

                                            </div>
                                        </div>
                                        <div class="col-md-5 mb-6">
                                            <label for="validationCustom01">short_description</label>
                                            <input type="text" class="form-control" id="validationCustom01"
                                                placeholder="" value="{{old('short_description')}}"
                                                name="short_description" required>
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
                                            <select class="form-control tagging" name="categories[]"
                                                multiple="multiple">
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
                                                <input type="checkbox" class="custom-control-input" name="is_active"
                                                    id="invalidCheck">
                                                <label class="custom-control-label"
                                                    for="invalidCheck">@lang('admin/category.status')</label>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="btn btn-primary mt-3" type="submit">Next</button>
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
<script>
    </sc