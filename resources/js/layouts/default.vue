<template>
    <div class="wrapper">
        <Header />
        <router-view />
        <Footer />
    </div>
</template>

<script>
import Header from '../components/layout/header'
import Footer from '../components/layout/footer'

export default {
  name: 'DefaultLayout',
    components: {
        Footer,
        Header
  }
}
</script>
