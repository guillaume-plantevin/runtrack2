SELECT etage.id, salles.nom AS 'Biggest Room' , MAX(salles.capacite) AS 'capacite'
FROM `salles`
INNER JOIN
etage
ON 
salles.id_etage = etage.id;
