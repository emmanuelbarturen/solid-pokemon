# Caso de uso para el principio Segregación de Interfaces

## Baseline

Se tiene implementada una interfaz para el manejo del pokémon Gyarados, cuya forma de movilizarse es nadando y volando.

## Upgrade

Necesitamos hacer la implementación de dos tipos de pokemon mas. Estos son Charizard y Blastoise.

## Ejemplos

- Ejemplo que viola el principio segregación de interfaces.    
  `php solid interface:wrong-move-pokemon`
- Ejemplo que aplica correctamente el principio segregación de interfaces.      
  `php solid interface:move-pokemon-refactored`