Generating translations
=======================

Translate Toolkit - http://translate.sourceforge.net/wiki/toolkit/php2po
------------------------------------------------------------------------

### Convert php files to po files. Issue this command 

    php2po -t en_US/ <php-lang-folder> <po-lang-folder>

    Eg. php2po -t en_US/ pr_US/ po/po-pr_US

### Convert pot files back to php files

    php2po -t en_US/ <po-lang-folder> <php-lang-folder>

    Eg. php2po -t en_US/ po/po-pr_US pr_US/


Transifex Client - http://help.transifex.com/features/client/
-------------------------------------------------------------

### Upload translations to transifex

#### Uploading source

    tx push -s

#### Uploading translations (inluding --skip to skip errors such as empty translation files)

    tx push -t --skip

### Downloading translations from transifex

    tx pull

#### Download translations for just one language

    tx pull -l fr_FR
