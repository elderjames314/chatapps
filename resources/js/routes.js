import VueRouter from 'vue-router';
import Home from "./components/Home";
import OnlineUsers from "./components/OnlineUsers";
import Help from "./components/Help";

const routes = [
    {
        path:'/app',
        component: Home,
        name: 'home'
    },
    {
        path:'/app/help',
        component: Help,
        name: 'help'
    }
]

const router = new VueRouter(
    {
        routes,
        mode: "history"
    }
)

export default router;
