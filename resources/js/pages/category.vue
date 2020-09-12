<template>
  <div class="category">
      <div class="container">
          <div class="category__box category__title">
              Category <span>{{ category }}</span>
          </div>
          <div class="category__box">
              <div
                  v-if="newsByCategory.length === 0"
                  class=""
              >
                  no news.
              </div>
              <div
                  v-else
                  class="category__flex"
              >
                  <news
                      v-for="(item, i) in newsByCategory"
                      :key="i"
                      :item="item"
                      :id="i"
                      :category="category"
                  />
              </div>
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

