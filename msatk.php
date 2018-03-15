<?php
class Player {
    function __construct($name) {
        $this->name = $name;
    }

    function attack($enemy) {
        echo $this->name."は".$enemy."を攻撃した\n";
    }
}

$team = [];
array_push($team, "勇者");
array_push($team, "戦士");
array_push($team, "魔法使い");

$p = new Player("スライム");
foreach ($team as $person) {
    $p->attack($person);
}
