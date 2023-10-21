<x-layout>
    <h1>{{ $TCC->nome }}</h1>

<div class="flex-row space-30">
    <div class="flex-col"> 
        Avaliações  {{ $TCC->avaliacoes->count()}} 
    </div>
    <div class="flex-col"> Apresentação {{ round($TCC->avaliacoes->avg("apresentacao"),1)}}</div>
    <div class="flex-col"> Stand {{ round($TCC->avaliacoes->avg("stand"),1)}}</div>
</div>

<div class="flex-row">
    <div class="flex-col">
        Tem aspectos de Inclusão/Acessibilidade {{ $TCC->porcentagemInclusivo() }}%
    </div>
</div>

<div class="flex-row">
    <div class="flex-col">
        Contempla a sustentabilidade {{ $TCC->porcentagemSustentabilidade() }}%
    </div>
</div>

<div class="flex-row">
    <div class="flex-col">
        Tem possibilidade de se tornar uma Startup {{ $TCC->porcentagemStartup() }}%
    </div>
</div>

<div class="flex-row">
    <div class="flex-col">
        É prático {{ $TCC->porcentagemPratico() }}%
    </div>
</div>

<div class="flex-row">
    <div class="flex-col">
        É víavel {{ $TCC->porcentagemViavel() }}%
    </div>
</div>

<div class="flex-row">
    <div class="flex-col">
        Traz benefícios a comunidade {{ $TCC->porcentagemBenefico() }}%
    </div>
</div>

<div class="flex-row">
    <div class="flex-col">
        Está aliado com as tecnologias {{ $TCC->porcentagemTecnologico() }}%
    </div>
</div>

<div class="flex-row">
    <div class="flex-col">
        Precisa ser aperfeiçoado {{ $TCC->porcentagemIncompleto() }}%
    </div>
</div>

<div class="flex-row">
    <div class="flex-col">
        Não é viável {{ $TCC->porcentagemInviavel() }}%
    </div>
</div>

<div class="flex-row">
    <div class="flex-col">
        É muito caro para ser implementado {{ $TCC->porcentagemCaro() }}%
    </div>
</div>

<div class="flex-row">
    <div class="flex-col">
        Comunicação Oral
    </div>
</div>

<div class="flex-row">
    <div class="flex-col">
        MB{{ $TCC->porcentagemOralMB() }}%
    </div>
</div>

<div class="flex-row">
    <div class="flex-col">
        B{{ $TCC->porcentagemOralB() }}%
    </div>
</div>

<div class="flex-row">
    <div class="flex-col">
        R{{ $TCC->porcentagemOralR() }}%
    </div>
</div>

<div class="flex-row">
    <div class="flex-col">
        I{{ $TCC->porcentagemOralI() }}%
    </div>
</div>

<div class="flex-row">
    <div class="flex-col">
        Comunicação Escrita
    </div>
</div>

<div class="flex-row">
    <div class="flex-col">
        MB{{ $TCC->porcentagemEscritaMB() }}%
    </div>
</div>

<div class="flex-row">
    <div class="flex-col">
        B{{ $TCC->porcentagemEscritaB() }}%
    </div>
</div>

<div class="flex-row">
    <div class="flex-col">
        R{{ $TCC->porcentagemEscritaR() }}%
    </div>
</div>

<div class="flex-row">
    <div class="flex-col">
        I{{ $TCC->porcentagemEscritaI() }}%
    </div>
</div>

<div class="flex-row">
    <div class="flex-col">
        Avaliação Geral
    </div>
</div>

<div class="flex-row">
    <div class="flex-col">
        MB{{ $TCC->porcentagemAvaliacaoMB() }}%
    </div>
</div>

<div class="flex-row">
    <div class="flex-col">
        B{{ $TCC->porcentagemAvaliacaoB() }}%
    </div>
</div>

<div class="flex-row">
    <div class="flex-col">
        R{{ $TCC->porcentagemAvaliacaoR() }}%
    </div>
</div>

<div class="flex-row">
    <div class="flex-col">
        I{{ $TCC->porcentagemAvaliacaoI() }}%
    </div>
</div>

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





</x-layout>