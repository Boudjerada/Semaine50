FONCTION PREDEFINIE

Exercice 9.1

La troisiéme instruction revoie une erreur, la fonction sinus attend une variables de type numériques
La quatriéme renvera une erreur si B = 0
La cinquiéme erreur car il manque une )

Exercice 9.2

Variable nb en Numériques
Variable mot en Caractère

DEBUT
Ecrire "Entrez un mot : "
Lire mot
nb ← len(mot)
Ecrire "Vôtre mot compte ", nb, " caractères"
FIN

Exercice 9.3

Variables nb, i en Numériques
Variable phrase en Caractère

DEBUT
Ecrire "Entrez une phrase : "
Lire phrase
nb <- 0
Pour i <- 1 à len(phrase) 
/*on suppose que la phrase ne se termine pas par un espace*/
  Si mid(phrase, i , 1) = " " Alors
    nb <- nb + 1
  FinSi
i suivant
Ecrire "Vôtre phrase compte ", nb + 1, " mots"
FIN

Exercice 9.4

Variables nb, i en Numériques
Variables phrase, phrase2 en Caractère

DEBUT
Ecrire "Entrez une phrase : "
Lire phrase
nb ← 0
phrase2 ← "aeiouy"
Pour i <- 1 à len(phrase)
  Si trouve(phrase2, mid(phrase, i, 1)) <> 0 Alors
    nb <- nb + 1
  FinSi
i suivant
Ecrire "Vôtre phrase compte ", nb, " voyelles"
FIN


Exercice 9.5


Variables  nb, i, rang en Numériques
Variables phrase en Caractère

DEBUT
Ecrire "Entrez une phrase : "
Lire phrase
Ecrire "Entrez le rang du caractère à supprimer : "
Lire rang
nb <- len(phrase)
phrase <- mid(phrase, 1, rang – 1) & mid(phrase, rang + 1, nb – rang)
Ecrire "Sans le caractère de rang ",rang, "la phrase devient : ", phrase
FIN

Exercice 9.6

Variables i, position en Numérique
Variables phrase, phrase2, alphabet, cara en Caractère

DEBUT
Ecrire "Entrez une phrase : "
Lire phrase
alphabet <- "ABCDEFGHIJKLMNOPQRSTUVWXYZ"
phrase2 <- ""
Pour i <- 1 à len(phrase)
  cara <- mid(phrase, i, 1)
  Si cara <> "Z" Alors
    position <- trouve(alphabet, cara)
    phrase2 <- phrase2 & mid(alphabet, position + 1, 1)
  Sinon
    phrase2 <- phrase2 & "A"
  FinSi
i Suivant
phrase ← phrase2
Ecrire "Vôtre phrase codée est : ", phrase
FIN

Exercice 9.7

Variables i, position, dec en Numérique
Variables phrase, phrase2, alphabet, cara en Caractère

DEBUT
Ecrire "Entrez une phrase : "
Lire phrase
alphabet <- "ABCDEFGHIJKLMNOPQRSTUVWXYZ"
phrase2 <- ""
Ecrire "Entrez un décalage de codage : "
Lire dec
Pour i <- 1 à len(phrase)
  cara <- mid(phrase, i, 1)
  position <- mod(trouve(alphabet, cara) + dec , 26)
  Si position = 0 Alors /*gere le modulo nul ex y avec un decalage de 1 ou 27 etc...*/
    position <- 26
  FinSi
  phrase2 <- phrase2 & mid(alphabet, position, 1)
i Suivant
phrase <- phrase2
Ecrire "Vôtre phrase codée est : ", phrase
FIN

Exercice 9.8

Variables i, position en Numériques
Variable phrase, phrase2, code, cara en Caractère

DEBUT
Ecrire "Entrez l’alphabet codé de 26 caractère : " 
Lire code
Ecrire "Entrez une phrase : "
Lire phrase
phrase2 <- "ABCDEFGHIJKLMNOPQRSTUVWXYZ"
phrase2 <- ""
Pour i <- 1 à len(phrase)
  cara <- mid(phrase, i, 1)
  position <- trouve(phrase2, cara)
  phrase2 <- phrase2 & mid(code, position, 1)
i Suivant
phrase <- phrase2
Ecrire "La phrase codée est : ", phrase
FIN


Exercice 9.9

Variables  alphabet, phrase, phrase2, code, cara, caracode en Caractère
Variables i, position, positionclecode, positioncleaplha en Numérique

DEBUT
Ecrire "Entrez le codage :"
Lire code
Ecrire "Entrez une phrase : "
Lire phrase

alphabet <- "ABCDEFGHIJKLMNOPQRSTUVWXYZ"
phrase2 <- ""

positionclecode <- 0

Pour i <- 1 à len(phrase)
    positionclecode <- positionclecode + 1
    Si positionclecode > len(code) Alors
        positionclecode <- 1
    FinSi
    
    caracode <- mid(code, positionclecode, 1)
    
    positionclealpha  ← trouve(alphabet, caracode)
    
    cara <- mid(phrase, i, 1)

    /*calcul position de la lettre Code*/
    position <- trouve(alphabet, cara) + positionclealpha - 1 
    /*-1 car si alphabet commence pas ex en C et B est a codé alors B devient D */
    Si position > 26 Alors
    position <- position – 26
    FinSi
  
    phrase2 <- phrase2 & mid(alphabet, position, 1)
i Suivant
phrase <- phrase2
Ecrire "La phrase codée est : ", phrase 
FIN

Exercice 9.10

Variable nb en Numérique

DEBUT
Ecrire "Entrez un nombre : "
Lire nb
Si 0 = mod(nb,2) Alors
  Ecrire "vôtre nombre est pair"
Sinon
  Ecrire "Vôtre nombre est impair"
FinSi
FIN

Exercice 9.11



Variable Glup en Numériques

DEBUT
/*0 =< Glup < 2*/
Glup <- Alea()  * 2 + 0
Ecrire Glup

/*–1 =< Glup < 1*/
Glup <- Alea()  * 2 - 1
Ecrire Glup

/*1,35 =< Glup < 1,65*/
Glup <- Alea()  * 0.3 + 1,35
Ecrire Glup

/*Glup émule un dé à six faces*/
Glup ← ent(Alea() * 6) + 1  /*Alea() * 6 est compris entre 0 et 5.9999..)*/
Ecrire Glup

/*–10,5 =< Glup < +6,5*/

Glup <- Alea()  * 17 - 10,5
Ecrire Glup

/*Glup émule la somme du jet simultané de deux dés à six faces*/

Glup ← ent(Alea() * 6) + 1 + ent(Alea() * 6) + 1
Ecrire Glup










d) Glup ← Ent(Alea() * 6) + 1
e) Glup ← Alea() * 17 – 10,5
f) Glup ← Ent(Alea()*6) + Ent(Alea()*6) + 2
