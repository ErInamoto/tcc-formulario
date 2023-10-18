<x-layout>
    @foreach($TCCs as $TCC)
    {{ $TCC->id }} {{ @($TCC->id == $_GET['TCC']) ? 'selected' : '' }}
    {{ $TCC->nome }}
    @endforeach
</x-layout>