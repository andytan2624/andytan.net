echo singapore10
rsync --chmod=u=rwx,g=rwx,o=rwx --progress -azC --delete --exclude-from=rsync_exclude.txt . andytan@128.199.146.82:/var/www/andytan/
