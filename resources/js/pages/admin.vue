<template>
  <div class="admin">
      <div class="container">
          <div class="admin__box">
              <a
                  v-for="(item, i) of menu"
                  :key="i"
                  :href="item.to"
                  class="admin__link"
              >
                  {{ item.name }}
              </a>
          </div>
      </div>
  </div>
</template>

<script>
  export default {
    name: "admin",
      data () {
        return {
            menu: [
                {
                    name: 'Add a post',
                    to: '/change/create'
                },
                {
                    name: 'Change posts',
                    to: '/change'
                },
                {
                    name: 'Change users',
                    to: '/change/users'
                },
                {
                    name: 'Parse news',
                    to: '/change/parser'
                }
            ]
        }
      }
  }
</script>
