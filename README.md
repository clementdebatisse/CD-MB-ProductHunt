# Projet Simplon

<strong>Product Hunt – The best new products in tech.</strong>

Pas forcément très connu, surtout en France !!Product Hunt permet à toute la communauté web de participer à une notation globale de n'importe quel produit ou logiciel. Peut-on faire mieux et plus simple ?

📜 Scénarios utilisateurs minimum requis

Compte

En tant qu'utilisateur non connecté, je dois me connecter en saisissant seulement mon pseudo. Il n'y a pas de mot de passe.Si le pseudo n'est pas connu dans la base de données, un nouvel utilisateur est créé. Si le pseudo est connu dans la base de données, alors je suis connecté sur le profil.

Liste des produits

En tant qu'utilisateur connecté, j'accède à la liste des produits triées  par nouveautés ou par popularité

En tant qu'utilisateur connecté, je clique sur le menu "Explorer" pour filter les produits par catégorie

Fonction Up

En tant qu'utilisateur, je peux "up" un produit pour incrémenter son compteur ( identique à un like ). Cela lui donne des chances supplémentaires d'apparaître en haut de la page d'accueil.

Recherche

En tant qu'utilisateur je peux rechercher des produits par nom ou description

⚙ Complexité minimale requise

Backend

Il doit y avoir une base de données avec au moins une table products et categories

Une relation doit exister en MySQL entre productset categories

Prenez soit de bien structurer votre application PHP !

Frontend

Le site doit être entièrement responsive

Au format mobile certains éléments disparaissent, changent de taille ou encore de position. Vous devez montrer que vous savez gérer des règles média CSS en fonction de la taille de l'appareil utilisé. Par exemple menu est différent sur mobile

💡 Suggestions

La modale d'information sur un produit s'ouvre en AJAX pour optimiser la vitesse de chargement de la liste des produits.

Dépôt de commentaires sur une fiche produit
