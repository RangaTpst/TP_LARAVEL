
# 📋 **README - Projet Laravel avec Docker, API et Tests**

## 🌟 **Résumé du projet**

Ce projet est une **application Laravel** intégrée avec une **API REST** sécurisée utilisant **Sanctum** pour l'authentification par token. L'application utilise **Docker** pour l'environnement de développement et de production. Elle permet de gérer des projets et des tâches pour des utilisateurs authentifiés via une API. Le tout est accompagné de **tests automatisés** pour valider les fonctionnalités essentielles.

---

## 🔧 **Technologies utilisées**

- **Laravel 12** : Framework PHP moderne
- **Docker** : Conteneurisation des services (PHP, MySQL, Apache)
- **Sanctum** : Authentification API avec tokens personnels
- **Vue.js (optionnel)** : Composant interactif pour l'interface utilisateur
- **MySQL** : Base de données pour stocker les utilisateurs, projets et tâches
- **API RESTful** : Routes pour gérer les projets et les tâches via des requêtes GET, POST, PUT, DELETE
- **PHPUnit** : Tests unitaires pour valider l'API
- **Git** : Versionnement du code source

---

## 🛠️ **Installation et configuration**

### 1. **Pré-requis**

Avant de commencer, assurez-vous que vous avez installé :

- **Docker** : [Installer Docker](https://www.docker.com/get-started)
- **Composer** : [Installer Composer](https://getcomposer.org/)
- **Node.js** et **NPM** pour la gestion des dépendances frontend : [Installer Node.js](https://nodejs.org/)

### 2. **Cloner le repository**

Clonez le repository du projet sur votre machine locale :

```bash
git clone https://github.com/ton-repository.git
cd ton-repository
```

### 3. **Configurer l'environnement Docker**

#### a. **Fichier `.env`**
Modifiez le fichier `.env` pour définir les paramètres de la base de données avec Docker :

```env
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=laravel
DB_PASSWORD=laravel
```

#### b. **Lancer les conteneurs Docker**

Dans le répertoire du projet, lancez les conteneurs Docker :

```bash
docker-compose up -d
```

Cela va démarrer les services nécessaires : **PHP**, **MySQL**, **Apache**, et la **base de données**.

#### c. **Exécuter les migrations et seeds**

Pour générer les tables nécessaires dans la base de données et peupler les tables avec des utilisateurs de test, exécutez :

```bash
docker exec -it laravel-app php artisan migrate --seed
```

---

## 🔐 **Authentification API avec Sanctum**

L'authentification est gérée via **Sanctum**, ce qui permet de créer des tokens pour l'accès aux API.

### 1. **Route de login**

Pour obtenir un **token**, envoyez une requête **POST** à `/api/login` avec les informations de connexion :

```json
{
  "email": "test@example.com",
  "password": "password"
}
```

La réponse renverra un **token** que vous pourrez utiliser pour sécuriser les autres routes.

### 2. **Routes protégées**

Les routes suivantes sont protégées par **Sanctum** et nécessitent un **token** valide dans l'en-tête `Authorization` :

- **GET** `/api/user` : Récupère l'utilisateur connecté
- **POST** `/api/logout` : Déconnecte l'utilisateur et révoque le token
- **API Projects et Tasks** : Les routes de gestion des projets et des tâches

---

## ⚙️ **Configuration de Vue.js (Optionnel)**

Si vous souhaitez ajouter une interface dynamique avec Vue.js, suivez les étapes suivantes :

1. **Installer Vue.js** via npm :
   ```bash
   docker exec -it laravel-app npm install vue@next vue-loader@next --save-dev
   ```

2. **Configurer Webpack (laravel-mix)** pour Vue.js dans le fichier `webpack.mix.js` :

```javascript
const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .vue()  // Permet d'utiliser Vue.js
   .sass('resources/sass/app.scss', 'public/css');
```

3. **Créer un composant Vue** dans `resources/js/components/ExampleComponent.vue`.

4. **Afficher le composant dans Blade** en l'ajoutant dans une vue Laravel `home.blade.php`.

---

## 🧪 **Tests API avec PHPUnit**

Les tests sont écrits en **PHPUnit** pour vérifier les fonctionnalités suivantes :

1. **Test de création d'un projet** : Vérifie la création d'un projet via l'API.
2. **Test de récupération des projets** : Vérifie que les projets sont retournés correctement via l'API.
3. **Test de mise à jour d'un projet** : Vérifie que la mise à jour d'un projet fonctionne bien.
4. **Test de suppression d'un projet** : Vérifie que la suppression d'un projet fonctionne.

### Lancer les tests :

Pour exécuter les tests PHPUnit dans le conteneur Docker, utilisez cette commande :

```bash
docker exec -it laravel-app php artisan test
```

---

## 📝 **Récapitulatif des routes API**

| Méthode | Route                | Description |
|---------|----------------------|-------------|
| POST    | /api/login           | Authentification |
| GET     | /api/user            | Récupérer les informations de l'utilisateur connecté |
| POST    | /api/logout          | Déconnexion |
| GET     | /api/projects        | Liste des projets |
| POST    | /api/projects        | Créer un projet |
| GET     | /api/projects/{id}   | Détails d'un projet |
| PUT     | /api/projects/{id}   | Mettre à jour un projet |
| DELETE  | /api/projects/{id}   | Supprimer un projet |
| GET     | /api/tasks           | Liste des tâches |
| POST    | /api/tasks           | Créer une tâche |
| GET     | /api/tasks/{id}      | Détails d'une tâche |
| PUT     | /api/tasks/{id}      | Mettre à jour une tâche |
| DELETE  | /api/tasks/{id}      | Supprimer une tâche |

---

## 🏁 **Conclusion**

Ce projet implémente une **API sécurisée avec Sanctum** et un **système de gestion de projets et tâches**. Il est entièrement configuré avec **Docker**, permettant un développement rapide dans un environnement conteneurisé. Tous les tests sont passés avec **PHPUnit**, garantissant la robustesse de l'application.

Si vous avez des questions ou besoin de plus d'informations, n'hésitez pas à me contacter !
