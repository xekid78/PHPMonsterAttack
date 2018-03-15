# PHPMonsterAttack
クラスでモンスターへの攻撃

## 処理
playerクラスのattack()メソッドを使って、モンスターへの攻撃を出力する。

## コード
```
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
```

## 出力結果  
```
スライムは勇者を攻撃した
スライムは戦士を攻撃した
スライムは魔法使いを攻撃した
```
  
## 開発環境
| 開発ツール |  |
|:-|:-|
| OS | Windows10 |
| 仮想化ソフト | Oracle VM VirtualBox 5.2 |
| 構築ソフト | Vagrant 2.0.2 |
| 仮想化上OS | CentOS 6.9 |
| SSHクライアント | PuTTY 0.6.8 |
| FTPクライアント | Cyberduck 6.3.5 |
| エディタ | Atom 1.24.0 |
| 開発言語 | PHP 7.1.15 |
