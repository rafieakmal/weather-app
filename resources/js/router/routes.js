import HomePage from '../src/pages/HomeComponent'
import GempaPage from '../src/pages/GempaComponent'


const routes = [{
    path: '/',
    component: HomePage,
    name: 'home',
  },
  {
    path: '/gempa',
    component: GempaPage,
    name: 'gempa',
  }
]

export default routes;
