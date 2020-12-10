LECTURE/ECRITURE

Exercice 2.1

l'ecran affiche
231
462

Exercice 2.2

Variable nb, nbcar en Numériques

Debut
Ecrire "Entrer un nombre"
Lire nb
nbcar <- nb * nb
Ecrire "Son carré est de : ",nbcar
Fin

Exercice 2.3

Variable prenom en Caractere

DEBUT
Ecrire "Quel est vôtre prénom"
Lire prenom
Ecrire "Bonjour ", prenom, " !" 
FIN

Exercice 2.4

Variable nbarticles, prixHT, TVA en Numérique, prixTTC

DEBUT
Ecrire "Quel est le prix de vôtre article :"
Lire prixHT
Ecrire "Combien d'articles :"
LIRE nbarticles
Ecrire "Quel taux de tva :"
Lire TVA
prixTTC<- nbarticles * (prixHT + ((prixHT * TVA) / 100))
Ecrire "Le prix total TTC est de ", prixTTC
FIN