<template>
    <div>
        <section>
            <div class="container">
                <h1>pagina di dettaglio</h1>
                <p>{{slug}}</p>
            </div>
        </section>
    </div>
</template>

<script>
export default {
    props: ['slug'],

    data() {
        return {
            post: null,
        };
    },
    methods: {
        fetchPost() {
            // const slug = this.$route.params.slug
            axios
                .get(`/api/posts/${this.slug}`)
                .then((res) => {
                    console.log(res.data);
                    //salva
                })
                .catch((err) => {
                    console.log(err);
                }); //redirect
        },
    },
    beforeMount() {
        this.fetchPost();
    },
};
</script>

<style></style>
