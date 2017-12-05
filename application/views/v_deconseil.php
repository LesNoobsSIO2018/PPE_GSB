<html>
    <head>
        <title>Medicaments</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <script type="text/javascript" src = "<?php echo base_url();?>JS/lesFonctions.js"></script>
                <script type="text/javascript" src="<?php echo base_url();?>JQuery/jquery-3.1.1.js"></script>
                <script type="text/javascript">
                </script>
    </head>
    <body>
        <br>
        <input type="button" value="individu" onClick="location.href='../../index.php/Ctrl_Medoc/getIndividus'">
        <input type="button" value="prescription" onClick="location.href='../../index.php/Ctrl_Medoc/getPrescription'">
        <input type="button" value="médicament" onClick="location.href='../../index.php/Ctrl_Medoc/getAllMedicaments'">
        <input type="button" value="Accueil" onClick="location.href='../../../PPE'">
        <br>
        <br>
        <table>
            <thead>
                <tr>
                    <th>Médicament perturbateur</th>
                    <th>Médicament perturbé</th>
                </tr>
            </thead>
             <?php
                    foreach($lesDeconseils as $dec)
                    {
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $dec->MED_PERTURBATEUR; ?></td>
                        <td><?php echo $dec->MED_MED_PERTURBE;?></td>
                    </tr>
                </tbody>
                <?php
                    }
                ?>
        </table>
    </body>
</html>