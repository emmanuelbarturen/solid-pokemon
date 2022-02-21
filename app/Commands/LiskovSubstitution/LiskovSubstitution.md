# Caso de uso para el principio de Sustitución de Liskov

## Baseline

Tenemos la clase Charizard, un pokémon que puede volar y que extiende de la superClase Pokemon

## Upgrade

Se nos pide implementar la Clase Charmander que es una evolución anterior a Charizard y que no puede volar.

## Ejemplos

- Ejemplo que viola el principio de Sustitución de Liskov    
  `php solid liskov:wrong-can-fly-pokemon`
- Ejemplo que aplica correctamente el principio de Liskov      
  `php solid liskov:can-fly-pokemon-refactored`