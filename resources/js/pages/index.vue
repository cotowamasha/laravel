<template>
  <div class="index">
      <div class="container">
          <div class="index__box">
              <div class="index__news">
                  <news
                      v-for="(item, i) in news"
                      :key="i"
                      :item="item"
                      :categories="categories"
                  />
              </div>
          </div>
      </div>
  </div>
</template>

<script>
  import News from "../components/page-parts/index/news"

  export default {
    name: 'IndexPage',
      components: {
        News
      },
      data () {
        return {
            news: vueData.news,
            categories: vueData.categories
        }
      }
  }
</script>

