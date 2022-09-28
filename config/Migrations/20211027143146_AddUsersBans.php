<?php

use Migrations\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;


class AddUsersBans extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table_name = 'users_bans';

        if (!$this->hasTable($table_name)) {
            $table = $this->table($table_name);
            $table->addColumn('user_id', 'integer', ['default' => null, 'null' => false]);
            $table->addColumn('expiration', 'integer', ['default' => null, 'null' => false]);
            $table->addColumn('token', 'string', ['default' => null, 'limit' => 60, 'null' => false]);
            $table->addColumn('created', 'integer', ['default' => null, 'null' => false]);
            $table->create();
        }
    }
}
