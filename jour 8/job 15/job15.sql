SELECT salles.nom AS nom_salle, étage.NOM AS nom_étage
FROM salles
JOIN étage ON salles.id_etage = etages.id;