<template>
<div>
  <h1>TO DO LIST</h1>
  <ul>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
  </ul>
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

