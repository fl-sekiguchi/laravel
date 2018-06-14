<template>
  <div>
    <p>{{data}}</p>
    <ul>
      <li v-for="pitcher in pitchers" v-bind:key="pitcher.key">{{pitcher.name}}</li>
    </ul>
  </div>
</template>
<script>
export default {
  async asyncData({app}) {
    let [data, pitchers] = await Promise.all([
      app.$axios.$get('http://localhost:8000/api'),
      app.$axios.$get('http://localhost:8000/api/pitcher')
    ])
    return {data, pitchers}
  }
}
</script>
