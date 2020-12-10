TABLEAU MULTIIMENTIONNEL

Exercice 8.1
Variablesi i,j en Numériques
Tableau tab(5, 12) en Numériques

DEBUT
Pour i <- 0 à 5
  Pour j <- 0 à 12
    tab(i, j) <- 0
  j Suivant
i Suivant
FIN

Exercice 8.2

L'algoritme remplit les case d'un tableau de dimension 2 ,  6 valeurs (2 fois 3 valeurs) 
(0,0)<- 1
(0,1)<- 2
(0,2)<- 3
(1,0)<- 4
(1,1)<- 5
(1,2)<- 6

affiche ses valeurs dans cette ordre : 1 2 3 4 5 6


Exercice 8.3

L'algoritme remplit les case d'un tableau de dimension 2 ,  6 valeurs (2 fois 3 valeurs)
(0,0)<- 1
(0,1)<- 2
(0,2)<- 3
(1,0)<- 4
(1,1)<- 5
(1,2)<- 6

affiche ses valeurs dans cette ordre : 
(0,0)  1
(1,0)  4
(0,1)  2
(1,1)  5
(0,2)  3
(1,2)  6


Exercice 8.4

L'algoritme remplit les case d'un tableau de dimension 2 , 8 valeurs (4 fois 2 valeurs)
(0,0)<- 0
(0,1)<- 1
(1,0)<- 1
(1,1)<- 2
(2,0)<- 2
(2,1)<- 3
(3,0)<- 3
(3,1)<- 4

affiche ses valeurs dans cette ordre : 0 1 1 2 2 3 3 4


Exercice 8.5

L'algoritme remplit les case d'un tableau de dimension 2 ,  8 valeurs (4 fois 2 valeurs)
(0,0)<- 1
(0,1)<- 2
(1,0)<- 3
(1,1)<- 4
(2,0)<- 5
(2,1)<- 6
(3,0)<- 7
(3,1)<- 8
affiche ses valeurs dans cette ordre : 1 2 3 4 5 6 7 8 


L'algoritme remplit les case d'un tableau de dimension 2 ,  8 valeurs (4 fois 2 valeurs)
(0,0)<- 1
(0,1)<- 5
(1,0)<- 2
(1,1)<- 6
(2,0)<- 3
(2,1)<- 7
(3,0)<- 4
(3,1)<- 8
affiche ses valeurs dans cette ordre : 1 5 2 6 3 7 4 8

Exercice 8.6

Variables i, j, k, iMax, jMax en Numérique
Tableau tab(12, 8) en Numérique

DEBUT
iMax <- 0
jMax <- 0
k<-1
Pour i <- 0 à 12
    Pour j <- 0 à 08
        Ecrire "Entrer vôtre nombre numéro ", k
        Lire tab(i,j)
        k <- k+1
        Si tab(i,j) > tab(iMax,jMax) Alors
            iMax <- i
            jMax <- j
        FinSi
    j Suivant
i Suivant

Ecrire "Le plus grand élément est ", tab(iMax, jMax)
Ecrire "Il se trouve aux indices ", iMax, "; ", jMax
FIN

Exercice 8.7 /*Algo copié sur la correction et a revoir car non compris*/

Variables i, j , posi, posj, i2, j2 en Entier
Variables Correct, MoveOK en Booléen
Tableau Damier(7, 7) en Booléen
Tableau Mouv(3, 1) en Entier

DEBUT

/*Partie non compris*/
/*Choix 0 : pion en haut à droite*/
Mouv(0, 0) ← -1
Mouv(0, 1) ← -1
/*Choix 1 : pion en haut à droite*/
Mouv(1, 0) ← -1
Mouv(1, 1) ← 1
/*Choix 2 : pion en bas à gauche*/
Mouv(2, 0) ← 1
Mouv(2, 1) ← -1
/*Choix 3 : pion en bas à droite*/
Mouv(3, 0) ← 1
Mouv(3, 1) ← 1

/*ici ok initialisation du damier*/
Pour i ← 0 à 7
  Pour j ← 0 à 7
    Damier(i, j) ← Faux
  j suivant
i suivant

/* ok pour placement du pion avec controle de saisie*/

/*Saisie de la coordonnée en i ("posi") avec contrôle de saisie*/
Correct ← Faux
TantQue Non Correct
  Ecrire "Entrez la ligne de votre pion: "
  Lire posi
  Si posi >= 0 et posi <= 7 Alors
    Correct ← vrai
  Finsi
Fintantque

/*Saisie de la coordonnée en j ("posj") avec contrôle de saisie*/
Correct ← Faux
TantQue Non Correct
  Ecrire "Entrez la colonne de votre pion: "
  Lire posj
    Si posj >= 0 et posj <= 7 Alors
      Correct ← Vrai
    Finsi
Fintantque

/*Positionnement du pion sur le damier virtuel*/
Damier(posi, posj) ← Vrai

/*Partie ok */

Ecrire "Quel déplacement ?"
Ecrire " - 0: en haut à gauche"
Ecrire " - 1: en haut à droite"
Ecrire " - 2: en bas à gauche"
Ecrire " - 3: en bas à droite"

Correct ← Faux
TantQue Non Correct
  Lire Dep
  Si Dep >= 0 et Dep <= 3 Alors
    Correct ← Vrai
  FinSi
FinTantQue

/*i2 et j2 sont les futures coordonnées du pion. La variable booléenne MoveOK vérifie la validité de ce futur emplacement*/
/*NON compris*/
i2 ← posi + Mouv(Dep, 0)
j2 ← posj + Mouv(Dep, 1)
MoveOK ← i2 >= 0 et i2 <= 7 et j2 >= 0 et j2 <= 7

Si MoveOK Alors
  Damier(posi, posj) ← Faux
  Damier(i2, j2) ← Vrai
   Pour i ← 0 à 7
    Pour j ← 0 à 7
      Si Damier(i, j) Alors
        Ecrire " O ";
      Sinon
        Ecrire " X ";
      FinSi
    j suivant
    Ecrire ""
  i suivant
Sinon
  Ecrire "Mouvement impossible"
FinSi
FIN


