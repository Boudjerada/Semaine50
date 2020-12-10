Exercice 5.1

Variable nb en Numériquee

DEBUT
Ecrire "Entrer un nombre entre 1 et 3 : "
Lire nb
TantQue nb < 1 ou nb > 3
  Ecrire "Saisie erronée. Recommencez”
  Lire nb
FinTantQue
Ecrire "Saisie acceptée"
FIN

Exercice 5.2

Variable nb en Numériques

DEBUT
Ecrire ""Entrez un nombre entre 10 et 20 :"
Lire nb
TantQue nb < 10 ou nb > 20
   Si N < 10 Alors
    Ecrire "Plus grand, recommencez”"
   Sinon 
    Ecrire "Plus petit, recommencez”"
   FinSi
   Lire nb
FinTantQue
Ecrire "Saisie acceptée"
FIN

Exercice 5.3

Variables nb, i Numériques

DEBUT
Ecrire "Entrez un nombre : "
Lire nb
i <- 0
Ecrire "Les 10 nombres suivants sont : "
TantQue i < 10
   i <- i + 1
   Ecrire N + i
FinTantQue
FIN

Exercice 5.4

Variables nb, i en Numériques

DEBUT
Ecrire "Entrez un nombre : "
Lire nb
Ecrire "Les 10 nombres suivants sont : "
Pour i <- 1 à 10
  Ecrire nb + i
i Suivant
FIN

Exercice 5.5

Variables nb, i en Numériques

DEBUT
Ecrire "Entrez un nombre : "
Lire nb
Ecrire "La table de multiplication de ce nombre est : "
Pour i <- 1 à 10
  Ecrire nb, " x ", i, " = ", nb*i
i Suivant
FIN

Exercice 5.6

Variables nb, i, somme en Numériques

DEBUT
Ecrire "Entrez un nombre : "
Lire nb
somme <- 0
Pour i <- 1 à nb
  somme <- somme + i
i Suivant
Ecrire "La somme est : ", somme
FIN


Exercice 5.7

Variables nb, i, facto en Numériques

DEBUT
Ecrire "Entrez un nombre : "
Lire nb
facto <- 1
Pour i <- 2 à nb
  facto <- facto * i
i Suivant
Ecrire "La factorielle est : ", facto
FIN


Exercice 5.8

Variables nb, i, nbmax en Numériques

DEBUT
nbmax <- 0 /*évite erreur pour 1er passage*/
Pour i <- 1 à 20
  Ecrire "Entrez un nombre ",i," :"
  Lire nb
  Si i = 1 ou nb > nbmax Alors
    nbmax <- nb
  FinSi
i Suivant
Ecrire "Le nombre le plus grand est : ", nbmax
FIN


/*avec position*/

Variables nb, i, nbmax, pos en Numériques

DEBUT
nbmax <- 0 
Pour i <- 1 à 20
  Ecrire "Entrez un nombre ",i," :"
  Lire nb
  Si i = 1 ou nb > nbmax Alors
    nbmax <- nb
    pos<-i
  FinSi
i Suivant
Ecrire "Le nombre le plus grand est : ", nbmax
Ecrire "Ce nombre a était saisi en position : ", pos
FIN


Exercice 5.9

Variables nb, i, nbmax, pos en Numériques

DEBUT
nb ← 1    /*force l'entrée en boucle*/
i ← 1
nbmax ← 0
TantQue nb <> 0
  Ecrire Ecrire "Entrez un nombre ",i," :"
  Lire nb
  Si i = 1 ou nb > nbmax Alors
    nbmax ← nb
    pos ← i
  FinSi
  i ← i + 1
FinTantQue
Ecrire "Le nombre le plus grand est : ", nbmax
Ecrire "Ce nombre a était saisi en position : ", pos
FIN

Exercice 5.10

Variables prixart, total, paye, reste, nb10, nb5 en Numériques

DEBUT
prixart <- 1
total <- 0

TantQue prixart <> 0
  Ecrire "Entrez le montant de vôtre article : "
  Lire prixart
  total <- total + prixart
FinTantQue

Ecrire "Quel montant versé vous ?"
Lire paye
reste <- paye - total

nb10 <- 0
nb5 <- 0

TantQue reste >= 10
  nb10 <- nb10 + 1
  reste <- reste – 10
FinTantQue

Si reste >= 5
  nb5 <- 1
  reste <- reste – 5
FinSi

Ecrire "Montant versé : ", paye, , " euros"
Ecrire "Vous devez :", total, " euros"
Ecrire "Rendu de la monnaie : "
Ecrire "Billets de 10 euros : ", nb10
Ecrire "Billets de  5 euros : ", nb5
Ecrire "Pièces de 1 euro : ", reste
FIN


Exercice 5.11

Variables chev, chevjoue, i, facchev, facchevjoue, facdif  en Entier
DEBUT
Ecrire "Entrez le nombre de chevaux partants : "
Lire chev
Ecrire "Entrez le nombre de chevaux joués : "
Lire chevjoue

facchev <- 1
Pour i <- 2 à chev
  facchev <- facchev * i
i Suivant

facchevjoue <- 1
Pour i <- 2 à chevjoue
  facchevjoue <- facchevjoue * i
i Suivant

facdif <- 1
Pour i <- 2 à chev-chevjoue
  facdif <- facdif * i
i Suivant

Ecrire "Dans l’ordre, une chance sur ", facchev / facdif
Ecrire "Dans le désordre, une chance sur ", facchev / (facchevjoue * facdif)
Fin