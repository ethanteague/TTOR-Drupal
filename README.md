# TTOR-Drupal
Drupal site for Texas Opioid

## Deployment steps:

 - `git push origin main`
 - In A2 hosting panel, update TTOR-Drupal dir and pull
 - `rsync -avz -e 'ssh -p 7822' web/sites/default/files ttorahos@az1-ts2.a2hosting.com:~/public_html/TTOR-Drupal/web/sites/default` (see ./secrets file for password)
 - In A2 terminal cd to TTOR-Drupal directory: `composer install && drush cr && drush updb && drush cim -y`

