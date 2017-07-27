////////////////////////////////////
//Definicija slika
var nizi=[];
nizi[0]="slika0.jpg";
nizi[1]="slika1.jpg";
nizi[2]="slika2.jpg";
nizi[3]="slika3.jpg";

/////////////////////////
//Korisnicki deo
var vremePromene=15;
if (document.getElementById('logo_user')){
	var folderzaSlike="../img/baner";
}
if (document.getElementById('logo')){
	var folderzaSlike="img/baner";
}
var timer=true;
////////////////////////////////////////
////////////////////////////////////////
var glavni=document.getElementById("baner");
var slika=document.createElement("img");
var tekuca=0;
var adiv;
slika.id="SlikaBaner";
slika.alt="Nema slike";
slika.src=folderzaSlike+"/"+nizi[tekuca++];
glavni.appendChild(slika);
glavni.appendChild(document.createElement("br"));

function promeniSliku()
{
	var a=document.getElementById("SlikaBaner");
	if(tekuca>nizi.length-1)tekuca=0;
	if(tekuca<0)tekuca=nizi.length-1;
	a.src=folderzaSlike+"/"+nizi[tekuca++];
}

if(timer==true)
{
		timer=setInterval("promeniSliku()", vremePromene*1000);
}
///////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////

$(document).ready(function(){

    $('input[type=password]').keyup(function() {
        var pswd = $(this).val();

        //validate letter
        if ( pswd.match(/[a-z]/) ) {
            $('#letter').removeClass('invalid').addClass('valid');
            document.getElementById('submit').disabled=false;
        } else {
            $('#letter').removeClass('valid').addClass('invalid');
            document.getElementById('submit').disabled=true;
        }


        //validate capital letter
        if ( pswd.match(/[A-Z]/) ) {
            $('#capital').removeClass('invalid').addClass('valid');
            document.getElementById('submit').disabled=false;
        } else {
            $('#capital').removeClass('valid').addClass('invalid');
            document.getElementById('submit').disabled=true;
        }

        //validate number
        if ( pswd.match(/\d/) ) {
            $('#number').removeClass('invalid').addClass('valid');
            document.getElementById('submit').disabled=false;
        } else {
            $('#number').removeClass('valid').addClass('invalid');
            document.getElementById('submit').disabled=true;
        }

        //validate space
        if ( !pswd.match(/[^a-zA-Z0-9\-\/]/) ) {
            $('#space').addClass('valid').removeClass('invalid');
            document.getElementById('submit').disabled=false;
        } else {
            $('#space').removeClass('valid').addClass('invalid');
            document.getElementById('submit').disabled=true;
        }

    }).focus(function() {
        $('#pswd_info').show();
    }).blur(function() {
        $('#pswd_info').hide();
    });
});
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(document.getElementById('noA'))
{
	document.getElementById('navB').style.display="none";
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Run on page load
    window.onload = function() {

        // If values are not blank, restore them to the fields
        var Make = sessionStorage.getItem('Make');
        if (Make !== null) $('#Make').val(Make);

        var Model = sessionStorage.getItem('Model');
        if (Model !== null) $('#Model').val(Model);

        var MYear= sessionStorage.getItem('MYear');
        if (MYear!== null) $('#MYear').val(MYear);

        var Mileage= sessionStorage.getItem('Mileage');
        if (Mileage!== null) $('#Mileage').val(Mileage); 

		var Engine = sessionStorage.getItem('Engine');
        if (Engine !== null) $('#Engine').val(Engine);

        var Cylinder = sessionStorage.getItem('Cylinder');
        if (Cylinder !== null) $('#Cylinder').val(Cylinder);

        var Transmission= sessionStorage.getItem('Transmission');
        if (Transmission!== null) $('#Transmission').val(Transmission);
		
		var EColor= sessionStorage.getItem('EColor');
        if (EColor!== null) $('#EColor').val(EColor);

        var IColor= sessionStorage.getItem('IColor');
        if (IColor!== null) $('#IColor').val(IColor); 
		
		var Door= sessionStorage.getItem('Door');
        if (Door!== null) $('#Door').val(Door);
    }

    // Before refreshing the page, save the form data to sessionStorage
    window.onbeforeunload = function() {
    sessionStorage.setItem(Make, $('#Make').val());
    sessionStorage.setItem(Model, $('#Model').val());
    sessionStorage.setItem(MYear, $('#MYear').val());
    sessionStorage.setItem(Mileage, $('#Mileage').val());
    sessionStorage.setItem(Engine, $('#Engine').val());
    sessionStorage.setItem(Cylinder, $('#Cylinder').val());
    sessionStorage.setItem(Transmission, $('#Transmission').val());
    sessionStorage.setItem(EColor, $('#EColor').val());
    sessionStorage.setItem(IColor, $('#IColor').val());
    sessionStorage.setItem(Door, $('#Door').val());
    }
