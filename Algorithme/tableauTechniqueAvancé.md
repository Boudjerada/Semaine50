TABLEAU TECHNIQUE AVANCEES

Exercie 7.1

Variables nb, i en Numériques
Tableau tab() en Numériques

DEBUT
Ecrire "Entrez le nombre de valeurs de vôtre tableau :"
Lire nb
Redim tab(nb-1)
Pour i <- 0 à nb - 1
  Ecrire "Entrez le nombre numéro ", i + 1, " de vôtre tableau"
  Lire tab(i)
i Suivant

i <- 1
TantQue (tab(i) = tab(i – 1) + 1) et (i < nb - 1) 
/* arreter à nb-1 permet d'éviter l'erreur au prochain tour de boucle*/
  i <- i + 1
FinTantQue

Si tab(i) = tab(i – 1) + 1 Alors
  Ecrire "Les nombres de vôtre tableau sont consécutifs"
Sinon
  Ecrire "Les nombres de vôtre tableau ne sont pas consécutifs"
FinSi
FIN



Exercie 7.2

/Séléction*/
Variables nb, i, j, position, tanpon en Numériques
Tableau tab() en Numériques

DEBUT
Ecrire "Entrez le nombre de valeurs de vôtre tableau :"
Lire nb
Redim tab(nb-1)
Pour i <- 0 à nb - 1
  Ecrire "Entrez le nombre numéro ", i + 1, " de vôtre tableau"
  Lire tab(i)
i Suivant

Pour i <- 0 à nb - 2
  position = i 
  /*position prend 1er élement du tableau qui reste a parcourir*/
  
  Pour j <- i + 1 à nb - 1
    Si tab(j) > tab(position) alors
      position <- j
    Finsi
  j suivant
  
  tanpon <- tab(position)
  tab(position) <- tab(i)
  tab(i) ← tanpon
i suivant
FIN

/*Bulle*/

Variables nb, i, j ,permut , tanpon en Numériques
Tableau tab() en Numériques

DEBUT
Ecrire "Entrez le nombre de valeurs de vôtre tableau :"
Lire nb
Redim tab(nb-1)
Pour i <- 0 à nb - 1
  Ecrire "Entrez le nombre numéro ", i + 1, " de vôtre tableau"
  Lire tab(i)
i Suivant

permut <- Vrai
TantQue permut
  permut <- Faux
  Pour i <- 0 à N - 2
    Si tab(i) < tab(i + 1) Alors
      tanpon <- tab(i)
      tab(i) <- tab(i + 1)
      tab(i + 1) <- tanpon
      permut <- Vrai
    Finsi
  i suivant
FinTantQue
FIN

Exercie 7.3

Variables nb, i, tanpon en Numériques
Tableau tab() en Numériques

DEBUT
Ecrire "Entrez le nombre de valeurs de vôtre tableau :"
Lire nb
Redim tab(nb-1)
Pour i <- 0 à nb - 1
  Ecrire "Entrez le nombre numéro ", i + 1, " de vôtre tableau"
  Lire tab(i)
i Suivant

Pour i <- 0 à (nb-1)/2
/*il y'a nombre élement/2 permutation*/
  tanpon <- tab(i)
  tab(i) <- tab(nb-1-i)
  tab(nb-1-i) <- tanpon
i suivant
FIN

Exercie 7.4

Variables nb, i, indice en Numériques
Tableau tab() en Numériques

DEBUT
Ecrire "Entrez le nombre de valeurs de vôtre tableau :"
Lire nb
Redim tab(nb-1)
Pour i <- 0 à nb - 1
  Ecrire "Entrez le nombre numéro ", i + 1, " de vôtre tableau"
  Lire tab(i)
i Suivant

Ecrire "Entrer l'indice de la valeur que vous voulez supprimer"
Lire indice
Pour i <- indice à nb-2
  tab(i) <- tab(i+1)
i suivant
Redim tab(nb–2)
Fin

Exercie 7.5

Variables nb, fin, debut, milieu en Numérique
Variables bool en Booléen
Variable mot en Caractère
Tableau tab() en Caractère

DEBUT
Ecrire "Entrez le nombre de mots de vôtre tableau :"
Lire nb
Redim tab(nb-1)
Pour i <- 0 à nb - 1
  Ecrire "Entrez le mot numéro ", i + 1, " de vôtre tableau"
  Lire tab(i)
i Suivant

Ecrire "Entrez le mot dont vous voulez vérifier l'apartenance :"
Lire mot

fin <- N - 1
debut <- 0
bool <- Faux

TantQue Non bool
     milieu <- (debut + fin)/2
     Si mot < tab(milieu) Alors
        fin <- milieu - 1
    Sinon
    debut <- milieu + 1
    FinSi
    bool <- (mot = tab(milieu)) ou (fin < debut) 
    /*Debut = fin a l'avant  dernier tour, au cas où le mot d s'y trouve pas bool prend faux quoi qu'il arrive*/
FinTantQue

Si mot = tab(milieu) Alors
  Ecrire "Vôtre mot appartient au dictionnaire"
Sinon
  Ecrire "Vôtre mot n'appartient pas au dictionnaire"
Finsi
FIN


Exercie 7.6

Variables nb, i en Numériques
Variables bool en Booléen
Tableau tab() en Numériques

DEBUT
Ecrire "Entrez le nombre de valeurs de vôtre tableau :"
Lire nb
Redim tab(nb-1)
Pour i <- 0 à nb - 1
  Ecrire "Entrez le nombre numéro ", i + 1, " de vôtre tableau"
  Lire tab(i)
i Suivant

bool <- Faux
Pour i <- 0 à nb - 2 
/*Si on arrive a l'avant dernier élément, le dernier est forcement pas un doublon*/
   Pour j <- i+1 à nb - 1
      Si T(i) = T(j) Alors
         bool <- Vrai
      FinSi
   j Suivant
i Suivant

Si bool Alors
  Ecrire "Au moins un doublon existe"
Sinon
  Ecrire "Il y'a pas de doublon"
FinSi
FIN

Exercie 7.7

Variables nb1, nb2, nb3, cptab1, cptab2, cptab3 en Numériques
Variables booltab1, booltab2 en Booléen
Tableau tab1(), tab2(), tab3() en Numériques

DEBUT

Ecrire "Entrez le nombre de valeurs de vôtre 1er tableau :"
Lire nb1
Redim tab1(nb1-1)
Pour i <- 0 à nb1 - 1
  Ecrire "Entrez le nombre numéro ", i + 1, " de vôtre 1er tableau"
  Lire tab1(i)
i Suivant

Ecrire "Entrez le nombre de valeurs de vôtre 2éme tableau :"
Lire nb2
Redim tab2(nb2-1)
Pour i <- 0 à nb2 - 1
  Ecrire "Entrez le nombre numéro ", i + 1, " de vôtre 2éme tableau"
  Lire tab2(i)
i Suivant

booltab1 ← faux
booltab2 ← faux
cptab1 ← 0
cptab2 ← 0
cptab3 ← -1

Redim tab3(nb1 + nb2 - 1)

TantQue Non(booltab1) ou Non(booltab2)
   
   cptab3 <- cptab3 + 1
  
   Si booltab1 ou (tab1(cptab1) > tab2(cptab2)) Alors
      tab3(cptab3) <- tab2(cptab2)
      cptab2 <- cptab2 + 1
      booltab2 <- cptab2 > nb2-1
   Sinon
      tab3(cptab3) <- tab1(cptab1)
      cptab1 <- cptab1 + 1
      booltab1 <- cptab1 > nb1-1
   FinSi

FinTantQue
FIN











