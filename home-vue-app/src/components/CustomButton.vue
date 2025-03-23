<template>
    <button class="button">{{ text }}</button>
</template>

<script>
export default {
    name: 'CustomButton',
    props: ['text']
}
</script>

<style>
    .button {
        background-color: blue;
        color: white;
        border-radius: 10px;
    }
</style>