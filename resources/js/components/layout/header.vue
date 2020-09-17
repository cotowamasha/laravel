<template>
    <div class="header">
        <div class="container">
            <div class="header__box">
                <a href="/">
                    <img src="/img/logo-sm.png">
                </a>

                <nav class="header__menu menu">
                    <a
                        v-for="(item, i) of menu"
                        :key="i"
                        :href="item.to"
                    >
                        <div :class="['menu__item', route === item.to ? 'active' : '' ]">
                            {{ item.name }}
                        </div>
                    </a>
                </nav>

                <div class="header__sign-in">
                    <button
                        @click="openSearch()"
                        class="header__btn-search"
                    >
                        <i class="fas fa-search"></i>
                    </button>
                    <div class="line" />
                    <button class="header__sign-in-btn">
                        Sign in
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { mapMutations } from 'vuex'
export default {
  name: "HeaderPart",
    props: {
      route: {
          type: String,
          default: '/'
      }
    },
  data () {
    return {
        menu: [
            { name: 'News', to: '/' },
            { name: 'About', to: '/about' },
            { name: 'Contacts', to: '/contacts' },
            { name: 'Admin', to: '/admin' }
        ]
    }
  },
    methods: {
      ...mapMutations('layout', ['CHANGE_STATE']),

      openSearch () {
          this.CHANGE_STATE({
              type: 'search',
              data: {
                  bg: true,
                  box: true
              }
          })
      }
    }
}
</script>

