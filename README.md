# Working version

## ExotiCar
### Final Project IT Academy

Web presentation of egzotic cars

Working in:
PHP-5.6.25
MySQL 5.7 MyISAM database type
CSS
HTML5
Javascript
JQuery 3.2.1
Ajax
Bootstrap 3.3.7

Files:
ajax.php,
AllCars.php,
futer.html,
heder.php,
index.php,
kontakt.php,

Are located in the e5 folder that is loaded into the wamp root www

Files:
futer_user,
heder_user,
prijava,
odjava,
registracija,
verijikacija,
panelB,
panelC

Are located in the folder named user

Class_Logs,
Function:
Are located in the function_and_class folder

Style:
Is located in the css folder

Main:
Is located in the js folder

Images of brands and banners are placed in the folder img in the subfolder for the appropriate image banner in the banner folder brand in the brand folder and cars are in the car folder with subfolder names of each brand

All forms on the site are run in the bootstrap as well as the image frame

Php is used for checking data and printed in javascript from php
One example of a check

             If (! Preg_match ("/ [a-z] /", $ password))
             {
                Echo "<script>

                    Alert ('Your password must contain at least one letter');
                    
                     </ Script> ";
           }

Javascript control banner

Other images are printed using php

Ajax serves to display specific cars through the image of the brand on the index.php home page
ajax

      <Script>
        $ (Document) .ready (function {) {
            $ (". Imgbrend"). Click (function () {
                $ .get ("ajax.php? Page =" + $ (this) .attr ('page'), function {answer}
                    $ ("# Answer"). Html (answer);
                });
            });
        });
    </ Script>

JQuery controls the check during regx registration


        $ (Document) .ready (function {) {
        
        $ ('Input [type = password]'). Keyup (function () {
        Var pswd = $ (this) .val ();

        // validate letter
        If (pswd.match (/ [a-z] /)) {
            $ ('# Letter'). RemoveClass ('invalid'). AddClass ('valid');
            Document.getElementById ('submit'). Disabled = false;
        } Else {
            $ ('# Letter') removeClass ('valid'). AddClass ('invalid');
            Document.getElementById ('submit'). Disabled = true;
        }


        // validate capital letter
        If (pswd.match (/ [A-Z] /)) {
            $ ('# Capital'). RemoveClass ('invalid'). AddClass ('valid');
            Document.getElementById ('submit'). Disabled = false;
        } Else {
            $ ('# Capital'). RemoveClass ('valid'). AddClass ('invalid');
            Document.getElementById ('submit'). Disabled = true;
        }

        // validate number
        If (pswd.match (/ \ d)) {
            $ ('# Number'). RemoveClass ('invalid'). AddClass ('valid');
            Document.getElementById ('submit'). Disabled = false;
        } Else {
            $ ('# Number') removeClass ('valid'). AddClass ('invalid');
            Document.getElementById ('submit'). Disabled = true;
        }

        // validate space
        If (! Pswd.match (/ [^ a-zA-Z0-9 \ - \ /] /)) {
            $ ('# Space'). AddClass ('valid'). RemoveClass ('invalid');
            Document.getElementById ('submit'). Disabled = false;
        } Else {
            $ ('# Space'). RemoveClass ('valid'). AddClass ('invalid');
            Document.getElementById ('submit'). Disabled = true;
        }

    }). Focus (function {) {
        $ ('# Pswd_info'). Show ();
    }). Blur (function {) {
        $ ('# Pswd_info'). Hide ();
    });
    });

The class_Logs file is used to log on to the registry page and through which ip and to report successful or unsuccessful login

When registering, a mail with a verification link verification link is sent to the user database and confirms that the email is valid
 
File function has 2 functions in itself to log onto the database and record the ip of the user and the ipv4 format

File panelB serves to add images of new arrivals

File panelC is used to write new cars in the database as well as add images for that car

File contact is a contact form that allows you to send an email
