<template>
 <div class="d-flex justify-content-end mb-4" id="app">
<div class="msg_cotainer_send">
           <slot></slot>
<span class="msg_time_send"></span>
</div>
<div class="img_cont_msg">
<img src="images/boy.png" class="rounded-circle user_img_msg">
</div>
</div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
