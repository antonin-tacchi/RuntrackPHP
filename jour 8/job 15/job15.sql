SELECT salles.nom AS nom_salle, étage.nom AS nom_étage
FROM salles
JOIN étage ON salles.id_etage = étage.id;