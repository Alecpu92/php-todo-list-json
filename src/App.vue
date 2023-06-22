<template>
<div>
  <h1>Hello World</h1>
</div>
</template>

<script>
  import axios from 'axios';
  export default {
    data() {

      return{
        listToDo: []
      };
    }, 
    mounted() {

      axios.get('http://localhost/php-todo-list-json')
           .then(r => {
            console.log(JSON.stringify(r));
           })
    }
  }
</script>

