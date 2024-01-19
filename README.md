# ans/pokédex

## What is completed
This Laravel-based app contains a landing page which displays Pokemon names as buttons, called from https://pokeapi.co/api/v2/pokemon-species
When clicking on a button you are taken to the page for that Pokemon, which displays the image, name, species, height/weight and any abilities
If a Pokemon's name is typed into the search bar it will find the link to that Pokemon


## What could be improved with more time
I wanted to implement search functionality that allowed for checking a partial result of a string within a Pokemon name. The initial stages of this can be seen commented out in the PokemonController.

The main page needs pagination, it is currently hard-coded to retrieve the first 52 Pokemon and I can see that the API provides a "next" and "previous" value, however I did not have time to implement this. Once pagination had been implemented I would reduce the number of Pokemon showing at any one time to ~20, to help the page load faster.

In hindsight I would also amend the route for the single page, to something like "single/{id}", for clarity.
