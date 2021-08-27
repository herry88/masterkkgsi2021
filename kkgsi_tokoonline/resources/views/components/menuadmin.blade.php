<ul id="slide-out" class="sidenav">
    <li>
        <ul class="collapsible">
            <li class="small-cap"><span class="hide-menu">Menu Admin</span></li>
            <li>
                <a href="#" class="collapsible-header"><i class="material-icons">dashboard</i><span>
                        Dashboard</span></a>

            </li>
            <li>
                <a href="javascript: void(0);" class="collapsible-header has-arrow"><i
                        class="material-icons">equalizer</i><span class="hide-menu"> Category </span></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="{{ route('categories.index') }}"><i
                                    class="material-icons">photo_size_select_small</i><span class="hide-menu">Data
                                    Category</span></a></li>
                        <li><a href="{{ route('sub-categories.index') }}"><i
                                    class="material-icons">picture_in_picture</i><span
                                    class="hide-menu">SubCategory</span></a></li>

                    </ul>

                </div>
            </li>
            <li> <a href="#"><i class="small material-icons">code</i> Category </a></li>
            <li><a href="#"><i class="small material-icons">code</i> Product</a></li>
        </ul>
    </li>
</ul>
