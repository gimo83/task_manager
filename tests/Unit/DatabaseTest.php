<?php

namespace Tests\Unit;

class DatabaseTest extends BaseTestCase
{
    /**
     * Test that the index route returns a rendered response containing the text 'SlimFramework' but not a greeting
     */
    public function testGetDatabaseConnection()
    {
        $app = $this->getApp();

        //var_dump($app->getContainer()->db);

        $this->assertNotEquals(null,$app);
        $this->assertNotEquals(null, $app->getContainer()->get('db'));
        $this->assertNotEquals(null, $app->getContainer()->get('db')->getConnection());
        //var_dump( $app->getContainer()->get('db')->table('user')->where([['name','like','%moh%'],])->get());

    }

}