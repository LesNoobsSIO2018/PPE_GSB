<html>
    <head>
        <title>Prescription</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
        <body>
            <h2>Création et modification d'une préscription</h2>
                <input type="text" name="MED_DEPOTLEGAL" placeholder="depot legal">
                <input type="text" name="TIN_CODE" placeholder="code individu">
                <input type="text" name="DOS_CODE" placeholder="code dosage">
                <input type="text" name="PRE_POSOLOGIE" placeholder="posologie">
                <input type="submit" value="créer">
                <input type="button" value="modifier">
                    <br>
                    <br>
                <input type="submit" value="Médicaments" onClick="location.href='<?php echo base_url();?>index.php/Ctrl_Medoc/getAllMedicaments'">
                <input type="button" value="Individus" onClick="location.href='<?php echo base_url();?>index.php/Ctrl_Medoc/getIndividus'">
                <input type="button" value="perturbateurs" onClick="location.href='<?php echo base_url();?>index.php/Ctrl_Medoc/getDeconseil'">
                <input type="button" value="Accueil" onClick="location.href='../../../PPE'">
                    <br>
                    <br>
                    <br>
           
                <select name="lstMedoc">
                    <?php
                        foreach($lesMedicaments as $MED){
                            echo "<option value='".$MED->MED_NOMCOMMERCIAL."'>".$MED->MED_DEPOTLEGAL."</option>";
                        } 
                     ?>
                </select>
                <select name="lstTypeIndividu">
                    <?php
                        foreach($lesIndividus as $TIN){
                            echo "<option value='".$TIN->TIN_CODE."'>".$TIN->TIN_LIBELLE."</option>";
                         }
                    ?>
                </select>
                <select name="lstdosage">
                    <?php
                        foreach($lesDosages as $dos){
                            echo "<option value='".$dos->DOS_QUANTITE."'>".$dos->DOS_QUANTITE."</option>";
                        } 
                    ?> 
                </select>
                <h2>Liste des prescriptions existantes</h2>
            <table>
                <thead>
                    <tr>
                        <th>Nom Médicament</th>
                        <th>Code Famille</th>
                        <th>Dosage</th>
                        <th>Posologie</th>
                    </tr>
                </thead>
                <?php
                    foreach($lesPrescriptions as $pre)
                    {
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $MED->MED_DEPOTLEGAL; ?></td>
                        <td><?php echo $TIN->TIN_CODE;?></td>
                        <td><?php echo $dos->DOS_CODE;?></td>
                        <td><?php echo $pre->PRE_POSOLOGIE;?></td>
                        <td><input id="btn2" type="button" value="Modifier"></td>
                    </tr>
                </tbody>
                <?php
                    }
                ?>
            </table>
        </body>
</html>
