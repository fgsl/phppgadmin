<?php
/**
 * Apigator DB
 * @author Flávio Gomes da Silva Lisboa <flavio.lisboa@serpro.gov.br>
 */
echo "Preparing for publishing...\n";
echo "Removindo current files...\n";
shell_exec('rm -rf publish/htdocs/*');
echo "Copying new files...\n";
shell_exec('cp -r classes publish/htdocs');
shell_exec('cp -r conf publish/htdocs');
shell_exec('cp -r help publish/htdocs');
shell_exec('cp -r images publish/htdocs');
shell_exec('cp -r js publish/htdocs');
shell_exec('cp -r lang publish/htdocs');
shell_exec('cp -r libraries publish/htdocs');
shell_exec('cp -r plugins publish/htdocs');
shell_exec('cp -r themes publish/htdocs');
shell_exec('cp -r xloadtree publish/htdocs');
shell_exec('cp *.php publish/htdocs');
shell_exec('cp *.js publish/htdocs');
shell_exec('rm -rf \'~\'');
echo "Mounted package for publishing.\n";
echo "Preparing for publishing...\n";
echo shell_exec('estaleiro config system apimanager');
echo "\nPublicando em produção SPO\n";
echo "\nPublicando módulo apigator-db no sistema apimanager em SPO\n";
echo shell_exec('cd publish && estaleiro app build --module apigator-db --platform php:8.2-debian');
echo "Terminated.\n";
echo shell_exec('rm -rf \'~\'');