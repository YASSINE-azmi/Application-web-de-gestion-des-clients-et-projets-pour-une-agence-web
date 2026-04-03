# AgencyTrack

**Application web de gestion des clients et projets pour une agence web**

## Présentation
AgencyTrack est une application web conçue pour permettre à une agence web de centraliser la gestion de ses clients, de ses projets et du suivi d’avancement des prestations.  
Ce projet est proposé dans le cadre d’un **stage de 4 semaines** et s’inscrit dans une démarche de mise en pratique des compétences en développement web, base de données, UI/UX et gestion de version.

## Contexte du projet
- **Étudiant :** Yassine Azmi  
- **Formation :** 1re année – Conception et développement de logiciels  
- **Établissement :** École Supérieure de Technologie d’Agadir  
- **Entreprise visée :** Creative Internet Solutions – Agadir  
- **Période du stage :** du 29/06/2026 au 26/07/2026  

Ce dépôt a pour objectif de regrouper l’ensemble des éléments liés au développement du projet : conception, structure fonctionnelle, progression technique et suivi de l’avancement.

## Objectifs
- Mettre en pratique les acquis en développement web front-end et back-end.
- Manipuler une base de données MySQL dans un cas d’usage concret.
- Concevoir une interface claire, responsive et adaptée à un besoin professionnel.
- Préparer une maquette UI/UX sur Figma afin d’améliorer l’ergonomie et l’expérience utilisateur.
- Organiser le travail de stage avec un suivi d’avancement structuré via GitHub.

## Fonctionnalités principales

### Authentification
- Connexion sécurisée pour l’administrateur de l’application.

### Gestion des clients
- Ajouter un client
- Modifier les informations d’un client
- Supprimer un client
- Consulter la liste des clients

### Gestion des projets
- Créer un projet
- Associer un projet à un client
- Définir son statut d’avancement
- Gérer les dates et la description

### Tableau de bord
- Affichage du nombre total de clients
- Affichage du nombre de projets en cours
- Affichage du nombre de projets terminés

### Recherche et filtrage
- Recherche simple d’un client
- Filtrage des projets selon leur statut

## Évolutions possibles
- Export PDF de certaines fiches ou listes
- Statistiques avancées sur l’avancement des projets
- Notifications ou rappels de dates

## Technologies retenues

| Couche | Technologies |
|---|---|
| Front-end | HTML, CSS, JavaScript |
| UI/UX | Figma |
| Back-end | PHP / Laravel |
| Base de données | MySQL |
| Outils | Git, GitHub, Visual Studio Code |

## Architecture générale

```text
Administrateur
   ↓
Interface web
HTML / CSS / JavaScript
   ↓
Application métier
PHP / Laravel
   ↓
Base de données
MySQL