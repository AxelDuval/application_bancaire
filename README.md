Une application de gestion de comptes bancaires

Spécifications fonctionnelles :

- Sur l’accueil du site, l’utilisateur voit par défaut tous ses comptes bancaires

- A son arrivée sur l’accueil un layer s’affiche par dessus l’ensemble de la page et lui rappelle les
règles de sécurité essentielles sur un site internet. Les règles de sécurité sont stockées dans un
fichier et récupérées par requête HTTP (AJAX).

- Sur une page de statistiques l’utilisateur accède à des informations bancaires comme les taux
d’emprunt, le cours de la bourse, ect… Ces informations sont récupérées depuis un fichier via
requête HTTP et présentées sous forme de tableau. Ces informations sont stockées dans un fichier
au format JSON.

- Une page de blog, qui affichera des articles récupérés depuis l’API suivante : https://ocjswebsrv.herokuapp.com/api/articles

- Sur une page dédiée, un formulaire lui permet de créer un nouveau compte bancaire avec
minimum un type de compte (courant, livretA, PEL etc...) et une somme par défaut supérieure à 50
euros

- Pour chaque compte l’utilisateur peut cliquer sur un lien qui par la suite lui permettra de supprimer
le compte

- Pour chaque compte, l’utilisateur peut, via un formulaire faire un dépôt d’argent

- Pour chaque compte, l’utilisateur peut, via un formulaire faire un retrait d’argent

- Sur une page dédiée, à l’aide d’un formulaire, l’utilisateur peut réaliser un virement d’un compte à
un autre. Il peut donc sélectionner un compte A à débiter, indiquer un montant et sélectionner le
compte B à créditer. Il ne peut sélectionner que ses propres comptes.

Spécifications techniques :
- HTML5
- CSS3
- Framework Boostrap4
- Base Boilerplate
- JavaScript avec respect des normes ES6
