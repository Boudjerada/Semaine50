FICHIER

Exercice 10.1

Le programme ouvre le fichier Exemple.txt sur le canal 5. Dans une boucle stoke chacun de ses enregistrements dans une varibales truc et affiche truc à l'écran et ce tant qu'il y'a des enregistrements. Par conséquent, l'intégralité du fichier est affiché à l'écran. Le fichier est ensuite ferné, le canal 5 est libéré.


Exercice 10.2

Variable i en Numérique
Variable enr en Caractère

DEBUT
Ouvrir "Exemple.txt" sur 5 en Lecture
Tantque Non EOF(5)
  LireFichier 5, enr
  Pour i <- 1 à Len(enr)
    Si Mid(enr, i, 1) = "/" Alors
      Ecrire " "
    Sinon
      Ecrire Mid(enr, i, 1)
    FinSi
  i Suivant
FinTantQue
Fermer 5
FIN

Exercice 10.3

Variables enr, Nom * 20, Prenom * 17, Tel * 10, Mail * 20 en Caractère

DEBUT

Ecrire "Entrez le nom de vôtre nouvel enregistrement : "
Lire Nom
Ecrire "Entrez le prénom de vôtre nouvel enregistrement: "
Lire Prénom
Ecrire "Entrez le téléphone de vôtre nouvel enregistrement: "
Lire Tel
Ecrire "Entrez le mail de vôtre nouvel enregistrement : "
Lire Mail

enr <- Nom & Prenom & Tel & Mail

Ouvrir "carnetAdr.txt" sur 1 pour Ajout
EcrireFichier 1, enr
Fermer 1
FIN

Exercice 10.4

Variables i, j en Numérique
Variable ins en Booléen

Structure coord
  Nom en Caractère * 20
  Prénom en Caractère * 15
  Tel en Caractère * 10
  Mail en Caractère * 20
Fin Structure

Tableau Mespotes() en coord
Variables enr, Nouveau en coord

DEBUT
Ecrire "Entrez le nom : "
Lire Nouveau.Nom
Ecrire "Entrez le prénom : "
Lire Nouveau.Prénom
Ecrire "Entrez le téléphone : "
Lire Nouveau.Tel
Ecrire "Entrez le mail :
Lire Nouveau.Mail

Ouvrir "Adresse.txt" sur 1 pour Lecture
i <- -1
ins <- Faux
Tantque Non EOF(1)
  LireFichier 1, enr
  
  i <- i + 1
  Redim MesPotes(i)
  
  Si enr.Nom > Nouveau.Nom et (Non ins) Alors  
  /*i sera incrémenté 2 fois lors de l'insertion uniquement*/
    MesPotes(i) <- Nouveau
    ins <- Vrai
    i <- i + 1
    Redim MesPotes(i)
  FinSi
  
  MesPotes(i) <- enr
FinTantQue
Fermer 1

Si (Non ins) Alors
    i ← i + 1
    Redim MesPotes(i)
    MesPotes(i) ← Nouveau
FinSi

Ouvrir "Adresse.txt" sur 1 pour Ecriture
Pour j <- 0 à i
  EcrireFichier 1, MesPotes(j)
j suivant
Fermer 1
FIN

Exercice 10.5

Variables i, j en Numérique
Variable trouv en Booléen

Structure coord
  Nom en Caractère * 20
  Prénom en Caractère * 15
  Tel en Caractère * 10
  Mail en Caractère * 20
Fin Structure

Tableau Mespotes() en coord
Variables enr en coord

Variables Ancnom, Nouvnom en Caractère * 20

DEBUT

Ecrire "Entrez le nom à modifier : "
Lire Ancnom
Ecrire "Entrez le nouveau nom : "
Lire Nouvnom

/*recopie dans tableau avec la modification*/
Ouvrir “Adresse.txt” sur 1 pour Lecture
i <- -1
trouv <- Faux
Tantque Non EOF(1)
  i <- i + 1
  Redim MesPotes(i)
  LireFichier 1, enr
  
  Si enr.Nom = Ancnom Alors
    trouv <- Vrai
    enr.Nom <- Nouvnom
  FinSi
  
  MesPotes(i) <- MonPote
FinTantQue
Fermer 1

/*Ecriture du tableau dans fichier*/
Ouvrir "Adresse.txt" sur 1 pour Ecriture
Pour j <- 0 à i
  EcrireFichier 1, MesPotes(j)
j Suivant
Fermer 1

Si trouv Alors
  Ecrire "Une ou des modifications effectuées"
Sinon
  Ecrire "Le nom saisi est inconnu du fichier, aucune modification effectuée"
FinSi
FIN

Exercice 10.6

Variables i, j , k, posenrmini en Numériques

Structure coord
Nom en Caractère * 20
Prénom en Caractère * 15
Tel en caractère * 10
Mail en Caractère * 20
Fin Structure

Tableau Mespotes() en coord
Variables enrmini en coord

DEBUT
Ouvrir "Adresse.txt" sur 1 pour Lecture
i <- -1
Tantque Non EOF(1)
  i <- i + 1
  Redim MesPotes(i)
  LireFichier 1, MesPotes(i)
FinTantQue
Fermer 1

Pour j <- 0 à i - 1
  enrmini <- MesPotes(j)
  posenrmini ← j
  
  /*On part d'un enregistrement minimum d'indice premier element du tableau a parcourir*/
  
  Pour k <- j + 1 à i
    Si MesPotes(k).Nom < enrmini.Nom Alors
      enrmini <- MesPotes(k)
      posenrmini ← k
    Finsi
  k suivant
  
  /*permutation*/
  MesPotes(posenrmini) <- MesPotes(j)
  MesPotes(j) <- enrmini
j suivant

Ouvrir "Adresse.txt" sur 1 pour Ecriture
Pour j <- 0 à i
  EcrireFichier 1, MesPotes(j)
j suivant
Fermer 1
FIN

Exercice 10.7

/*Pas de structure car pas de tableau*/

Variable enr en Caractère

DEBUT
Ouvrir "Tutu.txt" sur 1 pour Ajout
Ouvrir “Toto.txt” sur 2 pour Lecture

Tantque Non EOF(2)
  LireFichier 2, enr
  EcrireFichier 1, enr
  FinTantQue
Fermer 2

Ouvrir “Tata.txt” sur 3 pour Lecture
Tantque Non EOF(3)
  LireFichier 3, enr
  EcrireFichier 1, enr
FinTantQue

Fermer 3
Fermer 1
FIN

Exercice 10.8

Variables i, j, nb@ en Numérique

Structure coord
  Nom en Caractère * 20
  Prénom en Caractère * 15
  Tel en caractère * 10
  Mail en Caractère * 20
Fin Structure

Tableau Mespotes() en coord
Variable enr en coord

DEBUT
Ouvrir "Adresse.txt" sur 1 pour Lecture
i <- -1
Tantque Non EOF(1)
  LireFichier 1, enr
  
  nb@ <- 0  /*on rénitialise le nombre @ pour chaque enregistrement*/
  Pour i <- 1 à Len(enr.Mail)
    Si Mid(enr.Mail, i, 1) = "@" Alors
      nb@  <- nb@  + 1
    FinSi
  i suivant
  
  Si nb@ = 1 Alors
    i <- i + 1    /*i prend 1 uniquement si 1 @*/
    Redim MesPotes(i)
    MesPotes(i) ← enr
  FinSi
FinTantQue
Fermer 1

Ouvrir "Adresse.txt" sur 1 pour Ecriture
Pour j <- 0 à i
  EcrireFichier 1, MesPotes(j)
j Suivant
Fermer 1
FIN

Exercice 10.9

Variables i, j, somme, vente en Numérique

Structure Vendeur
  Nom en Caractère * 20
  Montant en Numérique
Fin Structure

Tableau MesVendeurs(), en Vendeur
Variable enr en Vendeur
Variables NomPrec , Nom  en caractère * 20

DEBUT
Ouvrir "Ventes.txt" sur 1 pour Lecture


LireFichier 1, enr
NomPrec <-enr.NOM
Somme <- enr.Montant
i<- 0
Tantque Non EOF(1) 
  LireFichier 1, enr
  Nom ← enr.NOM
  Vente ← CNum(enr.Montant)
  
  Si Nom = NomPrec Alors
    Somme ← Somme + Vente
  Sinon
    Redim MesVendeurs(i)
    MesVendeurs(i).Nom ← NomPrec
    MesVendeurs(i).Montant ← Somme
    i ← i + 1
    Somme ← Vente
    NomPrec ← Nom
  FinSi

FinTantQue
Fermer 1

/*dernier enregistrement*/
Redim MesVendeurs(i)
MesVendeurs(i).Nom ← Nom
MesVendeurs(i).Montant ← Somme

/*Affichage*/
Pour j ← 0 à i
  Ecrire MesVendeurs(j)
j suivant
FIN



