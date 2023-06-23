<template>
<h1>TO DO LIST</h1>
<ul>
  <li
  v-for="(list, i) in lists"
  :key="i"
  >
  {{ list.name }}

</li>
</ul>
</template>

<script>
import axios from 'axios';

export default {
  data() {

    return {
      lists: []
    };
  },
  mounted() {
    
    axios.get("http://loalhost/tmp/php/index.php")
    .then(res => {

      const data = res.data;
      this.lists = data;
    });
  }

}


</script>

