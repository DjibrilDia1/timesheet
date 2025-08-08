# Timesheet - Gestion des utilisateurs Laravel

Ce projet est une application Laravel permettant la gestion des utilisateurs avec deux rôles distincts : **employé** et **responsable**.  
Chaque type d'utilisateur possède son propre espace personnel (dashboard).

## Fonctionnalités principales

- Inscription et authentification sécurisées
- Rôles : employé ou responsable
- Redirection automatique vers le dashboard adapté après connexion
- Gestion de profil utilisateur
- Sécurité CSRF et validation des données

## Structure des dashboards

- `/dashboard/employe` : Espace employé
- `/dashboard/responsable` : Espace responsable

## Installation

1. Cloner le dépôt :
   ```bash
   git clone <repo-url>
   cd timesheet
   ```
2. Installer les dépendances :
   ```bash
   composer install
   npm install && npm run dev
   ```
3. Configurer l’environnement :
   - Copier `.env.example` en `.env`
   - Adapter les variables de connexion à la base de données
   - Générer la clé d’application :
     ```bash
     php artisan key:generate
     ```
4. Lancer les migrations :
   ```bash
   php artisan migrate
   ```
5. Démarrer le serveur :
   ```bash
   php artisan serve
   ```

## Utilisation

- Accéder à `/register` pour créer un compte.
- L’utilisateur est redirigé automatiquement vers le dashboard correspondant à son rôle après connexion.

## Personnalisation

Pour modifier la logique de rôle ou les dashboards, voir :
- `app/Http/Controllers/Auth/RegisteredUserController.php`
- `routes/web.php`
- `resources/views/dashboard-employe.blade.php`
- `resources/views/dashboard-responsable.blade.php`

## Documentation Laravel

Pour plus d’informations, consultez la [documentation Laravel](https://laravel.com/docs).

---

Projet basé sur [Laravel](https://laravel.com) – open-source sous licence
