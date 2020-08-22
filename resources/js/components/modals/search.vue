<template>
  <layout-modal
      :bg="search.bg"
      :box="search.box"
      @close="close"
  >
      <div class="search container">
          <div class="search__box">
              <input type="text" class="search__input">
              <div class="search__categories">
                  <a
                      v-for="(item, i) of categories"
                      :key="i"
                      :href="`/category/${item.name}`"
                  >
                      {{ item.name }}
                  </a>
              </div>
          </div>
      </div>
  </layout-modal>
</template>

<script>
    import { mapState, mapMutations } from 'vuex'
    import LayoutModal from "./layout"

  export default {
      name: "SearchModal",
      components: {
          LayoutModal
      },
      data () {
          return {
              categories: [
                  { name: 'sport' },
                  { name: 'politic' },
                  { name: 'religion' }
              ]
          }
      },
      computed: {
        ...mapState('layout', ['search'])
      },
      methods: {
        ...mapMutations('layout', ['CHANGE_STATE']),

        close () {
            this.CHANGE_STATE({
                type: 'search',
                data: {
                    bg: false,
                    box: false
                }
            })
        }
      }
  }
</script>

