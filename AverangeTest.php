<?php
require_once "Averange.php";
use PHPUnit\Framework\TestCase;

class AverangeTest extends TestCase{

    public function test_sum_of_two_number(){
        $this->assertEquals(3, averange(4, 2));
    }

}
