function creerIndividu()
{
        
        $.ajax 
        (
            {
                type:"post",
                url:"InsertionLeTypeIndividu",
                data:"libelle="+$('#txt1').val()+"&code="+$('#p1').text(),
                success:function(data)
                {
                    $('#divTypesIndividus').empty();
                    $('#divTypesIndividus').append(data);
                },
                error:function()
                {
                   alert('erreur');
                }
            }
                 
        );   
}
function modifIndividu()
{
    $.ajax
    (
        {
                type:"post",
                url:"ModificationLeTypeIndividu",
                data: "nvlibelle="+$('#txt1').val()+"&code="+$('#lstTypes option:selected').val(),
                success:function(data)
                {
                    $('#div2').empty();
                    $('#div2').append(data);
                },
                error:function()
                {
                   alert('erreur');
                }
        }
    );
}
function creerMedicament()
{
    $.ajax
    (
            {
                type:"post",
                url:"InsertionLeMedicament",
                data:"depot="+$('#txtDepot').val()+"&nom="+$('#txtNom').val()+"&famille="+$('#txtFam').val()+"&composition="+$('#txtCompo').val()+"&effets="+$('#txtEffets').val()+"&contre="+$('#txtContre').val()+"&prix="+$('#txtPrix').val(),
                success:function(data)
                {
                    $('#div1').empty();
                    $('#div1').append(data);
                },
                error:function()
                {
                    alert('erreur');
                }
            }
    );
}
function modifMedicament()
{
    $.ajax
    (
        {
                type:"post",
                url:"ModificationLeMedicament",
                data: "depot="+$('#txtDepot').val()+"&nom="+$('#txtNom').val()+"&famille="+$('#txtFam').val()+"&composition="+$('#txtCompo').val()+"&effets="+$('#txtEffets').val()+"&contre="+$('#txtContre').val()+"&prix="+$('#txtPrix').val(),
                success:function(data)
                {
                    $('#div2').empty();
                    $('#div2').append(data);
                },
                error:function()
                {
                   alert('erreur');
                   
                }
        }
    );
}