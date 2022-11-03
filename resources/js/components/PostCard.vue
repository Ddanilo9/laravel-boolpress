<template>
  <article class="relative">
    <img v-if="post.cover" :src="`/images/${post.cover}`" alt="">

    <div class="p-4 mt-2">
        <h3>{{post.title}}</h3>
        <p v-if="post.category" class="text-amber-600 text-sm my-1">{{post.category.name}}</p>
        <Tags :tags="post.tags" />
        <p>{{post.created_at}}</p>
    </div>

  </article>
</template>

<script>
import Tags from './Tags.vue';

export default {
    components: {
        Tags
    },
    props:{
        post:{
            type: Object,
            required: true
        }
    }
}
</script>

<style>

</style>