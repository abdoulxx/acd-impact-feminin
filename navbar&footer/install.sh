#!/bin/bash

# ==================================================
# SCRIPT D'INSTALLATION - Navbar & Footer ACD
# ==================================================
# Automatise l'installation dans un nouveau projet
# ==================================================

echo "🚀 Installation de la Navbar & Footer ACD Corporate Services"
echo "============================================================="

# Vérification de l'environnement
if [ ! -f "artisan" ]; then
    echo "❌ Erreur: Ce script doit être exécuté à la racine d'un projet Laravel"
    exit 1
fi

echo "✅ Projet Laravel détecté"

# Création des dossiers si nécessaire
echo "📁 Création de la structure de dossiers..."
mkdir -p resources/views/components
mkdir -p public/assets/css
mkdir -p public/assets/images/flags

# Copie des fichiers
echo "📋 Copie des composants..."
cp navbar\&footer/components/navbar.blade.php resources/views/components/
cp navbar\&footer/assets/css/modern-navbar.css public/assets/css/

echo "✅ Fichiers copiés avec succès !"

# Instructions pour l'utilisateur
echo ""
echo "🎯 INSTALLATION TERMINÉE !"
echo "=========================="
echo ""
echo "📝 Prochaines étapes :"
echo "1. Ajoutez Bootstrap 5 à votre layout :"
echo "   <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">"
echo ""
echo "2. Ajoutez le CSS de la navbar :"
echo "   <link rel=\"stylesheet\" href=\"{{ asset('assets/css/modern-navbar.css') }}\">"
echo ""
echo "3. Ajoutez Bootstrap JS avant </body> :"
echo "   <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>"
echo ""
echo "4. Utilisez la navbar dans votre layout :"
echo "   @include('components.navbar')"
echo ""
echo "📖 Consultez README.md pour toutes les options de configuration"
echo ""
echo "🎉 Votre navbar ACD est prête à l'emploi !"
