<!--header area start-->

<!--Offcanvas menu area start-->
<div class="off_canvars_overlay">

</div>
<header>
    <div class="main_header">
        <div class="container">
            <!--header top start-->
            <div class="header_top">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-7">
                        <div class="header_top_settings text-right main_menu menu_position">
                            <ul>
                                <li><a href="#"><i class="far fa-question-circle"></i>Trợ giúp</a></li>
                                <li><a href="#"><i class="fas fa-bell"></i>Thông báo</a></li>
                             
                                <a href="/user/account/profile">
                                    <li>
                                        <img class="rounded-circle shadow" style="object-fit: cover;" src="@if (isset(getUser()->image))
                                                {{getUser()->image}}
                                                @else
                                                    {{asset('assets/customer/img/blog/comment3.png.jpg')}}
                                            @endif" alt="Smiley face" width="40" height="40">
                                        <a href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">Phuong Quyen<i
                                                class="fa fa-angle-down"></i></a>
                                        <div class="dropdown" style="position: initial;">
                                            <div class="dropdown-menu" style="margin-top: 16px;"
                                                aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="/user/account/profile">Thông tin</a>
                                                <a class="dropdown-item" href="/customer/logout">Đăng xuất</a>
                                            </div>
                                    </li>
                                </a>

                                <li><a href="#" data-toggle="modal" data-target="#exampleModalCenter">Đăng nhập</a></li>
                                <li><a href="#" data-toggle="modal" data-target="#signupModalCenter">Đăng ký</a></li>
                                
                                <li></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--header top start-->

            <!--header middel start-->
            <div class="header_middle sticky-header">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-6">
                        <div class="logo">
                            <a href="http://127.0.0.1:8000/"><img src="{{asset('assets/customer/img/logo/lg.png')}}"
                                    alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="main_menu menu_position text-center">
                            <nav>
                                <ul>

                                    <li>
                                        <a href="/pages/huong-dan-thanh-toan/">
                                        <button type="button" class="btn btn-outline-danger"><img
                                                style="max-width: 18px;max-height: 18px;"
                                                src="//theme.hstatic.net/1000026716/1000440777/14/xk2s.png?v=7989">
                                            Hướng dẫn thanh toán</button></a>
                                    </li>
                                    <li>
                                        <a href="/pages/chinh-sach-bao-hanh/">
                                        <button type="button" class="btn btn-outline-danger"><img
                                                style="max-width: 18px;max-height: 18px;"
                                                src="//theme.hstatic.net/1000026716/1000440777/14/xk4s.png?v=7989">
                                            Chính sách bảo hành</button></a>
                                    </li>
                                    <li>
                                        <a href="/pages/chinh-sach-van-chuyen">
                                        <button type="button" class="btn btn-outline-danger"><img
                                                style="max-width: 18px;max-height: 18px;"
                                                src="//theme.hstatic.net/1000026716/1000440777/14/xk5s.png?v=7989">
                                            Chính sách vấn chuyển</button></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="header_configure_area">
                            <div class="mini_cart_wrapper">
                                <a href="/cart">
                                    <i class="fa fa-shopping-bag"></i>
                                    <span><span class="cart_price">{{Cart::subtotal()}}</span><i
                                            class="ion-ios-arrow-down"></i></span>
                                    <span class="cart_count">{{Cart::count()}}</span>
                                </a>
                                <!--mini cart-->
                                <div class="mini_cart" style="overflow:auto;">
                                    <div class="mini_cart_inner">
                                        @foreach (Cart::content() as $item)
                                        <div class="cart_item">
                                            <div class="cart_img">
                                                <a href="#"><img src="{{$item->options->size}}" alt=""></a>
                                            </div>
                                            <div class="cart_info">
                                                <a href="#">{{$item->name}}</a>
                                                <p>Qty: {{$item->qty}} X <span>{{$item->price}}</span></p>
                                            </div>
                                            <div class="cart_remove remove_cart" data-id="{{$item->rowId}}">
                                                <a><i class="ion-android-close"></i></a>
                                            </div>
                                        </div>
                                        @endforeach
                                        @if (Cart::count()>0)
                                        <div class="mini_cart_table">
                                            <div class="cart_total">
                                                <span>Tổng tiền:</span>
                                                <span class="price">{{Cart::subtotal()}}</span>
                                            </div>
                                            <div class="cart_total mt-10">
                                                <span>thành tiền:</span>
                                                <span class="price">{{Cart::subtotal()}}</span>
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="mini_cart_footer"
                                        style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">
                                        <div class="cart_button">
                                            <a href="/cart">Xem giỏ hàng</a>
                                        </div>
                                        <div class="cart_button">
                                            <a href="/checkout">Thanh toán</a>
                                        </div>
                                    </div>
                                </div>
                                <!--mini cart end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header middel end-->
         
            <!--header bottom satrt-->
            <div class="header_bottom">
                <div class="row align-items-center">
                    <div class="column1 col-lg-3 col-md-6">
                        <div class="categories_menu">
                            <div class="categories_title ">
                                <h2 class="categori_toggle">Danh mục sản phẩm</h2>
                            </div>
                            <div class="categories_menu_toggle" style="">
                                <ul>
                                    
                                    <li class="menu_item_children"><a href="#">Lap Top <i
                                                class="fa fa-angle-right"></i></a>
                                        <ul class="categories_mega_menu">
                                       
                                            <li class="menu_item_children"><a
                                                    href="#">Ban Phim</a>
                                                <ul class="categorie_sub_menu">
                                                   
                                                    <li value=""><a
                                                            href="#"></a>
                                                    </li>
                                                 
                                                </ul>
                                            </li>
                                       
                                            <li class="menu_item_children"><a href="#">Giá tiền</a>
                                                <ul class="categorie_sub_menu">
                                                    <li value="8-11"><a href="price-8-11">Từ 8 đến
                                                            11 triệu</a></li>
                                                    <li value="12-16"><a href="#">Từ 12
                                                            đến 16 triệu</a></li>
                                                    <li value="17-25"><a href="#">Từ 17
                                                            đến 25 triệu</a></li>
                                                    <li value="26-30"><a href="#">Từ 26
                                                            đến 30 triệu</a></li>
                                                    <li value="31"><a href="#">Trên 30
                                                            triệu</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                  
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="column2 col-lg-6 ">
                        <div class="search_container">
                            <form  method="get" id="searchForm">
                                
                                <div class="hover_category">
                                    <select class="select_option" name="select" id="categori2">
                                        <option selected value="1">All Categories</option>
                                        
                                        <option value="">Ban Phim</option>
                                         <option value="">Ban Phim</option>  <option value="">Ban Phim</option>  <option value="">Ban Phim</option>
                                    </select>
                                </div>
                                <div class="search_box">
                                    <input placeholder="Search product..." type="text" name="name" id="search">
                                    <button  id='searchbtn'>Search</button>
                                </div>
                            </form>
                        </div>

                    </div>
                    <div class="column3 col-lg-3 col-md-6">
                        <div class="header_bigsale">
                            <a href="#">Khuyến mãi của tháng</a>
                        </div>
                    </div>
                </div>
                <div class="row m-auto search">
                    <div class=" column1 col-lg-3">
                    </div>
                    <div class="column2 col-lg-6 p-2">
                        <div class="container p-0">
                            <div class="row">
                                <div class="col-lg-3 p-0">
                                </div>
                                <div class="col-lg-8 p-0">
                                    <ul id="results">
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header bottom end-->
        </div>
    </div>
</header>
@section('bot')


@endsection

<!--header area end-->
