<html>
    <head>
        <title>Individus</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">      
                <script type="text/javascript" src="<?php echo base_url(); ?>JS/lesFonctions.js"></script>
                <script type="text/javascript" src="<?php echo base_url(); ?>JQuery/jquery-3.1.1.js"></script>
                <script type="text/javascript"></script>
    </head>
        <body>
            <h2>Création et modification d'un Type d'individu</h2>
                <input name="TIN_CODE" type="text" placeholder="code individu">
                <input name="TIN_LIBELLE" type="text" placeholder="libelle individu">
                <input type="submit" value="créer" id="btnIndividu">
                    <br>
                    <br>
                <input type="button" value="médicaments" onClick="location.href='../../index.php/Ctrl_Medoc/getAllMedicament'">
                <input type="button" value="prescription" onclick="location.href='../../index.php/Ctrl_Medoc/getPrescription'">
                <input type="button" value="Acceuil" onClick="location.href='../../../PPE'">
                    <br>
                    <br>
                    <br>
            <h2>Liste des types d'individus existantes</h2>
                <table>
                    <tr>
                        <th>Code</th>
                        <th>Libelle</th>
                
                    </tr>
                    <?php
                        foreach($lesIndividus as $tin){
                
                    ?>
                    <tr>
                        <td><?php echo $tin->TIN_LIBELLE;?></td>
                        <td><?php echo $tin->TIN_LIBELLE;?></td>
                        <td><input type="button" value="Modifier" id="btnModIndividu"></td>
                    </tr> 
                    <?php } ?>
                </table>
        </body>
</html>