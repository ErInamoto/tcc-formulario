<x-layout>
    <h1>Avaliação do(a) {{ $Avaliacao->nome }}</h1>
    <br>
    <div class="centralizar">
    <table>
        <thead>
            <th colspan="5" class="center">
                Avaliação
            </th>
        </thead>

        <tbody>
            <tr>
                <td colspan="3">
                    Nota da Apresentação
                </td>
                <td colspan="2">
                    {{ $Avaliacao->apresentacao }}
                </td>
            </tr>
            <tr>
                <td colspan="3">Nota do Stand</td>
                <td colspan="2">
                    {{ $Avaliacao->stand }}
                </td>
            </tr>

            <tr>
                <td colspan="3">
                    Tem aspectos de Inclusão/Acessibilidade
                </td>
                <td colspan="2">
                    @if( $Avaliacao->inclusivo==0) Não
                    @else Sim
                    @endif
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    Contempla a sustentabilidade
                </td>
                <td colspan="2">
                    @if( $Avaliacao->sustentavel==0) Não
                    @else Sim
                    @endif
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    Tem possibilidade de se tornar uma Startup
                </td>
                <td colspan="2">
                    @if( $Avaliacao->startup==0) Não
                    @else Sim
                    @endif
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    É prático
                </td>
                <td colspan="2">
                    @if( $Avaliacao->pratico==0) Não
                    @else Sim
                    @endif
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    É víavel
                </td>
                <td colspan="2">
                    @if( $Avaliacao->viavel==0) Não
                    @else Sim
                    @endif
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    Traz benefícios a comunidade
                </td>
                <td colspan="2">
                    @if( $Avaliacao->benefico==0) Não
                    @else Sim
                    @endif
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    Está aliado com as tecnologias
                </td>
                <td colspan="2">
                    @if( $Avaliacao->tecnologico==0) Não
                    @else Sim
                    @endif
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    Precisa ser aperfeiçoado
                </td>
                <td colspan="2">
                    @if( $Avaliacao->incompleto==0) Não
                    @else Sim
                    @endif
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    Não é viável
                </td>
                <td colspan="2">
                    @if( $Avaliacao->inviavel==0) Não
                    @else Sim
                    @endif
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    É muito caro para ser implementado
                </td>
                <td colspan="2">
                    @if( $Avaliacao->caro==0) Não
                    @else Sim
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="3">
                    Comunicação Oral
                </td>
                <td colspan="2">
                    {{ $Avaliacao->comunicacao }}
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    Comunicação Escrita
                </td>
                <td colspan="2">
                    {{ $Avaliacao->escrita }}
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    Avaliação Geral
                </td>
                <td colspan="2">
                    {{ $Avaliacao->avaliacao }}
                </td>
            </tr>

    </table>
    <br>


    </tbody>
    </table>
    </div>

</x-layout>