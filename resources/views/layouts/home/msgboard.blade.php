<!--评论PC版-->
{{--
<div id="SOHUCS" sid="{{ $info->id }}" style="width: 84%;"></div>
<script charset="utf-8" type="text/javascript" src="{{ asset('js/home/changyan/changyan.js') }}" ></script>
<script type="text/javascript">
    window.changyan.api.config({
        appid: 'cyuz620gF',
        conf: 'prod_3ef1231e159e9e6b689e2bd15babaa0c'
    });
</script>--}}
<style>
    .layui-fluid {
        position: relative;
        margin: 0 auto;
        padding: 0 15px;
    }

    .layadmin-message-fluid .layui-form {
        padding: 20px 40px 0 40px;
    }

    .layadmin-message-fluid .layui-col-md12 {
        background: #fff;
        height: auto;
        padding-bottom: 0;
    }

    .media-left {
        float: left;
    }

    .message-text {
        margin-top: -30px;
    }

    .message-content .media-body {
        margin-bottom: 10px;
        border-bottom: 1px dashed #e5e5e5;
    }

    .message-content p {
        margin-top: 0;
        margin-bottom: 3px;
    }

    .layui-breadcrumb {
        visibility: inherit;
        font-size: 2px;
    }

    .message-content-btn {
        margin-bottom: 30px;
    }

    .message-action {
        text-align: right;
        cursor: pointer;
        margin-bottom: 5px;
        color: #009688;
    }

    .message-action span {
        margin-left: 8px;
    }
    .message-action span:hover{
        color: #E2523A;
    }
    .message-action .message-reply img:hover {
        content: url('/images/home/icon/reply_red.png');
    }

    .message-action .message-zan img:hover {
        content: url('/images/home/icon/zan_red.png');
    }

    .message-action .message-cai img:hover {
        content: url('/images/home/icon/cai_red.png');
    }
    .message-action em{
        margin-left: 5px;
    }
    .message-action .succeed{
        color: #E2523A;
    }
    .reply-content{
        display: none;
    }
    .media-body-child{
        margin-left: 50px;
    }
</style>
<div class="layui-fluid layadmin-message-fluid">
    <div class="layui-row">
        <div class="layui-col-md12">
            <form class="layui-form">
                <div class="layui-form-item layui-form-text">
                    <div class="layui-input-block">
                        <textarea name="content" placeholder="请输入内容" class="layui-textarea"></textarea>
                    </div>
                </div>
                <div class="layui-form-item" style="overflow: hidden;">
                    <div class="layui-input-block layui-input-right">
                        <button class="layui-btn" lay-submit lay-filter="formDemo">发表</button>
                    </div>
                    <div class="layadmin-messag-icon">
                        <a href="javascript:;"><i class="layui-icon layui-icon-face-smile-b"></i></a>
                        <a href="javascript:;"><i class="layui-icon layui-icon-picture"></i></a>
                        <a href="javascript:;"><i class="layui-icon layui-icon-link"></i></a>
                    </div>
                </div>
            </form>
        </div>
        <div class="layui-col-md12 layadmin-homepage-list-imgtxt message-content">
            <div class="media-body">
                <a href="javascript:;" class="media-left">
                    <img src="/images/home/girl_46.jpg" height="46px" width="46px">
                </a>
                <div class="pad-btm">
                    <p class="fontColor"><a href="javascript:;">猪猪</a></p>
                    <p class="min-font">
                     <span class="layui-breadcrumb" lay-separator="-">
                        <a href="javascript:;" class="layui-icon layui-icon-cellphone"></a>
                        <a href="javascript:;">从移动</a>
                        <a href="javascript:;">11分钟前</a>
                      </span>
                    </p>
                </div>
                <p class="message-text">@索尼中国
                    再献新作品—OLED电视A8F完美诞生。很开心一起参加了A8F的“首映礼”！[鼓掌]正如我们演员对舞台的热爱，索尼对科技与艺术的追求才创造出了让人惊喜的作品。作为A1兄弟款，A8F沿袭了黑科技“屏幕发声技术”和高清画质，色彩的出众表现和高端音质，让人在体验的时候如同身临其境。A8F，这次的“视帝”要颁发给你！
                    索尼官网预售： O网页链接 索尼旗舰店预售：</p>
                <p class="message-action">
                    <span class="message-reply"><img src="/images/home/icon/reply.png" alt="回复" title="回复"><em>+2</em></span>
                    <span class="message-zan"><img src="/images/home/icon/zan.png" alt="点赞" title="点赞"> <em>+2</em></span>
                    <span class="message-cai"><img src="/images/home/icon/cai.png" alt="狂踩" title="狂踩"> <em>+30</em></span>
                </p>
                <div class="layui-col-md12 reply-content">
                    <form class="layui-form">
                        <div class="layui-form-item layui-form-text">
                            <div class="layui-input-block">
                                <textarea name="content" placeholder="请输入内容" class="layui-textarea"></textarea>
                            </div>
                        </div>
                        <div class="layui-form-item" style="overflow: hidden;">
                            <div class="layui-input-block layui-input-right">
                                <button class="layui-btn layui-btn-primary" lay-filter="primary">取消</button>
                                <button class="layui-btn" lay-submit lay-filter="formDemo">发表</button>
                            </div>
                            <div class="layadmin-messag-icon">
                                <a href="javascript:;"><i class="layui-icon layui-icon-face-smile-b"></i></a>
                                <a href="javascript:;"><i class="layui-icon layui-icon-picture"></i></a>
                                <a href="javascript:;"><i class="layui-icon layui-icon-link"></i></a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="layui-col-md12">
                    <div class="media-body-child">
                        <a href="javascript:;" class="media-left">
                            <img src="/images/home/boy_46.jpg" height="46px" width="46px">
                        </a>
                        <div class="pad-btm">
                            <p class="fontColor"><a href="javascript:;">花花</a></p>
                            <p class="min-font">
                     <span class="layui-breadcrumb" lay-separator="-">
                        <a href="javascript:;" class="layui-icon layui-icon-cellphone"></a>
                        <a href="javascript:;">从移动</a>
                        <a href="javascript:;">11分钟前</a>
                      </span>
                            </p>
                        </div>
                        <p class="message-text"><strong>@猪猪:</strong>
                            再献新作品—OLED电视A8F完美诞生。很开心一起参加了A8F的“首映礼”！[鼓掌]正如我们演员对舞台的热爱，索尼对科技与艺术的追求才创造出了让人惊喜的作品。作为A1兄弟款，A8F沿袭了黑科技“屏幕发声技术”和高清画质，色彩的出众表现和高端音质，让人在体验的时候如同身临其境。A8F，这次的“视帝”要颁发给你！
                            索尼官网预售： O网页链接 索尼旗舰店预售：</p>
                        <p class="message-action">
                            <span class="message-reply"><img src="/images/home/icon/reply.png" alt="回复" title="回复"><em>+2</em></span>
                            <span class="message-zan"><img src="/images/home/icon/zan.png" alt="点赞" title="点赞"> <em>+2</em></span>
                            <span class="message-cai"><img src="/images/home/icon/cai.png" alt="狂踩" title="狂踩"> <em>+30</em></span>
                        </p>
                        <div class="layui-col-md12 reply-content">
                            <form class="layui-form">
                                <div class="layui-form-item layui-form-text">
                                    <div class="layui-input-block">
                                        <textarea name="content" placeholder="请输入内容" class="layui-textarea"></textarea>
                                    </div>
                                </div>
                                <div class="layui-form-item" style="overflow: hidden;">
                                    <div class="layui-input-block layui-input-right">
                                        <button class="layui-btn layui-btn-primary" lay-filter="primary">取消</button>
                                        <button class="layui-btn" lay-submit lay-filter="formDemo">发表</button>
                                    </div>
                                    <div class="layadmin-messag-icon">
                                        <a href="javascript:;"><i class="layui-icon layui-icon-face-smile-b"></i></a>
                                        <a href="javascript:;"><i class="layui-icon layui-icon-picture"></i></a>
                                        <a href="javascript:;"><i class="layui-icon layui-icon-link"></i></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="media-body">
                <a href="javascript:;" class="media-left">
                    <img src="/images/home/boy_46.jpg" height="46px" width="46px">
                </a>
                <div class="pad-btm">
                    <p class="fontColor"><a href="javascript:;">花花</a></p>
                    <p class="min-font">
                     <span class="layui-breadcrumb" lay-separator="-">
                        <a href="javascript:;" class="layui-icon layui-icon-cellphone"></a>
                        <a href="javascript:;">从移动</a>
                        <a href="javascript:;">11分钟前</a>
                      </span>
                    </p>
                </div>
                <p class="message-text">@索尼中国
                    再献新作品—OLED电视A8F完美诞生。很开心一起参加了A8F的“首映礼”！[鼓掌]正如我们演员对舞台的热爱，索尼对科技与艺术的追求才创造出了让人惊喜的作品。作为A1兄弟款，A8F沿袭了黑科技“屏幕发声技术”和高清画质，色彩的出众表现和高端音质，让人在体验的时候如同身临其境。A8F，这次的“视帝”要颁发给你！
                    索尼官网预售： O网页链接 索尼旗舰店预售：</p>
                <p class="message-action">
                    <span class="message-reply"><img src="/images/home/icon/reply.png" alt="回复" title="回复"><em>+2</em></span>
                    <span class="message-zan"><img src="/images/home/icon/zan.png" alt="点赞" title="点赞"> <em>+2</em></span>
                    <span class="message-cai"><img src="/images/home/icon/cai.png" alt="狂踩" title="狂踩"> <em>+30</em></span>
                </p>
                <div class="layui-col-md12 reply-content">
                    <form class="layui-form">
                        <div class="layui-form-item layui-form-text">
                            <div class="layui-input-block">
                                <textarea name="content" placeholder="请输入内容" class="layui-textarea"></textarea>
                            </div>
                        </div>
                        <div class="layui-form-item" style="overflow: hidden;">
                            <div class="layui-input-block layui-input-right">
                                <button class="layui-btn layui-btn-primary" lay-filter="primary">取消</button>
                                <button class="layui-btn" lay-submit lay-filter="formDemo">发表</button>
                            </div>
                            <div class="layadmin-messag-icon">
                                <a href="javascript:;"><i class="layui-icon layui-icon-face-smile-b"></i></a>
                                <a href="javascript:;"><i class="layui-icon layui-icon-picture"></i></a>
                                <a href="javascript:;"><i class="layui-icon layui-icon-link"></i></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="layui-row message-content-btn">
                <a href="javascript:;" class="layui-btn">更多</a>
            </div>
        </div>

    </div>
</div>
<script>
    $('.message-reply').on('click',function () {
        $(this).parent().next().toggle();
    });
    $('.message-zan').on('click',function () {
        layer.msg('点赞加1,变红');
        //$.ajax();
        var html = '<img src="/images/home/icon/zan_red.png" alt="点赞" title="点赞"><em class="succeed">+3</em>';
        $(this).html(html);
    });
    $('.message-cai').on('click',function () {
        layer.msg('踩加1,变红');
        var html = '<img src="/images/home/icon/cai_red.png" alt="狂踩" title="狂踩"><em class="succeed">+31</em>';
        $(this).html(html);
    });
    $('.layui-btn-primary').on('click',function () {
        $(this).parents('.reply-content').hide();
        return false;
    })
</script>
