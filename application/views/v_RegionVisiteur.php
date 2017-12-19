
<html>
    <head>
        <title> Gestion  </title>
        <h1> Gestion   <a class="btn btn-primary" href='<?php echo base_url(); ?>'>Retourner à l'accueil</a></h1>
        <script type="text/javascript" src="<?php echo base_url(); ?>JS/LesF.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>JQuery/jquery-3.2.1.min.js"></script>
        

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <script text="text/javascript">
            $(
                    function(){
                        $('#btnValider').click(
                               function(){
                                   ajouterVisiteurRegion();
                               });
                        
    });
                
            
        </script>
</head>
        <body> 
            
         <div class="container">
             <div class="row">
                 <div class="col-md-6">
                     <h2>
                         Choisissez la region : 
                     </h2>
                     <select class="form-control" id="idReg" name="REG_CODE" id="lstReg">
                        <?php foreach ($lesRegions as $reg){ 
                            echo "<option value='".$reg->REG_CODE."'>".$reg->REG_NOM."</option>";
                        }
                            ?>
                
                       </select> 
                     <br>
                     
                     <h2>
                         Saisissez la date : 
                     </h2>
                     <input class="form-control" type="date" id="idDate">
                     
                 </div>
                 <div class="col-md-6">
                     <h2>
                         Choisissez le visiteur : 
                     </h2>
                     <select id="idVis" class="form-control" name="VIS_MATRICULE" id="lstVis">
                        <?php foreach ($lesVisiteurs as $vis){ 
                            echo "<option value='".$vis->VIS_MATRICULE."'>".$vis->VIS_NOM."</option>";
                        }
                            ?>
                
                       </select> 
                     <br>
                     <h2>
                        Saisissez le role du visiteur : 
                     </h2>
                     <input class="form-control" type="text" id="idRole">
                 </div>
                 
             </div>
             <br>
             <input style="width: 100%" type="button" class="btn btn-primary" id="btnValider" value="Valider">

         </div>
 
   
    </body>
</html>