SELECT *
FROM étudiant
WHERE TIMESTAMPDIFF(YEAR, NAISSANCE, CURDATE()) > 18;