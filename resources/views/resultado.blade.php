<x-layout>
    <h1>{{ $TCC->nome }}</h1>

    <table>
        <thead>
            <th colspan="5" class="center">
                Resumo de Avaliações
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
            <!-- <tr>
                <td>

                </td>
                <td class="center">
                    MB
                </td>
                <td class="center">
                    B
                </td>
                <td class="center">
                    R
                </td>
                <td class="center">
                    I
                </td>
            </tr> -->
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
<br>
    <table>
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
            </tr>
            @endforeach
        </tbody>
    </table>


    <p>Serviços Juridicos</p>
    Questão 6 <progress value="50" max="100"></progress> <br>
    Questão 7<progress value="50" max="100"></progress> <br>
    Questão 8<progress value="50" max="100"></progress> <br>
    Questão 9 <progress value="50" max="100"></progress>
    <progress value="50" max="100"></progress>
    <progress value="50" max="100"></progress>
    <progress value="50" max="100"></progress> <br>
    Questão 10 <progress value="50" max="100"></progress>
    <progress value="50" max="100"></progress>
    <progress value="50" max="100"></progress> <br>
    Questão 11 <progress value="50" max="100"></progress>
    <progress value="50" max="100"></progress>
    <progress value="50" max="100"></progress>
    <progress value="50" max="100"></progress> <br>
    Questão 12 <progress value="50" max="100"></progress>
    <progress value="50" max="100"></progress>
    <progress value="50" max="100"></progress>
    <progress value="50" max="100"></progress> <br>
    Questão 13 <progress value="50" max="100"></progress>
    <progress value="50" max="100"></progress>
    <progress value="50" max="100"></progress>
    <progress value="50" max="100"></progress> <br>






</x-layout>