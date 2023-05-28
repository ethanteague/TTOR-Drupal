# TTOR-Drupal
Drupal site for Texas Opioid

## Deployment steps:

 - `ddev drush sql:dump > db.sql`
 - `platform sql < db.sql`
 - `git push -f && git push platform main -f`
 - `platform ssh`
 - `drush uli`
