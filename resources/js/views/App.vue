<template>
    <div>
        <Nav />
        <router-view></router-view>
        <!-- <section class="mb-12">
            <div class="container">
                <h1>{{ title }}</h1>
            </div>
        </section>

        <section class="py-12">
            <div class="container">
                <div class="grid grid-cols-3 gap-8">
                    <PostCard
                        v-for="post in posts"
                        :key="post.id"
                        :post="post"
                    />
                </div>
            </div>

            <div class="container pt-12">
                <ul class="flex gap-6 justify-center">
                    <li @click="fetchPosts(page)"
                        :class="{
                            'w-8 h-8 flex items-center justify-center rounded-full': true,
                            'bg-amber-400': page === currentPage,
                            'bg-gray-100 cursor-pointer hover:bg-amber-300': page !== currentPage}"
                        v-for="page in lastPage"
                        :key="page"
                    >
                        {{ page }}
                    </li>
                </ul>
            </div>
        </section> -->
    </div>
</template>

<script>
import Nav from '../components/Nav.vue'

export default {
    components: {
        Nav
    },
}

</script>


