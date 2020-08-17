<template>
    <div class="header">
        <div class="container">
            <div class="header__box">
                <router-link to="/">
                    <img src="/img/logo.png">
                </router-link>

                <div class="header__menu menu">
                    <router-link
                        v-for="(item, i) of menu"
                        :key="i"
                        :to="item.to"
                    >
                        <div :class="['menu__item', getRoute === item.to ? 'active' : '']">
                            {{ item.name }}
                        </div>
                    </router-link>
                </div>

                <div class="header__sign-in">
                    <button class="header__btn-search">
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
export default {
  name: "Header",
  data () {
    return {
        menu: [
            { name: 'News', to: '/' },
            { name: 'About', to: '/about' },
            { name: 'Contacts', to: '/contacts' }
        ]
    }
  },
  computed: {
      getRoute () {
          return this.$route.path;
      }
  }
}
</script>

