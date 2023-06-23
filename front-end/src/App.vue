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
 <form @submit.prevent="onSubmit">
   <label for="name">Name</label>
   <input type="text" name="name" v-model="newList.name">
   <br />
   <input type="submit" value="Inserisci">
 </form>
</template>

<script>
import axios from 'axios';

export default {
  data() {

    return {
      lists: [],

      newList: {
        name: "",
      }
    };
  },
  methods: {

    onSubmit() {

      const url = 'http://loalhost/tmp/php/newList.php';
      const data = this.newList;
      const headers = {
        headers: { 'Content-Type' : 'multipart/form-data'}

      };

      axios.post( url, data, headers)
           .then(res => {

            const data = res.data;
            console.log("data" , data); 

           })
    }

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

