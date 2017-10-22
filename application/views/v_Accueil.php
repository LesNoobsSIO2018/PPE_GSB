
<html>
    <head>
        <title>Gestion des visiteurs/régions</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   
    </head>
    <body>
        <h1> Gestion des visiteurs </h1>
        <input id="btnAjouterVisiteur" class="btn btn-primary" type="button" value="Ajouter un visiteur" onclick="location.href='index.php/Ctrl_Visiteur/ajouterVisiteur'"/>
        <input id="btnModifierVisiteur" class="btn btn-danger" type="button" value="Modifier un visiteur" onclick="location.href='index.php/Ctrl_Visiteur/modifierVisiteur/'"/>
        <h1> Gestion des régions </h1>
        <input id="btnAjouterRegion"class="btn btn-primary" type="button" value="Ajouter une région" onclick="location.href='index.php/Ctrl_Visiteur/ajouterRegion'"/>
        <input id="btnModifierRegion"class="btn btn-danger" type="button" value="Modifier une région" onclick=""/>
    </body>
</html>
<html>
    <head>
        <title>Accueil</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
               
        <script type="text/javascript" src="<?php echo base_url(); ?>JS/lesFonctions.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>JQuery/jquery-3.1.1.js"></script>
        
        <script type="text/javascript"></script>
    </head>
    <body>
        <table>
            <tr>
                
                <td>
                    <h4>Gestion des médicaments</h4>
                    <input type="button" value="gestion médicaments" onClick="location.href='<?php echo base_url(); ?>index.php/Ctrl_Medoc/getAllMedicament'">
                    <p>       </p>
                </td>
                
                <td>
                    <h4>Gestion des types d'individus</h4>
                    <input type="button" value="gestion des individus" onClick="location.href='<?php echo base_url(); ?>index.php/Ctrl_Medoc/getAllIndividu'">
                    <p>       </p>
                </td>
                <td>
                    <h4>Gestion des prescriptions</h4>
                    <input type="button" value="gestion des prescriptions" onClick="location.href='<?php echo base_url(); ?>index.php/Ctrl_Medoc/getPrescription'">
                    <p>       </p>
                </td>
            </tr>
        </table>
    </body>
</html>

