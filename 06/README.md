Diseño Gráfico · Universidad de Chile

# Multimedia II

### D3.JS

[D3.js (Data-Driven Documents)](https://d3js.org/) es una biblioteca de JavaScript, que nos simplifica el trabajo con datos y nos permite crear visualizaciones trabajando con **SVG, HTML y CSS**.

**¿Qué tanto simplifica el trabajo?**. Para notarlo, favor revisen el siguiente script:

```
d3.json("http://api.open-notify.org/astros.json").then(function(data) {
	var astros = d3.values(data.people);
	d3.select("#astronautas").selectAll("li").data(astros).enter().append("li").text(function(d) { return d.name });
})
```

En el script [voy por un JSON](https://github.com/d3/d3-fetch), para luego, en caso que se cargue, puedo ({
crear una variable que toma parte de esa data; 
luego selecciono el elemento de identidad #astronauta y todos los ítem de lista dentro de tal elemento, ítems de lista que irán creándose en la medida que sean necesarios para escribir cada dato en la variable
}).

**¿Y las visualizaciones?**. D3.JS nos permite trabajar con SVG. Con el siguiente script puedo crear, en el cuerpo de un documento HTML, un SVG con atributos de 100 pixeles de ancho y 100 pixeles de alto, y un estilo de color de fondo gris claro. Dentro suyo, incluiré un círculo con un centro a 50 pixeles del borde izquierdo y 50 del borde superior, con un radio de 25 pixeles. Este círculo será de color rojo, con una opacidad del 25%.

```
d3.select("body").append("svg").attr("width",100).attr("height",100).style("background-color","#CCCCCC").append("circle").attr("cx",50).attr("cy",50).attr("r","25").attr("fill","#FF0000").attr("fill-opacity",0.25)
```
Así como puedo ir a buscar los nombres de los astronautas en el espacio, y puedo crear un SVG que contenga un círculo con determinados atributos, bien podría crear una visualización que contenga esos nombres junto a círculos, y desde ahí comenzar a crecer en complejidad. Hasta poder crear visualizaciones de datos tan completas como las que pueden encontrar en la [galería oficial de ejemplos de D3.js](https://github.com/d3/d3/wiki/Gallery)

### Referencias de D3.JS

- [D3 Basics](https://website.education.wisc.edu/~swu28/d3t/concept.html)
- [D3 in Depth](http://d3indepth.com/)
- [D3.js Tutorials - Learn D3.js Step by Step](http://www.tutorialsteacher.com/d3js/)
- [INTRO TO D3.JS](https://square.github.io/intro-to-d3/)
- [**Tutorial de D3 en español**](http://gcoch.github.io/D3-tutorial/)

Cuando usen estas referencias, favor revisen la versión de D3.JS en uso. Entre las versiones hay cambios: https://github.com/d3/d3/blob/master/CHANGES.md 

- - - - - - - - - 

[Clase anterior](https://github.com/profesorfaco/multimedia2_5) | [Siguiente clase](https://github.com/profesorfaco/multimedia2_7)
