<template>
  <TopBar />

  <div class="login-page">
    <div class="login-card">
      <h2>Entrar no Sistema Olimpo</h2>

      <p class="register-link">
        Não possui uma conta?
        <a href="#">Registrar</a>
      </p>

      <form @submit.prevent="handleLogin">
        <div class="form-group">
          <label for="email">E-mail</label>
          <input
            id="email"
            type="email"
            v-model="form.email"
            placeholder="E-mail"
            required
          />
        </div>

        <div class="form-group">
          <label for="password">Senha</label>
          <input
            id="password"
            type="password"
            v-model="form.password"
            required
          />
        </div>

        <!-- RADIO BUTTONS -->
        <div class="form-group radio-group">
          <label class="radio-option">
            <input
              type="radio"
              value="aluno"
              v-model="form.perfil"
            />
            <span>ALUNO</span>
          </label>

          <label class="radio-option">
            <input
              type="radio"
              value="professor"
              v-model="form.perfil"
            />
            <span>PROFESSOR</span>
          </label>
        </div>

        <div class="form-options">
          <label class="checkbox">
            <input type="checkbox" v-model="form.remember" />
            <span>Lembrar-me</span>
          </label>

          <a href="#" class="forgot-password">Esqueceu a senha?</a>
        </div>

        <button type="submit" class="btn-primary">
          Entrar na sua conta
        </button>
      </form>
    </div>
  </div>
</template>

<script setup lang="ts">
import { reactive } from 'vue'
import { useRouter } from 'vue-router'
import TopBar from '../components/TopBar.vue'

interface LoginForm {
  email: string
  password: string
  perfil: 'aluno' | 'professor'
  remember: boolean
}

const router = useRouter()

const form = reactive<LoginForm>({
  email: '',
  password: '',
  perfil: 'aluno',
  remember: false
})

const handleLogin = () => {
  // aqui depois entra a API Laravel
  console.log('Login:', form)

  if (form.perfil === 'aluno') {
    router.push({ name: 'AlunoHome' })
  }

  if (form.perfil === 'professor') {
    router.push({ name: 'ProfessorHome' })
  }
}
</script>

<style src="../assets/login.css"></style>
