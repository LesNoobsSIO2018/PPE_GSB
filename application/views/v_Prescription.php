<html>
    <head>
        <title>Prescription</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
        <h2>Création et modification d'une préscription</h2>
        <input type="text">
        <input type="button" value="créer">
        <br>
        <br>
        <br>
        <h2>Liste des prescriptions existantes</h2>
        <table>
            <tr>
                <th>Nom</th>
                <th>Composition</th>
                <th>Prix échantillon</th>
            </tr>
            <?php
                foreach($lesMedicaments as $med){
                }
            ?>
            <tr>
                <th><?php echo $med->MED_NOMCOMMERCIAL;?></th>
                <th><?php echo $med->MED_COMPOSITION;?></th>
                <th><?php echo $med->MED_PRIXECHANTILLON;?></th>
            </tr>
        </table>
    </body>
</html>
