WordPress Tech Talk 19 juni: Advanced Custom Fields
==================

Dit is het voorbeeld project van de WordPress Tech Talk van 19 juni 2014 over [Advanced Custom Fields](http://www.advancedcustomfields.com).

## Installeren

De snelste manier om dit project up-and-running te krijgen is door een database lokaal aan te maken. 

De wp-config goed te zetten qua database credentials (indien nodig)

Daarna het [WP-CLI](http://wp-cli.org/) command `wp server` te gebruiken. De site is dan te zien op http://localhost:8080 

## Theme

Als basis is het starter theme [Roots](http://roots.io/starter-theme/) gebruikt.

## Field Groups

De Advanced Custom Fields field groups zijn te vinden in `wp-content/themes/roots/field-groups/`

## Repeater Field

Het [Repeater Field Field](http://www.advancedcustomfields.com/add-ons/repeater-field/) is een betaalde add-on. Voor 25 Australische Dollars heb je een super krachtige extensie waarmee je snel herhalende velden en veldgroepen kan maken. 

Deze plugin zul je zelf moeten installeren om het Repeater voorbeeld te kunnen bekijken in de WordPress backend.

## Advanced Custom Fields WP-CLI

Het `wp acf` command voor WP-CLI komt uit de [advanced-custom-fields-wp-cli plugin](https://github.com/hoppinger/advanced-custom-fields-wpcli) De code is in dit project ook toegevoegd, maar je kunt op de github pagina kijken hoe de code eruit ziet. Mocht je verbetering of suggesties hebben: het is open source dus doe een pull request! :)

## Scaffolding

Na de talk kwam de vraag over Post Types en Taxonomies. Wij gebruiken voor het aanmaken altijd het `wp scaffold` command. Installeer WP-CLI en je hebt direct beschikking over dit handige command om snel en consistente code te genereren.

Naar de STDOUT:
```
wp scaffold post-type project
```

Direct in je theme wegschrijven:
```
wp scaffold post-type project --theme
```

## Field Snitch

[Field Snitch](https://wordpress.org/plugins/advanced-custom-fields-field-snitch/) is een super handige devtool om snel de veldnamen uit te vinden. `2x ESC` drukken in de backend en je ziet de ACF veldnamen.


## Tot de volgende keer!
