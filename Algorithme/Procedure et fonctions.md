PROCEDURE ET FONCTION

Exercice 11.1

Fonction somme(nb1 en Numérique,nb2 en Numérique, nb3 en Numérique,         
                    nb4 en Numérique, nb5 en Numérique) en Numérique
DEBUT
  Renvoyer nb1 + nb2 + nb3 + nb4 + nb5
FinFonction


Exercice 11.2

Fonction NbVoyelles(chaine en Caractère) en Numérique
Variables i, nbv en Numérique

DEBUT
nbv <- 0
Pour i <- 1 à Len(chaine)
  Si Trouve("aeiouy", Mid(chaine, i, 1)) != 0 Alors
    nbv <- nbv + 1
  FinSi
i suivant
Renvoyer nbv
FinFonction


Exercice 11.3

Fonction Trouve(ch1 en Caractère, ch2 en Caractère) en Numérique

Variable i en Numérique

DEBUT
i <- 1
/*tant que la longueur le permet et tant que ch2 n'est pas trouvé*/
TantQue i < Len(ch1) - Len(ch2) et b != Mid(a, i, Len(ch2))
  i <- i + 1
FinTantQue

Si ch2 != Mid(ch1, i, Len(ch2)) Alors
/*on traite le cas de l'arret sans avoir trouvé*/
    Renvoyer 0
Sinon
    Renvoyer i
FinSi
FinFonction

Exercice 11.4

Fonction enleve(ch en Caractère, cara en Caractère) en Caractère

Variable i en Numérique
Variable res en Caractère


DEBUT
res <- ""
Pour i <- 1 à Len(ch)
   Si Mid(ch, i, 1) != cara Alors
      res <- res & Mid(ch, i, 1)
   FinSi
i suivant
Renvoyer res
FinFonction


Exercice 11.5

Fonction enl(ch1 en Caractère, ch2 en Caractère) en Caractère

Variable i en Numérique
Variable res en Caractère

DEBUT
res <- ""
Pour i <- 1 à Len(ch1)
   Si Trouve(ch2, Mid(ch1, i, 1)) = 0 Alors
      res <- res & Mid(ch1, i, 1)
   FinSi
i suivant
Renvoyer res
FinFonction

Exercice 11.6
/*Utilisation d'une procedure car on modifie en mémoire le tableau sans rien renvoyer*/

Procédure TriTableau(nb en Numérique par Valeur, tab() en Numérique par Référence)

Variables i, j,  posmin, tanpon en Numériques

DEBUT
Pour i <- 0 à nb-2 /*dernier élément du tableau est forcement le plus grand*/
   posmini ← i
   Pour j <- i + 1 à nb-1
      Si tab(j) <- tab(posmin) Alors
         posmini ← j
      Finsi
   j suivant
   
   tanpon ← tab(posmin)
   tab(posmin) ← tab(i)
   tab(i) ← tanpon
i suivant
FinProcédure


Exercice 11.7

/*FONCTION*/
Fonction Tabcrois(nb en Numérique, tab() en Numérique) en Booléen

Variable i en Numérique
Variable bool en Booléen

DEBUT
bool <- Vrai
i <- 0
TantQue bool et (i < nb-1)
   bool <- tab(i) < tab(i+1)
   i <- i+1
FinTantQue
Renvoyer bool
FinFonction

/*Precedure*/

Procédure Tabcrois(nb en Numérique par Valeur, tab() en Numérique par Référence, bool en Booleen par Référence)

Variable i en Numérique

DEBUT
bool <- Vrai
i <- 0
TantQue bool et (i < nb-1)
   bool <- tab(i) < tab(i+1)
   i <- i+1
FinTantQue
FinProcédure


Exercice 11.8

Procédure Inv(nb1 en Numérique par Référence, nb2 en Numérique par Référence)

Variable tanpon en Numérique

DEBUT
tanpon ← nb1
nb1 ← nb2
nb2 ← tanpon
FinProcédure


Exercice 11.9

Procédure TriTableau(nb en Numérique par Valeur, tab() en Numérique par Référence, bool en Booleen par valeur)

Variables i, j, pos, tanpon en Numérique

DEBUT
Pour i <- 0 à nb-2
   pos <- i
   Pour j <- i + 1 à nb-1
      Si bool Alors
         Si tab(j) < tab(pos) Alors
            pos <- j
         Finsi
      Sinon
         Si tab(j) > tab(pos) Alors
            pos <- j
         Finsi
      Finsi
   j suivant
   
   tanpon <- tab(pos)
   tab(pos) <- tab(i)
   tab(i) <- tanpon
i suivant
FinProcédure

Exercice 11.10

/*Fonction renvoie oui si les elements du tableau 9 élements sont différent*/

Fonction TousDifférents(tab(8) en Numérique) en Booléen

Variables i, j en Numériques

DEBUT
Pour i <- 0 à 7
   Pour j <- i+1 à 8
      Si tab(i) = tab(j) Alors
         Renvoyer Faux
      FinSi
   j suivant
i suivant
Renvoyer Vrai
FinFonction


/*Procédure qui remplis un tab 9 * 9 élements déjà remplis ou non*/

Procédure RemplitGrille(tab(8, 8) en Numérique par Référence)

Variables i, j en Numériques

DEBUT
Pour i <- 0 à 8
   Pour j <- 0 à 8
      tab(i, j) ← Ent(Alea()*9) + 1
   j suivant
i suivant
FinProcédure

/*Vérification ligne i pour ligne j colonne*/

Fonction VerifLignes(tab(8, 8) en Numérique) en Booléen

Variables i, j en Numériques
Tableau lig(8) en Numérique

DEBUT
Pour i <- 0 à 8
   Pour j <- 0 à 8
      lig(j) <- tab(i, j)
   j suivant
   Si Non (TousDifferents(lig())) Alors
      Renvoyer Faux
   FinSi
i suivant
Renvoyer Vrai
FinFonction

/*Vérification colonne i pour ligne j colonne*/

Fonction VerifColonnes(tab(8, 8) en Numérique) en Booléen


Variables i, j en Numériques
Tableau col(8) en Numérique

DEBUT
Pour j <- 0 à 8
   Pour i <- 0 à 8
      col(i) <- tab(i, j)
   i suivant
   Si Non (TousDifferents(col())) Alors
      Renvoyer Faux
   FinSi
j suivant
Renvoyer Vrai
FinFonction



/*Vérif sous grille*/

/*Vérification colonne i pour ligne j colonne*/

Fonction VerifSousGrilles(tab(8, 8) en Numérique) en Booléen


Variables i, j, casei, casej en Numériques
Tableau ptitegrille(8) en Numérique

DEBUT
Pour casei <- 0 à 6 pas 3
   Pour casej <- 0 à 6 pas 3
      Pour i <- 0 à 2
         Pour j <- 0 à 2
         /* i*3 + j balaye 9 éléments/
            
            ptitegrille(i*3 + j) <- tab(casei + i, casej + j)
            
        /* exemple casei = 0 casej = 3 pour 2eme ptite grille haut milieu*/
            /*(0,3) (0,4) (0,5),(1,3), (1,4), (1,5), (2,3), (2,4), (2,5)*/
         
         
         j suivant
      i suivant
      Si Non (TousDifferents(ptitegrille())) Alors
         Renvoyer Faux
      FinSi
   casej suivant
casei suivant

Renvoyer Vrai
FinFonction

/*Application*/

Procédure Sudoku()

Tableau Globale tab(8, 8) en Numériques 

DEBUT

Appeler RemplitGrille(tab())

Tant Que (Non VerifSousGrilles(tab())) ou
         (Non VerifLignes(tab())) ou
         (Non VerifColonnes(tab())) 
         
   Appeler RemplitGrille(tab())
FinTantQue

FinProcédure