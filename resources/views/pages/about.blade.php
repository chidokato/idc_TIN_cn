@extends('layout.index')

@section('title') {{$data->title ? $data->title : $data->name}} @endsection
@section('description') {{$data->description}} @endsection
@section('robots') index, follow @endsection
@section('url'){{asset('')}}@endsection

@section('css')
<link href="assets/css/about.css" rel="stylesheet">
@endsection

@section('content')
<section class="section1">
    <div class="img">
        <img src="assets/images/gioithieu/slider.jpg">
    </div>
    <div class="title">
        <h1>关于公司</h1>
    </div>
</section>

<section class="section2">
    <div class="menu">
        <ul>
            <li> <a class="nav-link" href="#gioithieu">关于我们</a> </li>
            <li> <a class="nav-link" href="#tamnhin">愿景与使命</a> </li>
            <li> <a class="nav-link" href="#muctieu">战略目标</a> </li>
            <li> <a class="nav-link" href="#dichvu">服务</a> </li>
            <li> <a class="nav-link" href="#lanhdao">领导团队</a> </li>
        </ul>
    </div>
</section>

<div id="gioithieu">
    <section class="section3 bg" >
        <div class="container" >
            <div class="row">
                <div class="col-md-4">
                    <div class="img">
                        <img src="assets/images/gioithieu/gioi-thieu-02.png">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="content">
                        <p>INDOCHINE房地产股份公司怀着热情、以抱负为基石、以专注为养分，正在崛起为越南领先的房地产企业之一。</p>
                        <p>2022年，房地产市场经历了前所未有的低迷，数百家房地产公司被迫关闭、解散或缩小规模。INDOCHINE凭借敏锐的远见抓住机遇，将挑战转化为契机，并以盛大的发布活动正式亮相，标志着行业“新星”的崛起。凭借成功的业绩，INDOCHINE迅速在市场上掀起波澜，完成数百笔交易，开创了在冻结的房地产市场“破冰”的先河。在此势头下，INDOCHINE持续显著增长，理所当然地赢得了越南房地产市场“黑马”的美誉。</p>
                        <p>特别是，INDOCHINE自豪地成为首批将越南房地产推向国际舞台的企业之一，率先为寻求在越南定居或投资的国际客户提供全面的房地产服务。凭借能力、热情、专业精神和深刻的市场洞察力，INDOCHINE承诺成为值得信赖的桥梁，为尊贵的客户和投资者提供卓越价值和高流动性的优质物业。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section4 bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>领先的房地产开发与分销商</h2>
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="assets/images/gioithieu/1.png"></div>
                            <div class="swiper-slide"><img src="assets/images/gioithieu/2.png"></div>
                            <div class="swiper-slide"><img src="assets/images/gioithieu/3.png"></div>
                            <div class="swiper-slide"><img src="assets/images/gioithieu/4.png"></div>
                            <div class="swiper-slide"><img src="assets/images/gioithieu/5.png"></div>
                            <div class="swiper-slide"><img src="assets/images/gioithieu/6.png"></div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div id="tamnhin">
    <section class="section5 bg">
        <div class="container" >
            <div class="row">
                <div class="col-md-7">
                   <div class="img"><img src="assets/images/gioithieu/tam-nhin.png"></div>
                </div>
                <div class="col-md-5">
                    <div class="content">
                        <div class="title">
                            <img src="assets/images/gioithieu/tam-nhin-1.png">
                            <h3>愿景</h3>
                        </div>
                        <p>成为越南及国际市场中，灵活、动态的房地产产品分销、租赁和管理的领先企业。</p>
                        <p>成为数字化转型领域的领先企业，创造卓越价值。</p>
                        <p>成为越南房地产开发和分销的首选企业。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section6 bg">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-11">
                    <div class="iteam">
                        <div class="img"><img src="assets/images/gioithieu/bg_sumenh.png"></div>
                        <div class="text">
                            <img class="icon" src="assets/images/gioithieu/icon_su menh.png">
                            <p>提供卓越的产品和服务，提高生活质量，增加客户价值</p>
                            <p>提供专业服务和完善解决方案</p>
                            <p>坚持最高商业道德和社会责任标准，打造值得骄傲的成功房地产品牌</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div id="muctieu">
    <section class="section7">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="img"> <img src="assets/images/icon_muctieu.png"> </div>
                    <h2>战略目标</h2>
                    <p>未来五年，成为越南房地产投资、交易、分销和租赁的领先企业</p>
                    <p>持续优化和专业化服务，创造最佳且最合适的价值</p>
                    <p>服务业务将成为推动Indochine进入国际市场的先锋部门</p>
                </div>
            </div>
        </div>
    </section>
</div>
<div id="dichvu">
<section class="section8">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>综合房地产服务</h2>
                <h3>一站式房地产服务</h3>

                <div class="swiper mySwiper1">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide iteam1">
                            <h4>开发</h4>
                            <p>房地产项目开发与运营</p>
                        </div>
                        <div class="swiper-slide iteam2">
                            <h4>咨询</h4>
                            <p>房地产项目品牌策略与营销咨询</p>
                        </div>
                        <div class="swiper-slide iteam3">
                            <h4>物业</h4>
                            <p>房地产项目分销与租赁</p>
                        </div>
                        <div class="swiper-slide iteam4">
                            <h4>酒店管理</h4>
                            <p>房地产运营与管理</p>
                        </div>
                        <div class="swiper-slide iteam5">
                            <h4>国际业务</h4>
                            <p>为国际客户提供全面的房地产服务</p>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </div>
    </div>
</section>
</div>

<div id="lanhdao">
<section class="section9">
    <div class="container">
        <h2>领导团队</h2>
        <div class="row hangle" style="background:url(assets/images/gioithieu/bg_lanhdao1.png); background-size: cover;">
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <div class="timeline">
                    <div class="timeline-entry">
                        <div class="timeline-time">2006 - 2020</div>
                        <div class="timeline-content">
                            <p>在越南领先房地产公司担任高级管理职位，如Novaland、FLC集团、Dat Xanh集团和Dat Xanh北部分公司...</p>
                        </div>
                    </div>
                    <div class="timeline-entry">
                        <div class="timeline-time">2021年</div>
                        <div class="timeline-content">
                            <p>成立Vietnam Homes Group品牌</p>
                        </div>
                    </div>
                    <div class="timeline-entry">
                        <div class="timeline-time">2022年</div>
                        <div class="timeline-content">
                            <p>成立INDOCHINE房地产品牌</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info">
                    <div class="img"> <img src="assets/images/gioithieu/C-Hang.png"> </div>
                    <div class="name">LÊ THỊ HẰNG女士</div>
                    <div class="function"> 首席执行官 <br> INDOCHINE房地产股份公司 </div>
                </div>
            </div>
        </div>
        <div class="row haianh" style="background:url(assets/images/gioithieu/bg_lanhdao2.png); background-size: cover;">
            <div class="col-md-2"></div>
            <div class="col-md-4">
                <div class="info">
                    <div class="img"> <img src="assets/images/gioithieu/hai-anh.png"> </div>
                    <div class="name">NGUYỄN HẢI ANH先生</div>
                    <div class="function"> 业务总监 <br> INDOCHINE房地产股份公司 </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="timeline ">
                    <div class="timeline-entry">
                        <div class="timeline-time">2013 - 2021</div>
                        <div class="timeline-content">
                            <p>越南农业与农村发展部</p>
                        </div>
                    </div>
                    <div class="timeline-entry">
                        <div class="timeline-time">2021 - 2022</div>
                        <div class="timeline-content">
                            <p>北部分销部门主管 – Dat Xanh</p>
                        </div>
                    </div>
                    <div class="timeline-entry">
                        <div class="timeline-time">2022 - 至今</div>
                        <div class="timeline-content">
                            <p>销售总监 <br> INDOCHINE房地产股份公司 </p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="row hangle mt-5" style="background:url(assets/images/gioithieu/bg_lanhdao1.png); background-size: cover;">
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <div class="timeline">
                    <div class="timeline-entry">
                        <div class="timeline-time">2009 - 2016</div>
                        <div class="timeline-content">
                            <p>前 Kaplan 新加坡大学主修财务管理与工商管理的学生</p>
                        </div>
                    </div>
                    <div class="timeline-entry">
                        <div class="timeline-time">2016 - 2018</div>
                        <div class="timeline-content">
                            <p>建筑材料公司 Dung Thao Trading Ltd 的联合创始人</p>
                        </div>
                    </div>
                    <div class="timeline-entry">
                        <div class="timeline-time">2019 - 2020</div>
                        <div class="timeline-content">
                            <p>Dat Xanh Miền Bắc 房地产公司的国际销售部门负责人</p>
                        </div>
                    </div>
                    <div class="timeline-entry">
                        <div class="timeline-time">2021-2025</div>
                        <div class="timeline-content">
                            <p>工商管理硕士（MBA）—— Indochine 房地产股份公司国内及国际销售总监（胡志明市分公司）</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info">
                    <div class="img mb-4"> <img style="height: 350px;" src="assets/images/gioithieu/tin.png"> </div>
                    <div class="name">Mr. PHẠM TRUNG TÍN</div>
                    <div class="function"> 持有 MBA 学位证书 <br> 销售与数字营销总监
                    </div>
                </div>
            </div>
        </div>

        <div class="row hangle mt-5" style="background:url(assets/images/gioithieu/bg_lanhdao1.png); background-size: cover;">
            <div class="col-md-1"></div>
            <div class="col-md-4">
                <div class="info">
                    <div class="img mb-4"> <img style="height: 350px;" src="assets/images/gioithieu/yen.png"> </div>
                    <div class="name">Ms. Jess Phạm</div>
                    <div class="function"> 中文业务部经理
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="timeline">
                    <div class="timeline-entry">
                        <div class="timeline-time">2016–2020</div>
                        <div class="timeline-content">
                            <p>河内大学 中文专业（本科）</p>
                        </div>
                    </div>
                    <div class="timeline-entry">
                        <div class="timeline-time">2020–2023</div>
                        <div class="timeline-content">
                            <p>INDOCHINE公司 - 中文业务销售专员</p>
                        </div>
                    </div>
                    <div class="timeline-entry">
                        <div class="timeline-time">2023–2025</div>
                        <div class="timeline-content">
                            <p>INDOCHINE公司 - 中文国际业务经理</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

    </div>
</section>
</div>

@endsection

@section('js')
<script>
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 6,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        0: { slidesPerView: 2, spaceBetween: 10 },
        640: { slidesPerView: 4, spaceBetween: 20 },
        768: { slidesPerView: 5, spaceBetween: 25 },
        1024: { slidesPerView: 6, spaceBetween: 30 },
    }
});

var swiper = new Swiper(".mySwiper1", {
    slidesPerView: 5,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        0: { slidesPerView: 2, spaceBetween: 10 },
        640: { slidesPerView: 3, spaceBetween: 20 },
        768: { slidesPerView: 4, spaceBetween: 25 },
        1024: { slidesPerView: 5, spaceBetween: 30 },
    }
});

document.addEventListener('DOMContentLoaded', function() {
    var links = document.querySelectorAll('.nav-link');
    links.forEach(function(link) {
        link.addEventListener('click', function(event) {
            var href = this.getAttribute('href');
            if (href.startsWith('#')) {
                event.preventDefault();
                var targetId = href.substring(1);
                var targetElement = document.getElementById(targetId);

                if (targetElement) {
                    targetElement.scrollIntoView({ behavior: 'smooth' });
                }
            } else {
                window.location.href = href;
            }
        });
    });

    window.addEventListener('scroll', function() {
        var currentPosition = window.scrollY;
        links.forEach(function(link) {
            var targetId = link.getAttribute('href').substring(1);
            var targetElement = document.getElementById(targetId);

            if (targetElement) {
                var targetPosition = targetElement.offsetTop;
                var targetHeight = targetElement.offsetHeight;

                if (currentPosition >= targetPosition && currentPosition < targetPosition + targetHeight) {
                    link.classList.add('active');
                } else {
                    link.classList.remove('active');
                }
            }
        });
    });
});

function smoothScrollTo(target, duration, link) {
    var targetPosition = target.getBoundingClientRect().top + window.scrollY;
    var startPosition = window.scrollY;
    var distance = targetPosition - startPosition;
    var startTime = null;

    function animation(currentTime) {
        if (startTime === null) startTime = currentTime;
        var timeElapsed = currentTime - startTime;
        var run = ease(timeElapsed, startPosition, distance, duration);
        window.scrollTo(0, run);
        if (timeElapsed < duration) {
            requestAnimationFrame(animation);
        } else {
            window.scrollTo(0, targetPosition);
            link.classList.add('active');
        }
    }

    function ease(t, b, c, d) {
        t /= d / 2;
        if (t < 1) return c / 2 * t * t + b;
        t--;
        return -c / 2 * (t * (t - 2) - 1) + b;
    }

    requestAnimationFrame(animation);
}
</script>
@endsection
