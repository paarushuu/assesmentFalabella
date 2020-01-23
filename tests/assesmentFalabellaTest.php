<?php
namespace App;
use PHPUnit\Framework\TestCase;
require __DIR__ ."/../vendor/autoload.php"; 

use App\assesmentFalabella; 

require __DIR__ ."/../src/assesmentFalabella.php";

class assesmentFalabellaTest extends TestCase
{
    public function testDivisonofThree()
    {

        $this->assertEquals(assesmentFalabella::assesmentFalabellaCase(3),'Linio');
    }

    public function testDivisonofFive()
    {
        $this->assertEquals(assesmentFalabella::assesmentFalabellaCase(5), 'IT');
    }
    public function testDivisonofThreeAndFive()
    {
        $this->assertEquals(assesmentFalabella::assesmentFalabellaCase(30), 'Linianos');
    }
}
?>
