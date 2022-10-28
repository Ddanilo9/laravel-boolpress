<template>
<div>
    <h1>{{title}}</h1>
    <ul>
        <li v-for="post in posts" :key="post.id">
            {{post.title}}
        </li>
    </ul>
</div>
</template>

<script>
export default {
data(){
    return{
        'title': 'ciao',
        posts: []
    }
},
methods: {
    fetchPosts(){
        axios.get('/api/posts').then((res) =>{
            const {posts} = res.data
            // console.log(res.data)
            this.posts = posts
        })
    }
},
beforeMount(){
    this.fetchPosts()
}
}
</script>

<style>

</style>