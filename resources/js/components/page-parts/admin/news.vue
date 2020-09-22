<template>
  <div class="admin-news">
      <a
          :href="`/change/destroy/${item.id}`"
          class="delete"
      >
          <i class="fas fa-times" />
      </a>
      <div>
          <div class="admin-news__title">
              {{ item.title }}
          </div>
          <p class="admin-news__content">
              {{ item.content }}
          </p>
          <a
              :href="`/change/edit/${item.id}`"
              class="change"
          >
              Change the post
          </a>
      </div>
  </div>
</template>

<script>
  export default {
    name: 'AdminNews',
      props: {
        item: {
            type: Object,
            default: () => ({})
        }
      }
  }
</script>
