<style lang="css">



</style>

<template lang="html">

<div class="brand">
    <mt-loadmore :top-method="loadTop" ref="loadmore">

        <section class="brand-carousel" :style="carousel__container_height">

            <mt-swipe :auto="0">
                <mt-swipe-item>
                    <div class="img-holder" style="background-image:url('/image/brand1.jpg')">

                    </div>
                </mt-swipe-item>
                <mt-swipe-item>
                    <div class="img-holder" style="background-image:url('/image/brand2.jpg')">

                    </div>
                </mt-swipe-item>
                <mt-swipe-item>
                    <div class="img-holder" style="background-image:url('/image/brand3.jpg')">

                    </div>
                </mt-swipe-item>
            </mt-swipe>

        </section>
        <div slot="top" class="mint-loadmore-top">
            <span v-show="topStatus !== 'loading'" :class="{ 'rotate': topStatus === 'drop' }">↓</span>
            <span v-show="topStatus === 'loading'">加载中</span>
        </div>
    </mt-loadmore>
    <section class="nav">
        <div class="btn btn-left" @click='expand_left' :class="{active: isActive}">
            <img src="/image/info.svg" alt="" />
            <span class="text">关于我们</span>
        </div>
        <div class="btn btn-right" @click='expand_right' :class="{active: !isActive}">
            <img src="/image/loc.svg" alt="" />
            <span class="text">店址</span>
        </div>

    </section>
    <section class="content">
        <div class="intro" v-if='more && left_p'>
            <p>
                This adjustable ring is a MUST HAVE piece, plated in yellow gold and adorned with a beautiful seashellpearl in white color. Best worn alone or with additional rings.
            </p>
            <p>
                An ensemble of three seashell pearls, this fancy necklace can be worn alone or stacked with other rings depending on your outfit of the day.
            </p>
        </div>
        <div class="locations" v-if='more && right_p' :style="location_height">
            <div class="addr-wrap">


                <div class="addr">
                    <p>
                        <strong>风尚国际生活中心</strong>
                    </p>
                    <p>
                        No.677 Yunle Road,Unit 76
                    </p>
                    <p>
                        上海闵行区 星中路453号4-092
                    </p>
                    <p>
                        <img src="/image/time.svg" alt="" width="20" height="20" />Everyday 7am-9pm
                    </p>

                </div>
                <div class="b-info">
                    <ul>
                        <li style="background-image:url('/image/loc_w.svg')"></li>
                        <li style="background-image:url('/image/cab.svg')"></li>
                        <li style="background-image:url('/image/wifi.svg')"></li>
                    </ul>
                </div>
            </div>
            <div class="addr-wrap">


                <div class="addr">
                    <p>
                        <strong>风尚国际生活中心</strong>
                    </p>
                    <p>
                        No.677 Yunle Road,Unit 76
                    </p>
                    <p>
                        上海闵行区 星中路453号4-092
                    </p>
                    <p>
                        <img src="/image/time.svg" alt="" width="20" height="20" />Everyday 7am-9pm
                    </p>

                </div>
                <div class="b-info">
                    <ul>
                        <li style="background-image:url('/image/loc_w.svg')"></li>
                        <li style="background-image:url('/image/cab.svg')"></li>
                        <li style="background-image:url('/image/wifi.svg')"></li>
                    </ul>
                </div>
            </div>
            <div class="addr-wrap">


                <div class="addr">
                    <p>
                        <strong>风尚国际生活中心</strong>
                    </p>
                    <p>
                        No.677 Yunle Road,Unit 76
                    </p>
                    <p>
                        上海闵行区 星中路453号4-092
                    </p>
                    <p>
                        <img src="/image/time.svg" alt="" width="20" height="20" />Everyday 7am-9pm
                    </p>

                </div>
                <div class="b-info">
                    <ul>
                        <li style="background-image:url('/image/loc_w.svg')"></li>
                        <li style="background-image:url('/image/cab.svg')"></li>
                        <li style="background-image:url('/image/wifi.svg')"></li>
                    </ul>
                </div>
            </div>
            <div class="addr-wrap">


                <div class="addr">
                    <p>
                        <strong>风尚国际生活中心</strong>
                    </p>
                    <p>
                        No.677 Yunle Road,Unit 76
                    </p>
                    <p>
                        上海闵行区 星中路453号4-092
                    </p>
                    <p>
                        <img src="/image/time.svg" alt="" width="20" height="20" />Everyday 7am-9pm
                    </p>

                </div>
                <div class="b-info">
                    <ul>
                        <li style="background-image:url('/image/loc_w.svg')"></li>
                        <li style="background-image:url('/image/cab.svg')"></li>
                        <li style="background-image:url('/image/wifi.svg')"></li>
                    </ul>
                </div>
            </div>
              <div class="addr-wrap">
                
              </div>
        </div>
    </section>
</div>

</template>

<script>

var tall = window.screen.height;
var carousel_h = tall - 83;
console.log(carousel_h);
export default {
    data: function() {
        return {
            carousel_height: carousel_h + 'px',
            more: false,
            left_p: '',
            right_p: '',
            isActive: true,
            topStatus: '',
            location_height: {
                height: tall*0.55+ 'px',
            }
        }
    },
    computed: {

        carousel__container_height: function() {
            return {
                height: this.carousel_height
            }
        }

    },
    methods: {
        expand_left: function() {
            this.carousel_height = carousel_h * 0.45 + 'px',
                this.more = true;
            this.left_p = true;
            this.right_p = false;
            this.isActive = true;
        },
        expand_right: function() {
            this.carousel_height = carousel_h * 0.45 + 'px',
                this.more = true;
            this.left_p = false;
            this.right_p = true;
            this.isActive = false;
        },
        loadTop: function(id) {
            this.carousel_height = carousel_h + 'px';
            this.$refs.loadmore.onTopLoaded(id);
        }
    }
}

</script>
