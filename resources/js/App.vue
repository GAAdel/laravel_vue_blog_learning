<template>

</template>

<script>


export default {
    created() {
      let url = window.location.pathname
      let slug = url.substring(url.lastIndexOf('/')+1)

      console.log(url)
      console.log(slug)
      this.$store.commit('SET_SLUG',slug )
      this.$store.dispatch('article/getArticleData', slug)
      this.$store.dispatch('article/viewsIncrement', slug)
  }
}
</script>

<style>

</style>