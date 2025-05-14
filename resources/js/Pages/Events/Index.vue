<template>
    <div>
        <h2>Heading of the program is: </h2>
        <a :href="route('create')">Create</a>
    </div>
</template>

<script>
import Master from '../Layout/Master.vue'; 
export default {
    layout: Master,
    
    setup () {
        

        return {}
    }
}
</script>

<style lang="scss" scoped>

</style>