backup(1) Thunix backup backup(1)

NAME backup - creating data backup script

SYNOPSIS backup

DESCRIPTION Thunix uses a daily cron job that runs /usr/local/bin/backup
script to store tar gzip compressed files located on local disk in BACKUP

Cycle: full weekly and incrementals daily.

Incremental backup restore process:
  First extract files from the full backup.
  Then extract files in the correct order from each incremental backup.

BUGS No known bugs.

SEE ALSO tar(1), gzip(1), crontab(1), find(1), mysqldump(1)

AUTHOR Thunix Corporation (http://thunix.net)

11.0 24 September 2021 backup(1)
