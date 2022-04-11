<template>
    <main>
        <h1>posts</h1>
    </main>
</template>

<script>
export default {
    name: 'myMain',
    //data
    data (){
        return {

        }
    },

    methods: {
        // metodo per chiamata axios
        getApi(){
            //rotta definita in api.php
            axios.get('/api/posts')
                .then((response) => {
                    // handle success
                    console.log(response);
            })
        }
    },
    // alla creazione lancia chiamata axios
    created(){
        this.getApi()
    }
}
</script>

<style>

</style>