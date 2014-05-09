#!/bin/bash

chmod a+x $HOME
chmod a+x $HOME/vhosts
chmod a+x $HOME/vhosts/finalproject
chmod a+x $HOME/vhosts/finalproject/public


# any directory
#chmod 711 directory
echo "*** Directories: chmod 711:"
cat $HOME/vhosts/finalproject/tools/dir-list | while read line
do
echo $line
chmod -v 711 $HOME/$line
done

echo
echo "*** Scripts: chmod 700"
echo "$HOME/vhosts/finalproject/*.sh"
chmod -v 700 $HOME/vhosts/finalproject/*.sh


# any php file
#chmod 600 
echo
echo "*** PHP files: chmod 600:"
cat $HOME/vhosts/finalproject/tools/php-file-list | while read line
do
echo $line
chmod -v 600 $HOME/$line
done


# any non-php file
#chmod 644 
echo
echo "*** non-PHP files: chmod 644:"
cat $HOME/vhosts/finalproject/tools/notphp-file-list | while read line
do
echo $line
find $HOME/$line -type f -exec chmod -v 644 {} \;
# chmod -v 644 $HOME/$line
done




