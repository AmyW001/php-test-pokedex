<x-layout>
    {{-- if listings shown are a result of a search --}}
    <?php if ($searchResults) : ?>
        <div class="text-center mb-5">
            <span>Your search results:</span>
        </div>
    <?php endif; ?>
    {{-- if pokemon['results'] is not empty  --}}
    <?php if (!empty($pokemon['results'])) : ?>
        <div class="grid grid-cols-1 sm:grid grid-cols-2 gap-4 md:grid-cols-4 m-12 text-center">
            <?php foreach ($pokemon['results'] as $pokemon) : ?>
                <a href="<?= $pokemon['url'] ?>" class="bg-pokeblue text-pokeyellow rounded-lg p-1.5 cursor-pointer hover:text-pokeblue hover:bg-pokeyellow text-xs sm:text-base">
                    <?= $pokemon['name'] ?>
                </a>
            <?php endforeach; ?>
        </div>
    {{-- if only one pokemon is found  --}}
    <?php elseif (!empty($pokemon)) : ?>
    <div class="text-center">
        <a href="{{ url($pokemon['name'])}}" class="bg-pokeblue text-pokeyellow rounded-lg p-1.5 cursor-pointer hover:text-pokeblue hover:bg-pokeyellow text-xs sm:text-base">
                <?= $pokemon['name'] ?>
        </a>
        </div>
    <?php else : ?>
        <h1 class="text-2xl text-center">No results found</h1>
    <?php endif; ?>
</x-layout>