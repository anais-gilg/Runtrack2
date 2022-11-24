-- une requête permettant de calculer la superficie de l’ensemble des étages.

SELECT SUM(superficie) FROM `etage`;
-- on veut la sommes de la superficie donc on utilise la fonction SUM() 
-- en précisant dans les parenthèses le champ souhaité