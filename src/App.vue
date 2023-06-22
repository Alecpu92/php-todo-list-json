<template>
<div>
  <h1>Hello World</h1>
</div>

<script>
  import axios from 'axios';
  export default {
    mounted() {

      axios.get('http://localhost/php-todo-list-json')
           .then(r => {
            console.log(JSON.stringify(r));
           })
    }
  }
</script>
</template>
