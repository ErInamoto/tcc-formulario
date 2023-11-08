<x-layout>
    <h1>Avaliação detalhada {{ $Avaliacao->nome }}</h1>

    <table>
        <thead>
            <th colspan="5" class="center">
                Resumo da Avaliação
            </th>
        </thead>

        <tbody>
            <tr>

                <td colspan="2">
                    Apresentação {{ $Avaliacao->apresentacao }}
                </td>
                <td colspan="2">
                    Stand {{ $Avaliacao->stand }}
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
        </tbody>
    </table>


</x-layout>