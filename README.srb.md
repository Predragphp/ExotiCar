# ExotiCar
## Zavrsni rad sa  IT-Academy

Web prezentacija egsoticnih automobila

Tehnologija koricena:

  PHP-5.6.25
  MySql 5.7 tip baze MyISAM 
  CSS
  HTML5
  Javascript
  JQuery 3.2.1
  Ajax
  Bootstrap 3.3.7

fajlovi su rasporedjani u :

root foldert je e5 u njemu je:

  ajax.php,
  
  AllCars.php,
  
  futer.html,
  
  heder.php,
  
  index.php,
  
  kontakt.php,
  
pod filderi sa:

user (korisnicki deo):

  futer_user,
  
  heder_user,
  
  prijava,
  
  odjava,
  
  registracija,
  
  verijikacija,
  
  panelA,
  
  panelB,
  
  panelC,
  
funkcije_i_klase:

  class_Logs, 
  
  function,
  
js(JavaScript):

  main.js,
 
css:

  style.css
  
img(slike): 

   logo.png
   
sa pod folderima:
 
baner:

  slika0.jpg,
  
  slika1.jpg,
  
  slika2.jpg,
  
  slika3.jpg,
  
brend:

  slika0.png,
  
  slika1.png,
  
  slika2.png,
  
  slika3.png,
  
  slika4.png,
  
  slika5.png,
  
cars(automobili):

sa pod folderima:

Bentley:

  slika0.jpg,
  
  slika1.jpg,
  
  slika2.jpg,
  
  slika3.jpg,
  
  slika4.jpg,
  
  slika5.jpg,
  
Bugatti:

  slika0.jpg,
  
  slika1.jpg,
  
  slika2.jpg,
  
  slika3.jpg,
  
  slika4.jpg,
  
  slika5.jpg,
  
  slika6.jpg,
  
  slika7.jpg,
  
  slika8.jpg,
  
  slika9.jpg,
  
  slika10.jpg,
  
  slika11.jpg,
  
Lamborghini:

  slika0.jpg,
  
  slika1.jpg,
  
  slika2.jpg,
  
  slika3.jpg,
  
  slika4.jpg,
  
  slika5.jpg,
  
McLaren:

  slika0.jpg,
  slika1.jpg,
  slika2.jpg,
  slika3.jpg,
  slika4.jpg,
  slika5.jpg,
  
Porsche:

  slika1.jpg,
 
  slika2.jpg,
 
  slika3.jpg,
 
  slika4.jpg,
 
  slika5.jpg,
 
  slika6.jpg
  
Rolls-Royce:

  slika0.jpg,
  
  slika1.jpg,
  
  slika2.jpg,
  
  slika3.jpg,
  
  slika4.jpg,
  
  slika5.jpg,
  
  slika6.jpg,
  
  slika7.jpg,
  
  slika8.jpg,
  
  slika9.jpg,
  
PHP se koristi za proveru podataka i ispisuje se javascript iz PHP-a.

Jedan primer provere

        if(!preg_match("/[a-z]/", $password))
             {
                echo "<script>

                    alert('Your password must contains at least one letter');
                    
                     </script>";
           }
           
Javascript kontrolise baner.

Ostale slike ispisuje php-e iz baze podataka.

Ajak sluzi za prikazivanje specificnih automobila preko slike brenda na indek.php pocetnoj stranici.

Ajax:
         <script>
        $(document).ready(function(){
            $(".imgbrend").click(function(){
                $.get("ajax.php?strana="+$(this).attr('strana'), function(odgovor){
                    $("#odgovor").html(odgovor);
                });
            });
        });
    </script>
 
 
JQuery kontrolise proveru lozinke:

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
    

Datoteka class_Logs se koristi za ispisivanje dolazaka na stranicu registracije i preko koje ip i za prijavljivanje uspešnih ili neuspješnih prijava.

Prilikom registracije salje se email  verifikacija se salje u bazu podataka korisnika i potvrdjuje da je e-pošta validna.
 
Funkcija datoteke ima samo 2 funkcije za prijavljivanje na bazu podataka i snimanje ip korisnika u ipv4 formatu.

Datoteka panelA se koristi za dodavanje admin prava.
 
Datoteka panelB se koristi za dodavanje slika novog brenda, kao i dodavanje slika za automobil.

Datoteka panelC je za unos novih automobila u bazu podataka.

Kontakt sa faksom je obrazac za kontakt koji vam omogućava slanje e-pošte ako ste važeći korisnik.
