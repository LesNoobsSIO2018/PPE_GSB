function creerIndividu()
{
        $.ajax 
        (
            {
                type:"post",
                url:"creerIndividu",
                data:"libelle="+$('#txt1').val()+"&code="+$('#txt2').val(),
                success:function(data)
                {
                    $('#divTypesIndividus').empty();
                    $('#divTypesIndividus').append(data);
                },
                error:function()
                {
                   alert('rechargez la page');
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
                url:"modifIndividu",
                data: "nvlibelle="+$('#txt1').val()+"&code="+$('#txt2').val(),
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
                url:"creerMedicament",
                data:"depot="+$('#txtDepot').text()+"&nom="+$('#txtNom').text()+"&code="+$('#txtCode').val()+"&composition="+$('#txtCompo').text()+"&effets="+$('#txtEffets').text()+"&contreindic="+$('#txtContre').text()+"&prix="+$('#txtPrix').text(),
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
                url:"modifMedicament",
                data: "depot="+$('#txtDepot').text()+"&nom="+$('#txtNom').text()+"&famille="+$('#txtFam').val()+"&composition="+$('#txtCompo').text()+"&effets="+$('#txtEffets').text()+"&contre="+$('#txtContre').text()+"&prix="+$('#txtPrix').text(),
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