<?php

use yii\db\Migration;

/**
 * Class m190328_190922_create_fake_data_project_and_user
 */
class m190328_190922_create_fake_data_project_and_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        for ($i = 1; $i < 30; $i++) {
            $faker = \Faker\Factory::create('ru_RU');
            $user = new \common\models\User();
            $user->email = $faker->email;
            $user->password = $faker->password;
            $user->auth_key = $faker->password(32);

            $userProfile = new \common\models\UserProfile();
            //$userProfile->user_id = $user->id;
            $userProfile->firstName = $faker->firstName;
            $userProfile->lastName = $faker->lastName;
            $userProfile->city = $faker->city;
            $userProfile->phone = $faker->phoneNumber;
            $userProfile->avatar_url = $faker->imageUrl(100);
            $user->userProfile = $userProfile;

            if ($user->save()) {

                $project = new \common\models\Project();
                $project->name = $faker->text(20);
                $project->theme = $faker->text(8);
                $project->short_info = $faker->text(30);
                $project->location = $faker->streetAddress;
                $project->how_to_get = $faker->text(20);
                $project->date_start = $faker->date('Y-m-d', '2030');
                $project->date_end = $faker->date('Y-m-d', '2035');
                $project->time_start = $faker->time('H:m');
                $project->time_end = $faker->time('H:m');
                $project->duration = $faker->randomNumber(1);
                $project->qty_photos = $faker->randomNumber(2);
                $project->path_images = $faker->imageUrl('200', '200');
                $project->prepayment = $faker->randomNumber(3);
                $project->price = $faker->randomNumber(3);
                $project->payment_method = $faker->text(8);
                $project->info = $faker->realText(350);
                $project->user_id = $user->id;;
                if ($project->save()) {
                    echo 'save fake user & project ' . $i . "\r\n";
                } else {
                    print_r($project->getErrors());
                }
            }else {
                print_r($user->getErrors());
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        "m190328_190922_create_fake_data_project_and_user cannot be reverted.\n";

        return false;
    }

}
