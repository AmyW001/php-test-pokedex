<x-layout>
    <div>
        <img src="{{ $pokemon['sprites']['front_default'] }}" alt="" class="mx-auto w-48 h-auto">
    <table class="min-w-full bg-white text-center text-xs sm:text-base">
        <tbody>
            <tr>
                <td class="py-2 px-4 border-b bg-pokeblue text-pokeyellow">Name</td>
                <td class="py-2 px-4 border-b">{{ $pokemon['name'] }}</td>
            </tr>
            <tr>
                <td class="py-2 px-4 border-b bg-pokeblue text-pokeyellow">Species</td>
                <td class="py-2 px-4 border-b">{{ $pokemon['species']['name'] }}</td>
            </tr>
            <tr>
                <td class="py-2 px-4 border-b bg-pokeblue text-pokeyellow">Height</td>
                <td class="py-2 px-4 border-b">{{ $pokemon['height'] }}</td>
            </tr>
            <tr>
                <td class="py-2 px-4 border-b bg-pokeblue text-pokeyellow">Weight</td>
                <td class="py-2 px-4 border-b">{{ $pokemon['weight'] }}</td>
            </tr>
            <tr>
                <td class="py-2 px-4 border-b bg-pokeblue text-pokeyellow">Abilities</td>
                <td class="py-2 px-4 border-b">
                    @foreach ($pokemon['abilities'] as $ability)
                        {{ $ability['ability']['name'] }}
                        @unless($loop->last)
                            <br>
                        @endunless
                    @endforeach
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div class="text-center mt-5 cursor-pointer">
    <a href="/"><< back</a>
</div>

</x-layout>