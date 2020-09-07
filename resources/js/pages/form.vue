<template>
    <div class="create">
        <div class="container">
            <div class="create__box">
                <form
                    class="form-add"
                    method="post"
                    action="/create"
                >
                    <p class="form-add__text">
                        Title
                    </p>
                    <input
                        type="text"
                        name="title"
                        class="form-add__input"
                    >
                    <p class="form-add__text">
                        Category
                    </p>
                    <input
                        type="text"
                        name="category_id"
                        class="form-add__input"
                    >
                    <p class="form-add__text">
                        Content
                    </p>
                    <textarea
                        rows="7"
                        name="content"
                        class="form-add__input"
                    />
                    <button class="form-add__btn">
                        Create
                    </button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'FormPage'
}
</script>

