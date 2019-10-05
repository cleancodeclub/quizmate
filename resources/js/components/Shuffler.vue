<template>
  <div>
    Api Shuffler
    <div>
      Data:
      <div v-for="category in categories" :key="category.id">{{ category }}</div>
    </div>
    <button @click="getAllCatagories">Get Categories</button>
  </div>
</template>

<script>
import axios from "axios";
export default {
  name: "shuffler",

  data() {
    return {
      categories: []
    };
  },

  methods: {
    async getAllCatagories() {
      const res = await axios.post("http://quiz-mate-server.test/graphql", {
        query: `{
            allCategories {
              name
            }
          }`
      });
      this.categories = res.data.data;
      console.log(res.data);
    }
  }
};
</script>
