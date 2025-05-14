<template>
    <div>
        <h2>Heading of the program is: {{ title }}</h2>
        <a :href="route('create')">Create</a>
        <index/>
    </div>
</template>

<script>
import Master from '../Layout/Master.vue'; 
export default {
    layout: Master,
components:{ 
},
    props:['title'],
    setup () {
        

        return {}
    }
}
</script>

<style lang="scss" scoped>

</style>