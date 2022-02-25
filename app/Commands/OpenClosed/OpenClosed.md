# Caso de uso para el principio Abierto/Cerrado

## Baseline

El siguiente paso en el metaverso pokémon es implementar ataques a cada pokémon. En primera instancia sólo necesitamos
los 4 tipos básicos. Fuego, Agua, Eléctrico.

## Upgrade

Ahora necesitamos implementar los tipos:

| Tipo             |          Ataque           |
|------------------|:-------------------------:|
| Ghost (Fantasma) | Dream Eater (Come Sueños) |
| Bug (bicho)      |    Bug Bite (Picadura)    |
| Poison (Veneno)  | Poison Gas (Gas venenoso) |

## Ejemplos

- Ejemplo que viola el principio Abierto / Cerrado.     
  `php solid open-close:wrong-attack-pokemon`
- Ejemplo que aplica correctamente el principio Abierto / Cerrado.      
  `php solid open-close:attack-pokemon-refactored`