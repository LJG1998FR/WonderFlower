<template>
    <h2>Bienvenue sur WonderFlower!</h2>

    <p>Bienvenue sur WonderFlower! Ici, vous pouvez consulter et acheter nos magnifiques fleurs!</p>

    <h3>Voici nos derniers articles:</h3>

    <div class="recentsarticles_container">
        TEMP
    </div>

</template>

<script setup>

    import {watch} from "vue";
    import {throttle} from "lodash/function";
    import {Inertia} from "@inertiajs/inertia";

    /**
     * Watcher for params
     * Make an Inertia request with cleaned params
     */


    const props = defineProps({
        username: String,
        recentArticles: Object
    });
    


    watch([], throttle(function (){
        //clean empty params
        let my_params = [];

        //request
        Inertia.get(route('app_home'), my_params, {replace:true, preserveState:true})
    }, 300), {deep:true})

    const recentArticles = props.recentArticles;
</script>