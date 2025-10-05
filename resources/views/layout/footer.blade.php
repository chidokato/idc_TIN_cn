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
                    <div class="ft-contact-item">
                        <div class="ft-contact-item-text">
                            <h6>总部</h6>
                            <span>越南胡志明市Tân Định街Trần Khánh Dư路1号Vạn Gia Phát大厦5楼</span>
                        </div>
                        <span class="ft-contact-item-ico"><i class="icon-building-filled"></i></span>
                    </div>
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
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15676.90695339032!2d106.6893047!3d10.7939386!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528cdeb13ffff%3A0x8db7b80bb49f4899!2zQ8O0bmcgVHkgQ-G7lSBQaOG6p24gQuG6pXQgxJDhu5luZyBT4bqjbiBJbmRvY2hpbmU!5e0!3m2!1svi!2s!4v1718358591174!5m2!1svi!2s" style="border:0; width: 100%; height: 300px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
