<?php

//ALL THE RIGHTS RESERVED BY ESTEM0

namespace Estem01\InfoBasic;

use pocketmine\PluginBase;

use pocketmine\player\Player;

use pocketmine\Server;

use pocketmine\command\Command;

use pocketmine\command\CommandSender;

use pocketmine\event\Listener;

class Info extends PluginBase implements Listener{

  public function onEnable() : void{ 
  $this->getServer()->getPluginManager()->registerEvents($this,$this);
  $this->saveDefaultConfig();
  }
   
  public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool{
  if($cmd->getName() == "info"){
  if(!$sender instanceof Player){
  
  $this->$info = getConfig()->get("message", []);

  $sender->sendMessage("$info");

      }
    }
   return true;
  }
}
