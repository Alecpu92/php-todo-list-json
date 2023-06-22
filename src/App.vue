<template>
<div>
  <h1>TO DO LIST</h1>
  <ul>
    <li
      v-for="(list, index) in lists"
      :key="index"
    >
    {{ list.name }}
    </li>
    
  </ul>
</div>
</template>

<script>
  import axios from 'axios';
  export default {
    data() {

      return{
        lists: []
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

