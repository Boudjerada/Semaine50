TABLEAU

Exercice 6.1

Variable i en Numérique
Tableau tab(6) en Numérique

DEBUT
Pour i <- 0 à 6
  tab(i) <- 0
i Suivant
FIN



Exercice 6.2

Tableau tab(5) en Caractère

DEBUT
tab(0) <- "a"
tab(1) <- "e"
tab(2) <- "i"
tab(3) <- "o"
tab(4) <- "u"
tab(5) <- "y"
FIN

Exercice 6.3

Variable i en Numérique
Tableau Notes(8) en Numérique

DEBUT
Pour i <- 0 à 8
  Ecrire "Entrez la note numéro ", i + 1
  Lire Notes(i)
i Suivant
FIN

Exercice 6.4

L'algorithme crée un tableau de 6 valeurs numériques, rempli le tableau par chaque élément prend le carré de son indice. Enfin l'algorithme affiche les valeurs du tableau : 0 1 4 9 16 25

Cette algorithme peut être écrit avec une seul boucle :

Tableau nb(5) en Numérique
Variable i en Numérique

DEBUT
Pour i <- 0 à 5
  nb(i)<- i * i
  Ecrire nb(i)
i Suivant
FIN

Exercice 6.5

L'algorithme crée un tableau de 7 valeurs numériques, rempli le tableau par 
N[0] =1 et ensuite chaque élément d'indice i prend la valeur de celui avec indice i-1 auquel on ajoute 2. Enfin l'algorithme affiche les valeurs du tableau : 1 3 5 7 9 11 13

Une seule boucle est possible :

Variables i en Numérique
Tableau N(6) en Numérique

DEBUT
N(0) <- 1
Ecrire N(0)
Pour i<- 1 à 6
  N(i) <-N(i-1) + 2
  Ecrire N(i)
i Suivant
FIN

Exercice 6.6


L'algorithme crée un tableau de 8 valeurs numériques, rempli le tableau par 
suite[0] =1 , suite[1] =1 et ensuite chaque élément i prend l'addition des deux élement d'incice i-1 i-2. Enfin l'algorithme affiche les valeurs du tableau : 1 1 2 3 5 8 13 21


Exercice 6.7

Variable i,som en Numérique
Tableau notes(8) en Numérique

som<-0
DEBUT
Pour i <- 0 à 8
  Ecrire "Entrez la note numéro ", i + 1
  Lire notes(i)
  som<-som + notes(i)
i Suivant
Ecrire "La moyenne de ces notes est : ", som/9
FIN


Exercice 6.8

Variables nb, pos, neg, i en Numérique
Tableau tab() en Numérique

DEBUT
Ecrire "Entrez le nombre de valeurs de vôtre tableau :"
Lire nb
Redim tab(nb-1)
pos <- 0
neg <- 0
Pour i <- 0 à nb - 1
  Ecrire "Entrez le nombre numéro ", i + 1, " :"
  Lire tab(i)
  Si tab(i) >= 0 alors
    pos <- pos + 1
  Sinon
    neg <- neg + 1
  Finsi
i Suivant
Ecrire "Nombre de valeurs positives ou nulle de vôtre tableau : ", pos
Ecrire "Nombre de valeurs négatives de vôtre tableau : ", neg
FIN


Exercice 6.9

Variables i, som, nb en Numérique
Tableau tab() en Numérique

DEBUT
Ecrire "Entrez le nombre de valeurs de vôtre tableau :"
Lire nb
Redim tab(nb-1)
som <- 0
Pour i <- 0 à nb - 1
  Ecrire "Entrez le nombre numéro ", i + 1, " :"
  Lire tab(i)
  som <- som + tab(i)
i Suivant
Ecrire "La somme des éléments de vôtre tableau est : ", som
FIN



Exercice 6.10

Variables i, nb en Numérique
Tableaux tab1(), tab2(), tab3() en Numérique

DEBUT
Ecrire "Entrez le nombre de valeurs de vos 3 tableaux :"
Lire nb
Redim tab1(nb-1)
Redim tab2(nb-1)
Redim tab3(nb-1)

Pour i <- 0 à nb - 1
  Ecrire "Entrez le nombre numéro ", i + 1, " de vôtre 1er tableau :"
  Lire tab1(i)
  Ecrire "Entrez le nombre numéro ", i + 1, " de vôtre 2éme tableau :"
  Lire tab2(i)
  tab3(i) <- tab1(i) + tab2(i)
i Suivant
FIN


Exercice 6.11

Variables i, j, nb1, nb2, sc en Numérique
Tableaux tab1(), tab2() en Numérique

DEBUT
Ecrire "Entrez le nombre de valeurs du tableau 1 :"
Lire nb1
Ecrire "Entrez le nombre de valeurs du tableau 2 :"
Lire nb2
Pour i <- 0 à nb1 - 1
  Ecrire "Entrez le nombre numéro ", i + 1, " de vôtre 1er tableau :"
  Lire tab1(i)
i Suivant
Pour j <- 0 à nb2 - 1
  Ecrire "Entrez le nombre numéro ", j + 1, " de vôtre 2éme tableau :"
  Lire tab2(j)
j Suivant
sc <- 0
Pour i <- 0 à nb1 – 1
  Pour j <- 0 à nb2 – 1
    sc <- sc + tab1(i) * tab2(j)
  j Suivant
i Suivant
Ecrire "Le schtroumpf de vos deux tableaux est  : ", sc
FIN


Exercice 6.12

Variables nb, i en Numérique
Tableau tab() en Numérique

DEBUT
Ecrire "Entrez le nombre de valeurs de vôtre tableau :"
Lire nb
Redim tab(nb-1)
Pour i <- 0 à nb - 1
  Ecrire "Entrez le nombre numéro ", i + 1
  Lire tab(i)
  tab(i)<-tab(i) + 1
  Ecrire tab(i)
i Suivant
FIN


Exercice 6.13

Variables nb, pos, i en Numérique
Tableau tab() en Numérique

DEBUT
Ecrire "Entrez le nombre de valeurs de vôtre tableau :"
Lire nb
Redim tab(nb-1)
Pour i <- 0 à nb - 1
  Ecrire "Entrez le nombre numéro ", i + 1
  Lire tab(i)
i Suivant
pos <- 0
Pour i <- 1 à nb - 1
  Si tab(i) > tab(pos) alors
    pos <- i
  Finsi
i Suivant
Ecrire "L'élement le plus grand est : ", tab(pos)
Ecrire "L'élement le plus grand est en position : ", pos
FIN

Exercice 6.14

Variables nb, i,supmoy, moy, som,  en Numérique
Tableau tab() en Numérique

DEBUT
Ecrire "Entrez le nombre de notes de vôtre tableau :"
Lire nb
Redim tab(nb-1)
som <- 0
Pour i <- 0 à nb - 1
  Ecrire "Entrez le nombre numéro ", i + 1
  Lire tab(i)
  som <- som + tab(i)
i Suivant

moy <- som / nb
supmoy <- 0
Pour i <- 0 à nb - 1
  Si tab(i) > moy Alors
    supmoy <- supmoy + 1
  FinSi
i Suivant
Ecrire "Il y'a ",supmoy, " élèves qui dépassent la moyenne de la classe" 
Fin



