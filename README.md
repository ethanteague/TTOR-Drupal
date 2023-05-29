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
  - [ ] Banner hover bubbles
  - [ ] Link in how to stay safe on about opioids pages
  - [ ] Link in headers of fent pages
  - [ ] Google analytics integration
  - [ ] Install https://www.drupal.org/project/same_page_preview
  - [ ] Consider https://www.drupal.org/project/gin (issue with paragraphs overflow on node form)

