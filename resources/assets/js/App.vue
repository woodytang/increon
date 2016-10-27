<template>
  <div id="app">
  
    <router-view></router-view>
  </div>
</template>
<script>
  import list from './components/list.vue';
  export default {
    name: 'app',
    components: {
      list
    }
  };
</script>
