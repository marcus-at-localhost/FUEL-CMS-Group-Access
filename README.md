# GROUP ACCESS MODULE FOR FUEL CMS
This is a [FUEL CMS](http://www.getfuelcms.com) group access module to create roles and add permissions more easily. Initially developed by https://github.com/imknight/FUEL-CMS-Modules

## INSTALLATION
There are a couple ways to install the module. If you are using GIT you can use the following method
to create a submodule:

### USING GIT
1. Open up a Terminal window, "cd" to your FUEL CMS installation then type in:
Type in:
``php index.php fuel/installer/add_git_submodule https://github.com/marcus-at-localhost/FUEL-CMS-Group-Access.git group_access``

2. Then to install, type in:
``php index.php fuel/installer/install group_access``


## UNINSTALL

To uninstall the module which will remove any permissions and database information:
``php index.php fuel/installer/uninstall group_access``

### TROUBLESHOOTING
1. You may need to put in your full path to the "php" interpreter when using the terminal.
2. You must have access to an internet connection to install using GIT.


## DOCUMENTATION
To access the documentation, you can visit it [here](http://docs.getfuelcms.com/modules/group_access).

## TEAM
* David McReynolds, Daylight Studio, Main Developer

## BUGS
To file a bug report, go to the [issues](https://github.com/marcus-at-localhost/FUEL-CMS-Group-Access/issues) page.

## LICENSE
The group_access Module for FUEL CMS is licensed under [APACHE 2](http://www.apache.org/licenses/LICENSE-2.0).
