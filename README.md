# NxHost

Ce projet est une application Laravel développée dans le cadre de mon projet de fin d'étude. Il permet de d'obtenir un hébergement de serveur de jeu.

## 🛠 Fonctionnalités principales

- Authentification des utilisateurs
- Système de paiement, une fois
- Visualisation de facture
- Ticket de l'utilisateur

---

## 🚀 Installation rapide

### 1. Cloner le dépôt

```bash
git clone https://github.com/NexHostFR/nxhost.git
cd nxhost

composer install

composer install
npm install && npm run build

cp .env.example .env

php artisan key:generate
```

Il vous faudras ensuite configuré ces ligne dans le .env avec des information de votre base de donnée afin de connecter l'application a votre base de donée.

```bash
DB_CONNECTION=mysql
DB_HOST={ip_de_connexion}
DB_PORT=3306
DB_DATABASE=nxhost
DB_USERNAME={nom_utilisateur}
DB_PASSWORD={mot_de_passe_utilisateur}
```

Ensuite nous pouvons continue l'installation et lancé le projet

```bash
php artisan migrate --seed

php artisan serve
```