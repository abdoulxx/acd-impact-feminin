# 📋 DOCUMENTATION - Navbar & Footer ACD Corporate Services

## 🎯 **Vue d'ensemble**

Ce package contient tous les composants nécessaires pour réutiliser la navbar et le footer ACD Corporate Services dans d'autres projets Laravel ou frameworks similaires.

**⚡ Version mise à jour** : Le footer utilise maintenant la structure exacte du site principal ACD Corporate Services en production.

## 📁 **Structure du dossier**

```
navbar&footer/
├── components/
│   ├── navbar.blade.php          # Composant navbar moderne (Bootstrap 5)
│   └── footer.blade.php          # Composant footer (structure originale ACD)
├── assets/
│   ├── css/
│   │   ├── modern-navbar.css     # Styles CSS navbar moderne
│   │   └── modern-footer.css     # Styles CSS footer (legacy - compatible)
│   ├── js/
│   │   └── modern-footer.js      # JavaScript footer
│   └── images/                   # Dossier pour les assets (logos, drapeaux, etc.)
├── examples/                     # Exemples d'utilisation
├── README.md                     # Cette documentation
└── CHANGELOG.md                  # Historique des versions
```

## 🚀 **Installation rapide**

### 1. Copier les fichiers
```bash
# Copier le dossier navbar&footer dans votre projet
cp -r navbar&footer/ /votre-projet/resources/
```

### 2. Inclure les styles CSS
```html
<!-- Dans votre layout principal -->
<head>
    <!-- Bootstrap 5 CSS (requis pour navbar) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- CSS existant de votre projet (requis pour footer) -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    
    <!-- CSS de la navbar moderne -->
    <link rel="stylesheet" href="{{ asset('navbar&footer/assets/css/modern-navbar.css') }}">
    
    <!-- Font Awesome pour les icônes -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome/css/font-awesome.min.css') }}">
</head>
```

### 3. Inclure les scripts
```html
<!-- Avant la fermeture de </body> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('navbar&footer/assets/js/modern-footer.js') }}"></script>
```

## 📝 **Utilisation de base**

### Navbar + Footer complet
```blade
{{-- Navbar --}}
@include('navbar&footer.components.navbar')

{{-- Votre contenu --}}
<main>
    @yield('content')
</main>

{{-- Footer --}}
@include('navbar&footer.components.footer')
```

### Navbar simple (utilisation par défaut)
```blade
@include('navbar&footer.components.navbar')
```

### Footer simple (utilisation par défaut)
```blade
@include('navbar&footer.components.footer')
```

### Configuration avancée
```blade
{{-- Navbar personnalisée --}}
@include('navbar&footer.components.navbar', [
    'logoSrc' => asset('images/mon-logo.png'),
    'actionButtons' => [
        [
            'label' => 'Mon Bouton',
            'url' => 'https://monsite.com',
            'target' => '_blank',
            'class' => 'btn-candidature'
        ]
    ]
])

{{-- Footer personnalisé --}}
@include('navbar&footer.components.footer', [
    'contactTitle' => 'Contactez-nous',
    'address1' => 'Mon adresse principale',
    'phone' => '+33 1 23 45 67 89',
    'email' => 'contact@monsite.com',
    'companyName' => 'Mon Entreprise',
    'copyrightYear' => '2025'
])
```

## ⚙️ **Options de configuration**

### 🎨 **Logo et branding**
| Option | Type | Défaut | Description |
|--------|------|---------|-------------|
| `logoSrc` | string | `asset('assets/images/logo/1.png')` | Source de l'image du logo |
| `logoLink` | string | `/` | URL de redirection du logo |
| `logoTitle` | string | `ACD Corporate Services` | Titre du logo (attribut title) |
| `logoAlt` | string | `ACD Logo` | Texte alternatif du logo |

### 🔘 **Boutons d'action**
```php
'actionButtons' => [
    [
        'label' => 'Texte du bouton',      // Requis
        'url' => 'https://example.com',    // Requis
        'target' => '_blank',              // Optionnel
        'class' => 'btn-candidature'       // Optionnel (classes CSS disponibles)
    ]
]
```

**Classes CSS disponibles :**
- `btn-candidature` (rouge, style par défaut)
- `btn-impact-feminin` (rouge, même style)
- `btn-rencontre-2026` (rouge, même style)

### 📋 **Menu de navigation**
```php
// Éléments du menu "À propos"
'aboutItems' => [
    ['label' => 'Notre équipe', 'url' => '/equipe'],
    ['label' => 'Notre histoire', 'url' => '/histoire']
],

// Éléments du menu "Identité"
'identityItems' => [
    ['label' => 'Nos services', 'url' => '/services'],
    ['label' => 'Nos valeurs', 'url' => '/valeurs']
],

// Éléments du menu "Actualités"
'newsItems' => [
    ['label' => 'Blog', 'url' => '/blog'],
    ['label' => 'Événements', 'url' => '/events']
]
```

### 🌍 **Sélecteur de langue (Navbar)**
```php
'showLanguageSelector' => true,  // true/false pour afficher/masquer
'defaultLanguage' => 'Français',
'languages' => [
    [
        'name' => 'Français',
        'url' => '/fr',
        'flag' => asset('images/flags/fr-flag.png')
    ],
    [
        'name' => 'English',
        'url' => '/en',
        'flag' => asset('images/flags/en-flag.png')
    ]
]
```

### 🏢 **Utilisation Footer**

#### **Structure ACD Corporate Services**
Le footer utilise la structure exacte du site principal ACD Corporate Services. Il contient :

- **Section Contact (col-md-7)** : Adresses et coordonnées
- **Section Menu (col-md-3)** : Navigation du site  
- **Section Réseaux Sociaux (col-md-2)** : Liens vers les réseaux sociaux
- **Copyright** : Logo et informations de copyright

#### **Utilisation simple**
```php
<!-- Dans votre layout Blade -->
@include('navbar&footer.components.footer')
```

#### **Classes CSS utilisées**
Le footer utilise les classes CSS existantes d'ACD Corporate Services :
- `background-image82` : Arrière-plan avec dégradé
- `triangle-down-center` : Triangle décoratif  
- `graylink7` : Style des liens
- `scrollup` : Bouton retour en haut

#### **Langues supportées**
Le footer est compatible avec le système de langues Laravel :
- `{{ __("footer.menu1.titre") }}` - Titre menu navigation
- `{{ __("footer.menu2.titre") }}` - Titre réseaux sociaux  
- `{{ __("footer.menu3.titre") }}` - Titre contact
- `{{ __("footer.copyright.titre") }}` - Texte copyright
```php
'socialTitle' => 'Suivez-nous',
'socialNetworks' => [
    [
        'name' => 'Facebook',
        'url' => 'https://facebook.com/monentreprise',
        'icon' => 'fab fa-facebook'
    ],
    [
        'name' => 'LinkedIn',
        'url' => 'https://linkedin.com/company/monentreprise',
        'icon' => 'fab fa-linkedin'
    ]
]
```

#### **©️ Copyright et branding**
```php
'footerLogo' => asset('images/footer-logo.png'),  // Logo du footer
'companyName' => 'Mon Entreprise',               // Nom de l'entreprise
'companyUrl' => 'https://monsite.com',           // URL de l'entreprise
'copyrightYear' => '2025',                       // Année de copyright
'copyrightText' => 'Tous droits réservés',      // Texte de copyright
'showScrollTop' => true                          // Afficher le bouton scroll-to-top
```

## 🎨 **Personnalisation CSS**

### Couleurs principales
```css
/* Modifier les couleurs des boutons */
.btn-candidature {
    background: #YOUR_COLOR !important;
    border: 2px solid #YOUR_COLOR;
}

/* Couleur de survol des liens */
.nav-link:hover {
    color: #YOUR_COLOR !important;
}
```

### Responsive personnalisé
```css
/* Modifier le point de rupture mobile */
@media (max-width: 768px) {
    .modern-navbar-acd .navbar-brand img {
        height: 35px !important;
    }
}
```

## 📱 **Fonctionnalités responsive**

- ✅ **Menu burger automatique** sur mobile (< 992px)
- ✅ **Logo adaptatif** (50px desktop, 40px mobile)
- ✅ **Menu dropdown mobile** avec positionnement parfait
- ✅ **Boutons empilés** en mobile
- ✅ **Navigation tactile** optimisée

## 🔧 **Dépendances requises**

- **Bootstrap 5.3.0+** (CSS + JS)
- **Laravel 8+** (pour les helpers Blade)
- **Police Roboto** (incluse via Google Fonts)

## 🎯 **Exemples complets**

### Site e-commerce
```blade
@include('navbar&footer.components.navbar', [
    'logoSrc' => asset('images/shop-logo.png'),
    'actionButtons' => [
        [
            'label' => 'Mon Panier',
            'url' => route('cart'),
            'class' => 'btn-candidature'
        ],
        [
            'label' => 'Connexion',
            'url' => route('login'),
            'class' => 'btn-impact-feminin'
        ]
    ],
    'showLanguageSelector' => false
])
```

### Site institutionnel
```blade
@include('navbar&footer.components.navbar', [
    'menuHome' => 'Accueil',
    'menuAbout' => 'L\'entreprise',
    'menuIdentity' => 'Nos solutions',
    'menuNews' => 'Actualités',
    'actionButtons' => [
        [
            'label' => 'Nous contacter',
            'url' => route('contact'),
            'class' => 'btn-candidature'
        ]
    ]
])
```

## 🐛 **Problèmes courants**

### Le menu burger ne s'affiche pas
- ✅ Vérifiez que Bootstrap 5 JS est inclus
- ✅ Vérifiez que la classe `.modern-navbar-acd` est présente

### Les styles ne s'appliquent pas
- ✅ Vérifiez l'ordre d'inclusion CSS (Bootstrap avant modern-navbar.css)
- ✅ Vérifiez le chemin vers modern-navbar.css

### Les boutons ne s'affichent pas correctement
- ✅ Vérifiez la structure du tableau `actionButtons`
- ✅ Vérifiez que les classes CSS existent

## 📞 **Support**

Pour toute question ou problème :
1. Vérifiez cette documentation
2. Consultez les exemples fournis
3. Vérifiez la console du navigateur pour les erreurs

## 📄 **Licence**

Ce composant est propriété d'ACD Corporate Services.
Utilisation autorisée pour les projets internes uniquement.

---

**Version :** 1.0.0  
**Dernière mise à jour :** Août 2025  
**Compatibilité :** Bootstrap 5, Laravel 8+
