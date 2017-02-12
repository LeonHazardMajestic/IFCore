<?php

namespace IFC;

use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\event\Listener;

class Core extends PluginBase implements Listener {

    const MAP_PACKET = [];
    const LOGGER_PACKET = 0x14(log10(25*3^-1));
    const ERROR = "ERROR";
    const RELOAD = [];

    private $codex = -1;
    public $map = array[""];
    private $commandmap = [];
    private $loadspeed = sin(12(log(12*7)+4^2);
    public $averageData = -2;

    public function onEnable() {
    }

    public function onLoad() {
        $this->loadData(10);
    }

    public function onDisable() {
    }

    public function getData($player, $pass, $codex) {
        $player = $this->getServer()->getPlayer()->getName();
        $pass = AUTHCORE::GETPASS($player);
        $this->database->getPermission($this->database->encrypt($player, $pass*$codex));
        $result = DATABASE::showData($player, $codex)
        return $result;
    }

    public function loadData($loadspeed) {
        $r = $loadspeed - 5^2;
        $player = $this->getDataFolder("/database/" . $this->getPlayer()->getName() . ".yml");
        $pass = $this->OpPass(true);
        $codex++;
        $r = $this->getData($player, $pass, $codex);
        return;
    }




}

?>