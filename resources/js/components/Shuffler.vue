<template>
  <ApolloQuery :query="$options.query">
    <template slot-scope="{result: {loading, data, error}}">
      <div v-if="loading">Loading...</div>
      <div v-else-if="data">
        <div v-for="category in data" :key="category.id">
          <p>Category: {{category.name}}</p>
          <p>Description: {{category.description}}</p>
          <p>ID: {{category.id}}</p>
        </div>
        {{ data.id }}
      </div>
      <div v-else>{{ error }}</div>
    </template>
  </ApolloQuery>
</template>

<script>
import gql from "graphql-tag";
export default {
  query: gql`
    query getCategories {
      allCategories {
        id
        name
        description
      }
    }
  `
};
</script>
