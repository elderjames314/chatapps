<template>
<div>
    <div class="page-wrapper" style="height: 800px">
        <div class="page-content">
            <div class="chat-wrapper">
               <UserList></UserList>
                <chat-header></chat-header>
                <chat-content></chat-content>
                <chat-footer></chat-footer>
                <!--start chat overlay-->
                <div class="overlay chat-toggle-btn-mobile"></div>
                <!--end chat overlay-->
            </div>
        </div>
    </div>
</div>
</template>

<script>
import ChatContent from "./chats/ChatContent";
import UserList from "./chats/UserList";
import ChatHeader from "./chats/ChatHeader";
import ChatFooter from "./chats/ChatFooter";
export default {
    name: "Home",
    components: {ChatFooter, ChatHeader, UserList, ChatContent},
    mounted() {
        console.log("home mounted")
    }
}
</script>

<style scoped>

</style>
