# TTOR-Drupal
Drupal site for Texas Opioid

## Deployment steps:

 - `ddev drush sql:dump > db.sql`
 - `platform sql < db.sql`
 - `platform mount:upload --mount web/sites/default/files --source ~/workspace/ttor-drupal/web/sites/default/files`
 - `git push -f && git push platform main -f`
 - `platform ssh`
 - `drush uli`

 ## TODO
  - [ ] Add google acct id (`GTM-K75GDXG`) to `Web property ids` input, here: `admin/config/services/google-analytics`
  - [ ] Change `editor` password from `12345`

