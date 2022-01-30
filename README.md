# Principios S.O.L.I.D. explicado con Pokemón en PHP

Adaptación de los ejemplos de Jorge Méndez en su post [**De POO a SOLID explicado con
Pokémon.**](https://dev.to/konami12/de-poo-a-solid-explicado-con-pokemon-2bn5)

Proyecto creado con Laravel Zero. Ejecutable de este proyecto es `solid`. Las acciones disponibles de este proyecto
pueden verlos con el siguiente comando:

```bash
$ php solid
```

## Instalación

Instalar dependencias

```bash   
$ composer install
```

Correr migraciones

```bash
$ php solid migrate   
```

## Conclusiones

Como podemos ver cada uno de los principios de SOLID consigue un objetivo en concreto.

### Principio de Responsabilidad Única:

Si una clase tiene muchas responsabilidades, aumenta la posibilidad de errores porque hacer cambios en una de sus
responsabilidades podría afectar a las otras sin que lo sepas.

> Objetivo : Este principio tiene como objetivo separar los comportamientos para que, si surgen errores como resultado
> de su cambio, no afecten otros comportamientos no relacionados.

### Principio Abierto/Cerrado:

Las clases deben estar abiertas para extensión, pero cerradas para modificación. Cambiar el comportamiento actual de una
Clase afectará a todos los sistemas que utilizan esa Clase. Si desea que la Clase realice más funciones, el enfoque
ideal es agregar a las funciones que ya existen NO cambiarlas.

> Objetivo: Este principio tiene como objetivo extender el comportamiento de una Clase sin cambiar el comportamiento
> existente de esa Clase. Esto es para evitar causar errores dondequiera que se use la Clase.

### Principio de Sustitución de Liskov:

Cuando una clase secundaria no puede realizar las mismas acciones que su clase principal, esto puede causar errores.    
Si tiene una clase y crea otra clase a partir de ella, se convierte en padre y la nueva clase se convierte en hijo. La
Clase secundaria debería poder hacer todo lo que la Clase principal puede hacer. Este proceso se llama Herencia Si tiene
una clase y crea otra clase a partir de ella, se convierte en padre y la nueva clase se convierte en hijo.

La Clase secundaria debería poder procesar las mismas solicitudes y entregar el mismo resultado que la Clase principal o
podría entregar un resultado que sea del mismo tipo.

> Este principio tiene como objetivo hacer cumplir la coherencia para que la Clase principal o su Clase
> secundaria se puedan usar de la misma manera sin errores.

### Principio de Segregación de la Interfaz:

Cuando se requiere que una Clase realice acciones que no son útiles, es un desperdicio y puede producir errores
inesperados si la Clase no tiene la capacidad de realizar esas acciones.

Una clase debe realizar solo las acciones necesarias para cumplir su función. Cualquier otra acción debe eliminarse por
completo o moverse a otro lugar si otra Clase podría usarla en el futuro.

> Este principio tiene como objetivo dividir un conjunto de acciones en conjuntos más pequeños para que una Clase ejecute
> SÓLO el conjunto de acciones que requiere.

### Principio de inversiones Dependencias:

- Los módulos de alto nivel no deben depender de los módulos de bajo nivel. Ambos deben depender de la abstracción.
- Las abstracciones no deben depender de los detalles. Los detalles deben depender de las abstracciones.

> Este principio tiene como objetivo reducir la dependencia de una Clase de alto nivel en la Clase de bajo nivel
> mediante la introducción de una interfaz.
