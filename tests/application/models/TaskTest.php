<?php

use PHPUnit\Framework\TestCase;

class TaskTest extends TestCase
{
  private $CI;

  public function setUp()
  {
    $this->CI = &get_instance();
    $this->CI->load->model('task');
    $this->task = new Task();
  }
  
  public function testsetID()
  {
    //Testing Normal ID
    $this->task->setID("1");
    $this->assertEquals("1",$this->id);
      
    //Testing Empty ID
    $this->task->setID("");
    $this->assertEquals("",$this->id);
    $this->expectedException(Exception::class);
  }
  
  public function testsetTask()
  {
    //Testing Normal Name
    $this->task->setTask("Test Lab");
    $this->assertEquals("Test Lab",$this->task);

    /*    
    //Testing Empty Name
    $this->task->setTask("");
    $this->assertEquals("",$this->task);
    $this->expectedException(Exception::class);

    //Testing Name Too long
    $this->task->setTask("qwertyuiopasdfghjklzxcvbnmqwertyu");
    $this->assertEquals("qwertyuiopasdfghjklzxcvbnmqwertyu",$this->task);
    $this->expectedException(Exception::class);
     */
  }
   
  public function testsetPriority()
  {
    /*
    //Test nonsense entry
    $this->task->setPriority(99);
    $this->assertEquals(99, $this->priority);
    $this->expectedException(Exception::class);
    
    //Test empty entry
    $this->task->setPriority("");
    $this->assertEquals("", $this->priority);
    //$this->expectedException(Exception::class);
    */

    //Test high
    $this->task->setPriority("high");
    $this->assertEquals("high", $this->priority);

    //Test medium
    $this->task->setPriority("medium");
    $this->assertEquals("medium", $this->priority);

    //Test low
    $this->task->setPriority("low");
    $this->assertEquals("medium", $this->priority);
  }
   
  public function testsetSize()
  {
    /*
    //Test nonsense entry
    $this->task->setSize(99);
    $this->assertEquals(99, $this->size);
    $this->expectException(Exception::class);
    
    //Test empty entry
    $this->task->setSize(99);
    $this->assertEquals(99, $this->size);
    $this->expectException(Exception::class);
     */

    //Test small
    $this->task->setSize("small");
    $this->assertEquals("small", $this->size);

    //Test medium
    $this->task->setSize("medium");
    $this->assertEquals("medium", $this->size);
    
    //Test large
    $this->task->setSize("large");
    $this->assertEquals("large", $this->size);
  }
  
  public function testsetGroup()
  {
    /*
    //Test nonsense entry
    $this->task->setGroup(99);
    $this->assertEquals(99, $this->group);
    $this->expectException(Exception::class);

    //Test empty entry
    $this->task->setGroup("");
    $this->assertEquals("", $this->group);
    $this->expectException(Exception::class);
    */

    //Test family
    $this->task->setGroup("family");
    $this->assertEquals("family", $this->group);

    //Test house
    $this->task->setGroup("house");
    $this->assertEquals("house", $this->group);
    
    //Test family
    $this->task->setGroup("school");
    $this->assertEquals("school", $this->group);
    
    //Test work
    $this->task->setGroup("work");
    $this->assertEquals("work", $this->task->group);
  }
   
}
