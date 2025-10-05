<div class="hotline-phone-ring-wrap form-ring-wrap">
    <div class="hotline-phone-ring ">
        <div class="hotline-phone-ring-circle"></div>
        <div class="hotline-phone-ring-circle-fill"></div>
        <div class="hotline-phone-ring-img-circle click_popup">
            <a href="javascript:void(0)" class="pps-btn-img">
                <img src="assets/img/icon/dowload.png" alt="拨打电话" width="50">
            </a>
        </div>
        <div class="hotline-bar click_popup">
            <a href="javascript:void(0)">
                <span class="text-hotline">价格表</span>
            </a>
        </div>
    </div>
</div>

<div class="hotline-phone-ring-wrap zalo-ring-wrap">
    <div class="hotline-phone-ring">
        <div class="hotline-phone-ring-circle"></div>
        <div class="hotline-phone-ring-circle-fill"></div>
        <div class="hotline-phone-ring-img-circle">
        <a target="_blank" href="https://zalo.me/{{$setting->hotline}}" class="pps-btn-img">
            <img src="assets/img/icon/zalo.png" alt="拨打电话" width="50">
        </a>
        </div>
    
    <div class="hotline-bar">
        <a target="_blank" href="https://zalo.me/{{$setting->hotline}}">
            <span class="text-hotline">在线咨询</span>
        </a>
    </div>
    </div>
</div>

<div class="hotline-phone-ring-wrap hotline-ring-wrap">
    <div class="hotline-phone-ring">
        <div class="hotline-phone-ring-circle"></div>
        <div class="hotline-phone-ring-circle-fill"></div>
        <div class="hotline-phone-ring-img-circle">
        <a href="tel:{{$setting->hotline}}" class="pps-btn-img">
            <img src="assets/img/icon/icon-call-nh.png" alt="拨打电话" width="50">
        </a>
        </div>
    
    <div class="hotline-bar">
        <a href="tel:{{$setting->hotline}}">
            <span class="text-hotline">立即拨打</span>
        </a>
    </div>
    </div>
</div>

<div id="popup-banggia" class="popup-overlay">
    <div class="popup-content">
        <span class="close-popup">&times;</span>
        <h3>下载价格表</h3>
        <form id="validateForm" method="post" action="question">
        @csrf
            <input type="hidden" id="current-url" name="url" value="">
            <label>
                <input type="text" name="name" placeholder="全名 (*)">
            </label>
            <label>
                <input type="text" name="phone" placeholder="电话 (*)">
            </label>
            <label>
                <input type="text" name="email" placeholder="邮箱">
            </label>
            <p class="sub">(*) 点击“申请报价”即表示您同意我们的隐私政策。</p>
            <button class="btn btn-circle" type="submit">立即发送</button>
        </form>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const urlInput = document.getElementById("current-url");
        if (urlInput) {
            urlInput.value = window.location.href;
        }
    });
</script>
