# Skills Heroes Voorronde

Ik heb gekozen om met Laravel en tailwind te werken omdat ik daar het meeste mee werk en omdat ik mij comfortabel voel met deze technologieen. 

Ik heb wat moeite gehad met het importen van de database en tailwind wilde niet meewerken op sommige plekken

De website is bijna geheel responsive, behalve de nav bar.

Bijna alle knoppen in de nav bar lijden ergens naartoe.

## Opstarten applicatie

Voor het opstarten van de applicatie is laravel sail nodig.

Je opent een terminal in dream-destinations en dan run je de volgende commands:

- ./vendor/bin/sail up -d           Voor het opstarten van de docker containers
- ./vendor/bin/sail npm install     Voor het installeeren van de benodigde node modules
- ./vendor/bin/sail artisan migrate         Voor het instellen van de database
- ./vendor/bin/sail composer run dev    voor het opstarten van de vite development server

De website komt dan te staan op localhost
Phpmyadmin kan worden bekeken op localhost:8081


De inloggegevens van de lokale phpmyadmin zijn:
 username: root
 wachtwoord: password