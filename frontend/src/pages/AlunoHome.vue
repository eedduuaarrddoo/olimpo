<template>
  <div class="flex min-h-screen">
   
    <Sidebar
      :userName="aluno.nome"
      badge="?"
      accountType="ASSINATURA ILIMITADO"
      :subscriptionLevel="aluno.nivel"
      :menuItems="menuItems"
      :otherOptions="otherOptions"
      userType="aluno"
      @edit-profile="editarPerfil"
    />

    <!-- Main Content -->
    <main class="main-content">
      <div class="content-wrapper">
        <!-- Header -->
        <div class="main-header">
          <h1 class="main-title">Meu Painel</h1>
          <p class="main-subtitle">Olá, <strong>{{ aluno.nome }}</strong>. Veja como está o seu desempenho hoje</p>
        </div>

        <!-- Welcome Banner -->
        <div class="welcome-banner">
          <h2 class="banner-title">Bem-vindo ao Sistema Olimpo!</h2>
          <p class="banner-text">Acompanhe suas inscrições, notas e certificados</p>
        </div>

        <!-- Stats Grid -->
        <div class="stats-grid">
          <div class="stat-card">
            <div class="stat-content">
              <div>
                <p class="stat-label">Total de Inscrições</p>
                <p class="stat-value">{{ estatisticas.inscricoes }}</p>
              </div>
              <div class="stat-icon blue">
                <i class="fas fa-clipboard-list"></i>
              </div>
            </div>
          </div>

          <div class="stat-card">
            <div class="stat-content">
              <div>
                <p class="stat-label">Medalhas Conquistadas</p>
                <p class="stat-value">{{ estatisticas.medalhas }}</p>
              </div>
              <div class="stat-icon yellow">
                <i class="fas fa-medal"></i>
              </div>
            </div>
          </div>

          <div class="stat-card">
            <div class="stat-content">
              <div>
                <p class="stat-label">Certificados Disponíveis</p>
                <p class="stat-value">{{ estatisticas.certificados }}</p>
              </div>
              <div class="stat-icon green">
                <i class="fas fa-certificate"></i>
              </div>
            </div>
          </div>
        </div>

        <!-- Events Container -->
        <div class="events-container">
          <div class="events-header">
            <h2 class="events-title">Minhas Modalidades</h2>
            <p class="events-subtitle">Eventos e competições em que você está inscrito</p>
          </div>

          <div class="events-list">
            <!-- Event 1 -->
            <div class="event-item">
              <div class="event-content">
                <div class="event-header">
                  <h3 class="event-name">OBR Teórica 2025</h3>
                  <span class="badge gold">
                    <i class="fas fa-medal"></i> Medalha de Ouro
                  </span>
                  <span class="badge completed">
                    Concluído
                  </span>
                </div>
                <p class="event-description">Olimpíada Brasileira de Robótica - Modalidade Teórica</p>
                
                <div class="event-info">
                  <div class="info-item">
                    <i class="fas fa-calendar"></i>
                    <span>15/11/2025</span>
                  </div>
                  <div class="info-item">
                    <i class="fas fa-star"></i>
                    <span class="info-value">Nota: 9.5</span>
                  </div>
                </div>

                <div class="event-actions">
                  <button class="btn-primary" @click="baixarCertificado(1)">
                    <i class="fas fa-download"></i>
                    Baixar Certificado
                  </button>
                  <button class="btn-secondary">
                    <i class="fas fa-eye"></i>
                    Ver Detalhes
                  </button>
                </div>
              </div>
            </div>

            <!-- Event 2 -->
            <div class="event-item">
              <div class="event-content">
                <div class="event-header">
                  <h3 class="event-name">OBR Prática 2025</h3>
                  <span class="badge completed">
                    Concluído
                  </span>
                </div>
                <p class="event-description">Olimpíada Brasileira de Robótica - Modalidade Prática</p>
                
                <div class="event-info">
                  <div class="info-item">
                    <i class="fas fa-calendar"></i>
                    <span>20/11/2025</span>
                  </div>
                  <div class="info-item">
                    <i class="fas fa-star"></i>
                    <span class="info-value">Nota: 7.2</span>
                  </div>
                </div>

                <div class="event-actions">
                  <button class="btn-primary" @click="baixarCertificado(2)">
                    <i class="fas fa-download"></i>
                    Baixar Certificado
                  </button>
                  <button class="btn-secondary">
                    <i class="fas fa-eye"></i>
                    Ver Detalhes
                  </button>
                </div>
              </div>
            </div>

            <!-- Event 3 -->
            <div class="event-item">
              <div class="event-content">
                <div class="event-header">
                  <h3 class="event-name">CBR Soccer 2025</h3>
                  <span class="badge bronze">
                    <i class="fas fa-medal"></i> Medalha de Bronze
                  </span>
                  <span class="badge completed">
                    Concluído
                  </span>
                </div>
                <p class="event-description">Competição Brasileira de Robótica - Categoria Soccer</p>
                
                <div class="event-info">
                  <div class="info-item">
                    <i class="fas fa-calendar"></i>
                    <span>05/12/2025</span>
                  </div>
                  <div class="info-item">
                    <i class="fas fa-info-circle"></i>
                    <span>Modalidade sem avaliação por nota</span>
                  </div>
                </div>

                <div class="event-actions">
                  <button class="btn-primary" @click="baixarCertificado(3)">
                    <i class="fas fa-download"></i>
                    Baixar Certificado
                  </button>
                  <button class="btn-secondary">
                    <i class="fas fa-eye"></i>
                    Ver Detalhes
                  </button>
                </div>
              </div>
            </div>

            <!-- Event 4 -->
            <div class="event-item">
              <div class="event-content">
                <div class="event-header">
                  <h3 class="event-name">RoboCup Junior 2026</h3>
                  <span class="badge ongoing">
                    Em Andamento
                  </span>
                </div>
                <p class="event-description">RoboCup Junior - Categoria Rescue Line</p>
                
                <div class="event-info">
                  <div class="info-item">
                    <i class="fas fa-calendar"></i>
                    <span>Previsto: 20/03/2026</span>
                  </div>
                  <div class="info-item">
                    <i class="fas fa-info-circle"></i>
                    <span>Aguardando realização</span>
                  </div>
                </div>

                <div class="event-actions">
                  <button class="btn-disabled" disabled>
                    <i class="fas fa-download"></i>
                    Certificado Indisponível
                  </button>
                  <button class="btn-secondary">
                    <i class="fas fa-eye"></i>
                    Ver Detalhes
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</template>

<script>
import Sidebar from '../components/Sidebar.vue';

export default {
  name: 'AlunoHome',
  components: {
    Sidebar
  },
  data() {
    return {
      aluno: {
        nome: 'João Silva',
        assinatura: 'ILIMITADO',
        nivel: 'BÁSICO'
      },
      estatisticas: {
        inscricoes: 4,
        medalhas: 2,
        certificados: 3
      },
      menuItems: [
        { label: 'Meu Painel', icon: 'fas fa-th-large', path: '/aluno', active: true },
        { label: 'Timeline', icon: 'fas fa-clock', path: '/aluno/timeline' },
        { label: 'Minhas Inscrições', icon: 'fas fa-book', path: '/aluno/inscricoes' },
        { label: 'Meus Certificados', icon: 'fas fa-trophy', path: '/aluno/certificados' }
      ],
      otherOptions: [
        { label: 'Minhas Estatísticas', icon: 'fas fa-chart-bar', path: '/aluno/estatisticas' }
      ]
    };
  },
  methods: {
    editarPerfil() {
      console.log('Editando perfil');
    },
    baixarCertificado(id) {
      console.log('Baixando certificado:', id);
    }
  }
};
</script>

<style scoped>
@import '../assets/AlunoHome.css';

</style>