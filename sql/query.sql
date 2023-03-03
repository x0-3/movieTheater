-- a. Informations d’un film (id_film) : titre, année, durée (au format HH:MM) et réalisateur

SELECT title, DATE_FORMAT(releaseDateFrance,"%d/%m/%Y") AS releaseDate, DATE_FORMAT(runningTime, "%h:%i") AS RunningTime, familyName,name
FROM movie m
INNER JOIN producer pr
ON m.idProducer = pr.idProducer
INNER JOIN person p
ON pr.idPerson=p.idPerson


-- b. Liste des films dont la durée excède 2h15 classés par durée (du plus long au plus court
