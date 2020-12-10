LOGIQUE

Exercice 4.1

Variables Tutu, Toto en Numériques
Variables Tata en Caratère

DEBUT
Ecrire "Entrer deux nombres :"
Lire Toto, Tutu
Ecrire "Entrer un mot :"
Lire Tata
Si Tutu <= Toto + 4 ET Tata <> "OK" Alors
  Tutu <- Tutu - 1
Sinon
  Tutu <- Tutu + 1
Finsi
FIN

Exercice 4.2

Variables heure, minute en Numérique

DEBUT
Ecrire "Entrez les heures et ensuite les minutes : "
Lire heure, minute
minute <- minute + 1
Si minute = 60 Alors
  minute <- 0
  heure <- heure + 1
FinSi
Si heure = 24 Alors
  heure <- 0
FinSi
Ecrire "Dans une minute il sera ", heure, "heure(s) ", minute, "."
FIN

Exercice 4.3

Variables heure, minute, seconde en Numérique

Début
Ecrire "Entrez les heures, ensuite les minutes, ensuite les secondes : "
Lire heure, minute, seconde
seconde <- seconde + 1
Si seconde = 60 Alors
  seconde <- 0
  minute <- minute + 1
FinSi
Si minute = 60 Alors
  minute <- 0
  heure <- heure + 1
FinSi
Si heure = 24 Alors
  heure <- 0
FinSi
Ecrire "Dans une seconde, il sera ", heure, " heure(s) ", minute, " minutes(s) et ", s, " seconde(s)"
Fin


Exercice 4.4

Variables nb, prix en Numérique

DEBUT
Ecrire "Entrer le nombre de photocopies : "
Lire nb
Si nb <= 10 Alors
  prix <-nb * 0,1
SinonSi n <= 30 Alors
  prix <-(10 * 0,1) + ((nb – 10) * 0,09)
Sinon
  prix <- (10 * 0,1) + (20 * 0,09) + ((nb – 30) * 0,08)
FinSi
Ecrire "Le prix total est : ", prix
Fin

Exercice 4.5

Variable sexe en Caractère
Variable age en Numérique

DEBUT
Ecrire "Entrez le sexe masculin ou feminin : "
Lire sexe
Ecrire "Entrez l’âge de la personne : "
Lire age
Si (sexe = "masculin" ET age > 20) ou (sexe = "feminin" ET (age > 18 ET age 
                                        < 35)) Alors
  Ecrire "Vous êtes imposable"
Sinon
  Ecrire "Vous n'êtes pas imposable"
FinSi
FIN

Exercice 4.6

Variables cand1, cand2, cand3, cand4 en Numérique
Variables cas1, cas2, cas3, cas4 en Booléen
DEBUT
Ecrire "Entrez le score du 1er tour pour les quatre candidats :"
Lire cand1, cand2, cand3, cand4

cas1 <- A > 50
cas2 <- A < 12,5
cas3 <- A > B et A > C et A > D
cas4 <- B > 50 ou C > 50 ou D > 50

Si cas1 Alors
  Ecrire “Le candidat 1 est élu au premier tour"
Sinonsi cas4 ou cas2 Alors
  Ecrire “Le candidat 1 est éliminé au premier tour”
SinonSi cas3 Alors
  Ecrire "Le candidat 1 est en balottage favorable"
Sinon
  Ecrire "Le candidat 1 est en balottage défavorable"
FinSi
FIN

Exercice 4.7

Variables age, annperm, nbacc, annassur en Numérique
Variables cas1, cas2, cas en Booléen
Variable situation en Caractère

DEBUT
Ecrire "Entrez l’âge de l'assuré: "
Lire age
Ecrire "Entrez le nombre d'années de permis de l'assuré: "
Lire annperm
Ecrire "Entrez le nombre d'accidents de l'assuré: "
Lire nbacc
Ecrire "Entrez le nombre d'années d'assurance de l'assuré: "
Lire annassur
cas1 <- age >= 25
cas2 <- annperm >= 2
cas3 <- assur > 5
Si Non(cas1) et Non(cas2) Alors
  Si nbacc = 0 Alors
    situation <- "Rouge"
  Sinon
    situation <- "Refusé"
  FinSi
Sinonsi ((Non(cas1) et cas2) ou (cas1 et Non(cas2)) Alors
  Si nbacc = 0 Alors
    situation <- "Orange"
  SinonSi nbacc = 1 Alors
    situation <- "Rouge"
  Sinon
    situation <- "Refusé"
  FinSi
Sinon           /Ici l'assuré au moins 25 ans et au moins 2 ans de permis*/
  Si nbacc = 0 Alors
    situation <- "Vert"
  SinonSi nbacc = 1 Alors
    situation <- "Orange"
  SinonSi nbacc = 2 Alors
    situation <- "Rouge"
  Sinon
    situation <- "Refusé"
  FinSi
FinSi
Si cas3 Alors
  Si situation = "Rouge" Alors
    situation <- "Orange"
  SinonSi situation = "Orange" Alors
    situation <- "Vert"
  SinonSi situation = "Vert" Alors
    situation <- "Bleu"
  FinSi
FinSi
Ecrire "La situation de l'assuré est  : ", situation
FIN


Exercice 4.8

Variables J, M, A en Numérique
Variables Bix, cas1, cas2, cas3, cas4 en Booleen

DEBUT
Ecrire "Entrez le numéro du jour"
Lire J
Ecrire "Entrez le numéro du mois"
Lire M
Ecrire "Entrez l'année"
Lire A
Bix <- (A dp 4 et Non(A dp 100)) ou A dp 400
cas1 <- (M=1 ou M=3 ou M=5 ou M=7 ou M=8 ou M=10 ou M=12) et (J>=1 et J=<31)
cas2 <- (M=4 ou M=6 ou M=9 ou M=11) et (J>=1 et J=<30)
cas3 <- M=2 et Bix et J>=1 et J=<29
cas4 <- M=2 et J>=1 et J=<28
Si cas1 ou cas2 ou cas3 ou cas4 Alors
  Ecrire "Date valide"
Sinon
  Ecrire "Date non valide"
FinSi
Fin

