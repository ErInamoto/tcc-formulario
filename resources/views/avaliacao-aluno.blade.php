<x-layout>
<h1 class="nomeTcc">Formulário</h1>
        
        </header>
    
        <main class="grow">
    <form action="/enviar" method="POST" class="formulario">
        <p>1 - Seu Nome</p>
        <input type="text" id="nome" name="nome" required class="caixa">
        <br>

        <p>2 - Selecione o seu Curso</p>
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

        <p>3 - Selecione o Módulo</p>
        <select id="Modulo" class="caixa">
            <option value=""></option>
            <option>1°Modulo</option>
            <option>2°Modulo</option>
            <option>3°Modulo</option>
            <option>Visitantes</option>
        </select>

        <p>4 - Avalie a criatividade na apresentação de 1 a 5</p>
        <div class="avaliacao">
            <label class="lbl-radio">
                <input class="" type="radio" name="Avalie a Criatividade" value="one">
                <span class="numero material-symbols-outlined">
                    looks_one
                </span>
            </label>

            <label class="lbl-radio">
                <input class="" type="radio" name="Avalie a Criatividade" value="two">
                <span class="numero material-symbols-outlined">
                    looks_two
                </span>
            </label>

            <label class="lbl-radio">
                <input class="" type="radio" name="Avalie a Criatividade" value="three">
                <span class="numero material-symbols-outlined">
                    looks_3
                </span>
            </label>

            <label class="lbl-radio">
                <input class="" type="radio" name="Avalie a Criatividade" value="four">
                <span class="numero material-symbols-outlined">
                    looks_4
                </span>
            </label>

            <label class="lbl-radio">
                <input class="" type="radio" name="Avalie a Criatividade" value="five">
                <span class="numero material-symbols-outlined">
                    looks_5
                </span>
            </label>
        </div>

        <br>

        <p>5 - Avalie a criatividade utilizada no Stand de 1 a 5</p>
        <div class="avaliacao">
        <label class="lbl-radio">
            <input class="" type="radio" name="criatividade utilizada no stand" value="one">
            <span class="numero material-symbols-outlined">

                looks_one
            </span>
            </span>
        </label>

        <label class="lbl-radio">
            <input class="" type="radio" name="criatividade utilizada no stand" value="two">
            <span class="numero material-symbols-outlined">
                looks_two
            </span>
        </label>
        <label class="lbl-radio">
            <input class="" type="radio" name="criatividade utilizada no stand" value="three">
            <span class="numero numero material-symbols-outlined">
                looks_3
            </span>
        </label>

        <label class="lbl-radio">
            <input class="" type="radio" name="criatividade utilizada no stand" value="four">
            <span class="numero material-symbols-outlined">
                looks_4
            </span>
        </label>
        <label class="lbl-radio">
            <input class="" type="radio" name="criatividade utilizada no stand" value="five">
            <span class="numero material-symbols-outlined">
                looks_5
            </span>
        </label>
        <br>
        </div>

        <p class="">6 - Tem Aspectos de Inclusão/acessibilidade </p>
        <div class="radio">
        <label class="selecao flex-row content-vcenter gap-10">
                <input type="radio" name="Inclusão/acessibilidade" value="sim">
                Sim
        </label>
            <label class="selecao flex-row content-vcenter gap-10">
                <input type="radio" name="Inclusão/acessibilidade" value="nao">
                Não
            </label>
            <br>
        </div>

        <p class="">7 - Contempla a sustentabilidade</p>
        <div class="radio">
        <label class="selecao flex-row content-vcenter gap-10">
                <input type="radio" name="sustentabilidade" value="sim">
                Sim
        </label>
            <label class="selecao flex-row content-vcenter gap-10">
                <input type="radio" name="sustentabilidade" value="nao">
                Não
            </label>
            <br>
        </div>

        <p class="">8 - Tem Possibilidade de se tornar uma Starup? </p>
        <div class="radio">
            <label class="selecao flex-row content-vcenter gap-10">
                <input type="radio" name="Starup" value="sim">
                Sim
            </label>
            <label class="selecao flex-row content-vcenter gap-10">
                <input type="radio" name="Starup" value="nao">
                Não
            </label>
            <br>
        </div>

        <p class="">9 - Atribua uma menção </p>
        <div>
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
        <br>
        <p>Comentários e Sugestões do Trabalho Avaliado</p>
        <input type="text" id="Cometario" class="caixona">
        <br>

        <p>Comentários e Sugestões da Mostra de TCC´s</p>
        <input type="text" id="comentários e sugestões da mostra de TCC´s"
            name="comentários e sugestões da mostra de TCC´s" class="caixona" required>
        <br>
        <input type="submit" value="Enviar">
    </form>
</x-layout>
