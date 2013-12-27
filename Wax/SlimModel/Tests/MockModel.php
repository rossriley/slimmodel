<?php
namespace Wax\SlimModel\Tests;
use Wax\SlimModel\Model\Base;

class MockModel extends Base {
  public $table        = "example";
  public $primary_key  = "id";

  public function setup() {
    $this->define("id",   "integer",  ["autoincrement"=>true]);
    $this->define("title","string",   []);

  }

}
