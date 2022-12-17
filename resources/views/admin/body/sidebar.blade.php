@php
  $prefix = Request::route()->getPrefix();
  $route = Route::current()->getName();
 
@endphp

<aside class="main-sidebar">
   <!-- sidebar-->
   <section class="sidebar">
      <div class="user-profile">
         <div class="ulogo">
            <a href="#">
               <!-- logo for regular state and mobile devices -->
               <div class="d-flex align-items-center justify-content-center">
                  <img src="{{ asset('backend/images/logo-dark.png') }}" alt="">
                  <h3><b>{{ Auth::guard('admin')->user()->name }}</b></h3>
               </div>
            </a>
         </div>
      </div>
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">
         <li class="{{ ($route == 'dashboard')? 'active':'' }}">
            <a href="{{ url('admin/dashboard') }}">
            <i data-feather="pie-chart"></i>
            <span>Dashboard</span>
            </a>
         </li>
         @php
         $brand = (auth()->guard('admin')->user()->brand == 1);
         $category = (auth()->guard('admin')->user()->category == 1);
         $product = (auth()->guard('admin')->user()->product == 1);
         $adminuserrole = (auth()->guard('admin')->user()->adminuserrole == 1);
         @endphp
         @if($brand == true) 
         <li class="treeview {{ ($prefix == '/brand')?'active':'' }}  ">
            <a href="#">
            <i data-feather="message-circle"></i>
            <span>Brands</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
               @if($brand == true) 
               <li class="{{ ($route == 'all.brand')? 'active':'' }}"
                  >
                  <a href="{{ route('all.brand') }}"><i class="ti-more"></i>All Brand</a>
               </li>
               @endif
            </ul>
         </li>
         @else
         @endif
         @if($category == true)
         <li class="treeview {{ ($prefix == '/category')?'active':'' }}  ">
            <a href="#">
            <i data-feather="mail"></i> <span>Category </span>
            <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
               <li class="{{ ($route == 'all.category')? 'active':'' }}"><a href="{{ route('all.category') }}"><i class="ti-more"></i>All Category</a></li>
               <li class="{{ ($route == 'all.subcategory')? 'active':'' }}"><a href="{{ route('all.subcategory') }}"><i class="ti-more"></i>All SubCategory</a></li>
               <li class="{{ ($route == 'all.subsubcategory')? 'active':'' }}"><a href="{{ route('all.subsubcategory') }}"><i class="ti-more"></i>All Sub->SubCategory</a></li>
            </ul>
         </li>
         @else
         @endif
         @if($product == true)
         <li class="treeview {{ ($prefix == '/product')?'active':'' }}  ">
            <a href="#">
            <i data-feather="file"></i>
            <span>Products</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
               <li class="{{ ($route == 'add-product')? 'active':'' }}"><a href="{{ route('add-product') }}"><i class="ti-more"></i>Add Products</a></li>
               <li class="{{ ($route == 'manage-product')? 'active':'' }}"><a href="{{ route('manage-product') }}"><i class="ti-more"></i>Manage Products</a></li>
            </ul>
         </li>
         @else
         @endif
         @if($adminuserrole == true)
         <li class="treeview {{ ($prefix == '/adminuserrole')?'active':'' }}  ">
            <a href="#">
            <i data-feather="file"></i>
            <span>Admin User Role </span>
            <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
               <li class="{{ ($route == 'all.admin.user')? 'active':'' }}"><a href="{{ route('all.admin.user') }}"><i class="ti-more"></i>All Admin User </a></li>
            </ul>
         </li>
         @else
         @endif
      </ul>
   </section>
   <div class="sidebar-footer">
      <!-- item-->
      <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
      <!-- item-->
      <a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
      <!-- item-->
      <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
   </div>
</aside>