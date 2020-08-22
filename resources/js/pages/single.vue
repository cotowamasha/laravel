<template>
  <div class="single">
      <div class="container">
          <div
              v-if="!newsSingle"
              class="index__box empty"
          >
              sorry :( that news is null!
          </div>
          <div
              v-else
              class="index__box"
          >
              <div class="single__title">
                  {{ newsSingle.title }}
              </div>
              <img :src="`/img/news/${newsSingle.img}`">
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

