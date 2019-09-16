# laravel-seeding-example

Some example files for seeding application data.

This mostly focuses on how to seed your application's initial roles and permissions.

The `database/seeders/DatabaseSeeder.php` shows the correct order for your application to seed Roles/Permissions/Users in.

You'll notice first it creates Roles, then Permissions, assigns Permissions to those Roles, creates Users, then finally assigns those Users to the relevant Roles.

All the seeding examples are idempotent, they can be ran more than once without causing your application to crash and without creating extra stray records in your database. The `firstOrNew()` and `$record->save()` lines cover this.
