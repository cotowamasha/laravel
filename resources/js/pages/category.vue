<template>
  <div class="category">
      <div class="container">
          <div class="category__box category__title">
              Category <span>{{ category }}</span>
          </div>
          <div class="category__box">
              <news
                  v-for="(item, i) of newsByCategory"
                  :key="i"
                  :item="item"
                  :category="category"
              />
          </div>
      </div>
  </div>
</template>

<script>
  import News from "../components/page-parts/index/news"
  export default {
    name: 'CategoryPage',
      components: {
        News
      },
      data () {
          return {
              newsByCategory: vueData.newsByCategory,
              category: vueData.category
          }
      }
  }
</script>

