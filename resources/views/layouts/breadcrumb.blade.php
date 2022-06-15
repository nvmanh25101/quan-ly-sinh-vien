<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-light-lighten p-2 mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="uil-home-alt"></i>
                                Trang chủ</a></li>
                        @if (URL::current() !== route('home'))
                            <li class="breadcrumb-item"><a href="">{{ $ControllerName }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('title.' . $pageTitle) }}</li>
                        @endif
                    </ol>
                </nav>
            </div>
            <h4 class="page-title">Vertical</h4>
        </div>
    </div>
</div>
