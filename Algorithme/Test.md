TEST

Exercice 3.1

Variables nb

DEBUT
Ecrire "Entrer un nombre :"
Lire nb
if nb < 0 Alors
    Ecrire "Ce nombre est négatif"
Sinon 
    Ecrire "Ce nombre est positif"
Finsi
FIN


Exercice 3.2

Variables nb1, nb2 en Entier

DEBUT
Ecrire "Entrez deux nombres : "
Lire nb1, nb2
Si (nb1 > 0 ET nb2 > 0) OU (nb1 < 0 ET nb2 < 0) Alors
  Ecrire "Le produit de ces 2 nombres est positif"
Sinon
  Ecrire "Le produit de ces 2 nombres est négatif"
Finsi
FIN

Exercice 3.3

Variables nom1, nom2, nom3 en Caractère

DEBUT
Ecrire "Entrez 3 noms : "
Lire nom1, nom2, nom3
Si (nom1 < nom2) ET (nom2 < nom3) Alors
  Ecrire "Ces noms sont classés dans l'ordre alphabétique selon code ASCII"
Sinon
  Ecrire "Ces noms ne sont pas classés dans l'ordre alphabétique selon code  
            ASCII"
Finsi
Fin


Exercice 3.4

Variable nb en Numerique

DEBUT
Ecrire "Entrez un nombre : "
Lire nb
Si nb > 0 Alors
  Ecrire "Ce nombre est positif"
SinonSi n = 0 Alors
  Ecrire "Ce nombre est nul"
Sinon
  Ecrire "Ce nombre est négatif"
Finsi
FIN



Exercice 3.5

Variables nb1, nb2 en Numériques

DEBUT
Ecrire "Entrez deux nombres : "
Lire nb1, nb2

Si (m < 0 ET n < 0) OU (m > 0 ET n > 0) Alors
  Ecrire "Le produit est  positif"
SinonSi (nb1 = 0) OU (nb2 = 0) Alors
  Ecrire "Le produit est est nul"
Sinon
  Ecrire "Le produit est négatif"
Finsi
FIN


Exercice 3.6

Variable age en Numérique

DEBUT
Ecrire "Entrez l’âge de l'enfant : "
Lire age
Si age >= 12 Alors
  Ecrire "Catégorie Cadet"
SinonSi age >= 10 Alors
  Ecrire "Catégorie Minime"
SinonSi age >= 8 Alors
  Ecrire "Catégorie Pupille"
SinonSi age >= 6 Alors
  Ecrire "Catégorie Poussin"
Sinon
  Ecrire "Hors catégorie"
Finsi
FIN

Cette algorithme peur être écrit de plusieurs manières selon l'ordre des tests. On pourrait partir par exemple d'un test avec < 6. L'ordre des tests est alors inversé.