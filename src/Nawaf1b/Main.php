<?php

namespace Nawaf1b;

use pocketmine\item\Item;

use pocketmine\utils\TextFormat;
use pocketmine\level\sound\AnvilUseSound;
use pocketmine\nbt\tag\Compound;
use pocketmine\entity\Entity;
use pocketmine\nbt\tag\Enum;
use pocketmine\nbt\tag\Double;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\Random;
use pocketmine\event\entity\ExplosionPrimeEvent;
use pocketmine\nbt\tag\Float;
use pocketmine\event\Listener;
use pocketmine\event\server\DataPacketReceiveEvent;
use pocketmine\network\protocol\UseItemPacket;
use pocketmine\event\block\BlockPlaceEvent;
use pocketmine\nbt\tag\Byte;
use pocketmine\event\player\PlayerInteractEvent;

class Main extends PluginBase implements Listener {
 public $yml;
    public function onEnable() {

        $this->getLogger()->info(TextFormat::BLUE ."===============");
        $this->getLogger()->info(TextFormat::GREEN ."Plugin By Nawaf");
        $this->getLogger()->info(TextFormat::BLUE ."===============");
        $config = new Config($this->getDataFolder() . "config.yml", Config::YAML);
        $this->yml = $config->getAll();
            $this->getServer ()->getPluginManager ()->registerEvents ( $this, $this );
    }
    public function Touch1b(PlayerInteractEvent $cto){
    $blockDis = $cto->getBlock()->getID();
    $block = $cto->getBlock();
    if($blockDis == $this->yml["ID-Block-Dis]){
       $cto->getBlock()->dropItem(new \pocketmine\math\Vector3($block->x, $block->y,$block->z ), Item::get($this->yml["ID"],2);
    }
    }
}
