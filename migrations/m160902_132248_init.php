<?php

use yii\db\Migration;

class m160902_132248_init extends Migration
{
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';

        $this->createTable('requirement_type', [
            'id' => 'INT NOT NULL AUTO_INCREMENT',
            'name' => 'VARCHAR(255) NOT NULL',
            'PRIMARY KEY (id)',
            'UNIQUE INDEX `name_req_type` (`name` ASC)'
                ], $tableOptions);
        
        $this->createTable('requirement_status', [
            'id' => 'INT NOT NULL AUTO_INCREMENT',
            'name' => 'VARCHAR(255) NOT NULL',
            'PRIMARY KEY (id)',
            'UNIQUE INDEX `name_req_status` (`name` ASC)'
                ], $tableOptions);
        
        $this->createTable('requirement', [
            'id' => 'INT NOT NULL AUTO_INCREMENT',
            'created_at' => 'INT NOT NULL',
            'updated_at' => 'INT NOT NULL',
            'description' => 'TEXT NULL',
            'comment' => 'TEXT NULL',
            'author' => 'VARCHAR(125) NOT NULL',
            'type' => 'INT NOT NULL',
            'status' => 'INT NOT NULL',
            'PRIMARY KEY (id)',
            'CONSTRAINT `fk_req_type`
    FOREIGN KEY (`type`)
    REFERENCES `requirement_type` (`id`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE',
            'CONSTRAINT `fk_req_status`
    FOREIGN KEY (`status`)
    REFERENCES `requirement_status` (`id`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE',
                ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('requirement');
        $this->dropTable('requirement_type');
        $this->dropTable('requirement_status');
    }
}
