@extends('layout.index')

@section('title') {{$post->title ? $post->title : $post->name}} @endsection
@section('description') {{$post->description ? $post->description : $post->name.$post->name}} @endsection
@section('robots') index, follow @endsection
@section('url'){{asset('')}}@endsection
@section('img'){{asset('')}}data/images/{{$post->img}}@endsection

@section('css')
<!-- 项目 CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<link href="assets/css/project.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
@endsection

@section('content')

<section class="sec-img bg">
    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper-product">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="data/images/{{$post->img}}" />
            </div>
            @foreach($post->Images as $img)
            <div class="swiper-slide">
                <img src="data/images/{{$img->img}}" />
            </div>
            @endforeach
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    <div thumbsSlider="" class="swiper mySwiper-product-thumr">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="data/images/{{$post->img}}" />
            </div>
            @foreach($post->Images as $img)
            <div class="swiper-slide">
                <img src="data/images/{{$img->img}}" />
            </div>
            @endforeach
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{asset('')}}">印支地产</a></li>
                    <li class="breadcrumb-item"><a href="{{$post->category->slug}}">{{$post->category->name}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$post->name}}</li>
                </ol>
                <div class="sub">
                    @if($post->monopoly == 1)<span class="bg-secondary">独家 <i class="ms-1 icon-check"></i></span>@endif
                    @if($post->for_sale == 1)<span class="bg-secondary">正在销售 <i class="ms-1 icon-check"></i></span>@endif
                    @if($post->new_product == 1)<span class="bg-secondary">新推出 <i class="ms-1 icon-check"></i></span>@endif
                </div>
            </nav>
            <div class="heading">
                <div class="left">
                    <h1 class="text-uppercase title-cat">{{$post->name}}</h1>
                    <div class="address"><i class="icon-location me-1"></i> {{$post->address}}{{ $post->street_id ? ', '.$post->Street->name:'' }}{{$post->ward_id? ', '.$post->Ward->name:''}}{{', '.$post->District->name}}{{', '.$post->Province->name}} <a href="">查看地图</a></div>
                </div>
                <div class="right">
                    <div class="price"> <span style="font-size: 1.2rem;">价格: </span>
                        {{$post->price >= 1000000000?$post->price/1000000000 . ' 亿': ($post->price? $post->price/1000000 . ' 百万':'请联系') }}
                        {{$post->price_max >= 1000000000? ' - ' . $post->price_max/1000000000 . ' 亿':($post->price_max?' - ' . $post->price_max/1000000 . ' 百万':'')}}
                    </div>
                    <div class="price_acreage">
                        @if($post->unit=='Tỷ')
                        {{ $post->acreage ? number_format($post->price*1000000000/$post->acreage/1000000, 2) : '...'}} 万/㎡
                        @elseif($post->unit=='Triệu')
                        <?php 
                            if ($post->acreage) {
                                echo number_format($post->price/$post->acreage);
                            }
                        ?>
                        @endif
                    </div>
                </div>
            </div>
            <div class="status">
                <span> {!! $post->acreage ? '<i class="icon-acreage me-1"></i>'.$post->acreage.($post->acreage_max ? ' - '.$post->acreage_max : '').' ㎡' : '' !!}</span>
                <span> {!! $post->bedroom ? '<i class="icon-bed me-1"></i>'.$post->bedroom.($post->bedroom_max ? ' - '.$post->bedroom_max : '').' 卧室' : '' !!}</span>
                <span> {!! $post->wc ? '<i class="icon-bathroom me-1"></i>'.$post->wc.($post->wc_max ? ' - '.$post->wc_max : '').' 卫浴' : '' !!}</span>
            </div>
            <hr>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="detail bg">
                {!! $post->content !!}
            </div>
            <?php $matbang = 0; ?>
            @foreach($sections as $key => $section)
            @if($section->status == 1)
            <div class="main-content">
                <div class="content-text">
                    <h2>{{$section->heading}}</h2>
                    {!! $section->content !!}
                </div>
                <div class="content-img">
                    @if(count($section->Images) > 1)
                    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper slider-section">
                        <div class="swiper-wrapper">
                            @foreach($section->Images as $img)
                            <div class="swiper-slide">
                                <img src="data/images/{{$img->img}}" />
                            </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    <div thumbsSlider="" class="swiper slider-section-thumbs">
                        <div class="swiper-wrapper">
                            @foreach($section->Images as $img)
                            <div class="swiper-slide">
                                <img src="data/images/{{$img->img}}" />
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @elseif(count($section->Images) == 1) 
                        @foreach($section->Images as $img)
                        <div class="img"><img src="data/images/{{$img->img}}" /></div>
                        @endforeach
                    @endif
                </div>
            </div>
            @elseif($section->status == 2)
            <div class="main-content">
                <div class="content-text">
                    <h2>{{$section->heading}}</h2>
                    {!! $section->content !!}
                </div>
                <div class="content-img">
                    @if(count($section->Images) > 0)
                    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper slider-section">
                        <div class="swiper-wrapper">
                            @foreach($section->Images as $img)
                            <div class="swiper-slide">
                                <img src="data/images/{{$img->img}}" />
                            </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    <div thumbsSlider="" class="swiper slider-section-thumbs">
                        <div class="swiper-wrapper">
                            @foreach($section->Images as $img)
                            <div class="swiper-slide">
                                <img src="data/images/{{$img->img}}" />
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            @elseif($section->status == 3) <!-- 户型图 -->
            <div class="main-content">
                <h2>{{$section->heading}}</h2>
                {!! $section->content !!}
                <div class="matbang">
                    <div class="tab swiper menu-tab">
                        <div class="swiper-wrapper">
                            @foreach($section->Images as $key => $img)
                            <button class="swiper-slide tablinks {{$key==0?'active':''}}" onclick="openTab(event, 'Tab{{$img->id}}')"> <span>{{$img->name}}</span> </button>
                            @endforeach
                        </div>
                    </div>
                    @foreach($section->Images as $key => $img)
                    <div id="Tab{{$img->id}}" class="tabcontent {{$key==0?'active':''}}" style="{{$key==0?'display: block;':''}}">
                        <div class="card-overlay-flex">
                            <a class="card-overlay" data-fancybox="matbang" href="data/images/{{$img->img}}" title="2/4">
                                <span class="card-overlay-img"><img src="data/images/{{$img->img}}" alt="" class="w-100"></span>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <?php $matbang = count($section->Images); ?>
            @endif
            @endforeach
        </div>

        <div class="col-md-3">
            <div class="fixtop">
                <div class="right-sidebar">
                    <div class="top">
                        <div class="avatar">
                            <img src="assets/images/logo-01_45.png">
                        </div>
                        <div class="right">
                            <h5>咨询联系</h5>
                            <p>我们的顾问随时为您提供帮助</p>
                        </div>
                    </div>
                    <div class="hotline"> <a href="tel:{{$setting->hotline}}"><i class="icon-phone"></i> {{$setting->hotline}}</a> </div>
                </div>
                
                <div class="pupup click_popup">
                    <a href="javascript:void(0)"><button> <img src="assets/images/icon-document-register.svg"> 注册获取项目资料</button></a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
<!-- 项目 JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

<script src="assets/js/project.js"></script>
<script type="text/javascript">
    var swiper = new Swiper(".menu-tab", {
        spaceBetween: 10,
        slidesPerView: {{ isset($matbang) && $matbang>5 ? 6:$matbang }},
        pagination: {
            el: ".swiper-pagination",
        },
    });
</script>
<script>
    $(document).ready(function() {
        $("[data-fancybox='gallery']").fancybox({
            thumbs: {
                autoStart: true,  // 打开即显示缩略图
                axis: 'x'         // 缩略图显示在下方
            }
        });
    });
</script>
@endsection
