<?php

use yii\db\Migration;

/**
 * Class m220608_165955_post_table
 */
class m220608_165955_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220608_165955_post_table cannot be reverted.\n";

        return false;
    }

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%post}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'content' => $this->text()->notNull(),
            'category_id' => $this->integer()->unsigned()->notNull(),
            'author_id' => $this->integer()->unsigned()->notNull(),
            'status' => $this->integer()->unsigned()->notNull()->defaultValue("1"),
            'updated_at' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP')->append('ON UPDATE NOW()')
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%post}}');
    }
}
