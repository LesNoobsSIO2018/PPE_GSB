<html>
    <head>
        <style>
            .container_1{
                background-color: white;
            }
        </style>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
               <!-- Latest compiled and minified CSS -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
            <!-- Optional theme -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
            <!-- Latest compiled and minified JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style_ivan.css" />
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
         
        <script type="text/javascript" src="<?php echo base_url(); ?>Jquery/jquery-3.1.1.js"></script>
         <script type="text/javascript" src="  <?php echo base_url(); ?>js/functions.js"></script>
         <script type="text/javascript">
         $(
                  function(){
                      $('#idMeds').change(
                         function(){
                         //    alert($(this).val());
                             AfficheStatMed($(this).val());
                         });
                         $('#idMeds').show(
                         function(){
                             AfficheStatMed($(this).val());
                         });
 
             } );
        </script>
        <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Medicament ', 'Queantite de composants d\'un medicament '],
          <?php
            foreach($lesQteMedCom as $qte){
                echo"['".$qte->MED_NOMCOMMERCIAL."',".$qte->qte."],";
            }
          ?>
        ]);

        var options = {
          title: 'Quantite de composants d\'un medicament ',
          pieHole: 0.4,
          pieSliceText: 'value',

        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    
     <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        
        <?php 
            foreach($lesSumMedCom as $sum){
                echo"['".$sum->MED_NOMCOMMERCIAL."',".$sum->sum.", '#42b9f4'],";
            }
        ?>
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Somme de composant d'un medicament",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
  
          <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Presentation ', 'Quantite de medicament d\'une presentation '],
          <?php
            foreach($lesnbrMedPres as $qte){
                echo"['".$qte->PRE_LIBELLE."',".$qte->nbMed."],";
            }
          ?>
        ]);

        var options = {
          title: 'Quantite de medicament d\'une presentation',
          pieHole: 0.4,
          pieSliceText: 'value',

        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_2'));

        chart.draw(data, options);
      }
    </script>
    </head>
    <body>
         <header class="bg-primary text-white" style="background-color: #007AFF;">
                <div class="container text-center">
                  <h1>GSB</h1>
                  <h1>Statistique</h1>
                </div>
         </header>
        <br>
        <div class="container container_1">
            <div class="row">
                  <div class="col-md-6">
                      <div id="columnchart_values" style="width: 99%; height: 500px;"></div>
                  </div>
                <div class="col-md-6">
                    <div id="piechart" style="width: 99%; height: 500px;"></div>   
                </div>
            </div>
            
            <div id="piechart_2" style="width: 99%; height: 500px;"></div>
            
             
             <br>
            <br>
            
            <input class=" divImp btn btn-info" type="button" onClick="location.href='<?php echo base_url(); ?>index.php/Ctrl_Composant_Ivan/modifierComposantMeds'" value="Modifier les composants d'un medicament">
            <input   class=" divImp btn btn-info" type="button" onClick="location.href='<?php echo base_url(); ?>index.php/Ctrl_Composant_Ivan/ajouterComposantMeds'" value="Ajouter les composants d'un medicament"><br><br>
                      <input id="RevPA" data-toggle="tooltip" data-placement="top" title="Afficher les actions"  class=" divImp btn btn-info" type="button" onClick="location.href='<?php echo base_url(); ?>index.php/Ctrl_Composant_Ivan/index'" value="Revenir à la page d'accueil"> 
    </div>
    </body>
</html>
