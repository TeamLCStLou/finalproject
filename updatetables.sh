for fn in `ls -1 ~/vhosts/finalproject/SQLscripts/*.sql`; do
    echo "updating table file $fn"
    mysql --user=jharvard --password=crimson matchCode < $fn
done
