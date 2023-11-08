<x-layout> 
    <table> <thead>
    <tr>
    <th> Nome do TCC </th>
    <th> Avaliações </th>
    <th> Apresentação </th>
    <th> Stand </th>
        </tr>
        </thead>
        <tbody>
            @foreach($TCCs as $TCC)
            <tr>
                <td>
                    <a href="resultado?id={{ $TCC->id }}">
                    {{ $TCC->nome }}
                    </a>
                </td>
                <td>
                    {{ $TCC->avaliacoes->count()}}
                </td>
                <td>
                    {{ round($TCC->avaliacoes->avg("apresentacao"),1)}}
                </td>
                <td>
                    {{ round($TCC->avaliacoes->avg("stand"),1) }}
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
</main>
        </x-layout>