<?php

//ALL THE RIGHTS RESERVED BY ESTEM0

namespace PluginInfo;

use pocketmine\PluginBase;

use pocketmine\Player;

use pocketmine\Server;

use pocketmine\command\Command;

use pocketmine\command\CommandSender;

class Main extends PluginBase implements Listener{

  public function onEnable(){ 
  $this->getLogger->info('InfoBasic Ligado');
  }
}
