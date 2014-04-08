#!/bin/bash

chmod a+x $HOME
chmod a+x $HOME/vhosts
chmod a+x $HOME/vhosts/finalproject
chmod a+x $HOME/vhosts/finalproject/public

echo "*** Scripts: chmod 700"
echo "$HOME/vhosts/finalproject/*.sh"us
chmod 700 $HOME/vhosts/finalproject/*.sh


# any php file
#chmod 600 
echo "*** PHP files: chmod 600:"
cat $HOME/vhosts/finalproject/tools/php-file-list | while read line
do
echo $line
chmod 600 $HOME/$line
done


# any non-php file
#chmod 644 
echo "*** non-PHP files: chmod 644:"
cat $HOME/vhosts/finalproject/tools/notphp-file-list | while read line
do
echo $line
chmod 644 $HOME/$line
done


# any directory
#chmod 711 directory
echo "*** Directories: chmod 711:"
cat $HOME/vhosts/finalproject/tools/dir-list | while read line
do
echo $line
chmod 711 $HOME/$line
done



