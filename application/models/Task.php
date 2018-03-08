<?php
class Task extends Entity
{
    public $id;
    public $task;
    public $priority;
    public $size;
    public $group;
    
    // insist that an ID be present
    public function setID($value) {
        if (empty($value))
            throw new InvalidArgumentException('An Id must have a value');
        $this->id = $value;
        return $this;
    }
    
    // insist that an Task be present
    public function setTask($value) {
        if (empty($value))
            throw new Exception('A Name cannot be empty');
        if (strlen($value) > 30)
            throw new Exception('A Name cannot be longer than 30 characters');
        $this->task = $value;
    }

    // insist that a priority be present and is high, medium or low
    public function setPriority($value) {
        $allowed = ['high', 'medium', 'low'];
        if (!in_array($value, $allowed))
            throw new Exception('A priority must be high, medium or low');
        $this->priority = $value;
        return $this;
    }

    // insist that a size be one of small, medium or large
    public function setSize($value) {
        $allowed = ['small', 'medium', 'large'];
        if (!in_array($value, $allowed))
            throw new Exception('The size must be one we like');
        $this->size = $value;
        return $this;
    }

    // insist that a group be one of family, house, school or work
    public function setGroup($value) {
        $allowed = ['family', 'house', 'school', 'work'];
        if (!in_array($value, $allowed))
            throw new Exception('The group must be one we like');
        $this->group = $value;
        return $this;
    }
}