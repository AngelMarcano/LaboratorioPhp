

  <?php
  //echo "My first PHP script!";
  class Task{
    public $description;
    public $title;
    public $completed = false;
    public $arrayOfNames;
    public $arrayOfPersons;

    public function __construct($title, $descripction)
    {
      $this->title = $title;
      $this->description = $descripction;
    }
    public function completed()
    {
      $this->completed = true;
    }

    public function fillArrayOfNames()
    {
      $this->arrayOfNames = ['Jeff','John', 'Mary' ];
    }

    public function fillArrayOfPerson()
    {
      $this->arrayOfPersons = ['age'=> '44',
                             'hair' => 'brown',
                             'carrer' => 'web developer'];
    }
  }
  $title = htmlspecialchars($_GET['title']);
  $description = htmlspecialchars($_GET['description']);
  var_dump($description);
  $task = new Task($title, $description);
  $task->fillArrayOfNames();
  $task->fillArrayOfPerson();

  foreach ($task->arrayOfNames as $item) {
    echo $item;
  }


  $task2 = new Task('Pick up groceries', 'Second parameter');

    var_dump($task->title);
    var_dump($task->description);
    $task->completed();
    var_dump($task->completed);

    var_dump($task2->completed);

  require 'index.view.php';
  ?>
