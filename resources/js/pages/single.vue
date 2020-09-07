<template>
  <div class="single">
      <div class="container">
          <div
              class="index__box"
          >
              <div class="single__title">
                  {{ newsSingle.title }}
              </div>
              <img
                  v-if="newsSingle.img"
                  :src="`/img/news/${newsSingle.img}`"
              >
              <div class="single__content">
                  {{ newsSingle.content }}
              </div>
          </div>
      </div>
  </div>
</template>

<script>
  export default {
    name: "SinglePage",
      data () {
          return {
              newsSingle: vueData.newsSingle
          }
      }
  }
</script>

