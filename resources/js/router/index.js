import AllProduct from '../components/AllProduct.vue';
import CreateProduct from '../components/CreateProduct.vue';
import EditProduct from '../components/EditProduct.vue';
import { createRouter, createWebHashHistory } from "vue-router";
const routes = [
    {
        name: 'home',
        path: '/',
        component: AllProduct
    },
    {
        name: 'create',
        path: '/create',
        component: CreateProduct
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditProduct
    }
];

const router = createRouter({
    history: createWebHashHistory(),
    routes,
  });
  
export default router;