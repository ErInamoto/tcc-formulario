<x-layout>
    <h1 class="nomeTcc">Formulário</h1>
    </header>
    <main class="grow">

        <form action="/salvar" method="GET" class="formulario">

            <p>TCC avaliado</p>
            <select name="TCC" id="TCC" class="caixa">
                <option value=""></option>
                @foreach($TCCs as $TCC)
                <option value="{{ $TCC->id }}" {{ @($TCC->id == $_GET['TCC']) ? 'selected' : '' }}>{{ $TCC->nome }}</option>
                @endforeach
            </select>

            <p>1 - Seu Nome</p>
            <input type="text" id="nome" name="nome" required class="caixa">
            <br>

            <p>2 - Selecione o seu Curso</p>
            <select id="curso" class="caixa" name="curso">
                <option value=""></option>
                @foreach($cursos as $curso)
                <option value="{{ $curso->id }}">{{ $curso->nome }}</option>
                @endforeach
            </select>

            <p>3 - Selecione o Módulo</p>
            <select id="Modulo" class="caixa" name="modulo">
                <option value=""></option>
                <option>1°Modulo</option>
                <option>2°Modulo</option>
                <option>3°Modulo</option>
                <option>4°Modulo</option>
                <option>Visitantes</option>
            </select>

            <p>4 - Avalie a criatividade na apresentação de 1 a 5</p>
            <div class="avaliacao">
                <label class="lbl-radio">
                    <input class="" type="radio" name="apresentacao" value="1">
                    <span class="numero material-symbols-outlined">
                        looks_one
                    </span>
                </label>

                <label class="lbl-radio">
                    <input class="" type="radio" name="apresentacao" value="2">
                    <span class="numero material-symbols-outlined">
                        looks_two
                    </span>
                </label>

                <label class="lbl-radio">
                    <input class="" type="radio" name="apresentacao" value="3">
                    <span class="numero material-symbols-outlined">
                        looks_3
                    </span>
                </label>

                <label class="lbl-radio">
                    <input class="" type="radio" name="apresentacao" value="4">
                    <span class="numero material-symbols-outlined">
                        looks_4
                    </span>
                </label>

                <label class="lbl-radio">
                    <input class="" type="radio" name="apresentacao" value="5">
                    <span class="numero material-symbols-outlined">
                        looks_5
                    </span>
                </label>
            </div>

            <br>

            <p>5 - Avalie a criatividade utilizada no Stand de 1 a 5</p>
            <div class="avaliacao">
                <label class="lbl-radio">
                    <input class="" type="radio" name="stand" value="1">
                    <span class="numero material-symbols-outlined">

                        looks_one
                    </span>
                    </span>
                </label>

                <label class="lbl-radio">
                    <input class="" type="radio" name="stand" value="2">
                    <span class="numero material-symbols-outlined">
                        looks_two
                    </span>
                </label>
                <label class="lbl-radio">
                    <input class="" type="radio" name="stand" value="3">
                    <span class="numero numero material-symbols-outlined">
                        looks_3
                    </span>
                </label>

                <label class="lbl-radio">
                    <input class="" type="radio" name="stand" value="4">
                    <span class="numero material-symbols-outlined">
                        looks_4
                    </span>
                </label>
                <label class="lbl-radio">
                    <input class="" type="radio" name="stand" value="5">
                    <span class="numero material-symbols-outlined">
                        looks_5
                    </span>
                </label>
                <br>
            </div>

            <p class="">6 - Tem Aspectos de Inclusão/acessibilidade </p>
            <div class="radio">
                <label class="selecao flex-row content-vcenter gap-10">
                    <input type="radio" name="acessibilidade" value="sim">
                    Sim
                </label>
                <label class="selecao flex-row content-vcenter gap-10">
                    <input type="radio" name="acessibilidade" value="nao">
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
                    <input type="radio" name="startup" value="sim">
                    Sim
                </label>
                <label class="selecao flex-row content-vcenter gap-10">
                    <input type="radio" name="startup" value="nao">
                    Não
                </label>
                <br>
            </div>

            <p class="">9 - Assinale os Pontos Fortes </p>
            <div class="radio">
                <label class="selecao flex-row content-vcenter gap-10">
                    <input type="checkbox" name="pratico" id="pratico">É prático
                </label>
                <label class="selecao flex-row content-vcenter gap-10">
                    <input type="checkbox" name="viavel" id="viavel">É viável
                </label>
                <label class="selecao flex-row content-vcenter gap-10">
                    <input type="checkbox" name="benefico" id="benefico">Traz benefícios a comunidade
                </label>
                <label class="selecao flex-row content-vcenter gap-10">
                    <input type="checkbox" name="tecnologico" id="tecnologico">Está aliado com as tecnologias
                </label>
                <input type="text" id="Comentario" name="ponto_posit" class="caixona" placeholder="Outro">
                <br>
            </div>

            <p class="">10 - Assinale os Pontos Fracos </p>
            <div class="radio">
                <label class="selecao flex-row content-vcenter gap-10">
                    <input type="checkbox" name="incompleto" id="incompleto">Precisa ser aperfeiçoado
                </label>
                <label class="selecao flex-row content-vcenter gap-10">
                    <input type="checkbox" name="inviavel" id="inviavel">Não é viável
                </label>
                <label class="selecao flex-row content-vcenter gap-10">
                    <input type="checkbox" name="caro" id="caro">É muito caro para ser implantado
                </label>
                <input type="text" id="Comentario" name="ponto_neg" class="caixona" placeholder="Outro">
                <br>
            </div>

            <p class="">11 - Atribua uma menção à comunicação oral </p>
            <div>
                <label class="selecao flex-row content-vcenter gap-10">
                    <input type="radio" name="men_oral" value="oral_MB">
                    MB (Muito Bom)
                </label>

                <label class="selecao flex-row content-vcenter gap-10">
                    <input type="radio" name="men_oral" value="oral_B">
                    B (Bom)
                </label>

                <label class="selecao flex-row content-vcenter gap-10">
                    <input type="radio" name="men_oral" value="oral_R">
                    R (Regular)
                </label>

                <label class="selecao flex-row content-vcenter gap-10">
                    <input type="radio" name="men_oral" value="oral_I">
                    I (Insatisfatorio)
                </label>
            </div>

            <p class="">12 - Atribua uma menção à apresentação escrita </p>
            <div>
                <label class="selecao flex-row content-vcenter gap-10">
                    <input type="radio" name="men_esc" value="esc_MB">
                    MB (Muito Bom)
                </label>

                <label class="selecao flex-row content-vcenter gap-10">
                    <input type="radio" name="men_esc" value="esc_B">
                    B (Bom)
                </label>

                <label class="selecao flex-row content-vcenter gap-10">
                    <input type="radio" name="men_esc" value="esc_R">
                    R (Regular)
                </label>

                <label class="selecao flex-row content-vcenter gap-10">
                    <input type="radio" name="men_esc" value="esc_I">
                    I (Insatisfatorio)
                </label>
            </div>

            <p class="">13 - Atribua uma menção </p>
            <div>
                <label class="selecao flex-row content-vcenter gap-10">
                    <input type="radio" name="mencao" value="men_MB">
                    MB (Muito Bom)
                </label>

                <label class="selecao flex-row content-vcenter gap-10">
                    <input type="radio" name="mencao" value="men_B">
                    B (Bom)
                </label>

                <label class="selecao flex-row content-vcenter gap-10">
                    <input type="radio" name="mencao" value="men_R">
                    R (Regular)
                </label>

                <label class="selecao flex-row content-vcenter gap-10">
                    <input type="radio" name="mencao" value="men_I">
                    I (Insatisfatorio)
                </label>
            </div>

            <br>
            <p>Comentários e Sugestões do Trabalho Avaliado</p>
            <input type="text" id="Comentario" name="coment_TCC" class="caixona">
            <br>

            <p>Comentários e Sugestões da Mostra de TCC´s</p>
            <input type="text" id="comentários e sugestões da mostra de TCC´s" name="coment_feira" class="caixona">
            <br><p></p>
            <input type="submit" value="Enviar">
        </form>

        <script>
            document.querySelector("form").addEventListener("submit", (event) => {
                event.preventDefault();

                localStorage.setItem("Nome", document.querySelector("*[name='nome']").value);
                localStorage.setItem("Curso", document.querySelector("*[name='curso']").value);
                localStorage.setItem("Modulo", document.querySelector("*[name='modulo']").value);

                event.target.submit();
            });

            document.addEventListener("DOMContentLoaded", (event) => {

                document.querySelector("*[name='nome']").value = localStorage.getItem("Nome");
                document.querySelector("*[name='curso']").value = localStorage.getItem("Curso");
                document.querySelector("*[name='modulo']").value = localStorage.getItem("Modulo");

            });
        </script>
</x-layout>