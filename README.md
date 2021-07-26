# Projet Alumni-cci

<p>Le projet alumni de la cci pour la classe DevWeb DE</p>


## installation

#### Step 1. Commencer par cloner ce repository en copiant cette commande
`git clone https://github.com/cfa-devweb/alumni.git`

#### Step 2. Allez dans votre dossier creer via la commande précédente
`cd <nom du dossier>`

#### Step 3. Installer laravel ui en copiant la commande ci dessous
`composer require laravel/ui`

#### Step 4. Desinstalle bootstrap
`npm uninstall bootstrap`

#### Step 5. Install bulma

`npm install bulma` 

*PS: Ne pas oublier de recréer un fichier .env, pour ce faire copier coller les 3 ligne de commande dans le terminal et appuyer sur entrée*

```
cp .env.example .env

php artisan key:generate

php artisan config:cache
```

#### Step 6. Lancer les commandes suivantes dans l'ordre

`composer install` 
`npm install`

#### Step 7. Lancer un serveur local

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


