<?php
namespace RynzDev\ServerName;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase{
    public function onEnable(): void
    {
        $this->getServer()->getNetwork()->setName($this->getConfig()->get("custom-name"));
    }
}
