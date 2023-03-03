-- a. Informations d’un film (id_film) : titre, année, durée (au format HH:MM) et réalisateur
SELECT title, DATE_FORMAT(releaseDateFrance,"%d/%m/%Y") AS releaseDate, DATE_FORMAT(runningTime, "%h:%i") AS RunningTime, familyName,name
FROM movie m
INNER JOIN producer pr
ON m.idProducer = pr.idProducer
INNER JOIN person p
ON pr.idPerson=p.idPerson
WHERE m.idMovie = 3


-- b. Liste des films dont la durée excède 2h15 classés par durée (du plus long au plus court
SELECT title, DATE_FORMAT(runningTime,'%Hh%i') AS duration
FROM movie
WHERE runningTime>= "2:47:00"


-- c. Liste des films d’un réalisateur (en précisant l’année de sortie)
SELECT familyName,name,title, DATE_FORMAT(releaseDateFrance,"%d/%m/%Y") AS releaseDate
FROM movie m
INNER JOIN producer pr 
ON m.idProducer=pr.idProducer
INNER JOIN person p
ON p.idPerson=pr.idPerson
WHERE familyName= "Johnstone"


-- d. Nombre de films par genre (classés dans l’ordre décroissant)
SELECT genreName,count(title) AS movie
FROM movie m
INNER JOIN moviegenre mg
ON m.idMovie=mg.idMovie
INNER JOIN genre g
ON mg.idGenre=g.idGenre
GROUP BY genreName
ORDER BY COUNT(title) DESC

-- e. Nombre de films par réalisateur (classés dans l’ordre décroissant)
SELECT NAME, familyName , COUNT(title) AS nbMovie
FROM movie m
INNER JOIN producer pr
ON m.idProducer=pr.idProducer
INNER JOIN person p
ON pr.idPerson=p.idPerson
GROUP BY NAME,familyName
ORDER BY nbMovie DESC 


-- f. Casting d’un film en particulier (id_film) : nom, prénom des acteurs + sexe
SELECT title, familyName, NAME, gender
FROM moviecast mc
INNER JOIN actor a
ON mc.idActor=a.idActor
INNER JOIN person p
ON a.idPerson=p.idPerson
INNER JOIN movie m
ON mc.idMovie=m.idMovie
WHERE mc.idMovie = 2


-- g. Films tournés par un acteur en particulier (id_acteur) avec leur rôle et l’année de sortie
-- (du film le plus récent au plus ancien)
