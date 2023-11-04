# Duplicate definition of column 'id' on entity 'App\Entity\Backup' in a field or discriminator column mapping.

## How to reproduce
bin/console doctrine:schema:validate --skip-sync

## How to "fix"
Comment `use Virtucom\SnapshotMappedSuperclass;` in `src/Entity/Snapshot.php:8`

This will use `App\Entity\SnapshotMappedSuperclass` which is identical to the one under `Virtucom` which throws the error. 

PS: cat var/log/dev.log