Para instalar directamente crear un git remoto en producción. Por ejemplo en /home/crm/git con git init --bare SugarSpanishLanguage y luego agregar el remoto como "live" en la copia de trabajo. Luego en el remoto live crear el archivo hooks/post-receive que se ejecutará con cada push a dicho remoto. 

El contenido de este hooks/post-receive sería este:

#!/bin/bash
export GIT_WORK_TREE=/home/crm/git/checkout
VERSION=$(git tag | sort -V | tail -1)
echo "DEPLOYING $VERSION"
git checkout -f $VERSION
cd /home/crm/git/checkout/
zip -r /home/crm/crm-www/upload/upgrades/langpack/SugarCRM-Spanish-$VERSION.zip *
cp manifest.php /home/crm/crm-www/upload/upgrades/langpack/SugarCRM-Spanish-$VERSION-manifest.php
rm -rf /home/crm/git/checkout/*

La ejecución de este hook genera el archivo Zip que puede ser instalado desde Module Builder.