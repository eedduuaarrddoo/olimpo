import { createRouter, createWebHistory } from 'vue-router'

import ProfessorHome from '../components/ProfessorHome.vue'
import CorrecaoAutomatica from '../components/CorrecaoAutomatica.vue'
import AlunoHome from '../components/AlunoHome.vue'

const routes = [
  {
    path: '/',
    redirect: '/professor'
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
  }
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

export default router
