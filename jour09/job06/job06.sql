-- une requête permettant de sélectionner l’ensemble
-- des informations des étudiants dont prenom commence par un “T”.

SELECT * FROM `etudiants` WHERE prenom LIKE 'T%';

-- LIKE ‘a%’ : ce modèle permet de rechercher toutes les lignes 
-- de “colonne” qui commence par un “a”.