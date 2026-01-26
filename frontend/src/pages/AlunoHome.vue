<template>
  <div class="flex min-h-screen">
    
    <aside class="sidebar">
      <div class="sidebar-header">
        <div class="profile-image-container">
          <i class="fas fa-user profile-icon"></i>
          <span class="profile-badge">?</span>
        </div>
        <h3 class="profile-name">João Silva</h3>
        <p class="profile-edit">editar perfil</p>
        <router-link
          to="/"
          class="logout-link"
>
      <i class="fas fa-sign-out-alt"></i>
              Sair
            </router-link>

        <div class="subscription-info">
          <p class="subscription-type">ASSINATURA ILIMITADO</p>
          <p class="subscription-level">BÁSICO</p>
        </div>
      </div>

      <nav class="sidebar-nav">
        <a href="#" class="nav-item active">
          <i class="fas fa-th-large"></i>
          <span>Meu Painel</span>
        </a>
        <a href="#" class="nav-item">
          <i class="fas fa-clock"></i>
          <span>Timeline</span>
        </a>
        <a href="#" class="nav-item">
          <i class="fas fa-book"></i>
          <span>Minhas Inscrições</span>
        </a>
        <a href="#" class="nav-item">
          <i class="fas fa-trophy"></i>
          <span>Meus Certificados</span>
        </a>

        <div class="nav-divider">
          <p class="nav-category">OUTRAS OPÇÕES</p>
          <a href="#" class="nav-item">
            <i class="fas fa-chart-bar"></i>
            <span>Minhas Estatísticas</span>
          </a>
        </div>
      </nav>
    </aside>

    
    <main class="main-content">
      <div class="content-wrapper">
       
        <div class="main-header">
          <h1 class="main-title">Meu Painel</h1>
          <p class="main-subtitle">Olá, <strong>João Silva</strong>. Veja como está o seu desempenho hoje</p>
        </div>

     
        <div class="welcome-banner">
          <h2 class="banner-title">Bem-vindo ao Sistema Olimpo!</h2>
          <p class="banner-text">Acompanhe suas inscrições, notas e certificados</p>
        </div>

  
        <div class="stats-grid">
          <div class="stat-card">
            <div class="stat-content">
              <div>
                <p class="stat-label">Total de Inscrições</p>
                <p class="stat-value">4</p>
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
                <p class="stat-value">2</p>
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
                <p class="stat-value">3</p>
              </div>
              <div class="stat-icon green">
                <i class="fas fa-certificate"></i>
              </div>
            </div>
          </div>
        </div>

       
        <div class="events-container">
          <div class="events-header">
            <h2 class="events-title">Minhas Modalidades</h2>
            <p class="events-subtitle">Eventos e competições em que você está inscrito</p>
          </div>

          <div class="events-list">
           
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
                  <button class="btn-primary">
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
                  <button class="btn-primary">
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
                  <button class="btn-primary">
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
export default {
  name: 'AlunoHome',
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
      }
    };
  },
  methods: {
    
    editarPerfil() {
   
    },
    baixarCertificado(id) {
     
    }
  }
};
</script>

<style scoped>
/* Estilos específicos do componente */
@import '../assets/AlunoHome.css';
</style>