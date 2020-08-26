import Index from '../components/Index.vue';
import AddVehicle from '../components/Create.vue';
import EditVehicle from '../components/Edit.vue';

export default {
    mode: 'history',
    routes: [
        {
            path: '/',
            component: Index,
            name: 'pojazdy.index'
        },
        {
            path: '/dodaj-pojazd',
            component: AddVehicle,
            name: 'pojazdy.create'
        },
        {
            path: '/edytuj-pojazd/:id',
            component: EditVehicle,
            name: 'pojazdy.edit'
        },
    ]
}