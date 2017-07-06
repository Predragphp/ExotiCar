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