<template>
  <div class="change">
      <div class="container">
          <div class="change__box">
              <admin-news
                  v-for="(item, i) of news"
                  :key="i"
                  :item="item"
              />
          </div>
      </div>
  </div>
</template>

<script>
import AdminNews from '../components/page-parts/admin/news'
export default {
name: 'ChangePage',
  components: {
      AdminNews
  },
  data () {
      return {
          news: vueData.news
      }
  }
}
</script>
