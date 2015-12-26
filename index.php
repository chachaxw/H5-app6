<?php
require_once '../jsss/wpweixin.php';
$jssdk = new WPWEIXIN();
$signPackage = $jssdk->getSignPackage();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no">
    <meta name="apple-touch-fullscreen" content="no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <title>朋友和老友的区别，你想过吗？</title>
	<link rel="shortcut icon" href="images/thumbnail.jpg" type="image/x-icon">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/style.min.css" rel="stylesheet">
    <link href="css/page.min.css" rel="stylesheet">
</head>
<body>

    <div class="pager swiper-container swiper-container-vertical">	
        <div class="swiper-wrapper">
			<div class="loading">
				<div class="load-img animated infinite spinning"><img src="images/loading.png" width="100%" height="100%"/></div>
				<div class="load-logo">
					<img src="images/logo.png" width="100%" height="100%"/>
				</div>
			</div>
            <!-- page 1 -->
            <div class="swiper-slide page1 swiper-slide-active" style="height: 971px;">
                <div class="content">
                    <div class="title ani" swiper-animate-effect="fadeInDown" swiper-animate-duration="0.5s" swiper-animate-delay="0.4s"></div>
                    <div class="people ani" swiper-animate-effect="fadeInRight" swiper-animate-duration="0.5s" swiper-animate-delay="0.8s"></div>
					<div class="phone ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.5s" swiper-animate-delay="1.2s">
						<div class="video"><img src="images/1_screen.png"></div>
					</div>
					<div class="daban ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.5s" swiper-animate-delay="1.2s"></div>
                </div>
            </div>

            <!-- page 2 -->
            <div class="swiper-slide page2 swiper-slide-next" style="height: 971px;">
                <div class="content">
                    <div class="title ani" swiper-animate-effect="fadeInDown" swiper-animate-duration="0.5s" swiper-animate-delay="0.4s"></div>
					<div class="people ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.5s" swiper-animate-delay="0.8s"></div>
					<div class="phone ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.5s" swiper-animate-delay="1.2s" style="bottom: 0.5rem">
						<div class="video"><img src="images/2_screen.png" class="animated "></div>
					</div>
                </div>
            </div>
			
			<!-- page 3 -->
            <div class="swiper-slide page3 swiper-slide-next" style="height: 971px;">
                <div class="content">
                    <div class="title ani" swiper-animate-effect="fadeInDown" swiper-animate-duration="0.5s" swiper-animate-delay="0.4s"></div>
					<div class="tv ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.5s" swiper-animate-delay="0.8s">
						<div class="screen"><img src="images/3_screen.jpg" width="100%" height="100%"></div>
					</div>
					<div class="left ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.5s" swiper-animate-delay="1.2s"></div>
					<div class="right ani" swiper-animate-effect="fadeInRight" swiper-animate-duration="0.5s" swiper-animate-delay="1.2s"></div>
                </div>
            </div>

			<!-- page 4 -->
            <div class="swiper-slide page4 swiper-slide-next" style="height: 971px;">
                <div class="content">
                    <div class="text ani" swiper-animate-effect="fadeInDown" swiper-animate-duration="0.5s" swiper-animate-delay="0.4s"></div>
					<div class="phone ani" swiper-animate-effect="fadeInRight" swiper-animate-duration="0.5s" swiper-animate-delay="0.4s"></div>
					<div class="video ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.5s" swiper-animate-delay="0.8s" data-vu="7b569d93fd" id="video">
						<img src="images/4_poster.png"/>
					    <div class="play"><img src="images/4_play.png" width="100%" height="100%"/></div>
					</div>
					<div class="other ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.5s" swiper-animate-delay="1.2s">
						<div><a href="http://mp.weixin.qq.com/s?__biz=MzIzNTA1NDcyMg==&mid=401690689&idx=1&sn=6041b64bb39cfc0c9e0293ada026a4dd#rd"><img src="images/4_cam.png"/><br>我也要做电影</a></div>
						<div><a href="http://www.lagou.com/center/company_96895.html"><img src="images/4_pin.png"/><br>成为剪辑师</a></div>
					</div>
					<a class="logo ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.5s" swiper-animate-delay="1.2s" href="http://www.ifilmo.com">
					</a>
                </div>
            </div>
			
        </div>
    </div>
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/swiper.animate.min.js"></script>
	<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script> 
    <script>
        $(function() {
            //生成swiper
            var mySwiper = new Swiper('.swiper-container', {
                direction: 'vertical',
                mousewheelControl : true,
                onInit: function(swiper){ //Swiper2.x的初始化是onFirstInit
	                $(".loading").delay(0).fadeIn("slow");
                	$(".loading").delay(2000).fadeOut("slow");
                    swiperAnimateCache(swiper); //隐藏动画元素 
                    swiperAnimate(swiper); //初始化完成开始动画
                }, 
                onSlideChangeEnd: function(swiper){ 
                    swiperAnimate(swiper); //每个slide切换结束时也运行当前slide动画
                }  
            });
        });
    </script>
    <script type="text/javascript">
        var videoIframeCode='<iframe src="http://yuntv.letv.com/bcloud.html?uu=ncelvpgmun&vu=[1]&pu=af8a728ce2&auto_play=1&gpcflag=1&width=[width]&height=[height]"'+
                    'style="border:none;width:560px;height:316px;margin: auto;position: absolute;top: 0;bottom: 0;left: 0;right: 0;"></iframe>';
        $('.play').click(function() {
            var width = 560;
            var height = 316;
            var ratio = width / height;
            width = $('#video').width();
            height = width / ratio;
            $("#video").html(
				videoIframeCode.replace('[1]',$("#video").data('vu'))
                .replace('[width]', width).replace('[height]', height)
            );
            $("#video").find('iframe').css('width', width).css('height', height);
        });
    </script>
	<script>
		$(function() {
			$(".poster-anniversary").css("display","inline-table");
			/*微信分享自定义*/
			wx.config({
				appId: '<?php echo $signPackage["appId"];?>',
				timestamp: '<?php echo $signPackage["timestamp"];?>',
				nonceStr: '<?php echo $signPackage["nonceStr"];?>',
				signature: '<?php echo $signPackage["signature"];?>',
				jsApiList: [
				// 所有要调用的 API 都要加到这个列表中
				"getNetworkType",
				"onMenuShareTimeline",
				"onMenuShareAppMessage"
				]
			});
			wx.ready(function () {
				// 在这里调用 API
				wx.getNetworkType({
					success: function (res) {
					},
					fail: function (res) {
						console.log(JSON.stringify(res));
					}
				});
				var shareData = {
					title:'朋友和老友的区别，你想过吗？',
					desc: '见面的日子越来越少，但是情分却越来越深，看到这个，就想起了你们。',
					link: 'http://m.ifilmo.com/lybd/index.php',
					imgUrl: 'http://m.ifilmo.com/lybd/images/thumbnail.jpg'
				};
				wx.onMenuShareAppMessage(shareData);
				wx.onMenuShareTimeline(shareData);
			});
			wx.error(function(res){
				console.log("wx err:"+res);
			});
		});
	</script>
    <style type="text/css">
        /* 样式放在结尾，防止 base64 图片造成拥塞 */
        
        @-webkit-keyframes rotation {
            10% {
                transform: rotate(90deg);
                -webkit-transform: rotate(90deg)
            }
            50%,
            60% {
                transform: rotate(0deg);
                -webkit-transform: rotate(0deg)
            }
            90% {
                transform: rotate(90deg);
                -webkit-transform: rotate(90deg)
            }
            100% {
                transform: rotate(90deg);
                -webkit-transform: rotate(90deg)
            }
        }
        
        @keyframes rotation {
            10% {
                transform: rotate(90deg);
                -webkit-transform: rotate(90deg)
            }
            50%,
            60% {
                transform: rotate(0deg);
                -webkit-transform: rotate(0deg)
            }
            90% {
                transform: rotate(90deg);
                -webkit-transform: rotate(90deg)
            }
            100% {
                transform: rotate(90deg);
                -webkit-transform: rotate(90deg)
            }
        }
        
        #orientLayer {
            display: none;
        }
        
        @media screen and (max-width: 990px) {
            @media screen and (min-aspect-ratio: 13/9) {
                #orientLayer {
                    display: block;
                }
            }
        }
        
        .mod-orient-layer {
            position: fixed;
            height: 100%;
            width: 100%;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            background: #000;
            z-index: 9997
        }
        
        .mod-orient-layer__content {
            position: absolute;
            width: 100%;
            top: 45%;
            margin-top: -75px;
            text-align: center
        }
        
        .mod-orient-layer__icon-orient {
            background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIYAAADaCAMAAABU68ovAAAAXVBMVEUAAAD29vb////x8fH////////x8fH5+fn29vby8vL////5+fn39/f6+vr////x8fH////////+/v7////09PT////x8fH39/f////////////////////x8fH///+WLTLGAAAAHXRSTlMAIpML+gb4ZhHWn1c2gvHBvq1uKJcC6k8b187lQ9yhhboAAAQYSURBVHja7d3blpowFIDhTUIAOchZDkre/zE7ycySrbUUpsRN2/1fzO18KzEqxEVgTiZNfgmmtxRc8iaR8HNe8x4BtjQePKayYCIoyBSgvNNE1AkNSHqZyLqk97EgUCCHBzZ5mkg7ScvIJuIyOyXBRFxgpqWZyGsAZLB1KjsJi8nutHU4JCRbFRH8tmirI9k8Jx2sqNs8K/m0LQkrktO2crgcgXGB4AiTEsB0hJfo9MGgX7CGcYiYwQxmMOOvZwRhBG8tCoMXjBDeXvWCEcHbi14wgCBmMIMZzGAGM5jxETNwzMAxA8cMHDNwzMAxA8cMHDNwzMAxA8cMHDNwzMAxY6E2rUQxnH2tz9cirlJFwFBJedaPnUv0M7++egPDE8iAJcIDmxwH5wwv9vUviw2kLbVO3TJU5uul/EyB0FoLp4x60PdGUd3qPurrWyjGGTc05u+1dcgI7/+tCCPARWGhH7o5Y7RCf+bH9ctXLp6v2BVDxfqz0oPXeSVaNtINo/1SXDv4dck8IIkbhtC2ol+iouEonTBCbYvVMnXOjxww6s/RFrBUpXHh/gw1rHj5d/qhYn9Gpk2FWh6xRBRX5Oj3Znh2Sq49/L6+y8pB26q9GbE2dbA2mVbx6I+7MfBglLCttm73ZQi7AD3iL4HqjFYJHSPRppqaUaJ3ATpGa+ckpGak2hRRMyqjGMkvl+xyFeSMwjAqcsZgGDdyhl0oNTnDN4yenJGZFGxNChP5/Y3efh6SM2rDOJMzboYxkDMqwyjIGcIw6F+io2FU1IxIm1JqRmgXSkvNKNCXeTpGrU0JNSO2c6LIGPgCS8AuDHz9ta0SXWDtxoDRH+MqlbC2Dt2G2JFRadtQZt2qq/orGowdGb2euxYiqWEpVWhTBnszoNAPdStuQwxqf0aocdWKW4Z+DfszIh8pxJqbuCE4YAC+4bm0evtipjpgJHeFnyyt1Ku2xa0bhjxr27p75rECNwyI9ZwvXkHq+7aTaMEV44YYy/spfgjgjNHaWW+GeUhGEX7tLlVinIFDDSgnOwhi1V6bU0b6tVS9eAERe863g4dRrtiHdc6o+nn5vtyVVgR79Cqt4uL6gfHPQyGqtP2vf7HADGbcYwaOGThm4JiBYwaOGThm4JiBYwaOGThm4JiBYwaOGThm4JiBYwaOGThm4JjhtOM+J/AgT008yDMkN/dPP9hzS8zAMQN3OEYeekp5YU7KOKXwVXqiY+QS7smcinGKABWdiBgpPJTSMHJ4KidhhPBUSMLw4CmPhKHgKUXCkHsygum71ftNSgCX6bsl8FQyfbcL5EdYsDk0R3j7aiA5wpt5AjKg/2gLJEBD/0Hf2OOf/vRrj6z/7GtP4B3nMKyjHA12kIPSjnJs3FEO0TvKkYJHOWCR+rjJH0Vn6fI5PjNbAAAAAElFTkSuQmCC');
            display: inline-block;
            width: 67px;
            height: 109px;
            transform: rotate(90deg);
            -webkit-transform: rotate(90deg);
            -webkit-animation: rotation infinite 1.5s ease-in-out;
            animation: rotation infinite 1.5s ease-in-out;
            -webkit-background-size: 67px;
            background-size: 67px
        }
        
        .mod-orient-layer__desc {
            margin-top: 20px;
            font-size: 15px;
            color: #fff
        }
    </style>
    <!--DOM在CSS后避免reflow-->
    <div id="orientLayer" class="mod-orient-layer">
        <div class="mod-orient-layer__content"> <i class="icon mod-orient-layer__icon-orient"></i>
            <div class="mod-orient-layer__desc">为了更好的体验，请使用竖屏浏览</div>
        </div>
    </div>
</body>
</html>