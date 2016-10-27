

<template>

<div class="brand-list">


    <section class="brand-list-item" :style="brands[0]" @click='to'>
        <span class="brand-title">Brand Title</span>
    </section>
    <section class="brand-list-item" :style="brands[1]" @click='to'>
        <span class="brand-title dk">Brand Title</span>
    </section>
    <section class="brand-list-item" :style="brands[2]" @click='to'>
        <span class="brand-title">Brand Title</span>
    </section>
    <section class="brand-list-item" :style="brands[3]" @click='to'>
        <span class="brand-title">Brand Title</span>
    </section>

</div>

</template>

<script>

import brand from './brand.vue';


export default {
    data: function() {
        return {
          brands:[
            "background-image:url('/image/brand1.jpg')",
            "background-image:url('/image/brand2.jpg')",
            "background-image:url('/image/brand3.jpg')",
            "background-image:url('/image/brand4.jpg')"
          ]
        }
    },

    ready() {
        console.log('Component ready.')
    },
    components: {
        brand
    },
    methods: {
        to: function() {

            this.$router.push('brand')
        }
    }

}

</script>
