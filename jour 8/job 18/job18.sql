SELECT 
    étage.NOM AS nom_étage, 
    salles.NOM AS "Biggest Room", 
    salles.capacite
FROM salles
JOIN etages ON salles.id_étage = étage.id
WHERE salles.capacite = (
    SELECT MAX(capacite)
    FROM salles
);
