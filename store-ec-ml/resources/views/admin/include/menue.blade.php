<div class="topbar-nav header navbar" role="banner">
    <nav id="topbar">
        <ul class="navbar-nav theme-brand flex-row  text-center">
            <li class="nav-item theme-logo">
                <a href="index.html">
                    <img src="assets/img/90x90.jpg" class="navbar-logo" alt="logo">
                </a>
            </li>
            <li class="nav-item theme-text">
                <a href="index.html" class="nav-link"> CORK </a>
            </li>
        </ul>

        <ul class="list-unstyled menu-categories" id="topAccordion">

            <li class="menu single-menu">
                <a href="#app" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i class="fal fa-sort-shapes-up"></i>
                        <span>attribute</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </a>
                <ul class="collapse submenu list-unstyled" id="app" data-parent="#topAccordion">
                    <li>
                        <a href="{{ route('main.attribute') }}"> View all </a>
                    </li>
                
                </ul>
            </li>
            <li class="menu single-menu">
                <a href="#app" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i class="fal fa-hand-paper"></i>
                        <span>Roles</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </a>
                <ul class="collapse submenu list-unstyled" id="app" data-parent="#topAccordion">
                    <li>
                        <a  href="{{ route('view-roles') }}"> View roles </a>
                    </li>
                    <li>
                        <a  href="{{ route('view-control-user') }}"> Control Panel users </a>
                    </li>
                
                </ul>
            </li>
            
            <li class="menu single-menu">
                <a href="#app" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i class="fal fa-sliders-h"></i>
                        <span>option</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </a>
                <ul class="collapse submenu list-unstyled" id="app" data-parent="#topAccordion">
                    <li>
                        <a href="{{ route('main.option') }}"> View all </a>
                    </li>
                
                </ul>
            </li>
            
         


         

            <li class="menu single-menu">
                <a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i class="fal fa-cogs"></i>
                    <span>{{__('admin/setting.setting')}}</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </a>
                <ul class="collapse submenu list-unstyled" id="tables"  data-parent="#topAccordion">
                
                    <li class="sub-sub-submenu-list">
                    <a href="#datatable" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> {{__('admin/setting.Shipping_Method')}}<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                        <ul class="collapse list-unstyled sub-submenu" id="datatable" data-parent="#datatable">
                          
                            <li>
                            <a href="{{route('method.shipping.type','free')}}">{{__('admin/setting.Free_Shipping')}}</a>
                            </li>
                            <li>
                                <a href="{{route('method.shipping.type','local')}}">{{__('admin/setting.Local_Pickup')}} </a>
                            </li>
                            <li>
                                <a href="{{route('method.shipping.type','outer')}}">{{__('admin/setting.Flat_Rate')}} </a>
                            </li>
                      
                        </ul>
                    </li>
                     <li class="sub-sub-submenu-list">
                        <a href="#datatable" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">  public slider <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                        <ul class="collapse list-unstyled sub-submenu" id="datatable" data-parent="#datatable">
                            <li>
                                <a href="{{ route('slider.View.Upload') }}">view slider </a>
                            </li>
                           
                           
                        </ul>
                    </li> 
    
                </ul>
            </li>
            <li class="menu single-menu">
                <a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i class="fas fa-th-large"></i>
                    <span>{{__('admin/category.category')}}</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </a>
                <ul class="collapse submenu list-unstyled" id="tables"  data-parent="#topAccordion">
                
                    <li class="sub-sub-submenu-list">
                    <a href="#datatable" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> {{__('admin/category.category')}} <span class="badge badge-success"> {{\App\Models\Category::Parent()->count()}} </span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                        <ul class="collapse list-unstyled sub-submenu" id="datatable" data-parent="#datatable">
                          
                            <li>
                            <a href="{{route('main.categories','category')}}">{{__('admin/category.view_all')}}</a>
                            </li>
                        
                      
                        </ul>
                    </li>
               
                </ul>
            </li>
            <li class="menu single-menu">
                <a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i class="fas fa-th-large"></i>
                    <span>{{__('admin/category.category')}}</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </a>
                <ul class="collapse submenu list-unstyled" id="tables"  data-parent="#topAccordion">
                
                    <li class="sub-sub-submenu-list">
                    <a href="#datatable" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> الاقسام <span class="badge badge-success"> {{\App\Models\Category::count()}} </span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                        <ul class="collapse list-unstyled sub-submenu" id="datatable" data-parent="#datatable">
                          
                            <li>
                            <a href="{{route('main.cat')}}">{{__('admin/category.view_all')}}</a>
                            </li>
                        
                      
                        </ul>
                    </li>
               
                </ul>
            </li>
            <li class="menu single-menu">
                <a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i class="fad fa-th-list"></i>
                    <span>{{__('admin/category.subcat')}}</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </a>
                <ul class="collapse submenu list-unstyled" id="tables"  data-parent="#topAccordion">
                
                    <li class="sub-sub-submenu-list">
                    <a href="#datatable" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> {{__('admin/category.subcat')}} <span class="badge badge-success"> {{\App\Models\Category::Child()->count()}} </span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                        <ul class="collapse list-unstyled sub-submenu" id="datatable" data-parent="#datatable">
                          
                            <li>
                            <a href="{{route('main.categories','subCategory')}}">{{__('admin/category.view_all')}}</a>
                            </li>
                        
                      
                        </ul>
                    </li>
               
                </ul>
            </li>
            <li class="menu single-menu">
                <a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i class="fal fa-tags"></i>
                    <span>{{__('admin/brand.brands')}}</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </a>
                <ul class="collapse submenu list-unstyled" id="tables"  data-parent="#topAccordion">
                
                    <li class="sub-sub-submenu-list">
                    <a href="#datatable" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> {{__('admin/brand.brands')}} <span class="badge badge-success"> {{\App\Models\Brand::count()}} </span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                        <ul class="collapse list-unstyled sub-submenu" id="datatable" data-parent="#datatable">
                          
                            <li>
                            <a href="{{route('main.brands')}}">{{__('admin/category.view_all')}}</a>
                            </li>
                        
                      
                        </ul>
                    </li>
               
                </ul>
            </li>
            <li class="menu single-menu">
                <a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i class="fal fa-tag"></i>
                    <span>Tags</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </a>
                <ul class="collapse submenu list-unstyled" id="tables"  data-parent="#topAccordion">
                
                    <li class="sub-sub-submenu-list">
                    <a href="#datatable" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> tags <span class="badge badge-success"> {{\App\Models\Tag::count()}} </span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                        <ul class="collapse list-unstyled sub-submenu" id="datatable" data-parent="#datatable">
                          
                            <li>
                            <a href="{{route('main.tags')}}">{{__('admin/category.view_all')}}</a>
                            </li>
                        
                      
                        </ul>
                    </li>
               
                </ul>
            </li>
            <li class="menu single-menu">
                <a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <i class="fal fa-cart-plus"></i>
                    <span>product</span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </a>
                <ul class="collapse submenu list-unstyled" id="tables"  data-parent="#topAccordion">
                
                    <li class="sub-sub-submenu-list">
                    <a href="#datatable" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> product <span class="badge badge-success"> {{\App\Models\Product::count()}} </span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg> </a>
                        <ul class="collapse list-unstyled sub-submenu" id="datatable" data-parent="#datatable">
                          
                            <li>
                            <a href="{{route('main.product')}}">{{__('admin/category.view_all')}}</a>
                            </li>
                        
                      
                        </ul>
                    </li>
               
                </ul>
            </li>

        
        </ul>
    </nav>
</div>