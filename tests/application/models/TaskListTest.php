<?php
use PHPUnit\Framework\TestCase;

class taskListTest extends TestCase {
  private $CI;

  function setUp() {
    $this->CI = &get_instance();
    $this->CI->load->model('tasks');
    $this->tasks = new Tasks();
  }

  public function testMoreUnfinished()
  {
    $notcomplete = 0;
    $complete = 0;

    //Iterate through all the tasks and count how many complete/not
    foreach ($this->tasks->all() as $task) {
      if ($task->status == 0)
      {
        $notcomplete++;
      } 
      else
      {
        $complete++;
      }
    }

    // Assert that there are more incomplete than complete tasks
    $this->assertEquals(true,$notcomplete > $complete);
  }
}
