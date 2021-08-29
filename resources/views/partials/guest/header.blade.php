<header id="page-header" class="invisible" data-toggle="appear" data-class="animated fadeInDown">
        <!-- Header Content -->
        <div class="content-header">
            <!-- Left Section -->
            <div class="content-header-section">
                <!-- Logo -->
                <div class="content-header-item">
                    <a class="link-effect font-w700 mr-5" href="/">
                        <i class="si si-fire text-primary"></i>
                        <span class="font-size-h4 text-dual-primary-dark">code</span><span class="font-size-h4 text-primary">base</span>
                    </a>
                </div>
                <!-- END Logo -->
            </div>
            <!-- END Left Section -->

            <!-- Right Section -->
            <div class="content-header-section">
                @if (Route::has('login'))
                <a class="btn btn-sm btn-hero btn-noborder btn-alt-primary px-20" href="{{ route('login') }}">
                    <i class="si si-rocket"></i> <span class="ml-5 d-none d-sm-inline-block">LOGIN</span>
                </a>
                @endif
                    @if (Route::has('register'))
                <a class="btn btn-sm btn-hero btn-noborder btn-alt-success px-20" href="{{ route('register') }}">
                    <i class="si si-bag"></i> <span class="ml-5 d-none d-sm-inline-block">REGISTER</span>
                </a>
                    @endif
            </div>
            <!-- END Right Section -->
        </div>
    </header>





