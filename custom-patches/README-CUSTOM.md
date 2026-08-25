# Customisations du fork Snipe-IT

Ce répertoire contient les modifications locales appliquées par-dessus le dépôt upstream.

## Principe

`master` du fork reste une branche de travail classique. Les modifications persistantes sont stockées sous forme de *patchs* dans `custom-patches/`. Après chaque synchronisation avec `upstream/master`, on réinitialise une branche `custom` et on réapplique ces patchs.

## Patchs

| Fichier | Description |
|---------|-------------|
| `001-printall.patch` | Ajoute la fonctionnalité d'impression de tous les utilisateurs (`printall`) : route, contrôleur, vue, bouton. |
| `002-label.patch` | Personnalisation de l'étiquette matériel (`resources/views/hardware/labels.blade.php`). |
| `003-hide-components.patch` | Masque la gestion des composants dans le menu et les tableaux (`default.blade.php`, `bootstrap-table.blade.php`). |

## Utilisation

Depuis la racine du projet :

```powershell
.\custom-patches\resync.ps1
```

Le script :
1. Récupère les dernières modifications de `upstream`.
2. Crée/reset une branche `custom` sur `upstream/master`.
3. Applique chaque patch et s'arrête en cas de conflit.

## Après un resync

```bash
git checkout custom
# exécuter les migrations / clear cache
php artisan migrate
php artisan optimize:clear
```
