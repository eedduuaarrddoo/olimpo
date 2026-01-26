import { createRouter, createWebHistory } from 'vue-router'

import ProfessorHome from '../pages/ProfessorHome.vue'
import CorrecaoAutomatica from '../pages/CorrecaoAutomatica.vue'
import AlunoHome from '../pages/AlunoHome.vue'
import Login from '../pages/Login.vue'

const routes = [
   {
    path: '/',
    name: 'login',
    component: Login
  },
 
  {
    path: '/professor',
    name: 'ProfessorHome',
    component: ProfessorHome
  },
  {
    path: '/professor/correcoes',
    name: 'CorrecaoAutomatica',
    component: CorrecaoAutomatica
  },
  {
    path: '/aluno',
    name: 'AlunoHome',
    component: AlunoHome
  },
 
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

export default router
