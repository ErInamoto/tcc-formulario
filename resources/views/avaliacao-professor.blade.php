<x-layout>
    <link rel="stylesheet" href="/css/avaliacao-professor.css">
    <h1 class="nomeTcc">Formulário Professores</h1>

    </header>

    <main class="grow">
        <form action="/salvar_prof" method="POST" class="formulario">
            <p>1 - Nome do Professor/Avaliador</p>
            <input type="text" id="nome" name="nome" required class="caixa">
            <br>

            <p>TCC avaliado</p>
            <select name="TCC" id="TCC" class="caixa">
                <option value=""></option>
                @foreach($TCCs as $TCC)
                <option value="{{ $TCC->id }}" {{ @($TCC->id == $_GET['TCC']) ? 'selected' : '' }}>{{ $TCC->nome }}</option>
                @endforeach
            </select>
            <br>

            <p>3 - Critérios de avaliação (MB - Muito bom B - Bom R - Regular I - Insatisfatório):</p>
            <div>
                <p class="">Comunicação oral </p>
                <div>
                    <label class="selecao flex-row content-vcenter gap-10">
                        <input type="radio" name="men_oral" value="MB" required>
                        MB (Muito Bom)
                    </label>

                    <label class="selecao flex-row content-vcenter gap-10">
                        <input type="radio" name="men_oral" value="B" required>
                        B (Bom)
                    </label>

                    <label class="selecao flex-row content-vcenter gap-10">
                        <input type="radio" name="men_oral" value="R" required>
                        R (Regular)
                    </label>

                    <label class="selecao flex-row content-vcenter gap-10">
                        <input type="radio" name="men_oral" value="I" required>
                        I (Insatisfatorio)
                    </label>
                </div>
            </div>
            <p>Habilidades técnicas
            <p>
                <label class="selecao flex-row content-vcenter gap-10">
                    <input type="radio" name="habilidades" id="habilidades" value="MB">
                    MB (Muito Bom)
                </label>

                <label class="selecao flex-row content-vcenter gap-10">
                    <input type="radio" name="habilidades" id="habilidades" value="B">
                    B (Bom)
                </label>

                <label class="selecao flex-row content-vcenter gap-10">
                    <input type="radio" name="habilidades" id="habilidades" value="R">
                    R (Regular)
                </label>

                <label class="selecao flex-row content-vcenter gap-10">
                    <input type="radio" name="habilidades" id="habilidades" value="I">
                    I (Insatisfatorio)
                </label>
            <p>Criatividade no Stand
            <p>
                <label class="selecao flex-row content-vcenter gap-10">
                    <input type="radio" name="criatividade" id="criatividade" value="MB">
                    MB (Muito Bom)
                </label>

                <label class="selecao flex-row content-vcenter gap-10">
                    <input type="radio" name="criatividade" id="criatividade" value="B">
                    B (Bom)
                </label>

                <label class="selecao flex-row content-vcenter gap-10">
                    <input type="radio" name="criatividade" id="criatividade" value="R">
                    R (Regular)
                </label>

                <label class="selecao flex-row content-vcenter gap-10">
                    <input type="radio" name="criatividade" id="criatividade" value="I">
                    I (irregular)
                </label>
            <p>Dinâmica de apresentação do projeto
            <p>
                <label class="selecao flex-row content-vcenter gap-10">
                    <input type="radio" name="dinamica" id="dinamica" value="MB">
                    MB (Muito Bom)
                </label>

                <label class="selecao flex-row content-vcenter gap-10">
                    <input type="radio" name="dinamica" id="dinamica" value="B">
                    B (Bom)
                </label>

                <label class="selecao flex-row content-vcenter gap-10">
                    <input type="radio" name="dinamica" id="dinamica" value="R">
                    R (Regular)
                </label>

                <label class="selecao flex-row content-vcenter gap-10">
                    <input type="radio" name="dinamica" id="dinamica" value="I">
                    I (irregular)
                </label>
            <p>Apresentação escrita
            <p>
                <label class="selecao flex-row content-vcenter gap-10">
                    <input type="radio" name="men_esc" id="escrita" value="MB">
                    MB (Muito Bom)
                </label>

                <label class="selecao flex-row content-vcenter gap-10">
                    <input type="radio" name="men_esc" id="escrita" value="B">
                    B (Bom)
                </label>

                <label class="selecao flex-row content-vcenter gap-10">
                    <input type="radio" name="men_esc" id="escrita" value="R">
                    R (Regular)
                </label>

                <label class="selecao flex-row content-vcenter gap-10">
                    <input type="radio" name="men_esc" id="escrita" value="I">
                    I (irregular)
                </label>
            <p>Avaliação geral do Projeto
            <p>
                <label class="selecao flex-row content-vcenter gap-10">
                    <input type="radio" name="mencao" id="avaliacao" value="MB">
                    MB (Muito Bom)
                </label>

                <label class="selecao flex-row content-vcenter gap-10">
                    <input type="radio" name="mencao" id="avaliacao" value="B">
                    B (Bom)
                </label>

                <label class="selecao flex-row content-vcenter gap-10">
                    <input type="radio" name="mencao" id="avaliacao" value="R">
                    R (Regular)
                </label>

                <label class="selecao flex-row content-vcenter gap-10">
                    <input type="radio" name="mencao" id="avaliacao" value="I">
                    I (irregular)
                </label>

            <p>4 -Responda SIM ou NÃO:</p>
            <p>Utilizou Canvas
            <p>
            <div class="radio">
                <label class="selecao flex-row content-vcenter gap-10">
                    <input type="radio" name="canvas" id="canvas" value="1">
                    Sim
                </label>
                <label class="selecao flex-row content-vcenter gap-10">
                    <input type="radio" name="canvas" value="0">
                    Não
                </label>
                <br>
            </div>

            <p>Tem impacto Ambiental e Economico
            <p>
            <div class="radio">
                <label class="selecao flex-row content-vcenter gap-10">
                    <input type="radio" name="impacto" id="impacto" value="1">
                    Sim
                </label>
                <label class="selecao flex-row content-vcenter gap-10">
                    <input type="radio" name="impacto" id="impacto" value="0">
                    Não
                </label>
            </div>
            <p>Considera Aspectos de Inclusão/acessiblidade
            <p>
            <div class="radio">
                <label class="selecao flex-row content-vcenter gap-10">
                    <input type="radio" name="inclusao" id="inclusao" value="1">
                    Sim
                </label>
                <label class="selecao flex-row content-vcenter gap-10">
                    <input type="radio" name="inclusao" id="inclusao" value="0">
                    Não
                </label>
            </div>
            <p>Tem Possibilidade de ser tornar uma STARTUP
            <p>
            <div class="radio">
                <label class="selecao flex-row content-vcenter gap-10">
                    <input type="radio" name="startup" id="startup" value="1">
                    Sim
                </label>
                <label class="selecao flex-row content-vcenter gap-10">
                    <input type="radio" name="startup" id="startup" value="0">
                    Não
                </label>
            </div>



            <p>5 -Esse projeto pode ser apresentado na(o)? (pode ser selecionado mais de uma opção)</p>
            FETEPS (Feira Tecnológica do CPS)
            <label class="selecao flex-row content-vcenter gap-10">
                <input type="checkbox" name="feteps" id="feteps" value="1">
            </label>
            ESCOLA DE INOVADORES (Agência INOVA)
            <label class="selecao flex-row content-vcenter gap-10">
                <input type="checkbox" name="inova" id="inova" value="1">
            </label>
            WORKSHOP ETEC / FEIRA DE PROFISSÕES
            <label class="selecao flex-row content-vcenter gap-10">
                <input type="checkbox" name="workshop" id="workshop" value="1">
            </label>
            Outra
            <input type="text" id="outro" class="caixona">



            <p class="">6 - Comentários e sugestões do trabalho avaliado:</p>
            <input type="text" id="coment_tcc" class="caixona">
            <br>
            </div>

            <p class="">7 - Comentários e sugestões da Mostra de TCCs:</p>
            <input type="text" id="coment_mostra" name="Comentários e sugestões da Mostra de TCC" class="caixona">
            <br>
            <input type="submit" value="Enviar">
            </div>
            @csrf
        </form>
</x-layout>