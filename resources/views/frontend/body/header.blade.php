<header class="header-style-1">
   <!-- ============================================== TOP MENU ============================================== -->
   <div class="top-bar animate-dropdown">
      <div class="container">
         <div class="header-top-inner">
            <div class="cnt-account">
               <ul class="list-unstyled">
                  <li><a href="#"><i class="icon fa fa-user"></i>
                     </a>
                  </li>
                  <li><a href="#"><i class="icon fa fa-heart"></i>Wishlist</a></li>
                  <li><a href="#"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>
                  <li><a href="#"><i class="icon fa fa-check"></i>Checkout</a></li>
                  <li><a href="#" type="button" data-toggle="modal" data-target="#ordertraking"><i class="icon fa fa-check"></i>Order Traking</a></li>
                  <li>
                     @auth
                     <a href="{{ route('login') }}"><i class="icon fa fa-user"></i>User Profile</a>
                     @else
                     <a href="{{ route('login') }}"><i class="icon fa fa-lock"></i>Login/Register</a>
                     @endauth
                  </li>
               </ul>
            </div>
            <!-- /.cnt-account -->
            <div class="cnt-block">
               <ul class="list-unstyled list-inline">
                  <li class="dropdown dropdown-small">
                     <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">USD </span><b class="caret"></b></a>
                     <ul class="dropdown-menu">
                        <li><a href="#">USD</a></li>
                        <li><a href="#">INR</a></li>
                        <li><a href="#">GBP</a></li>
                     </ul>
                  </li>
                  <li class="dropdown dropdown-small">
                     <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">
                  </li>
               </ul>
               <!-- /.list-unstyled --> 
            </div>
            <!-- /.cnt-cart -->
            <div class="clearfix"></div>
         </div>
         <!-- /.header-top-inner --> 
      </div>
      <!-- /.container --> 
   </div>
   <!-- /.header-top --> 
   <!-- ============================================== TOP MENU : END ============================================== -->
   <div class="main-header">
      <div class="container">
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
               <div class="logo"> <a href="{{ url('/') }}"> <img src="" alt="logo"> </a> </div>
               <!-- /.logo --> 
               <!-- ============================================================= LOGO : END ============================================================= --> 
            </div>
            <!-- /.logo-holder -->
            <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder">
               <!-- /.contact-row --> 
               <!-- ============================================================= SEARCH AREA ============================================================= -->
               <div class="search-area">
                  <form method="post" action="#">
                     @csrf
                     <div class="control-group">
                        <ul class="categories-filter animate-dropdown">
                           <li class="dropdown">
                              <a class="dropdown-toggle"  data-toggle="dropdown" href="category.html">Categories <b class="caret"></b></a>
                              <ul class="dropdown-menu" role="menu" >
                                 <li class="menu-header">Computer</li>
                                 <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Clothing</a></li>
                                 <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Electronics</a></li>
                                 <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Shoes</a></li>
                                 <li role="presentation"><a role="menuitem" tabindex="-1" href="category.html">- Watches</a></li>
                              </ul>
                           </li>
                        </ul>
                        <input class="search-field" onfocus="search_result_show()" onblur="search_result_hide()" id="search" name="search" placeholder="Search here..." />
                        <button class="search-button" type="submit"></button> 
                     </div>
                  </form>
                  <div id="searchProducts"></div>
               </div>
               <!-- /.search-area --> 
               <!-- ============================================================= SEARCH AREA : END ============================================================= --> 
            </div>
            <!-- /.top-search-holder -->
            <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row">
               <!-- ===== === SHOPPING CART DROPDOWN ===== == -->
               <div class="dropdown dropdown-cart">
                  <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
                     <div class="items-cart-inner">
                        <div class="basket"> <i class="glyphicon glyphicon-shopping-cart"></i> </div>
                        <div class="basket-item-count"><span class="count" id="cartQty"> </span></div>
                        <div class="total-price-basket"> <span class="lbl">cart -</span> 
                           <span class="total-price"> <span class="sign">$</span>
                           <span class="value" id="cartSubTotal"> </span> </span> 
                        </div>
                     </div>
                  </a>
                  <ul class="dropdown-menu">
                     <li>
                        <!--   // Mini Cart Start with Ajax -->
                        <div id="miniCart">
                        </div>
                        <!--   // End Mini Cart Start with Ajax -->
                        <div class="clearfix cart-total">
                           <div class="pull-right"> <span class="text">Sub Total :</span>
                              <span class='price'  id="cartSubTotal">  </span> 
                           </div>
                           <div class="clearfix"></div>
                           <a href="checkout.html" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a> 
                        </div>
                        <!-- /.cart-total--> 
                     </li>
                  </ul>
                  <!-- /.dropdown-menu--> 
               </div>
               <!-- /.dropdown-cart --> 
               <!-- == === SHOPPING CART DROPDOWN : END=== === --> 
            </div>
            <!-- /.top-cart-row --> 
         </div>
         <!-- /.row --> 
      </div>
      <!-- /.container --> 
   </div>
   <!-- /.main-header --> 
</header>
<style>
   .search-area{
   position: relative;
   }
   #searchProducts {
   position: absolute;
   top: 100%;
   left: 0;
   width: 100%;
   background: #ffffff;
   z-index: 999;
   border-radius: 8px;
   margin-top: 5px;
   }
</style>
<script>
   function search_result_hide(){
     $("#searchProducts").slideUp();
   }
   
    function search_result_show(){
       $("#searchProducts").slideDown();
   }
   
   
</script>