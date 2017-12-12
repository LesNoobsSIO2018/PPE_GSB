function ajouterVisiteurRegion(){
    alert("idVisiteur="+$('#idVis').val()+"&idRegion="+$('#idReg').val()+"&idDate="+$('#idDate').val()+"&idRole="+$('#idRole').val());
   $.ajax(
           {
               type:'post',
               url:'ajoutVisReg',
               data:"idVisiteur="+$('#idVis').val()+"&idRegion="+$('#idReg').val()+"&idDate="+$('#idDate').val()+"&idRole="+$('#idRole').val(),
               success:function(data){
                   alert('Reussi');
                   $('#container').empty();
                   $('#container').append(data);
               },
               error:function(){
                   alert('erreur SQL');
               }
           }        
 );
}

