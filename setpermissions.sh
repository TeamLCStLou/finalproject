#!/bin/bash

chmod a+x $HOME
chmod a+x $HOME/vhosts
chmod a+x $HOME/vhosts/finalproject
chmod a+x $HOME/vhosts/finalproject/public

# any php file
#chmod 600 
echo "php files: chmod 600:"
cat $HOME/vhosts/finalproject/php-file-list | while read line
do
echo $line
chmod 600 $HOME/$line
done


# any non-php file
#chmod 644 
echo "non-php files: chmod 644:"
cat $HOME/vhosts/finalproject/notphp-file-list | while read line
do
chmod 644 $HOME/$line
done


# any directory
#chmod 711 directocat
echo "Directories: chmod 711:"
cat $HOME/vhosts/finalproject/dir-list | while read line
do
chmod 711 $HOME/$line
done



cd ~/vhosts/finalproject
