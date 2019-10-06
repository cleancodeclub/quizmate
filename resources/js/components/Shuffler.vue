<template>
  <ApolloQuery :query="$options.query">
    <template slot-scope="{result: {loading, data, error}}">
      <div v-if="loading">Loading...</div>
      <div v-else-if="data">{{ data.id }}</div>
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
