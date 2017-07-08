# Radna Verzija

## ExotiCar
### Zavrsni Projekat IT-Akademija

Web prezentacija egsoticnih automobila

Radjeno u:
PHP-5.6.25
MySql 5.7 tip baze MyISAM 
CSS
HTML5
Javascript
JQuery 3.2.1
Ajax
Bootstrap 3.3.7

Fajlovi:
ajax.php,
AllCars.php,
futer.html,
heder.php,
index.php,
kontakt.php,

Se nalaze u folderu e5 koji se nalaci u wamp root-u www

Fajlovi:
futer_user,
heder_user,
prijava,
odjava,
registracija,
verijikacija,
panelB,
panelC

Se nalaze u folderu pod imenom user

class_Logs, 
function:
se nalaze u folderu funkcije_i_klase

style:
se nalazi u folderu css

main:
se nalazi u folderu js

Slike brenda banera i automobila se naleze u folderu img pa u podfolderu za odgovarajucu sliku baner u baner folderu brend u brend folderu i automobili su u car folderu sa podfolderima sa nazivom svakog brenda

Sve forme na sajtu su radjene u bootstrap-u isto kao i ram za slike 

PHP je koriscen za proveru podataka a ispisano i javacript-u iz php-a
jedan primer provere 

             if(!preg_match("/[a-z]/", $password))
             {
                echo "<script>

                    alert('Your password must contains at least one letter');
                    
                     </script>";
           }

Javascript kontrolise baner 

Ostale slike su ispisane putem php-a

Ajax sluzi za prikaz odredjenih automobila preko slike brenda na pocetnoj strani index.php
ajax 

      <script>
        $(document).ready(function(){
            $(".imgbrend").click(function(){
                $.get("ajax.php?strana="+$(this).attr('strana'), function(odgovor){
                    $("#odgovor").html(odgovor);
                });
            });
        });
    </script>

JQuery kontrolise proveru tokom registracije putem regx-a


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

Fajl class_Logs se koristi za logovanje ko je doso na stranicu registracija i preko kog ip-ja i za logovanje uspesnih ili neuspesnih prijava

Prilikom registracije salje se mail sa linkom za verifikaciju istog na strani verifikacija vrsi update na bazu users i potvrdjuje da je email validan
 
Fajl function ima 2 funkcije u sebi prijavu na bazu i zabelezivanje ip-a korisnika i ipv4 formatu

Fajl panelB sluzi za dodavanje slika novih prendova

Fajl panelC sluzi za upisivanje novih automobila u bazi podataka kao i dodavanje slika za taj automobil

Fajl kontakt je kontakt forma koja omugucije slanje mejla
