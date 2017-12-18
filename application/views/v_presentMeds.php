
<table class='table'>
                <tr class="info">
                    <th class="thLC">
                        Libelle d'une presentation :  
                    </th>
                </tr>
     <?php
       foreach ($lesPresentationsDMeds as $present){
        ?>  
                 <tr>
                    <td class="cLC">
                         <?php echo $present->PRE_LIBELLE; ?>
                    </td>
                </tr>      
     <?php           
    }
    ?>
</table>