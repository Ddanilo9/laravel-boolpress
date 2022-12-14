import Home from '../pages/Home.vue';
import ContactUs from '../pages/ContactUs';
import AboutUs from '../pages/AboutUs';
import PostsIndex from '../pages/Posts.index.vue';
import PostsShow from '../pages/Posts.show.vue';


const routes = [
    {
        path: '/',
        name: 'home',
        component: Home,
    },
    {
        path: '/contatti',
        name: 'contact-us',
        component: ContactUs,
    },
    {
        path: '/chi-siamo',
        name: 'about-us',
        component: AboutUs,
    },
    {
        path: '/blog',
        name: 'post.index',
        component: PostsIndex,
    },
    {
        path: '/blog:slug',
        name: 'post.show',
        component: PostsShow,
        props: true
    },
];

export default routes;