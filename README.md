# Parcial nº1 | Programación II
En las siguientes secciones se desarrollara cuales son las consignas, detalle de los contenidos y qué se evaluará, en este parcial.

## Consigna principal
Desarrollar un sitio simulando ser una tienda online de una empresa, ya sea real o ficticia. El tipo de empresa y los productos a vender queda a discreción del alumno/a, pero debe contar con al menos, 15 productos distintos a la venta. El sitio debe contar, además, con un formulario de contacto (o similar).

El sitio debe estar maquetado utilizando **HTML5** y **CSS3** y programado utilizando **PHP**. Todas las secciones que involucren productos a la venta, deben ser de carácter dinámico.

El directorio debe entregarse comprimido en un archivo .zip o .rar con el siguiente nombre:
PII-**APELLIDO_ DEL_ALUMNO**-PARCIAL_1
## Detalle del contenido
El sitio debe contar con, como mínimo, 6 secciones:
- [ ] Una sección fija, o “Inicio” que sirve de introducción a la empresa.
- [ ] Una sección que contenga la totalidad de los productos disponibles a la venta, cada producto debe
estar representado por una “pastilla” de contenido que incluya al menos, una imagen ilustrativa, una
descripción y un precio.
- [ ] Tantas secciones como se juzgue necesario que contengan un subgrupo de los productos disponibles
para la venta, seleccionados por algún parámetro que compartan. (Ej. Color, Precio, Género etc.)
- [ ] Una página de detalle de producto, que muestre todos los datos pertinentes a un único producto.
(Esta página debe ser dinámica y funcional para la totalidad del catálogo.)
- [ ] Una página con un formulario de contacto (o similar).
- [ ] Una sección “Datos del alumno/s” con los datos personales de el o los alumnos responsables del
trabajo.

### HTML
El sitio debe estar maquetado utilizando **etiquetas semánticas** y tantas etiquetas div/span como se consideren necesarias. Adicionalmente, el contenido debe estar organizado con el uso apropiado de **headings** para determinar la jerarquía del mismo.

Todo párrafo de texto debe incluir **refuerzo semántico**.

El sitio debe contar con una etiqueta **nav** que contenga links a cada una de las 
secciones del sitio.

Todas las imágenes a utilizar deben ser optimizadas en peso y tamaño, respetar buenas prácticas de nomenclatura y estar organizadas dentro de su propia carpeta.

La sección “Datos del alumno/s” debe contener los datos del/los alumnos/as, incluyendo:
	● 1 foto de 250px de ancho
	● Nombre, Apellido
	● Edad (O fecha de nacimiento)
	● Correo electrónico
	● Redes sociales (pueden ser sólo el inicio)

### CSS
El sitio debe ser **responsive** o por lo menos, poder visualizarse de manera aceptable en dispositivos móviles.

Debe tener **estilización personalizada**

No puede parecer solo Bootstrap “default”

### PHP
El sitio debe implementar una **carga de secciones dinámica** en un template de base vía parámetros por **GET**, cada producto debe estar representado por una clase que contenga todas sus propiedades.

La lista de ítems debe ser un compuesto por instancias de la clase antes mencionada. La información de estos objetos debe provenir de la lectura de un archivo **JSON**.

Cada producto a la venta debe tener, al menos, 7 parámetros individuales, incluyendo varios tipos de datos: números, textos y fechas.

El formulario debe contar con un archivo **.php** (action) que “procese” la información, es decir que devuelva un resumen de los datos enviados. No hace falta que el formulario sea funcional.

## Qué se evaluará
- [ ] ==Que el código **HTML** sea **válido**, que la estructura del directorio sea correcta, esté **bien organizada** y que los nombres de archivo **cumplan con los lineamientos y buenas prácticas** para su uso en la web.==
- [ ] ==Que se haya incluido la totalidad del contenido requerido. ==
- [ ] ==Que el contenido esté organizado correctamente en lo que respecta a su **jerarquía** y su **estructura** con el correcto uso de **etiquetas semánticas**.==
- [ ] ==Que la navegación del sitio sea **funcional**.==
- [ ] El uso apropiado de **PHP** para acceder dinámicamente a las secciones.
- [ ] El uso de funciones **PHP**, tanto propias del lenguaje, como creadas por el alumno.
- [ ] El uso apropiado de **Clases** y **Métodos** para acceder a la información de productos.
- [ ] El uso apropiado de archivos **JSON** para incluir los datos referentes a los productos.
- [ ] La **confección y complejidad** de las secciones y manipulación de datos utilizados.
- [ ] La confección del **formulario** y su correspondiente archivo de **procesamiento de datos**.
- [ ] La **estilización** del sitio.
- [ ] La **prolijidad** y **presentación** del código, tanto **PHP** como **HTML** y **CSS**.
- [ ] Los **tamaños** y el **peso** de las imágenes utilizadas.