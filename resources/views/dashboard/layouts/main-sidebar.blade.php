<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <!-- menu item Dashboard-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard">
                            <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">لوحة التحكم</span>
                            </div>
                            {{-- <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div> --}}
                        </a>
                    </li>
                    <!-- menu title -->
                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title" >الصفحه الرئيسيه </li>
                    <!-- menu item Elements-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements">
                            <div class="pull-left"><i class="ti-palette"></i><span
                                    class="right-nav-text">الرئيسيه</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="elements" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{ url('/slide') }}">الخلفيه الرئيسيه</a></li>
                           
                        </ul>
                    </li>

                    <li>
                        <a href="{{route('slider.index')}}"><i class="ti-menu-alt"></i><span class="right-nav-text">شريط التمرير</span> </a>
                    </li>

                    <li>
                        <a href="{{route('setting.index')}}"><i class="ti-settings"></i><span class="right-nav-text">الإعدادات</span> </a>
                    </li>

                </ul>
            </div>
        </div>
    {{-- </div>
</div> --}}

        <!-- Left Sidebar End-->

        <!--=================================
