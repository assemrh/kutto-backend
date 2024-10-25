<section class="breadcrumb-area breadcrumb-bg"
    style="background-image:url('{{ $bg ?? asset('/assets/img/bg/breadcrumb_bg.jpg') }}')">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="title">{!! $title !!}</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <Link to="/">{!! __('Home') !!}</Link>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{!! $title !!}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>