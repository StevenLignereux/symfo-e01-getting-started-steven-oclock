
# Challenge

## Lecture
Lire [les conventions de codage et de nommage de Symfony](https://symfony.com/doc/3.4/contributing/code/standards.html). Elles vous permettront d'avoir **une base pour l'écriture de votre code**.

## Getting started

A partir de [la documentation Symfony](https://symfony.com/doc/3.4/index.html) (que nous avons utilisée cet après-midi), **effectuer les actions ci-dessous**.

> :hand: **Toutes les infos sont contenues dans les chapitres du _Getting Started_**. Pas besoin d'aller chercher les infos sur Google pour le moment.

### Setup

- Installer une version fraîche de Symfony (Standard Edition), via Composer.

### Creating Pages

- Créer une page dont l'URL est `/ifeel/text` qui renvoie via **une simple `Response` sous forme de texte**, _"Je me sens "_ suivi du nom d'un emoji **choisi au hasard parmi** : `:grimacing: :smile: :heart_eyes: :cold_sweat: :thinking_face:`
- Créer une seconde page `'/ifeel/image'` dont la vue est **sous forme de template `Twig`** et qui affiche l'emoji **choisi au hasard** sous forme d'image (voir dossier `sources` de ce repo).

### Routing/Controllers/Templates

Depuis les données fournies (voir fichier `data.php` fourni) :

- Créer un nouveau controller, disons `ClassroomController`, dont les routes seront définies dans `routing.yml` **en YML et non via annotations** (pour essayer au moins une fois ce format).
- **Trouver un moyen d'intégrer ces données dans le contrôleur** (simple copier-coller dans chaque méthode, propriété du contrôleur utilisable dans chaque méthode via `$this`, autre...).
- **Créer une route** `/students` qui affiche la liste des étudiants dans un template Twig (avec la syntaxe HTML de votre choix pour le rendu).
- **Créer une route** `/students/{id}` qui affiche dans une vue Twig le nom et la description de l'étudiant choisi. Cet `id` doit être un entier (voir _"requirements"_) et correspondra à l'index des datas à afficher.

### Controllers

- **Gérer l'affichage d'une erreur** `404` si un id n'est pas présent dans le tableau, sur la route `/students/{id}` (pensez à vérifier si l'id demandé est bien existant dans le tableau).
- **Stocker en session** le nom du dernier étudiant affiché, puis sur la liste des étudiants afficher _"Dernier étudiant affiché : {{ lastStudent }}"_
- Créer une URL `/pdf` **qui renvoie le calendrier en PDF** présent dans ce repo **(_pas_ de lien _a href_)**.


### Templates suite

- **Générer un lien** _"Retour liste"_, de la page `/students/{id}` vers la page `/students` dans le template à l'aide du nom de la route.
- CSS : inclure un fichier CSS custom **dans le layout principal** (voir `asset()`).
  - Dans ce fichier css, **créer 2 classes** dont la propriété de background est soit blanc, soit gris clair.
  - Dans le template qui affiche la liste des étudiants (`/students`), **faire en sorte que le fond de chaque étudiant alterne de couleur une ligne sur deux** (voir `cycle()`).
  - Pour la page de détail des étudiants (`/students/{id}`), **faire en sorte que le fond de page change de couleur** à l'aide du `{% block stylesheets %}` présent dans cette page donc UNIQUEMENT sur cette page.
