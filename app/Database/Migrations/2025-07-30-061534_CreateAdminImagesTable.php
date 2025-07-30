<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAdminImagesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'         => ['type' => 'INT', 'auto_increment' => true],
            'admin_id'   => ['type' => 'INT', 'unsigned' => true],
            'image'      => ['type' => 'VARCHAR', 'constraint' => '255'],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('admin_id', 'admins', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('admin_images');
    }

    public function down()
    {
        $this->forge->dropTable('admin_images');
    }
}
