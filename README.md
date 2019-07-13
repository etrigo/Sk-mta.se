# Sk-mta.se
Skall bli en skämtgenerator som innehåller följande programeringsaspekter.<br>
- HTML<br>
- CSS <br>
- Respnsiv<br>
- JavaScript<br>
- session<br>
- Databas<br>
<br>
Det skall bli en mycket enkel onePage-sajt med en enda funktion. När man klickar på en knapp skall ett slumpmässigt skämt hämtas från databasen och renderas på skärmen. Man skall kunna rendera nya skämt genom att klicka igen dock skall redan renderade skämt inte visas igen.<br>
<br>
<b>Processen - tidsuppskattning/tidsåtgång</b><br>
1. Skapa prototyp i Adobe XD - 3.00/<br>
2. Skapa HTML - 2.00/<br>
3. Skapa CSS - 5.00/<br>
4. Skapa JavaScript-regler - 1.00/<br>
5. Skapa JavaScript - 8.00/<br>
6. Skapa databasen - <br>
7. Koppla databasen - <br>

FONTER
Header: Gloria Hallelujah (Google)
Paragraph: Montserrat (Google)
<!--
<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Montserrat&display=swap" rel="stylesheet">
font-family: 'Gloria Hallelujah', cursive;
font-family: 'Montserrat', sans-serif;
-->

FÄRGER<br>

Regler för knappen<br>
- onLoad:             skapa cookie, get cookie, check cookie
- onLoad:             dölj elemet för skämt
- Vid klick:          animera klick
- Efter animering:    hämta random skämt i db
- Efter animering:    kolla om skämtID finns lagrat i cookie 
- Om lagrat:          hämta nytt skämt
- om inte lagrat:     lagra skämtID i cookie
- om inte lagrat:     styla elementet för skämt
- om inte lagrat:     visa elementet
- om inte lagrat:     infoga skämtet i elementet
- efter infogat:      byt värde "skämta" mot "igen" i knappen

