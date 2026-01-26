<template>
  <aside :class="sidebarClass">
    <div class="sidebar-header">
      <div class="profile-image-container">
        <i :class="profileIconClass"></i>
        <span class="profile-badge">{{ badge }}</span>
      </div>
      <h3 class="profile-name">{{ userName }}</h3>
      <p class="profile-edit" @click="$emit('edit-profile')">editar perfil</p>
      
      <router-link to="/" class="logout-link">
        <i class="fas fa-sign-out-alt"></i>
        Sair
      </router-link>

      <div :class="accountInfoClass">
        <p class="account-type">{{ accountType }}</p>
        <p v-if="subscriptionLevel" class="subscription-level">{{ subscriptionLevel }}</p>
      </div>
    </div>

    <nav class="sidebar-nav">
      <router-link
        v-for="item in menuItems"
        :key="item.path || item.label"
        :to="item.path || '#'"
        :class="['nav-item', { active: item.active }]"
      >
        <i :class="item.icon"></i>
        <span>{{ item.label }}</span>
      </router-link>

      <div v-if="otherOptions.length > 0" class="nav-divider">
        <p class="nav-category">OUTRAS OPÇÕES</p>
        <router-link
          v-for="item in otherOptions"
          :key="item.path || item.label"
          :to="item.path || '#'"
          class="nav-item"
        >
          <i :class="item.icon"></i>
          <span>{{ item.label }}</span>
        </router-link>
      </div>
    </nav>
  </aside>
</template>

<script>
export default {
  name: 'Sidebar',
  props: {
    userName: {
      type: String,
      required: true
    },
    badge: {
      type: String,
      default: '?'
    },
    accountType: {
      type: String,
      required: true
    },
    subscriptionLevel: {
      type: String,
      default: null
    },
    menuItems: {
      type: Array,
      required: true
    },
    otherOptions: {
      type: Array,
      default: () => []
    },
    userType: {
      type: String,
      default: 'aluno', // 'aluno' ou 'professor'
      validator: (value) => ['aluno', 'professor'].includes(value)
    }
  },
  computed: {
    sidebarClass() {
      return this.userType === 'professor' ? 'professor-sidebar' : 'sidebar';
    },
    profileIconClass() {
      return this.userType === 'professor' 
        ? 'fas fa-user-tie profile-icon' 
        : 'fas fa-user profile-icon';
    },
    accountInfoClass() {
      return this.userType === 'professor' 
        ? 'account-info' 
        : 'subscription-info';
    }
  },
  emits: ['edit-profile']
};
</script>

<style scoped>
@import '../assets/components.css';
</style>