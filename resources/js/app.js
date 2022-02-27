require('./bootstrap');

import router from './routes';
import VueRouter from 'vue-router';

window.Vue = require('vue');

import Home from "./components/Home";
import OnlineUsers from "./components/OnlineUsers";
import Index from './components/Index';
import Help from "./components/Help";
import ChatContent from "./components/chats/ChatContent";
import UserList from "./components/chats/UserList";
import ChatHeader from "./components/chats/ChatHeader";
import ChatFooter from "./components/chats/ChatFooter";

Vue.use(VueRouter);


const app = new Vue({
    el: '#app',
    router,
    components: {
        Home,
        OnlineUsers,
        Index,
        Help,
        ChatContent,
        UserList,
        ChatHeader,
        ChatFooter
    }
});
