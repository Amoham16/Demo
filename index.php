<!-- Styles -->

<!DOCTYPE html>
<html lang="fr">

  <head>
   <meta charset="UTF-8">
   <title>Page d'accueil</title>
    <link rel="stylesheet" type="text/css" href="projet_l3.css">
    
<style>

</style>
<!-- Resources -->
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
  </head>
  
  <body >
  
  <!--BARRE DU MENU -->
  
    <div class="onglets">
        <a href="index.html">home</a>
        <a href="mohamedatni.html">statistique</a>
        <a href="louvier.html">comparor</a>
        <a href="makhloufi.html">analyst</a>
    </div>

<div id="carte">
<!-- Chart code -->
<script>
am5.ready(function() {

  // Create root element
  var root = am5.Root.new("chartdiv");

  // Set themes
  root.setThemes([
    am5themes_Animated.new(root)
  ]);

  // Create the map chart
  var chart = root.container.children.push(am5map.MapChart.new(root, {
    panX: "translateX",
    panY: "translateY",
    projection: am5map.geoMercator()
  }));

  // Create main polygon series for countries
  var polygonSeries = chart.series.push(am5map.MapPolygonSeries.new(root, {
    geoJSON: am5geodata_worldLow,
    exclude: ["AQ"]
  }));

  // Définissez la couleur de remplissage en vert pour la série principale de pays
  polygonSeries.mapPolygons.template.set("fill", am5.color("#56A1AE"));

  polygonSeries.mapPolygons.template.setAll({
    tooltipText: "{name}",
    toggleKey: "active",
    interactive: true
  });

  polygonSeries.mapPolygons.template.states.create("hover", {
    fill: root.interfaceColors.get("primaryButtonHover")
  });

  polygonSeries.mapPolygons.template.states.create("active", {
    fill: root.interfaceColors.get("primaryButtonHover")
  });

  // US Series
  var polygonSeriesUS = chart.series.push(am5map.MapPolygonSeries.new(root, {
    geoJSON: am5geodata_usaLow
  }));

  polygonSeriesUS.mapPolygons.template.setAll({
    tooltipText: "{name}",
    toggleKey: "active",
    interactive: true
  });

  var colors = am5.ColorSet.new(root, {});

  polygonSeriesUS.mapPolygons.template.set("fill", colors.getIndex(3));

  polygonSeriesUS.mapPolygons.template.states.create("hover", {
    fill: root.interfaceColors.get("primaryButtonHover")
  });

  polygonSeriesUS.mapPolygons.template.states.create("active", {
    fill: root.interfaceColors.get("primaryButtonHover")
  });

  // Add zoom control
  chart.set("zoomControl", am5map.ZoomControl.new(root, {}));

  // Set clicking on "water" to zoom out
  chart.chartContainer.get("background").events.on("click", function () {
    chart.goHome();
  });

  // Make stuff animate on load
  chart.appear(1000, 100);

}); // end am5.ready()
</script>
</div>
<div id="chartdiv"></div>

<h1 
  >T0 TRAVEL BETTER</h1>  

  <div class="right"> 
<img src="icone_gp/route.png" alt="" />

   <p> 
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate </p>

</div> 

<div class="left"> 
<img src="icone_gp/rechercher-un-vol.png" alt="" />
<h2> TOURISM3CO </h2>

   <p> 
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate </p>
  
</div> 

<div class="right"> 
<img src="icone_gp/diagramme-circulaire.png" alt="" />

   <p> 
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate </p>
  
</div> 


<div class="left"> 

<img src="icone_gp/planete-terre.png" alt="" />

   <p> 
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate </p>
  
</div> 
<!-- HTML -->

</body>  
  </html>

