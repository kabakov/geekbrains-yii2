<?php

use yii\db\Migration;

/**
 * Handles the creation for table `tweets`.
 */
class m160921_133951_create_tweets_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('tweets', [
            'id' => $this->primaryKey(),
            'text' => $this->text()->notNull()->defaultValue(''),
            'image' => $this->string(255)->defaultValue(NULL),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('tweets');
    }
}
