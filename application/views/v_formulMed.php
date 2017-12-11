<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
            <!-- Optional theme -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
            <!-- Latest compiled and minified JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style_ivan.css" />
         
        <script type="text/javascript" src="<?php echo base_url(); ?>Jquery/jquery-3.1.1.js"></script>
         <script type="text/javascript" src="  <?php echo base_url(); ?>js/functions.js"></script>
         <script type="text/javascript">
         $(
                  function(){;
                         $('#btnValidComF').click(
                         function(){
                             AjFormulMed();        
                         });
                         
                        $('#idMeds').show(
                        function(){
                            AfficherAjFormulMed();
                        });
                        
                         $('#idMeds').change(
                         function(){
                             AfficherAjFormulMed();
                         });
                         
                        
                     
 
             } );
        </script>
    </head>
    <body>
        <div class="container">
            <div id="AJ">
            <h2 >Inserer la presentation d'un medicament</h2>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <h3 >Choisissez un medicament : </h3>
                        <select class="form-control" id='idMeds'>
                            <?php 
                                foreach ($lesMedicaments as $meds){
                                    echo "<option value='".$meds->MED_DEPOTLEGAL."'>".$meds->MED_NOMCOMMERCIAL."</option>";
                                }
                            ?>
                         </select>
                    </div>
                    <div class="col-md-6">
                      <h3>Choisissez une presentation : </h3> 
                         <select class="form-control" id='idPres'>
                            <?php 
                                foreach ($lesPresentations as $pres){
                                    echo "<option value='".$pres->PRE_CODE."'>".$pres->PRE_LIBELLE."</option>";
                                }
                            ?>
                         </select>
                    </div>
                </div>
                <input id="btnValidComF" class="btn btn-success" type="button"  value="Valider" style="margin-top: 20px;"><br>   
                <div id="divAffichPres"></div>
            <input id="RevPA" data-toggle="tooltip" data-placement="top" style="margin-top: 20px;" title="Acceuil"  class=" divImp btn btn-info" type="button" onClick="location.href='<?php echo base_url(); ?>'" value="Revenir à la page d'accueil"> 
           
            </div>
        </div>
    </body>
</html>
