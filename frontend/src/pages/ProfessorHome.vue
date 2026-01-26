
<template>
  <div class="flex min-h-screen">
    
    <aside class="professor-sidebar">
      <div class="sidebar-header">
        <div class="profile-image-container">
          <i class="fas fa-user-tie profile-icon"></i>
          <span class="profile-badge">P</span>
        </div>
        <h3 class="profile-name">Prof. Maria Santos</h3>
        <p class="profile-edit">editar perfil</p>
                <router-link
                    to="/"
                    class="logout-link">
            <i class="fas fa-sign-out-alt"></i>
                            Sair
                    </router-link>

        <div class="account-info">
          <p class="account-type">CONTA PROFESSOR</p>
        </div>
      </div>

      <nav class="sidebar-nav">
        <a href="#" class="nav-item active">
          <i class="fas fa-th-large"></i>
          <span>Painel Geral</span>
        </a>
        <a href="#" class="nav-item">
          <i class="fas fa-users"></i>
          <span>Meus Alunos</span>
        </a>
        <a href="#" class="nav-item">
          <i class="fas fa-clipboard-list"></i>
          <span>Inscrições</span>
        </a>
        <a href="#" class="nav-item">
          <i class="fas fa-certificate"></i>
          <span>Certificados</span>
        </a>
       <router-link
        to="/professor/correcoes"
        class="nav-item">
        <i class="fas fa-check-circle"></i>
        <span>Correções</span>
        </router-link>



        <div class="nav-divider">
          <p class="nav-category">OUTRAS OPÇÕES</p>
          <a href="#" class="nav-item">
            <i class="fas fa-chart-bar"></i>
            <span>Relatórios</span>
          </a>
          <a href="#" class="nav-item">
            <i class="fas fa-cog"></i>
            <span>Configurações</span>
          </a>
        </div>
      </nav>
    </aside>

    
    <main class="main-content">
      <div class="content-wrapper">
        
        <div class="main-header">
          <div class="header-left">
            <h1 class="main-title">Painel do Professor</h1>
            <p class="main-subtitle">Olá, <strong>Prof. Maria Santos</strong>. Gerencie seus alunos e modalidades</p>
          </div>
          <button class="btn-primary">
            <i class="fas fa-user-plus"></i>
            Inscrever Alunos
          </button>
        </div>

        
        <div class="stats-grid">
          <div class="stat-card">
            <div class="stat-content">
              <div>
                <p class="stat-label">Total de Alunos</p>
                <p class="stat-value">156</p>
              </div>
              <div class="stat-icon blue">
                <i class="fas fa-users"></i>
              </div>
            </div>
          </div>

          <div class="stat-card">
            <div class="stat-content">
              <div>
                <p class="stat-label">Modalidades</p>
                <p class="stat-value">5</p>
              </div>
              <div class="stat-icon purple">
                <i class="fas fa-trophy"></i>
              </div>
            </div>
          </div>

          <div class="stat-card">
            <div class="stat-content">
              <div>
                <p class="stat-label">Inscrições Ativas</p>
                <p class="stat-value">243</p>
              </div>
              <div class="stat-icon green">
                <i class="fas fa-clipboard-check"></i>
              </div>
            </div>
          </div>

          <div class="stat-card">
            <div class="stat-content">
              <div>
                <p class="stat-label">Certificados</p>
                <p class="stat-value">187</p>
              </div>
              <div class="stat-icon yellow">
                <i class="fas fa-certificate"></i>
              </div>
            </div>
          </div>
        </div>

        
        <div class="search-container">
          <h2 class="search-title">Buscar Aluno</h2>
          <div class="search-form">
            <div class="search-input-container">
              <i class="fas fa-search search-icon"></i>
              <input 
                type="text" 
                placeholder="Digite o nome, matrícula ou email do aluno..."
                class="search-input"
              >
            </div>
            <button class="search-button">
              Buscar
            </button>
          </div>
        </div>

       
        <div class="modalidades-container">
          <div class="modalidades-header">
            <div class="modalidades-header-left">
              <h2 class="modalidades-title">Minhas Modalidades</h2>
              <p class="modalidades-subtitle">Eventos com alunos inscritos</p>
            </div>
            <button class="btn-secondary">
              <i class="fas fa-download"></i>
              Download em Lote
            </button>
          </div>

          <div class="modalidades-list">
           
            <div class="modalidade-item">
              <div class="modalidade-content">
                <div class="modalidade-header">
                  <h3 class="modalidade-name">OBR Teórica 2025</h3>
                  <span class="badge completed">
                    Finalizada
                  </span>
                </div>
                <p class="modalidade-description">Olimpíada Brasileira de Robótica - Modalidade Teórica</p>
                
                <div class="stats-grid-mini">
                  <div class="stat-mini blue">
                    <p class="stat-mini-value">78</p>
                    <p class="stat-mini-label">Alunos Inscritos</p>
                  </div>
                  <div class="stat-mini green">
                    <p class="stat-mini-value">78</p>
                    <p class="stat-mini-label">Corrigidos</p>
                  </div>
                  <div class="stat-mini yellow">
                    <p class="stat-mini-value">12</p>
                    <p class="stat-mini-label">Medalhas</p>
                  </div>
                  <div class="stat-mini purple">
                    <p class="stat-mini-value">78</p>
                    <p class="stat-mini-label">Certificados</p>
                  </div>
                </div>

                <div class="modalidade-actions">
                  <button class="btn-primary">
                    <i class="fas fa-users"></i>
                    Ver Alunos
                  </button>
                  <button class="btn-secondary">
                    <i class="fas fa-download"></i>
                    Baixar Certificados
                  </button>
                  <button class="btn-secondary">
                    <i class="fas fa-chart-bar"></i>
                    Relatório
                  </button>
                </div>
              </div>
            </div>

           
            <div class="modalidade-item">
              <div class="modalidade-content">
                <div class="modalidade-header">
                  <h3 class="modalidade-name">OBR Prática 2025</h3>
                  <span class="badge completed">
                    Finalizada
                  </span>
                </div>
                <p class="modalidade-description">Olimpíada Brasileira de Robótica - Modalidade Prática</p>
                
                <div class="stats-grid-mini">
                  <div class="stat-mini blue">
                    <p class="stat-mini-value">45</p>
                    <p class="stat-mini-label">Alunos Inscritos</p>
                  </div>
                  <div class="stat-mini green">
                    <p class="stat-mini-value">45</p>
                    <p class="stat-mini-label">Avaliados</p>
                  </div>
                  <div class="stat-mini yellow">
                    <p class="stat-mini-value">8</p>
                    <p class="stat-mini-label">Medalhas</p>
                  </div>
                  <div class="stat-mini purple">
                    <p class="stat-mini-value">45</p>
                    <p class="stat-mini-label">Certificados</p>
                  </div>
                </div>

                <div class="modalidade-actions">
                  <button class="btn-primary">
                    <i class="fas fa-users"></i>
                    Ver Alunos
                  </button>
                  <button class="btn-secondary">
                    <i class="fas fa-download"></i>
                    Baixar Certificados
                  </button>
                  <button class="btn-secondary">
                    <i class="fas fa-chart-bar"></i>
                    Relatório
                  </button>
                </div>
              </div>
            </div>

            
            <div class="modalidade-item">
              <div class="modalidade-content">
                <div class="modalidade-header">
                  <h3 class="modalidade-name">CBR Soccer 2025</h3>
                  <span class="badge completed">
                    Finalizada
                  </span>
                </div>
                <p class="modalidade-description">Competição Brasileira de Robótica - Categoria Soccer</p>
                
                <div class="stats-grid-mini">
                  <div class="stat-mini blue">
                    <p class="stat-mini-value">32</p>
                    <p class="stat-mini-label">Alunos Inscritos</p>
                  </div>
                  <div class="stat-mini green">
                    <p class="stat-mini-value">32</p>
                    <p class="stat-mini-label">Participaram</p>
                  </div>
                  <div class="stat-mini yellow">
                    <p class="stat-mini-value">6</p>
                    <p class="stat-mini-label">Medalhas</p>
                  </div>
                  <div class="stat-mini purple">
                    <p class="stat-mini-value">32</p>
                    <p class="stat-mini-label">Certificados</p>
                  </div>
                </div>

                <div class="modalidade-actions">
                  <button class="btn-primary">
                    <i class="fas fa-users"></i>
                    Ver Alunos
                  </button>
                  <button class="btn-secondary">
                    <i class="fas fa-download"></i>
                    Baixar Certificados
                  </button>
                  <button class="btn-secondary">
                    <i class="fas fa-chart-bar"></i>
                    Relatório
                  </button>
                </div>
              </div>
            </div>

            
            <div class="modalidade-item">
              <div class="modalidade-content">
                <div class="modalidade-header">
                  <h3 class="modalidade-name">RoboCup Junior 2026</h3>
                  <span class="badge ongoing">
                    Em Andamento
                  </span>
                </div>
                <p class="modalidade-description">RoboCup Junior - Categoria Rescue Line</p>
                
                <div class="stats-grid-mini">
                  <div class="stat-mini blue">
                    <p class="stat-mini-value">58</p>
                    <p class="stat-mini-label">Alunos Inscritos</p>
                  </div>
                  <div class="stat-mini gray">
                    <p class="stat-mini-value">-</p>
                    <p class="stat-mini-label">Aguardando</p>
                  </div>
                  <div class="stat-mini gray">
                    <p class="stat-mini-value">-</p>
                    <p class="stat-mini-label">Aguardando</p>
                  </div>
                  <div class="stat-mini gray">
                    <p class="stat-mini-value">-</p>
                    <p class="stat-mini-label">Aguardando</p>
                  </div>
                </div>

                <div class="modalidade-actions">
                  <button class="btn-primary">
                    <i class="fas fa-users"></i>
                    Ver Alunos
                  </button>
                  <button class="btn-orange">
                    <i class="fas fa-user-plus"></i>
                    Inscrever Mais Alunos
                  </button>
                </div>
              </div>
            </div>

            
            <div class="modalidade-item">
              <div class="modalidade-content">
                <div class="modalidade-header">
                  <h3 class="modalidade-name">FLL Challenge 2025</h3>
                  <span class="badge pending">
                    Aguardando Correção
                  </span>
                </div>
                <p class="modalidade-description">FIRST LEGO League Challenge</p>
                
                <div class="stats-grid-mini">
                  <div class="stat-mini blue">
                    <p class="stat-mini-value">30</p>
                    <p class="stat-mini-label">Alunos Inscritos</p>
                  </div>
                  <div class="stat-mini orange">
                    <p class="stat-mini-value">15</p>
                    <p class="stat-mini-label">Pendentes</p>
                  </div>
                  <div class="stat-mini gray">
                    <p class="stat-mini-value">-</p>
                    <p class="stat-mini-label">Aguardando</p>
                  </div>
                  <div class="stat-mini gray">
                    <p class="stat-mini-value">-</p>
                    <p class="stat-mini-label">Aguardando</p>
                  </div>
                </div>

                <div class="modalidade-actions">
                  <button class="btn-orange">
                    <i class="fas fa-check-circle"></i>
                    Iniciar Correção
                  </button>
                  <button class="btn-primary">
                    <i class="fas fa-users"></i>
                    Ver Alunos
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
  name: 'ProfessorHome',
  data() {
    return {
      professor: {
        nome: 'Prof. Maria Santos',
        conta: 'PROFESSOR'
      },
      estatisticas: {
        totalAlunos: 156,
        modalidades: 5,
        inscricoesAtivas: 243,
        certificados: 187
      }
    };
  },
  methods: {
    buscarAluno() {
     
    },
    inscreverAlunos() {
      
    },
    iniciarCorrecao() {
    
    }
  }
};
</script>

<style scoped>

@import '../assets/ProfessorHome.css';
</style>
