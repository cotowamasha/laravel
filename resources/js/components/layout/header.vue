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
                        <div
                            v-if="i === 3 ? user.is_admin : true"
                            :class="['menu__item', route === item.to ? 'active' : '' ]"
                        >
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
                    <a
                        v-if="!auth"
                        href="/sign-in"
                        class="header__sign-in-btn">
                        Sign in
                    </a>
                    <a
                        v-else
                        @mouseenter="hoverBlock = true"
                        href="/profile"
                        class="header__sign-in-btn"
                    >
                        {{ user.name }}
                    </a>
                    <div
                        class="header__avatar"
                        v-if="user.avatar"
                        :style="`background: url(${user.avatar})no-repeat`"
                    />
                    <div
                        v-if="auth && hoverBlock"
                        @mouseleave="hoverBlock = false"
                        class="header__logout"
                    >
                        <form
                            action="/logout"
                            method="post"
                        >
                            <a
                                href="/profile"
                            >
                                your profile
                            </a>
                            <input
                                type="hidden"
                                name="_token"
                                :value="token"
                            >
                            <button>
                                logout
                            </button>
                        </form>
                    </div>
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
      },
    auth: {
        type: String,
        default: ''
    },
    token: {
        type: String,
        default: ''
    }
    },
      data () {
        return {
            menu: [
                { name: 'News', to: '/' },
                { name: 'About', to: '/about' },
                { name: 'Contacts', to: '/contacts' },
                { name: 'Admin', to: '/admin', admin: true }
            ],
            user: '',
            hoverBlock: false
        }
      },
    mounted() {
      this.authParse()
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
      },

        authParse () {
          if (this.auth) {
              let auth = JSON.parse(this.auth)
              this.user = auth
          }
        }
    }
}
</script>

