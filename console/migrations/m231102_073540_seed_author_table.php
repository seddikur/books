<?php

use yii\db\Migration;

/**
 * Class m231102_073540_seed_author_table
 */
class m231102_073540_seed_author_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 20; $i++) {
            $this->insert(
                'authors',
                [
                    'surname' => $faker->name,
                   // 'created_at' => (new \yii\db\Expression('NOW()'))
                ]
            );
        }

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m231102_073540_seed_author_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231102_073540_seed_author_table cannot be reverted.\n";

        return false;
    }
    */
}
