select Effectif_garçon,Effectif_fille from programme p join se_faire_par s on P.ID_PROG = s.ID_PROG where P.ID_PROG = 1

//Niveau departemental
select Effectif_garçon,Effectif_fille from programme p join se_faire_par s on P.ID_PROG = s.ID_PROG join est_enseigner e on e.ID_PROG=p.ID_PROG join etablissement et on et.ID_ETBLMT=e.ID_ETBLMT
where et.ID_DEPT=1 and p.ID_PROG=1


// Niveau regional
select Effectif_garçon,Effectif_fille from programme p join se_faire_par s on P.ID_PROG = s.ID_PROG join est_enseigner e on e.ID_PROG=p.ID_PROG join etablissement et on et.ID_ETBLMT=e.ID_ETBLMT JOIN departement d on d.ID_DEPT=et.ID_DEPT
where et.ID_DEPT=1 and p.ID_PROG=1 and d.ID_REG = 1 


// Niveau National
select Effectif_garçon,Effectif_fille from programme p join se_faire_par s on P.ID_PROG = s.ID_PROG join est_enseigner e on e.ID_PROG=p.ID_PROG join etablissement et on et.ID_ETBLMT=e.ID_ETBLMT JOIN departement d on d.ID_DEPT=et.ID_DEPT
where p.ID_PROG=1 


// centre de formation,sectoriel,lycée niveau national
SELECT type, Count(*) as nombre 
from etablissement e  join departement d on e.ID_DEPT =d.ID_DEPT 
group by type 

// Effectif garçon fille centre de formation,sectoriel,lycée niveau national
select TYPE, Count(Effectif_garçon) as 'Effectif garçon',
 Count(Effectif_fille) as 'Effectif fille'
from se_faire_par s join programme p on s.ID_PROG=p.ID_PROG
JOIN est_enseigner e on e.ID_PROG =p.ID_PROG
Join etablissement et ON et.ID_ETBLMT= e.ID_ETBLMT
GROUP by TYPE;