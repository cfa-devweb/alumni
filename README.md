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

#### creer ou recréer les tables

`php artisan migrate:fresh`

*PS: pour créer de la donnée rendez vous dans le fichier `/database/seeders/DatabaseSeeder.php` et décommenter les lignes que vous souhaitez dans la méthode `run`*
> Disclaimer: Certains factory on besoin d'autre table pour fonctionner donc pour ce faire verifier le model correspondant `app/models/table.php`

## Convention de nommage
*Tout est en anglais*

- table en bdd = snake_case et au pluriel
- les controllers = nom de la table + Controller au singulier et CamelCase `e.g: MaTableController.php`

*PS: Tout les controllers sont déja créer, faut juste les remplir.     
Les relations sont déja faite dans `app/models/monModel`
*

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


