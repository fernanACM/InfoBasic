<?php

//ALL THE RIGHTS RESERVED BY ESTEM0

namespace Estem01\InfoBasic;

use pocketmine\plugin\PluginBase;
use pocketmine\player\Player;
use pocketmine\Server;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\Config;

class Info extends PluginBase{

  public Config $config;

  public function onEnable() : void{ 
  $this->saveResource("config.yml");
  $this->config = new Config($this->getDataFolder() . "config.yml");
  }
   
  public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool{
  switch($cmd->getName()){
   case "info";
  if(!$sender instanceof Player){
  
  $info = $this->config->get("message");

  $sender->sendMessage("$info");

      }
    }
   return true;
  }
}
