<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="index" class="logo logo-dark">
            <span class="logo-sm">
                {{-- <img src="{{ URL::asset('assets/images/logo-dark-sm.png') }}" alt="" height="22"> --}}
                <b style="font-size: 30px;">O</b>
            </span>
            <span class="logo-lg">
                {{-- <img src="{{ URL::asset('assets/images/logo-dark.png') }}" alt="" height="22"> --}}
                <b style="font-size: 30px;">OASys</b>
            </span>
        </a>

        <a href="index" class="logo logo-light">
            <span class="logo-lg">
                {{-- <img src="{{ URL::asset('assets/images/logo-light.png') }}" alt="" height="22"> --}}
                <b style="font-size: 30px;">OASys</b>
            </span>
            <span class="logo-sm">
                {{-- <img src="{{ URL::asset('assets/images/logo-light-sm.png') }}" alt="" height="22"> --}}
                <b style="font-size: 30px;">O</b>
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 header-item vertical-menu-btn topnav-hamburger">
        <span class="hamburger-icon">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->

            <ul class="metismenu list-unstyled" id="side-menu">
                @foreach ($sequence as $sequenceitem)
                    <li class="menu-title" data-key="t-applications">{{ $sequenceitem['title'] }}</li>
                    @foreach ($sidebar as $item)
                        @if ($item['group'] == $sequenceitem['id'])
                            <li>
                                <a href="{{ !$item['is_parent'] ? $item['route'] : '#' }}" class="{{ $item['is_parent'] ? 'has-arrow' : '' }}">
                                    <i class="icon nav-icon" data-eva="shopping-bag-outline"></i>
                                    <span class="menu-item" data-key="t-ecommerce">{{ $item['title'] }}</span>
                                </a>
                                @if ($item['is_parent'])
                                    <ul class="sub-menu" aria-expanded="false">
                                        @foreach ( $sidebar as $subitem )
                                            @if($item['id'] === $subitem['parent_id'])
                                                <li>
                                                    <a href="{{ $subitem['route'] }}">
                                                        <i class="icon nav-icon" data-eva="grid-outline"></i>
                                                        <span class="menu-item" data-key="t-dashboards">
                                                            @php
                                                                $split = explode(" ", $subitem['title']);
                                                                echo $split[count($split)-1]
                                                            @endphp
                                                        </span>
                                                        <span class="badge rounded-pill bg-primary">3</span>
                                                    </a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endif
                    @endforeach
                @endforeach

            </ul>
        </div>

        <!-- Sidebar -->
        <div class="p-3 px-4 sidebar-footer">
            <p class="mb-1 main-title">
                <script>
                    document.write(new Date().getFullYear())
                </script> &copy; <b>OAsys</b>.
            </p>
            <p class="mb-0">Developed by <b>KF Planning</b></p>
        </div>
    </div>
</div>
<!-- Left Sidebar End -->