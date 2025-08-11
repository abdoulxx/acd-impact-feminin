# 📋 EXEMPLES D'UTILISATION - Navbar & Footer ACD

Ce dossier contient des exemples pratiques d'utilisation des composants navbar et footer.

## 📁 **Fichiers d'exemples**

### 🚀 **exemple-complet.html**
- **Description** : Exemple HTML complet avec navbar moderne et footer original ACD
- **Caractéristiques** :
  - ✅ Navbar moderne Bootstrap 5 avec tous les menus
  - ✅ 3 boutons d'action configurés
  - ✅ Sélecteur de langue avec drapeaux
  - ✅ Footer avec structure exacte du site ACD
  - ✅ Styles CSS intégrés directement
  - ✅ JavaScript fonctionnel
  - ✅ Responsive design complet

- **Utilisation** : Ouvrir directement dans le navigateur
- **Prérequis** : Aucun (tout est intégré)

### 🎯 **exemple-simple.html**
- **Description** : Version simplifiée pour utilisation basique
- **Caractéristiques** :
  - ✅ Navbar épurée avec menu essentiel
  - ✅ 2 boutons d'action
  - ✅ Footer simplifié mais fidèle à ACD
  - ✅ CSS externe référencé
  - ✅ Structure légère et facilement modifiable

- **Utilisation** : Base pour vos propres projets
- **Prérequis** : Fichiers CSS du package

### 📝 **layout-complet-v2.blade.php**
- **Description** : Template Laravel/Blade complet
- **Caractéristiques** :
  - ✅ Layout Blade avec sections
  - ✅ Inclusion des composants navbar et footer
  - ✅ Variables configurables
  - ✅ Support multi-langue Laravel
  - ✅ Structure prête pour projets Laravel

- **Utilisation** : Copier dans `resources/views/layouts/`
- **Prérequis** : Laravel + package navbar&footer installé

## 🔧 **Comment utiliser ces exemples**

### 1. **Test rapide**
```bash
# Ouvrir l'exemple complet directement
open exemple-complet.html
```

### 2. **Personnalisation**
```html
<!-- Modifier les liens de menu dans exemple-simple.html -->
<li><a class="nav-link" href="/votre-page">Votre menu</a></li>
```

### 3. **Intégration Laravel**
```php
<!-- Utiliser le layout Blade -->
@extends('layouts.layout-complet-v2')

@section('title', 'Ma page')

@section('content')
    <h1>Mon contenu</h1>
@endsection
```

## 🎨 **Personnalisation**

### **Couleurs**
```css
/* Changer la couleur principale */
.btn-action {
    background-color: #votre-couleur;
    border-color: #votre-couleur;
}
```

### **Logo**
```html
<!-- Remplacer le logo -->
<img src="votre-logo.png" alt="Votre marque">
```

### **Contenu footer**
```html
<!-- Modifier les informations de contact -->
<li><i class="fas fa-phone me-2"></i> Votre téléphone</li>
<li><i class="fas fa-envelope me-2"></i> votre-email@domaine.com</li>
```

## 📱 **Responsive**

Tous les exemples sont entièrement responsive :
- ✅ Mobile (320px+)
- ✅ Tablet (768px+)  
- ✅ Desktop (1024px+)
- ✅ Large screens (1200px+)

## 🚀 **Démarrage rapide**

1. **Télécharger** un exemple
2. **Modifier** les liens et contenus selon vos besoins
3. **Remplacer** le logo et les informations de contact
4. **Personnaliser** les couleurs si nécessaire
5. **Tester** sur différentes tailles d'écran

## 💡 **Conseils**

- Utilisez `exemple-complet.html` pour voir toutes les fonctionnalités
- Partez de `exemple-simple.html` pour vos projets
- Le template Blade est parfait pour les projets Laravel
- Tous les styles sont commentés pour faciliter la personnalisation

## 📞 **Support**

Pour toute question sur l'utilisation de ces exemples, consultez le README principal du package.
