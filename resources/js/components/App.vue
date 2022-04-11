<template>
  <div class="container mt-5 text-center">
      <h1>Post presenti nel sito</h1>
      <myMain/>
  </div>
</template>

<script>
import myMain from './myMain';
// importo component
export default {
    name: 'App',
    components : {
      myMain,
    }
     
}
</script>

<style>
</style>