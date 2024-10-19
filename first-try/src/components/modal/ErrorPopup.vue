<template>
  <div v-if="visible" class="error-popup">
    <p>{{ message }}</p>
  </div>
</template>

<script setup>
import { ref } from 'vue';

const props = defineProps({
  message: {
    type: String,
    required: true
  }
});

const visible = ref(true);
console.log(props.message)
// const message = props.message
setTimeout(() => {
  visible.value = false;
}, 5000);
</script>

<style scoped>
.error-popup {
  position: fixed;
  width: 25rem;
  height: 6rem;
  bottom: 20px;
  right: 20px;
  background-color: #c58787;
  color: #1a0c0c;
  text-align: center;
  padding: 10px 20px;
  border-radius: 5px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
}
</style>