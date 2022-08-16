<?php

//ALL THE RIGHTS RESERVED BY ESTEM0

namespace Estem01\InfoBasic;

use pocketmine\PluginBase;

use pocketmine\player\Player;

use pocketmine\Server;

use pocketmine\command\Command;

use pocketmine\command\CommandSender;

use pocketmine\event\Listener;

use pocketmine\Config;

class Info extends PluginBase implements Listener{

  public function onEnable() : void{ 
  $this->getServer()->getPluginManager()->registerEvents($this,$this);
  }
   
  public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool{
  if($cmd->getName() == "info"){
  if(!$sender instanceof Player){
  
  $sender->sendMessage("");

      }
    }
  }
}
