<x-layout>

    <h1>Avaliação do(a) {{ $aval->professor }}</h1>
    <br>
    
    <table class="tabera">
        <thead>
            <th colspan="5" class="center">
                Avaliação
            </th>
        </thead>

        <tbody>
            <tr>
                <td colspan="3">
                Comunicação oral
                </td>
                <td colspan="2">
                    {{ $aval->comunicacao }}
                </td>
            </tr>
            <tr>
                <td colspan="3">Habilidades técnicas</td>
                <td colspan="2">
                    {{ $aval->habilidades}}
                </td>
            </tr>

            <tr>
                <td colspan="3">
                Criatividade no Stand
                </td>
                <td colspan="2">
                    {{ $aval->criatividade}}
                </td>
            </tr>
            <tr>
                <td colspan="3">
                Dinâmica de apresentação do projeto
                </td>
                <td colspan="2">
                    {{ $aval->dinamica}}
                </td>
            </tr>
            <tr>
                <td colspan="3">
                Apresentação escrita
                </td>
                <td colspan="2">
                    {{ $aval->escrita}}
                </td>
            </tr>
            <tr>
                <td colspan="3">
                Avaliação geral do Projeto
                </td>
                <td colspan="2">
                    {{ $aval->avaliacao}}
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    Utilizou o Canvas
                </td>
                <td colspan="2">
                    @if( $aval->canvas==0) Não
                    @else Sim
                    @endif
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    Tem impacto Ambiental e Econômico
                </td>
                <td colspan="2">
                    @if( $aval->impacto==0) Não
                    @else Sim
                    @endif
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    Considera Aspectos de Inclusão/acessiblidade
                </td>
                <td colspan="2">
                    @if( $aval->inclusao==0) Não
                    @else Sim
                    @endif
                </td>
            </tr>
            <tr>
                <td colspan="3">
                Tem Possibilidade de ser tornar uma STARTUP
                </td>
                <td colspan="2">
                    @if( $aval->startup==0) Não
                    @else Sim
                    @endif
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    Pode participar da FETEPS
                </td>
                <td colspan="2">
                    @if( $aval->feteps==0) Não
                    @else Sim
                    @endif
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    Pode participar da Escola de Inovadores
                </td>
                <td colspan="2">
                    @if( $aval->inova==0) Não
                    @else Sim
                    @endif
                </td>
            </tr>

            <tr>
                <td colspan="3">
                    Pode participar da Feira de Profissões / workshop
                </td>
                <td colspan="2">
                @if( $aval->workshop==0) Não
                    @else Sim
                    @endif
                </td>
            </tr>
            
    </table>
    <br>


    </tbody>
    </table>

    
    </div>
    <a href="resultado?id={{$aval->id_tcc}}">Voltar</a>
</x-layout>