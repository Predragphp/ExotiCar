# ExotiCar
## Final Project For IT-Academy

Web presentation of egzotic cars

Tehnology used to make site is:

  PHP-5.6.25
  MySql 5.7 tip baze MyISAM 
  CSS
  HTML5
  Javascript
  JQuery 3.2.1
  Ajax
  Bootstrap 3.3.7

placment of file is:

root file is e5 whit:

  ajax.php,
  AllCars.php,
  futer.html,
  heder.php,
  index.php,
  kontakt.php,
  
sub folders:

user whit:

  futer_user,
  heder_user,
  prijava,
  odjava,
  registracija,
  verijikacija,
  panelA,
  panelB,
  panelC,
  
funkcije_i_klase(functions_and_class) whit:

  class_Logs, 
  function,
  
js(JavaScript) whit:

  main.js,
 
css:

  style.css
  
img(images) whit: 

   logo.png
   
sub folders:
 
baner(banner) whit:

  slika0.jpg,
  
  slika1.jpg,
  
  slika2.jpg,
  
  slika3.jpg,
  
brend(brand) whit:

  slika0.png,
  
  slika1.png,
  
  slika2.png,
  
  slika3.png,
  
  slika4.png,
  
  slika5.png,
  
cars whit:

sub folders:

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
  
PHP is used for checking data and printed with javascript from php
One example of a check:

        if(!preg_match("/[a-z]/", $password))
             {
                echo "<script>

                    alert('Your password must contains at least one letter');
                    
                     </script>";
           }
           
Javascript controls the baner(banner).
Other images are printed using php from a database.

Ajax serves to display specific cars through the image of the brand on the index.php home page.
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
 
 
JQuery controls the check of input password in registration:

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
    

The class_Logs file is used to log on to the registration page and through which ip and to report successful or unsuccessful signups.

When registering, a mail with a link for verification of the verification page is sent to the user database and confirms that the email is valid.
 
The file function has 2 functions in itself to log onto the database and record the ip of the user and the ipv4 format.

The panelA file is used to add user admin privileges.
 
The panelB file is used to add images of new brand as well as adding images for car.

The panelC file is for entering new cars in the database as well as adding images for that car.

File contact is a contact form that allows you to send an e-mail if you are valid user.
