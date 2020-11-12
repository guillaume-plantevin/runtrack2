SELECT salles.nom, etage.id
FROM `salles`
INNER JOIN
etage
ON 
salles.id_etage = etage.id;
