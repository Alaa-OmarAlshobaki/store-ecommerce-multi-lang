@extends('admin.layout')
@section('content')
<!--  BEGIN CONTENT PART  -->



<div id="content" class="main-content">
    <div class="layout-px-spacing">
<div class="row layout-spacing">
    <div class="col-lg-12">
        <div class="statbox widget box box-shadow">
       
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>@lang('admin/category.mange_cat')</h4>
                        <div class="text-center">     
                            @include('admin.include.alert.error_alert')
                            @include('admin.include.alert.success_alert')
                        </div>
                    </div>    
                </div>
            </div>
            <div class="widget-content widget-content-area">
            <a href="{{route('add-control-user')}}" class="bs-tooltip float-right mr-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add Category">
                    <i class="fal fa-folder-plus fa-4x"></i>
                    </a>
                <div class="table-responsive mb-4">
                    <table id="individual-col-search" class="table table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>names</th>
                                <th>email</th>
                                <th>role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @isset($admins)
                            @foreach ($admins as $indexKey => $item)
                           
                            <tr>
                            <td class="text-center">{{ $indexKey+1}}</td>
                           <td>{{ $item->name }}</td>
                      
                             
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->role->name ? $item->role->name : 'no roles for this user' }}</td>
                                <td class="text-center">
                                    <a href="{{route('delete-control-user',$item->id)}}" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                        <i class="fal fa-trash-alt fa-2x mr-2"></i>
                                    </a>
                                    <a href="{{route('edit-control-user',$item->id)}}" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                        <i class="fal fa-edit fa-2x"></i>
                                    </a>
                                    
                                </td>
                            </tr>
                            @endforeach 
                            @endisset
                       
                        </tbody>
                        <tfoot>
                            <tr>
                                <th class="text-center">#</th>
                                <th>name</th>
                                <th>email</th>
                                <th>role</th>
                                <th class="invisible"></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!--  END CONTENT PART  -->
@endsection