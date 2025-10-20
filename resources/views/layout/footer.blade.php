<!------------------- 页脚 ------------------->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 ft-contact-wrap">
                <div class="ft-contact">
                    <div class="ft-contact-item">
                        <div class="ft-contact-item-text">
                            <h6>服务热线</h6>
                            <span><a href="tel:{{$setting->hotline}}">{{$setting->hotline}}</a></span>
                        </div>
                        <span class="ft-contact-item-ico"><i class="icon-phone-filled"></i></span>
                    </div>
                    <!-- <div class="ft-contact-item">
                        <div class="ft-contact-item-text">
                            <h6>总部</h6>
                            <span>越南胡志明市Tân Định街Trần Khánh Dư路1号Vạn Gia Phát大厦5楼</span>
                        </div>
                        <span class="ft-contact-item-ico"><i class="icon-building-filled"></i></span>
                    </div> -->
                    <div class="ft-contact-item">
                        <div class="ft-contact-item-text">
                            <h6>办公地址</h6>
                            <span>{{$setting->address}}</span>
                        </div>
                        <span class="ft-contact-item-ico"><i class="icon-building-filled"></i></span>
                    </div>
                </div>
                <div class="ft-social">
                    <ul class="social">
                        <li><a href="{{$setting->facebook}}"><i class="icon-facebook"></i></a></li>
                        <li><a href="{{$setting->youtube}}"><i class="icon-youtube"></i></a></li>
                        <!-- <li><a class=""><i class="icon-zalo"></i></a></li> -->
                    </ul>
                </div>
            </div>
            <div class="col-md-8 ft-main">
                <div class="row">
                    <div class="col-md-6 ft-info">
                        <img src="data/images/logo_-02.png" alt="">
                    </div>
                    
                    <div class="col-md-6">
                        <div class="ft-link">
                            {!! $setting->maps !!}
                        </div>
                    </div>
                </div>

                
                <div class="row ft-register-subscribe mb-4">
                    <div class="col-lg-6 align-self-center"><span class="line-b">订阅来自 <b>INDOCHINE</b> 的最新消息</span></div>
                    <div class="col-lg-6">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="输入您的邮箱" aria-label="输入您的邮箱" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="icon-send"></i></button>
                        </div>
                    </div>
                </div>
                <p class="ft-copyright text-end">版权所有 © 2024 INDOCHINE，保留所有权利</p>
            </div>
        </div>
    </div>
</footer>
<!------------------- 页脚结束 ------------------->
