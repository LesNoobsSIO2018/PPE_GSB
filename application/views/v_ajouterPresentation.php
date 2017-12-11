<html>
    <head>
        <title>Presentation</title>
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
        <script type="text/javascript" src="  <?php echo base_url(); ?>js/functions.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>Jquery/jquery-3.1.1.js"></script>

    </head>
    <body>
         <nav class="navbar navbar-inverse" id="mainNav">
      <div class="container">
          
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <a class="navbar-brand js-scroll-trigger" href="#">Presentation : </a>
              <ul class="nav navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="#insPres">Inserer</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link js-scroll-trigger" href="#lstPres">Liste</a>
                    </li>
              </ul>
          </div>

      </div>
    </nav>
        
        
        <div class="container">
            <section id="insPres">
                <div class="divCont">
                            <h1>Incerer des presentation d'un medicament</h1>
                                <?php
                                echo form_open('Ctrl_Composant_Ivan/form_presentation');
                                if(isset($unComposant)){
                                ?>
                                <div class="row">
                                        <table class="table">
                                            <tr>
                                                <th>
                                                    <h2  class="clth"> Code du composant  <input name="CMP_CODE" class="form-control" id="disabledInput" type="text"  value="<?php echo $unComposant[0]->CMP_CODE;?>"disabled></div>   <?php  //echo form_input('CMP_CODE',set_value($lst->CMP_CODE)); ?> </h2><spam><?php echo form_error("CMP_CODE"); ?></span>
                                                </th> 
                                            </tr>

                                            <tr>
                                                <th >
                                                    <h2 class="clth">Libelle du composant  <input name="CMP_LIBELLE" class="form-control" id="disabledInput" type="text" name="" value="<?php echo $unComposant[0]->CMP_LIBELLE;?>"> <?php //echo form_input('CMP_LIBELLE',set_value($lst->CMP_LIBELLE)); ?></h2><span><?php echo form_error("CMP_LIBELLE"); ?>
                                                </th>
                                            </tr>

                                        </table>
                                    <input type="hidden" name="hidden_id" value="<?php echo $unComposant[0]->CMP_CODE; ?>">
                                          <input id="Modifier" class="btn btn-success" type="submit" name="Modifier" value="Modifier"><?php// echo form_submit('btnModifier','Modifier');?>
                                </div>
                                 <?php       
                                    }
                                //}
                                else{

                                ?>
                            <div class="row">
                                    <table class="table">
                                        <tr>
                                            <th>
                                                <h2  class="clth"> Code de presentation :  <input class="form-control" id="disabledInput" type="text" name="PRE_CODE" style='text-transform:uppercase'> <?php  //echo form_input('CMP_CODE',set_value('CMP_CODE')); ?> </h2><spam><?php echo form_error("PRE_CODE"); ?></span>
                                            </th> 
                                        </tr>

                                        <tr>
                                            <th >
                                                <h2 class="clth">Libelle de presentation :  <input class="form-control" id="disabledInput" type="text" name="PRE_LIBELLE"> <?php  //echo form_input('CMP_LIBELLE',set_value('CMP_LIBELLE')); ?></h2><span><?php echo form_error("PRE_LIBELLE"); ?>
                                            </th>
                                        </tr>

                                    </table>
                                <input id="btnValid1" class="btn btn-success" type="submit" name="btnValider" value="Valider"><?php //echo form_submit('btnValider','Valider');?>
                            </div>

                            <?php 
                                }
                                echo form_close();
                            ?>
<input id="RevPA" data-toggle="tooltip" data-placement="top" title="Afficher les actions"  class=" divImp btn btn-info" type="button" onClick="location.href='<?php echo base_url(); ?>'" value="Revenir à la page d'accueil"> 

</div>
            </section> 
                               <!-- <input id="btnIncCom" name="incert" data-toggle="tooltip" data-placement="top" title="Afficher les actions"  class=" divImp btn btn-success" type="submit" value="Sauvgarder">--><br><br>
                        
            <section id="lstPres">
                <h1>La liste de presentation</h1>
                <table id="table" class="table" >

                <tr class="info">
                    <th class="thLC">
                        Code de presentation : 
                    </th>
                    <th class="thLC">
                        Libelle de presentation : 
                    </th>
<!--                    <th class="thLC">
                        Options
                    </th>-->
                </tr>
                <?php
                foreach($lesPresentations as $present){
                  ?>
                <tr>
                    <td class="cLC">
                          <?php echo $present->PRE_CODE; ?>
                    </td>
                    <td class="cLC">
                         <?php echo $present->PRE_LIBELLE; ?>
                    </td>
<!--                    <td>
                        <a class="btn btn-warning" type="button" href="<?php echo base_url();?>index.php/Ctrl_Composant_Ivan/mod_composant/<?php echo $present->PRE_CODE; ?>" >Modifier</a>
                    </td>-->
                </tr>
             <?php   
            }
            ?>  
            </table>  <br>
                             
            </section>
         </div>
       
    </body>
<!--     <footer class="footer-basic-centered">

			<p class="footer-company-motto">By Ivan Naluzhnyi</p>

			<p class="footer-links">
				<a href="#">Home</a>
				·
				<a href="#">Blog</a>
				·
				<a href="#">Pricing</a>
				·
				<a href="#">About</a>
				·
				<a href="#">Faq</a>
				·
				<a href="#">Contact</a>
			</p>
                        <br>
			<p class="footer-company-name">PPE3 &copy; 2017</p>

		</footer>-->
    
</html> <!--code d'Ivan-->

