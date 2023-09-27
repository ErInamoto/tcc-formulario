<x-layout>
<h1 class="nomeTcc">Formulário Professores</h1>
        
        </header>
    
        <main class="grow">
    <form action="/enviar" method="POST" class="formulario">
        <p>1 - Nome do Professor/Avaliador</p>
        <input type="text" id="nome" name="nome" required class="caixa">
        <br>

        <p>2 - Selecione o TCC a ser avaliado:</p>
        <select id="cursos" class="caixa">
            <option value=""></option>
            <option>Segurança de Trabalho</option>
            <option>Desenvolvimento de sistemas</option>
            <option>Administração</option>
            <option>informatica</option>
            <option>Contabilidade</option>
            <option>Serviços Juridicos</option>
            <option>Enfermagem</option>
            <option>Logistica</option>
            <option>Comercio</option>
            <option>Gestão de Projetos</option>
            <option>Transações Imobiliárias</option>
            <option>Guia de Turismo</option>
            <option>Empreendedorismo</option>
        </select>
        <br>

        <p>3 - Critérios de avaliação (MB - Muito bom          B - Bom         R - Regular       I - Insatisfatório):</p>
        <div>
           <p>Comunicação oral<p>
        <label class="selecao flex-row content-vcenter gap-10">
                <input type="radio" name="menção" value="MB">
                MB (Muito Bom)
            </label>
            
            <label class="selecao flex-row content-vcenter gap-10">
                <input type="radio" name="menção" value="B">
                B (Bom)
            </label>
            
            <label class="selecao flex-row content-vcenter gap-10">
                <input type="radio" name="menção" value="R">
                R (Regular)
            </label>
            
            <label class="selecao flex-row content-vcenter gap-10">  
                <input type="radio" name="menção" value="I">
                I (Insatisfatorio)
            </label>  
        </div>
        <p>Habilidades técnicas<p>
        <label class="selecao flex-row content-vcenter gap-10">
                <input type="radio" name="menção-2" value="MB">
                MB (Muito Bom)
            </label>
            
            <label class="selecao flex-row content-vcenter gap-10">
                <input type="radio" name="menção-2" value="B">
                B (Bom)
            </label>
            
            <label class="selecao flex-row content-vcenter gap-10">
                <input type="radio" name="menção-2" value="R">
                R (Regular)
            </label>
            
            <label class="selecao flex-row content-vcenter gap-10">  
                <input type="radio" name="menção-2" value="I">
                I (Insatisfatorio)
            </label>  
            <p>Criatividade no Stand<p>
            <label class="selecao flex-row content-vcenter gap-10">
                <input type="radio" name="menção-3" value="MB">
                MB (Muito Bom)
            </label>
            
            <label class="selecao flex-row content-vcenter gap-10">
                <input type="radio" name="menção-3" value="B">
                B (Bom)
            </label>
            
            <label class="selecao flex-row content-vcenter gap-10">
                <input type="radio" name="menção-3" value="R">
                R (Regular)
            </label>
            
            <label class="selecao flex-row content-vcenter gap-10">  
                <input type="radio" name="menção-3" value="I">
               I (irregular)
               </label>
               <p>Dinâmica de apresentação do projeto<p>
               <label class="selecao flex-row content-vcenter gap-10">
                <input type="radio" name="menção-4" value="MB">
                MB (Muito Bom)
            </label>
            
            <label class="selecao flex-row content-vcenter gap-10">
                <input type="radio" name="menção-4" value="B">
                B (Bom)
            </label>
            
            <label class="selecao flex-row content-vcenter gap-10">
                <input type="radio" name="menção-4" value="R">
                R (Regular)
            </label>
            
            <label class="selecao flex-row content-vcenter gap-10">  
                <input type="radio" name="menção-4" value="I">
               I (irregular)
               </label>
               <p>Apresentação escrita<p>
               <label class="selecao flex-row content-vcenter gap-10">
                <input type="radio" name="menção-5" value="MB">
                MB (Muito Bom)
            </label>
            
            <label class="selecao flex-row content-vcenter gap-10">
                <input type="radio" name="menção-5" value="B">
                B (Bom)
            </label>
            
            <label class="selecao flex-row content-vcenter gap-10">
                <input type="radio" name="menção-5" value="R">
                R (Regular)
            </label>
            
            <label class="selecao flex-row content-vcenter gap-10">  
                <input type="radio" name="menção-5" value="I">
               I (irregular)
               </label>
               <p>Avaliação geral do Projeto<p>
               <label class="selecao flex-row content-vcenter gap-10">
                <input type="radio" name="menção-6" value="MB">
                MB (Muito Bom)
            </label>
            
            <label class="selecao flex-row content-vcenter gap-10">
                <input type="radio" name="menção-6" value="B">
                B (Bom)
            </label>
            
            <label class="selecao flex-row content-vcenter gap-10">
                <input type="radio" name="menção-6" value="R">
                R (Regular)
            </label>
            
            <label class="selecao flex-row content-vcenter gap-10">  
                <input type="radio" name="mencao-6" value="I">
               I (irregular)
               </label>

        <p>4 -Responda SIM ou NÃO:</p>
        <p>Utilizou Canvas<p>
        <div class="radio">
            <label class="selecao flex-row content-vcenter gap-10">
                <input type="radio" name="canvas" value="sim">
                Sim
            </label>
            <label class="selecao flex-row content-vcenter gap-10">
                <input type="radio" name="canvas" value="nao">
                Não
            </label>
            <br>
        </div>
        
        <p>Tem impacto Ambiental e Economico<p>
        <div class="radio">
            <label class="selecao flex-row content-vcenter gap-10">
                <input type="radio" name="impacto" value="sim">
                Sim
            </label>
            <label class="selecao flex-row content-vcenter gap-10">
                <input type="radio" name="impacto" value="nao">
                Não
            </label>
        </div>
        <p>Considera Aspectos de Inclusão/acessiblidade<p>
        <div class="radio">
            <label class="selecao flex-row content-vcenter gap-10">
                <input type="radio" name="inclusao" value="sim">
                Sim
            </label>
            <label class="selecao flex-row content-vcenter gap-10">
                <input type="radio" name="inclusao" value="nao">
                Não
            </label>
        </div>
        <p>Tem Possibilidade de ser tornar uma STARUP<p>
        <div class="radio">
            <label class="selecao flex-row content-vcenter gap-10">
                <input type="radio" name="starup" value="sim">
                Sim
            </label>
            <label class="selecao flex-row content-vcenter gap-10">
                <input type="radio" name="starup" value="nao">
                Não
            </label>
        </div>
        
        

        <p>5 -Esse projeto pode ser apresentado na(o)?  (pode ser selecionado mais de uma opção)</p>
        FETEPS (Feira Tecnológica do CPS)
        <label class="selecao flex-row content-vcenter gap-10">  
        <input type="radio" name="feteps" value="fet">
               </label>
               ESCOLA DE INOVADORES (Agência INOVA) 
               <label class="selecao flex-row content-vcenter gap-10"> 
                <input type="radio" name="ESCOLA DE INOVADORES (Agência INOVA)" value="inova">
               </label>
               WORKSHOP ETEC / FEIRA DE PROFISSÕES
               <label class="selecao flex-row content-vcenter gap-10"> 
                <input type="radio" name="WORKSHOP ETEC / FEIRA DE PROFISSÕES" value="workshop">
               </label>
               Outra
               <input type="text" id="Cometario" class="caixona">



        <p class="">6 - Comentários e sugestões do trabalho avaliado:</p>
        <input type="text" id="Cometario" class="caixona">
        <br>
        </div>

        <p class="">7 - Comentários e sugestões da Mostra de TCCs:</p>
        <input type="text" id="Comentários e sugestões da Mostra de TCC"
            name="Comentários e sugestões da Mostra de TCC" class="caixona" required>
        <br>
        <input type="submit" value="Enviar">
        </div>
</x-layout>