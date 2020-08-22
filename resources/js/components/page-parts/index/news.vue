<template>
    <a :href="`/news/${item.id}`">
        <div class="news">
            <div
                :style="`background: url('/img/news/${item.img}')`"
                class="news__img"
            />
            <div class="news__content">
                <div class="news__category">
                    {{ category === '' ? categoryName(item.id) : category }}
                </div>
                <div class="news__title">
                    {{ item.title }}
                </div>
                <div class="news__text">
                    {{ item.content }}
                </div>
            </div>
        </div>
    </a>
</template>

<script>
export default {
    name: 'News',
    props: {
        item: {
            type: Object,
            default: () => ({})
        },
        categories: {
            type: Array,
            default: () => ([])
        },
        category: {
            type: String,
            default: ''
        }
    },
    methods: {
        categoryName (id) {
            for (let i = 0; i < this.categories.length; i++) {
                if (this.categories[i].id === id) {
                    return this.categories[i].name
                }
            }
        }
    }
}
</script>

