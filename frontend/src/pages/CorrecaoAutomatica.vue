<template>
  <div class="flex min-h-screen">
   
    <aside class="sidebar">
      <div class="sidebar-header">
        <div class="profile-image-container">
          <i class="fas fa-user-tie profile-icon"></i>
          <span class="profile-badge">P</span>
        </div>
        <h3 class="profile-name">Prof. Maria Santos</h3>
        <p class="profile-edit">editar perfil</p>
      </div>

      <nav class="sidebar-nav">
        <router-link
  to="/professor"
  class="nav-item"
>
  <i class="fas fa-th-large"></i>
  <span>Painel Geral</span>
</router-link>

        <a href="#" class="nav-item">
          <i class="fas fa-users"></i>
          <span>Meus Alunos</span>
        </a>
        <a href="#" class="nav-item active">
          <i class="fas fa-check-circle"></i>
          <span>Correções</span>
        </a>
      </nav>
    </aside>

    
    <main class="main-content">
      <div class="content-wrapper">
       
        <div class="header-section">
          <div class="header-content">
            <button class="back-button" @click="goBack">
              <i class="fas fa-arrow-left"></i>
            </button>
            <div>
              <h1 class="main-title">Correção Automática - OBR Teórica</h1>
              <p class="main-subtitle">Sistema de correção assistida por visão computacional</p>
            </div>
          </div>
        </div>

       
        <div class="progress-container">
          <div class="progress-header">
            <span class="progress-text" id="progressText">{{ progressText }}</span>
            <span class="progress-percent">{{ progressPercent }}%</span>
          </div>
          <div class="progress-bar-bg">
            <div class="progress-bar-fill" :style="{ width: progressPercent + '%' }"></div>
          </div>
        </div>

       
        <div v-if="currentView === 'upload'" class="upload-container">
          <div class="upload-content">
            <div class="upload-icon">
              <i class="fas fa-cloud-upload-alt"></i>
            </div>
            <h2 class="upload-title">Upload de Folhas de Resposta</h2>
            <p class="upload-description">Envie as imagens das folhas de resposta dos alunos para iniciar a correção automática. Você pode enviar múltiplos arquivos de uma só vez.</p>
            
            <label class="upload-label">
              <input 
                type="file" 
                multiple 
                accept="image/*,.pdf" 
                class="upload-input" 
                @change="handleFileUpload"
              >
              <div class="upload-dropzone">
                <i class="fas fa-images"></i>
                <p class="upload-dropzone-title">Clique para selecionar arquivos</p>
                <p class="upload-dropzone-subtitle">ou arraste e solte aqui</p>
                <p class="upload-dropzone-info">Formatos aceitos: JPG, PNG, PDF (até 10MB cada)</p>
              </div>
            </label>

            <div class="upload-tips">
              <div class="tip-content">
                <i class="fas fa-info-circle tip-icon"></i>
                <div class="tip-text">
                  <h3 class="tip-title">Dicas para melhor reconhecimento:</h3>
                  <ul class="tip-list">
                    <li>• Certifique-se de que as imagens estão nítidas e bem iluminadas</li>
                    <li>• As marcações devem estar claramente visíveis</li>
                    <li>• Evite sombras ou reflexos sobre as folhas</li>
                    <li>• O gabarito será detectado automaticamente</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        
        <div v-if="currentView === 'processing'" class="processing-container">
          <div class="processing-content">
            <div class="processing-icon">
              <i class="fas fa-cog"></i>
            </div>
            <h2 class="processing-title">Processando imagens...</h2>
            <p class="processing-description">Nosso sistema está analisando as folhas de resposta e identificando as marcações. Aguarde um momento.</p>
            
            <div class="processing-steps">
              <div class="processing-step completed">
                <span class="step-text">Detectando folhas de resposta</span>
                <i class="fas fa-check-circle step-icon"></i>
              </div>
              <div class="processing-step active">
                <span class="step-text">Reconhecendo marcações</span>
                <i class="fas fa-spinner step-icon"></i>
              </div>
              <div class="processing-step pending">
                <span class="step-text">Calculando notas</span>
                <i class="fas fa-clock step-icon"></i>
              </div>
            </div>
          </div>
        </div>

       
        <div v-if="currentView === 'correction'" class="correction-container">
          <div class="student-card">
            <div class="student-header">
              <div>
                <h2 class="student-name">{{ currentStudent.name }}</h2>
                <p class="student-id">ID: {{ currentStudent.id }}</p>
              </div>
              <div class="score-display">
                <p class="score-label">Nota Calculada</p>
                <p class="score-value">{{ currentScore.toFixed(1) }}</p>
              </div>
            </div>

            <div class="student-content">
              <div class="answers-header">
                <h3 class="answers-title">Respostas Detectadas</h3>
                <span class="answers-subtitle">Clique nas alternativas para corrigir</span>
              </div>

              <div class="answers-grid">
                <div 
                  v-for="(answer, index) in currentStudent.answers" 
                  :key="index"
                  class="question-card"
                  :class="{ 'correct': answer === correctAnswers[index], 'incorrect': answer !== correctAnswers[index] }"
                >
                  <div class="question-header">
                    <span class="question-number">Questão {{ index + 1 }}</span>
                    <div class="question-status">
                      <i class="fas" :class="answer === correctAnswers[index] ? 'fa-check-circle correct-icon' : 'fa-times-circle incorrect-icon'"></i>
                      <span class="status-text">{{ answer === correctAnswers[index] ? 'Correta' : 'Incorreta' }}</span>
                    </div>
                  </div>
                  <div class="options-grid">
                    <button 
                      v-for="option in ['A', 'B', 'C', 'D']"
                      :key="option"
                      class="option-button"
                      :class="getOptionClass(index, option)"
                      @click="changeAnswer(index, option)"
                    >
                      {{ option }}
                    </button>
                  </div>
                  <div v-if="answer !== correctAnswers[index]" class="correct-answer">
                    Gabarito: <span class="correct-answer-value">{{ correctAnswers[index] }}</span>
                  </div>
                </div>
              </div>

              <div class="correction-tip">
                <i class="fas fa-lightbulb tip-icon"></i>
                <div class="tip-content">
                  <h4 class="tip-title">Dica de Correção</h4>
                  <p class="tip-text">Revise as respostas marcadas em vermelho. Clique nas alternativas para fazer ajustes caso o sistema tenha detectado incorretamente.</p>
                </div>
              </div>

              <div class="correction-actions">
                <button @click="skipStudent" class="action-button skip">
                  <i class="fas fa-forward"></i>
                  Pular Aluno
                </button>
                <button @click="confirmCorrection" class="action-button confirm">
                  <i class="fas fa-check"></i>
                  Confirmar e Próximo
                </button>
              </div>
            </div>
          </div>
        </div>

       
        <div v-if="currentView === 'summary'" class="summary-container">
          <div class="summary-content">
            <div class="summary-icon">
              <i class="fas fa-check-circle"></i>
            </div>
            <h2 class="summary-title">Correção Concluída!</h2>
            <p class="summary-description">Todos os alunos foram processados com sucesso.</p>
            
            <div class="summary-card">
              <h3 class="summary-card-title">Resumo da Correção</h3>
              <div class="summary-stats">
                <div class="summary-stat">
                  <p class="stat-value blue">{{ processedStudents.length }}</p>
                  <p class="stat-label">Alunos Corrigidos</p>
                </div>
                <div class="summary-stat">
                  <p class="stat-value green">{{ averageScore.toFixed(1) }}</p>
                  <p class="stat-label">Média Geral</p>
                </div>
                <div class="summary-stat">
                  <p class="stat-value yellow">{{ approvedCount }}</p>
                  <p class="stat-label">Aprovados</p>
                </div>
              </div>
              
              <div class="students-list-container">
                <h4 class="students-list-title">Alunos Processados:</h4>
                <div class="students-list">
                  <div 
                    v-for="student in processedStudents" 
                    :key="student.id"
                    class="student-item"
                  >
                    <span class="student-item-name">{{ student.name }}</span>
                    <span class="student-item-score" :class="{ 'approved': student.score >= 7, 'failed': student.score < 7 }">
                      Nota: {{ student.score.toFixed(1) }}
                    </span>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="summary-actions">
              <button @click="startNewCorrection" class="action-button blue">
                <i class="fas fa-redo"></i>Nova Correção
              </button>
              <button @click="exportResults" class="action-button green">
                <i class="fas fa-download"></i>Exportar Resultados
              </button>
              <button @click="goToDashboard" class="action-button gray">
                <i class="fas fa-home"></i>Voltar ao Painel
              </button>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</template>

<script>
export default {
  name: 'CorrecaoAutomatica',
  data() {
    return {
      currentView: 'upload',
      mockStudents: [
        { id: 1, name: 'Ana Silva', answers: ['A', 'B', 'C', 'D', 'A', 'B', 'C', 'D', 'A', 'B'], status: 'pending' },
        { id: 2, name: 'Bruno Costa', answers: ['B', 'B', 'C', 'A', 'A', 'B', 'D', 'D', 'A', 'C'], status: 'pending' },
        { id: 3, name: 'Carla Mendes', answers: ['A', 'C', 'C', 'D', 'B', 'B', 'C', 'D', 'A', 'B'], status: 'pending' },
        { id: 4, name: 'Diego Santos', answers: ['A', 'B', 'A', 'D', 'A', 'C', 'C', 'D', 'B', 'B'], status: 'pending' },
        { id: 5, name: 'Elena Oliveira', answers: ['A', 'B', 'C', 'D', 'A', 'B', 'C', 'A', 'A', 'B'], status: 'pending' }
      ],
      correctAnswers: ['A', 'B', 'C', 'D', 'A', 'B', 'C', 'D', 'A', 'B'],
      currentStudentIndex: 0,
      processedStudents: [],
      progressPercent: 0
    };
  },
  computed: {
    currentStudent() {
      return this.mockStudents[this.currentStudentIndex] || {};
    },
    currentScore() {
      return this.calculateScore(this.currentStudent.answers);
    },
    progressText() {
      return `${this.currentStudentIndex} de ${this.mockStudents.length} alunos processados`;
    },
    averageScore() {
      if (this.processedStudents.length === 0) return 0;
      return this.processedStudents.reduce((sum, s) => sum + s.score, 0) / this.processedStudents.length;
    },
    approvedCount() {
      return this.processedStudents.filter(s => s.score >= 7).length;
    }
  },
  methods: {
    goBack() {
      
      console.log('Going back...');
    },
    
    handleFileUpload(event) {
      const files = event.target.files;
      if (files.length > 0) {
        this.currentView = 'processing';
        
        setTimeout(() => {
          this.currentView = 'correction';
          this.initializeCorrection();
        }, 2000);
      }
    },
    
    initializeCorrection() {
      this.updateProgressBar();
      if (this.currentStudentIndex < this.mockStudents.length) {
        
      } else {
        this.showCompletionSummary();
      }
    },
    
    calculateScore(answers) {
      let correct = 0;
      answers.forEach((answer, index) => {
        if (answer === this.correctAnswers[index]) correct++;
      });
      return (correct / this.correctAnswers.length) * 10;
    },
    
    getOptionClass(questionIndex, option) {
      const studentAnswer = this.currentStudent.answers[questionIndex];
      const correctAnswer = this.correctAnswers[questionIndex];
      
      if (studentAnswer === option) {
        return studentAnswer === correctAnswer ? 'selected-correct' : 'selected-incorrect';
      } else if (correctAnswer === option) {
        return 'correct-option';
      } else {
        return 'neutral-option';
      }
    },
    
    changeAnswer(questionIndex, newAnswer) {
      this.mockStudents[this.currentStudentIndex].answers[questionIndex] = newAnswer;
      
      this.mockStudents = [...this.mockStudents];
    },
    
    confirmCorrection() {
      const student = this.mockStudents[this.currentStudentIndex];
      const score = this.calculateScore(student.answers);
      
      this.processedStudents.push({
        ...student,
        score: score,
        status: 'validated'
      });

      this.currentStudentIndex++;
      this.updateProgressBar();

      if (this.currentStudentIndex < this.mockStudents.length) {
       
      } else {
        this.showCompletionSummary();
      }
    },
    
    skipStudent() {
      this.currentStudentIndex++;
      this.updateProgressBar();

      if (this.currentStudentIndex >= this.mockStudents.length) {
        this.showCompletionSummary();
      }
    },
    
    updateProgressBar() {
      this.progressPercent = (this.currentStudentIndex / this.mockStudents.length) * 100;
    },
    
    showCompletionSummary() {
      this.currentView = 'summary';
    },
    
    startNewCorrection() {
    
      this.currentView = 'upload';
      this.currentStudentIndex = 0;
      this.processedStudents = [];
      this.progressPercent = 0;
      
     
      this.mockStudents = [
        { id: 1, name: 'Ana Silva', answers: ['A', 'B', 'C', 'D', 'A', 'B', 'C', 'D', 'A', 'B'], status: 'pending' },
        { id: 2, name: 'Bruno Costa', answers: ['B', 'B', 'C', 'A', 'A', 'B', 'D', 'D', 'A', 'C'], status: 'pending' },
        { id: 3, name: 'Carla Mendes', answers: ['A', 'C', 'C', 'D', 'B', 'B', 'C', 'D', 'A', 'B'], status: 'pending' },
        { id: 4, name: 'Diego Santos', answers: ['A', 'B', 'A', 'D', 'A', 'C', 'C', 'D', 'B', 'B'], status: 'pending' },
        { id: 5, name: 'Elena Oliveira', answers: ['A', 'B', 'C', 'D', 'A', 'B', 'C', 'A', 'A', 'B'], status: 'pending' }
      ];
    },
    
    exportResults() {
      console.log('Exporting results...');
     
    },
    
    goToDashboard() {
      console.log('Going to dashboard...');
      
    }
  }
};
</script>

<style scoped>

@import '../assets/CorrecaoAutomatica.css';
</style>