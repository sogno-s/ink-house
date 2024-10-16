<template>

    <button>{{tittle}}</button>

</template>

<style scoped>

button {
  color: #598D66;
  width: 100%;
  height: 100%;
  border: 1px solid #598D66;
  background: transparent;
  cursor: pointer;
}
button:hover{
  color: #F4F6F5;
  background: #598D66;
}
button:active{
  color: #F4F6F5;
  background: #376B44;
}


</style>
<script setup>

  import {computed} from "vue";

  const props = defineProps({
    titleBtn: {
      type: String,
      required: true
    },
    methodRequest: {
      type: String,
      required: false
    }
  })

  const tittle = computed(()=>props.titleBtn)
  const method = computed(()=> props.methodRequest)

  if (method === 'loginUser'){
    //
  }
</script>