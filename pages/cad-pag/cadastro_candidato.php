<!doctype html>
<html lang="en" data-bs-theme="auto">
   <head>
      <script src="https://getbootstrap.com/docs/5.3/assets/js/color-modes.js"></script>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
      <meta name="generator" content="Hugo 0.118.2">
      <title>SisCTemp | Cadastrar</title>
      <title></title>
      <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/checkout/">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
      <link href="https://getbootstrap.com/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <style>
         .hidden {
         display: none;
         }
         #loading {
         display: none;
         position: absolute;
         background-color: rgba(255, 255, 255, 0.8);
         border-radius: 5px;
         padding: 20px;
         background-position: 50%;
         text-align: center;
         z-index: 1;
         }
         #loading img {
         margin-bottom: 10px;
         }
         .bd-placeholder-img {
         font-size: 1.125rem;
         text-anchor: middle;
         -webkit-user-select: none;
         -moz-user-select: none;
         user-select: none;
         }
         @media (min-width: 768px) {
         .bd-placeholder-img-lg {
         font-size: 3.5rem;
         }
         }
         .b-example-divider {
         width: 100%;
         height: 3rem;
         background-color: rgba(0, 0, 0, .1);
         border: solid rgba(0, 0, 0, .15);
         border-width: 1px 0;
         box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
         }
         .b-example-vr {
         flex-shrink: 0;
         width: 1.5rem;
         height: 100vh;
         }
         .bi {
         vertical-align: -.125em;
         fill: currentColor;
         }
         .nav-scroller {
         position: relative;
         z-index: 2;
         height: 2.75rem;
         overflow-y: hidden;
         }
         .nav-scroller .nav {
         display: flex;
         flex-wrap: nowrap;
         padding-bottom: 1rem;
         margin-top: -1px;
         overflow-x: auto;
         text-align: center;
         white-space: nowrap;
         -webkit-overflow-scrolling: touch;
         }
         .btn-bd-primary {
         --bd-violet-bg: #712cf9;
         --bd-violet-rgb: 112.520718, 44.062154, 249.437846;
         --bs-btn-font-weight: 600;
         --bs-btn-color: var(--bs-white);
         --bs-btn-bg: var(--bd-violet-bg);
         --bs-btn-border-color: var(--bd-violet-bg);
         --bs-btn-hover-color: var(--bs-white);
         --bs-btn-hover-bg: #6528e0;
         --bs-btn-hover-border-color: #6528e0;
         --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
         --bs-btn-active-color: var(--bs-btn-hover-color);
         --bs-btn-active-bg: #5a23c8;
         --bs-btn-active-border-color: #5a23c8;
         }
         .bd-mode-toggle {
         z-index: 1500;
         }
         .bd-mode-toggle .dropdown-menu .active .bi {
         display: block !important;
         }
      </style>
      <!-- Custom styles for this template -->
      <link href="cad-pag.css" rel="stylesheet">
   </head>
   <body class="bg-body-tertiary">
      <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
         <symbol id="check2" viewBox="0 0 16 16">
            <path
               d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
         </symbol>
         <symbol id="circle-half" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
         </symbol>
         <symbol id="moon-stars-fill" viewBox="0 0 16 16">
            <path
               d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
            <path
               d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
         </symbol>
         <symbol id="sun-fill" viewBox="0 0 16 16">
            <path
               d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
         </symbol>
      </svg>
      <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
         <button class="btn btn-bd-light py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button"
            aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
            <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
               <use href="#circle-half"></use>
            </svg>
            <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
         </button>
         <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
            <li>
               <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light"
                  aria-pressed="false">
                  <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                     <use href="#sun-fill"></use>
                  </svg>
                  Light
                  <svg class="bi ms-auto d-none" width="1em" height="1em">
                     <use href="#check2"></use>
                  </svg>
               </button>
            </li>
            <li>
               <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark"
                  aria-pressed="false">
                  <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                     <use href="#moon-stars-fill"></use>
                  </svg>
                  Dark
                  <svg class="bi ms-auto d-none" width="1em" height="1em">
                     <use href="#check2"></use>
                  </svg>
               </button>
            </li>
            <li>
               <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto"
                  aria-pressed="true">
                  <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                     <use href="#circle-half"></use>
                  </svg>
                  Auto
                  <svg class="bi ms-auto d-none" width="1em" height="1em">
                     <use href="#check2"></use>
                  </svg>
               </button>
            </li>
         </ul>
      </div>
      <!-- Conteiner -->
      <div class="container">
         <main>
            <div class="py-5 text-center">
               <img class=" mx-auto mb-4" src="../../media/img/img/7rm.png" alt="" width="100" height="150">
               <h2>Cadastro no Sistema </h2>
               <p class="lead">Preencha os campos abaixo com suas informações pessoais para criar sua conta.
               </p>
            </div>
            <!-- Organizador Lateral -->
            <div class="row g-5">
               <div class="col-md-5 col-lg-4 order-md-last">
                  <h4 class="d-flex justify-content-between align-items-center mb-3">
                     <span class="text-warning">Fases do Processo</span>
                     <span class="badge bg-success rounded-pill">5</span>
                  </h4>
                  <ul class="list-group mb-3">
                     <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                           <h6 class="my-0">Inscrição</h6>
                           <small class="text-body-secondary">18 de setembro de 2023</small>
                        </div>
                     </li>
                     <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                           <h6 class="my-0">Avaliação Curricular</h6>
                           <small class="text-body-secondary">18 de setembro de 2023</small>
                        </div>
                     </li>
                     <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                           <h6 class="my-0">Inspeção Medica</h6>
                           <small class="text-body-secondary">18 de setembro de 2023</small>
                        </div>
                     </li>
                     <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                           <h6 class="my-0">Exame de Aptidão Fisica</h6>
                           <small class="text-body-secondary">18 de setembro de 2023</small>
                        </div>
                     </li>
                     <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                           <h6 class="my-0">Divulgação das Vagas</h6>
                           <small class="text-body-secondary">18 de setembro de 2023</small>
                        </div>
                     </li>
                     <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                           <h6 class="my-0">Seleção Complementar</h6>
                           <small class="text-body-secondary">18 de setembro de 2023</small>
                        </div>
                     </li>
                     <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                           <h6 class="my-0">Incorporação</h6>
                           <small class="text-body-secondary">18 de setembro de 2023</small>
                        </div>
                     </li>
                  </ul>
               </div>
               <!-- Encerramento de bloco -->
               <div class="col-md-7 col-lg-8">
                  <h5 class="mb-3">Dados pessoais</h5>
                  <form class="needs-validation" novalidate method="post" action="../bd-conf/insert-caduser-bd.php">
                     <div class="row g-3">
                        <div class="col-sm-12">
                           <label for="nomeCompleto" class="form-label">Nome Completo</label>
                           <input type="text" class="form-control" name="nomeCompleto" id="nomeCompleto" required oninput="toUpperCase()" placeholder="" value="" required>
                           <div class="invalid-feedback">
                              Insira o que é solicitado no campo.
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <label for="cpf" class="form-label">CPF</label>
                           <input type="text" class="form-control" name="cpf" id="cpf" placeholder="" maxlength="14" required>
                           <div id="messageBox"></div>
                        </div>
                        <div class="col-sm-6">
                           <label for="identidadeOrgaoExp" class="form-label">Identidade/Orgão Exp.</label>
                           <input type="text" class="form-control" name="identidadeOrgaoExp" placeholder="" maxlength="14" required>
                           <div class="invalid-feedback">
                              Please enter a valid email address for shipping updates.
                           </div>
                        </div>
                        <div class="col-md-6">
                           <label for="nacionalidade" class="form-label">Nacionalidade</label>
                           <input type="text" class="form-control" name="nacionalidade" placeholder="(País)" required>
                           <div class="invalid-feedback">
                              Please enter your shipping address.
                           </div>
                        </div>
                        <div class="col-md-6">
                           <label for="naturalidade" class="form-label">Naturalidade</label>
                           <input type="text" class="form-control" name="naturalidade" placeholder="(Cidade/UF)" required>
                           <div class="invalid-feedback">
                              Please enter your shipping address.
                           </div>
                        </div>
                        <div class="col-md-6">
                           <label for="sexo" class="form-label">Sexo</label>
                           <select class="form-select" name="sexo" required>
                              <option value="">Selecione ...</option>
                              <option value="Masculino">Masculino</option>
                              <option value="Feminino">Feminino</option>
                              <option value="Outro">Outro</option>
                           </select>
                           <div class="invalid-feedback">
                              Please enter your shipping address.
                           </div>
                        </div>
                        <div class="col-md-6">
                           <label for="estadoCivil" class="form-label">Estado Civil</label>
                           <select class="form-select" name="estadoCivil" required>
                              <option value="">Selecione ...</option>
                              <option value="Casado(a)">Casado(a)</option>
                              <option value="Solteiro(a)">Solteiro(a)</option>
                              <option value="União Estavel">União Estavel</option>
                              <option value="Viuvo(a)">Viuvo(a)</option>
                              <option value="Outro">Outro</option>
                           </select>
                           <div class="invalid-feedback">
                              Please enter your shipping address.
                           </div>
                        </div>
                        <div class="col-md-6">
                           <label for="filiacaoPai" class="form-label">Filiação (Pai)</label>
                           <input type="text" class="form-control" name="filiacaoPai" placeholder="(Cidade/UF)" required>
                           <div class="invalid-feedback">
                              Please enter your shipping address.
                           </div>
                        </div>
                        <div class="col-md-6">
                           <label for="filiacaoMae" class="form-label">Filiação (Mãe)</label>
                           <input type="text" class="form-control" name="filiacaoMae" placeholder="(Cidade/UF)" required>
                           <div class="invalid-feedback">
                              Please enter your shipping address.
                           </div>
                        </div>
                        <div class="col-md-4">
                           <label class="form-label">Data de Nascimento</label>
                           <input type="date" class="form-control" name="dataNascimento" required>
                           <div class="invalid-feedback">
                              Please enter your shipping address.
                           </div>
                        </div>
                        <div class="col-md-4">
                           <label class="form-label">Dependentes</label>
                           <select name="numDependentes" class="form-select">
                              <option value="">Selecione a opção</option>
                              <option value="0">Não possuo dependentes</option>
                              <option value="1">Possuo 1 dependente</option>
                              <option value="2">Possuo 2 dependentes</option>
                              <option value="3">Possuo 3 dependentes</option>
                              <option value="4">Possuo 4 dependentes</option>
                              <option value="5">Possuo 5 dependentes</option>
                              <option value="6">Possuo 6 dependentes</option>
                              <option value="7">Possuo 7 dependentes</option>
                              <option value="8">Possuo 8 dependentes</option>
                           </select>
                        </div>
                        <div class="col-md-4">
                           <label for="nomeSocial" class="form-label">Nome Social</label>
                           <input type="text" class="form-control" name="nomeSocial" placeholder="(Opcional)" required>
                           <div class="invalid-feedback">
                              Please enter your shipping address.
                           </div>
                        </div>
                        <hr class="my-4">
                        <h5 class="mb-3">Endereço</h5>
                        <div class="col-md-3">
                           <label for="cep" class="form-label">Cep</label>
                           <input type="text" class="form-control" name="cep"   id="cep" placeholder="" required>
                           <div id="loading">
                              <img src="loading.gif" alt="Carregando..." class="img-fluid">
                              <p>Carregando...</p>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <label for="estado" class="form-label">Estado</label>
                           <input type="text" class="form-control" name="estado" placeholder="" required>
                           <div class="invalid-feedback">
                              Please provide a valid state.
                           </div>
                        </div>
                        <div class="col-md-5">
                           <label for="cidade" class="form-label">Cidade</label>
                           <input type="text" class="form-control" name="cidade" placeholder="" required>
                           <div class="invalid-feedback">
                              Zip code required.
                           </div>
                        </div>
                        <div class="col-md-8">
                           <label for="logradouro" class="form-label">Lagradouro <span class="text-body-secondary"></span></label>
                           <input type="text" class="form-control" name="logradouro" placeholder="">
                           <div class="invalid-feedback">
                              Zip code required.
                           </div>
                        </div>
                        <div class="col-md-4">
                           <label for="bairro" class="form-label">Bairro<span class="text-body-secondary"></span></label>
                           <input type="text" class="form-control" name="bairro" placeholder="">
                           <div class="invalid-feedback">
                              Zip code required.
                           </div>
                        </div>
                        <hr class="my-4">
                        <h5 class="mb-3">Contatos</h5>
                        <div class="col-12">
                           <label for="email" class="form-label">Email <span class="text-body-secondary"></span></label>
                           <input type="email" class="form-control" name="email" placeholder="you@example.com">
                           <div class="invalid-feedback">
                              Please enter a valid email address for shipping updates.
                           </div>
                        </div>
                        <div class="col-md-6">
                           <label for="telefoneContato" class="form-label">Telefone para Contato</label>
                           <input type="text" class="form-control" name="telefoneContato" maxlength="15" required>
                           <div class="invalid-feedback">
                              Please enter your shipping address.
                           </div>
                        </div>
                        <div class="col-md-6">
                           <label for="telefoneRecados" class="form-label">Telefone para Recados</label>
                           <input type="text" class="form-control" name="telefoneRecados" maxlength="15" placeholder="(Opcional)" required>
                           <div class="invalid-feedback">
                              Please enter your shipping address.
                           </div>
                        </div>
                        <hr class="my-4">
                        <h5 class="mb-3">Tempo de serviço militar (Forças Armadas) até a data final da inscrição</h5>
                        <div class="col-12">
                           <label for="resposta" class="form-label">Possui tempo de serviço militar ? <span class="text-body-secondary"></span></label>
                           <select class="form-select" name="resposta" required>
                              <option value="0">Selecione ...</option>
                              <option value="sim">Sim</option>
                              <option value="nao">Não</option>
                           </select>
                        </div>
                        <div id="camposAdicionais" class="row g-2">
                           <div class="col-md-4">
                              <label for="anosMilitar" class="form-label">Anos</label>
                              <select class="form-select" name="anosMilitar" required>
                                 <option value="">Selecione quantos anos</option>
                                 <option value="0">0</option>
                                 <option value="1">1</option>
                                 <option value="2">2</option>
                                 <option value="3">3</option>
                                 <option value="4">4</option>
                                 <option value="5">5</option>
                                 <option value="6">6</option>
                                 <option value="7">7</option>
                              </select>
                              <div class="invalid-feedback">
                                 Please enter your shipping address.
                              </div>
                           </div>
                           <div class="col-md-4">
                              <label for="mesesMilitar" class="form-label">Meses</label>
                              <select class="form-select" name="mesesMilitar" required>
                                 <option value="0">Selecione ...</option>
                                 <option value="0">0</option>
                                 <option value="1">1</option>
                                 <option value="2">2</option>
                                 <option value="3">3</option>
                                 <option value="4">4</option>
                                 <option value="5">5</option>
                                 <option value="6">6</option>
                                 <option value="7">7</option>
                                 <option value="8">8</option>
                                 <option value="9">9</option>
                                 <option value="10">10</option>
                                 <option value="11">11</option>
                              </select>
                              <div class="invalid-feedback">
                                 Please enter your shipping address.
                              </div>
                           </div>
                           <div class="col-md-4">
                              <label for="diasMilitar" class="form-label">Dias</label>
                              <select class="form-select" name="diasMilitar" required>
                                 <option value="0">Selecione ...</option>
                                 <option value="sim">Sim</option>
                                 <option value="nao">Não</option>
                              </select>
                              <div class="invalid-feedback">
                                 Please enter your shipping address.
                              </div>
                           </div>
                        </div>
                     </div>
               </div>
            </div>
            <hr class="my-4">
            <button class="w-100 btn btn-warning btn-lg" type="submit">Realizar Cadastro</button>
            </form>
      </div>
      </main>
      <footer class="my-5 pt-5 text-body-secondary text-center text-small">
         <p class="mb-1">&copy; SisCTemp</p>
      </footer>
      </div>
      <script src="https://getbootstrap.com/docs/5.3/dist/js/bootstrap.bundle.min.js"></script>
      <script src="cad-pag.js"></script>
      <!-- 
         <script>
           // Função para aplicar a máscara ao CPF
           function formatCPF(cpf) {
               cpf = cpf.replace(/\D/g, ''); // Remove caracteres não numéricos
               cpf = cpf.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4'); // Aplica a máscara
               return cpf;
           }
         
           // Adiciona um ouvinte de eventos ao campo de entrada
           const cpfInput = document.getElementById('cpf');
           cpfInput.addEventListener('input', function () {
               this.value = formatCPF(this.value);
           });
         
         </script>
         
          -->
      <script>
         const respostaSelect = document.getElementById('resposta');
         const camposAdicionais = document.getElementById('camposAdicionais');
         
         respostaSelect.addEventListener('change', () => {
             if (respostaSelect.value === 'sim') {
                 camposAdicionais.style.display = 'block';
             } else {
                 camposAdicionais.style.display = 'none';
             }
         });
      </script>
      <script>
         function formatarTelefone(input) {
           const numeroLimpo = input.replace(/\D/g, '');
           if (numeroLimpo.length === 11) {
             return `(${numeroLimpo.slice(0, 2)}) ${numeroLimpo.slice(2, 7)}-${numeroLimpo.slice(7, 11)}`;
           } else if (numeroLimpo.length === 10) {
             return `(${numeroLimpo.slice(0, 2)}) ${numeroLimpo.slice(2, 6)}-${numeroLimpo.slice(6, 10)}`;
           } else {
             return numeroLimpo;
           }
         }
         
         document.getElementById('telefone').addEventListener('input', function () {
           this.value = formatarTelefone(this.value);
         });
      </script>
      <script>
         function isValidCPF(cpf) {
           cpf = cpf.replace(/[^\d]/g, ''); // Remove caracteres não numéricos
         
           if (cpf.length !== 11) {
             return false;
           }
         
           let sum = 0;
           let remainder;
         
           for (let i = 1; i <= 9; i++) {
             sum += parseInt(cpf.substring(i - 1, i)) * (11 - i);
           }
         
           remainder = (sum * 10) % 11;
         
           if ((remainder === 10) || (remainder === 11)) {
             remainder = 0;
           }
         
           if (remainder !== parseInt(cpf.substring(9, 10))) {
             return false;
           }
         
           sum = 0;
         
           for (let i = 1; i <= 10; i++) {
             sum += parseInt(cpf.substring(i - 1, i)) * (12 - i);
           }
         
           remainder = (sum * 10) % 11;
         
           if ((remainder === 10) || (remainder === 11)) {
             remainder = 0;
           }
         
           if (remainder !== parseInt(cpf.substring(10, 11))) {
             return false;
           }
         
           return true;
         }
         
         const cpfInput = document.getElementById('cpfInput');
         const errorMessage = document.getElementById('errorMessage');
         
         cpfInput.addEventListener('blur', function () {
           let cpf = cpfInput.value;
         
           // Aplicar a máscara do CPF (formato: 999.999.999-99)
           cpf = cpf.replace(/\D/g, ''); // Remove tudo que não for dígito
           cpf = cpf.replace(/(\d{3})(\d)/, '$1.$2');
           cpf = cpf.replace(/(\d{3})(\d)/, '$1.$2');
           cpf = cpf.replace(/(\d{3})(\d{1,2})$/, '$1-$2');
         
           cpfInput.value = cpf;
         
           // Limitar o campo a 14 caracteres (incluindo a máscara)
           if (cpfInput.value.length > 14) {
             cpfInput.value = cpfInput.value.slice(0, 14);
           }
         
           const formattedCPF = cpf.replace(/[^\d]/g, ''); // Remove a máscara para a validação
         
           if (isValidCPF(formattedCPF)) {
             errorMessage.textContent = '';
           } else {
             errorMessage.textContent = 'CPF inválido.';
           }
         });
      </script>
      <!-- Script responsavel por gerar endero apos CEP -->
      <script>
         function consultarCEP(cep) {
           document.getElementById('loading').style.display = 'inline'; // Mostrar o span de carregamento
           setTimeout(function () {
             fetch(`https://viacep.com.br/ws/${cep}/json/`)
               .then(response => response.json())
               .then(data => {
                 preencherCampos(data);
                 document.getElementById('loading').style.display = 'none'; // Esconder o span de carregamento
               })
               .catch(error => {
                 console.log('Erro ao consultar CEP:', error);
                 document.getElementById('loading').style.display = 'none'; // Esconder o span de carregamento em caso de erro
               });
           }, 2000); // Delay de 1 segundo (simulação)
         }
         
         function preencherCampos(data) {
           document.getElementById('logradouroInput').value = data.logradouro.toUpperCase();
           document.getElementById('bairroInput').value = data.bairro.toUpperCase();
           document.getElementById('cidadeInput').value = data.localidade.toUpperCase();
           document.getElementById('ufInput').value = data.uf.toUpperCase();
         }
         
         const cepInput = document.getElementById('cepInput');
         
         cepInput.addEventListener('input', function () {
           let cep = cepInput.value.replace(/\D/g, ''); // Remove não dígitos
           cep = cep.substring(0, 5) + '-' + cep.substring(5, 8); // Aplica máscara
         
           cepInput.value = cep.toUpperCase(); // Converte para maiúsculas
         
           if (cep.length === 9) {
             consultarCEP(cep);
           }
         });
      </script>

<script>
    // Função para converter o texto em maiúsculas
    function toUpperCase() {
        var input = document.getElementById("nomeCompleto");
        input.value = input.value.toUpperCase();
    }
</script>
   </body>
</html>