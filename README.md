# Projet Alumni-cci

<p>Le projet alumni de la cci pour la classe DevWeb DE</p>


## installation

#### Step 1. Commencer par cloner ce repository en copiant cette commande
`git clone https://github.com/cfa-devweb/alumni.git`

#### Step 2. Allez dans votre dossier crée via la commande précédente en utilisant 
`cd <nom du dossier>`


*PS: Ne pas oublier de recréer un fichier .env, pour ce faire copier coller les 3 ligne de commande dans le terminal windows et appuyer sur entrée*

```
copy .env.example .env

php artisan key:generate

php artisan config:cache
```

*PS: Pour les autres terminaux copier coller les 3 ligne de commande suivante et appuyer sur entrée*

```
cp .env.example .env

php artisan key:generate

php artisan config:cache
```

#### Step 3. Lancer les commandes suivantes dans l'ordre


`composer install`  
`npm install`


#### Step 4. Lancer un serveur local


`php artisan serve`

### help link

[Laravel Doc](https://laravel.com/) 

[bulma doc](https://bulma.io/)


## Document technique

#### Refresh les tables et recréer de la fausse donnée
`php artisan migrate:fresh --seed`

#### Lancer un serveur local

`php artisan serve`

#### Lancer la compilation du sass

`npm run watch`


