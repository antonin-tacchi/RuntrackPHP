SELECT 
    étage.NOM AS nom_étage, 
    salles.NOM AS "Biggest Room", 
    salles.capacite
FROM salles
JOIN étage ON salles.id_etage = étage.id
WHERE salles.capacite = (
    SELECT MAX(capacite)
    FROM salles
);
