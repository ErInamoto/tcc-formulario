<x-layout>
    <h1>{{ $TCC->nome }}</h1>

    <table class="tabera">
        <thead>
            <th colspan="5" class="center">
                Resumo de Avaliações dos Alunos
            </th>
        </thead>

        <tbody>
            <tr>
                <td>
                    Total de Avaliações {{ $TCC->avaliacoes->count()}}
                </td>
                <td colspan="2">
                    Apresentação {{ round($TCC->avaliacoes->avg("apresentacao"),1)}}
                </td>
                <td colspan="2">
                    Stand {{ round($TCC->avaliacoes->avg("stand"),1)}}
                </td>
            </tr>

            <tr>
                <td colspan="3">
                    Tem aspectos de Inclusão/Acessibilidade
                </td>
                <td colspan="2">
                    {{ $TCC->porcentagemInclusivo() }}%
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    Contempla a sustentabilidade
                </td>
                <td colspan="2">
                    {{ $TCC->porcentagemSustentabilidade() }}%
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    Tem possibilidade de se tornar uma Startup
                </td>
                <td colspan="2">
                    {{ $TCC->porcentagemStartup() }}%
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    É prático
                </td>
                <td colspan="2">
                    {{ $TCC->porcentagemPratico() }}%
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    É víavel
                </td>
                <td colspan="2">
                    {{ $TCC->porcentagemViavel() }}%
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    Traz benefícios a comunidade
                </td>
                <td colspan="2">
                    {{ $TCC->porcentagemBenefico() }}%
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    Está aliado com as tecnologias
                </td>
                <td colspan="2">
                    {{ $TCC->porcentagemTecnologico() }}%
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    Precisa ser aperfeiçoado
                </td>
                <td colspan="2">
                    {{ $TCC->porcentagemIncompleto() }}%
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    Não é viável
                </td>
                <td colspan="2">
                    {{ $TCC->porcentagemInviavel() }}%
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    É muito caro para ser implementado
                </td>
                <td colspan="2">
                    {{ $TCC->porcentagemCaro() }}%
                </td>
            </tr>
            <tr>
                <td>
                    Comunicação Oral
                </td>
                <td>
                    MB {{ $TCC->porcentagemOralMB() }}%
                </td>
                <td>
                    B {{ $TCC->porcentagemOralB() }}%
                </td>

                <td>
                    R {{ $TCC->porcentagemOralR() }}%
                </td>
                <td>
                    I {{ $TCC->porcentagemOralI() }}%
                </td>
            </tr>
            <tr>
                <td>
                    Comunicação Escrita
                </td>
                <td>
                    MB {{ $TCC->porcentagemEscritaMB() }}%
                </td>
                <td>
                    B {{ $TCC->porcentagemEscritaB() }}%
                </td>

                <td>
                    R {{ $TCC->porcentagemEscritaR() }}%
                </td>
                <td>
                    I {{ $TCC->porcentagemEscritaI() }}%
                </td>
            </tr>
            <tr>
                <td>
                    Avaliação Geral
                </td>
                <td>
                    MB {{ $TCC->porcentagemAvaliacaoMB() }}%
                </td>
                <td>
                    B {{ $TCC->porcentagemAvaliacaoB() }}%
                </td>

                <td>
                    R {{ $TCC->porcentagemAvaliacaoR() }}%
                </td>
                <td>
                    I {{ $TCC->porcentagemAvaliacaoI() }}%
                </td>
            </tr>

    </table>

    <table class="tabera">
        <thead>
            <th colspan="5" class="center">
                Resumo de Avaliações dos Professores
            </th>
        </thead>

        <tbody>
            <tr>
                <td colspan="5">
                    Total de Avaliações {{ $TCC->prof->count()}}
                </td>
            </tr>

            <tr>
                <td>
                    Comunicação Oral
                </td>
                <td>
                    MB {{ $TCC->prctComProfMB() }}%
                </td>
                <td>
                    B {{ $TCC->prctComProfB() }}%
                </td>

                <td>
                    R {{ $TCC->prctComProfR() }}%
                </td>
                <td>
                    I {{ $TCC->prctComProfI() }}%
                </td>
            </tr>

            <tr>
                <td>
                    Habilidades Técnicas
                </td>
                <td>
                    MB {{ $TCC->prctHabProfMB() }}%
                </td>
                <td>
                    B {{ $TCC->prctHabProfB() }}%
                </td>

                <td>
                    R {{ $TCC->prctHabProfR() }}%
                </td>
                <td>
                    I {{ $TCC->prctHabProfI() }}%
                </td>
            </tr>

            <tr>
                <td>
                    Criatividade do Stand
                </td>
                <td>
                    MB {{ $TCC->prctCriProfMB() }}%
                </td>
                <td>
                    B {{ $TCC->prctCriProfB() }}%
                </td>

                <td>
                    R {{ $TCC->prctCriProfR() }}%
                </td>
                <td>
                    I {{ $TCC->prctCriProfI() }}%
                </td>
            </tr>

            <tr>
                <td>
                    Dinâmica da Apresentação
                </td>
                <td>
                    MB {{ $TCC->prctDinProfMB() }}%
                </td>
                <td>
                    B {{ $TCC->prctDinProfB() }}%
                </td>

                <td>
                    R {{ $TCC->prctDinProfR() }}%
                </td>
                <td>
                    I {{ $TCC->prctDinProfI() }}%
                </td>
            </tr>

            <tr>
                <td>
                    Comunicação Escrita
                </td>
                <td>
                    MB {{ $TCC->prctEscProfMB() }}%
                </td>
                <td>
                    B {{ $TCC->prctEscProfB() }}%
                </td>

                <td>
                    R {{ $TCC->prctEscProfR() }}%
                </td>
                <td>
                    I {{ $TCC->prctEscProfI() }}%
                </td>
            </tr>
            <tr>
                <td>
                    Avaliação Geral
                </td>
                <td>
                    MB {{ $TCC->prctAvalProfMB() }}%
                </td>
                <td>
                    B {{ $TCC->prctAvalProfB() }}%
                </td>

                <td>
                    R {{ $TCC->prctAvalProfR() }}%
                </td>
                <td>
                    I {{ $TCC->prctAvalProfI() }}%
                </td>
            </tr>

            <tr>
                <td colspan="1,25">
                    Utilizou o Canvas?
                </td>

                <td colspan="1,25">
                    {{ round($TCC->prof->avg("canvas")*100,1)}}%
                </td>
                <td colspan="2,25">
                    Tem um impacto ambiental?
                </td>
                <td colspan="1,25">
                    {{ round($TCC->prof->avg("impacto")*100,1)}}%
                </td>

            </tr>

            <tr>
                <td colspan="1,5">
                    É inclusivo?
                </td>
                <td colspan="1,5">
                    {{ round($TCC->prof->avg("inclusivo")*100,1)}}%
                </td>

                <td colspan="2,5">
                    Pode se tornar uma Startup?
                </td>
                <td colspan="1,5">
                    {{ round($TCC->prof->avg("startup")*100,1)}}%
                </td>
            </tr>


    </table>

    <br>

    <table class="tabera">
        <thead>
            <th>
                Nome
            </th>
            <th>
                Curso
            </th>
            <th>
                Módulo
            </th>
            <th>
                Oral
            </th>
            <th>
                Escrita
            </th>
            <th>
                Geral
            </th>
            <th>

            </th>
        </thead>
        <tbody>
            @foreach ($Avaliacoes as $Av)
            <tr>
                <td>
                    {{ $Av->nome }}
                </td>
                <td>
                    {{ $Av->curso->nome}}
                </td>
                <td>
                    {{ $Av->modulo }}
                </td>
                <td>
                    {{ $Av->comunicacao}}
                </td>
                <td>
                    {{ $Av->escrita}}
                </td>
                <td>
                    {{ $Av->avaliacao}}
                </td>
                <td>
                    <a href="detalhado?id={{ $Av->id }}">
                        Detalhado
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>





    <table class="tabera">
        <thead>
            <th>
                Nome do Professor(a)
            </th>
            <th>
                Habilidades 
            </th>

            <th>
                Criatividade
            </th>

            <th>
                Dinâmica
            </th>
            <th>
                Oral
            </th>
            <th>
                Escrita
            </th>
            <th>
                Geral
            </th>
            <th>

            </th>
        </thead>
        <tbody>
            @foreach ($prof as $p)
            <tr>
                <td>
                    {{ $p->professor }}
                </td>
                <td>
                    {{ $p->comunicacao}}
                </td>
                <td>
                    {{ $p->habilidades}}
                </td>
                <td>
                    {{ $p->criatividade}}
                </td>
                <td>
                    {{$p->dinamica}}
                </td>
                <td>
                    {{ $p->escrita}}
                </td>
                <td>
                    {{ $p->avaliacao}}
                </td>
                <td>
                    <a href="detalhado_prof?id={{ $p->id }}">
                        Detalhado
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
<a href="/selecao">Voltar</a>
</x-layout>