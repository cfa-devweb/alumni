# Projet Alumni-cci

<p>Le projet alumni de la cci pour la classe DevWeb DE</p>


## installation

#### Step 1. Commencer par cloner ce repository en copiant cette commande dans votre workspace
`git clone https://github.com/cfa-devweb/alumni.git`

#### Step 2. Aller dans votre dossier créé via la commande précédente en utilisant 
`cd <nom du dossier>`


*PS: Ne pas oublier de recréer un fichier .env, pour ce faire copier coller les 3 ligne de commande dans le terminal windows et appuyer sur entrée*

```
copy .env.example .env

php artisan key:generate

php artisan config:cache
```

*PS: Pour les autres terminaux copier coller les 3 lignes de commande suivante et appuyer sur entrée*

```
cp .env.example .env

php artisan key:generate

php artisan config:cache
```

#### Step 3. Lancer les commandes suivantes 


`composer install`  
`npm install`


#### Step 4. Lancer un serveur local


`php artisan serve`

### help link

[Laravel Doc](https://laravel.com/) 

[bulma doc](https://bulma.io/)


# Document technique


#### creer ou recréer les tables

`php artisan migrate:fresh`

#### Lancer un serveur local

`php artisan serve`

#### Lancer la compilation du sass

`npm run watch`

#### Refresh les tables et créer ou recréer de la fausse donnée
`php artisan migrate:fresh --seed`

*PS: Pour créer de la donnée rendez vous dans le fichier `/database/seeders/DatabaseSeeder.php` et décommenter les lignes que vous souhaitez dans la méthode `run`*
> Disclaimer: Certains factory on besoin d'autre table pour fonctionner donc pour ce faire verifier le model correspondant `app/models/table.php`

## Convention de nommage
*Tout est en anglais*

- table en bdd => snake_case, au pluriel et en lowercase
- les controllers => nom de la table + Controller au singulier et PascalCase `e.g: MaTableController.php`
- les models => nom de la table au singulier en PascalCase 
- nom des clefs étrangéres => nom de la table référente au singulier + _id et en snake_case

> PS: Tout les controllers sont déja créé, faut juste les remplir.     
Les relations sont déja établie dans `app/models/MonModel`

## Bonne pratique.

#### Vous trouverez dans /public/ un dossier images

<p> Mettre toutes les images, logos dans ce dossier </p>

#### Les pages :

Créer les pages dans /ressources/views/ 

*Ps: Ne pas oublier d'ajouter le ".blade.php"*

##### Dans chacune de vos pages, ajouter le code suivant : 

```
@extends('/partials/layout')

@section('content')
    // code ici ....
@endsection
```

 *  <p>@extends('/partials/layout')    => Ajoute le head/header/footer</p>
    
 *  <p>@section('content')             => Le contenu de la page HTML</p>


