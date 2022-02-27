<template>
    <ul class="metismenu" id="menu">
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Home</div>
            </a>
            <ul>
                <li>
                    <router-link :to="{name: 'home'}">Chat</router-link>
                </li>
            </ul>
        </li>
    </ul>
</template>

<script>
export default {
    name: "Index"
}
</script>

<style scoped>

</style>
