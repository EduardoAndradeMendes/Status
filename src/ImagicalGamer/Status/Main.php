<?php
namespace ImagicalGamer\Status;

use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat as Color;

class Main extends PluginBase implements Listener{
  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }
  public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
    if($cmd->getName() == "status"){
		$tps = $this->getServer()->getTicksPerSecond();
		$online = count($this->getServer()->getOnlinePlayers());
		$load = $this->getServer()->getTickUsage();
		$full = $this->getServer()->getMaxPlayers();
		$sender->sendMessage(Color::GREEN . "Status" . "\nCurrent TPS: " . Color::LIGHT_PURPLE .  $tps . Color::GREEN . "\nCurrent load: " . Color::AQUA . $load . Color::GREEN . "\nAmount of Online Players: " . Color::RED .  $online);
}
}
}
