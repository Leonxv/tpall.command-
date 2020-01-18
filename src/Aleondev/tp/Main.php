<?php

namespace Aleondev\tp;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\level\Position;


class Main extends PluginBase{

	public function onEnable() : void{
		$this->getLogger()->info("Aktiviert");
	}

	public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
		switch($command->getName()){
			case "tpall":
				foreach ($this->getServer()->getOnlinePlayers() as $echo) {
						$echo->teleport($sender);
				}
				return true;
			default:
				return false;
		} 
		}
	public function onDisable() : void{
		$this->getLogger()->info("Deaktiviert");
	}
}	







