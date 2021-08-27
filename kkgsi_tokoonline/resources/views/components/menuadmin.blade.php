<ul id="slide-out" class="sidenav">
    <li>
        <ul class="collapsible">
            <li class="small-cap"><span class="hide-menu">Menu Admin</span></li>
            <li>
                <a href="{{route('dashboard.index')}}" class="collapsible-header"><i class="material-icons">dashboard</i><span> Dashboard</span></a>

            </li>
            <li>
                <a href="javascript: void(0);" class="collapsible-header has-arrow"><i class="material-icons">equalizer</i><span class="hide-menu"> Category </span></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="{{route('categories.index')}}"><i class="material-icons">photo_size_select_small</i><span class="hide-menu">Data Category</span></a></li>
                        <li><a href="{{route('sub-catagories.index')}}"><i class="material-icons">picture_in_picture</i><span class="hide-menu">Sub Category</span></a></li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="javascript: void(0);" class="collapsible-header has-arrow"><i class="material-icons">local_offer</i><span class="hide-menu">Coupon</span></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="{{route('coupon.index')}}"><i class="material-icons">list </i></span class="hide-menu">View Coupon</span></a></li>
                        <li><a href="#"><i class="material-icons">add </i><span class="hide-menu">Data Coupon</span></a></li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="javascript: void(0);" class="collapsible-header has-arrow"><i class="material-icons">shopping_cart</i><span class="hide-menu">Product</span></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="{{route('product.index')}}"><i class="material-icons">shop</i><span class="hide-menu">View Product</span></a></li>
                        <li><a href="#"><i class="material-icons">shopping_basket</i><span class="hide-menu">Data Product</span></a></li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="javascript: void(0);" class="collapsible-header has-arrow"><i class="material-icons">add_shopping_cart</i><span class="hide-menu">Order</span></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="{{route('order.index')}}"><i class="material-icons">shopping_cart</i><span class="hide-menu">Data Order</span></a></li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="javascript: void(0);" class="collapsible-header has-arrow"><i class="material-icons">monetization_on</i><span class="hide-menu">Transaction</span></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="{{route('transaksi.index')}}"><i class="material-icons">add</i><span class="hide-menu">Data Transaction</span></a></li>
                    </ul>
                </div>
            </li>
