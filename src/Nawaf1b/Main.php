<?php

namespace Nawaf1b;

use pocketmine\item\Item;

use pocketmine\utils\TextFormat;
use pocketmine\utils\Config;
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
    
        
    
    
		@mkdir($this->getDataFolder());
		$this->yml = (new Config($this->getDataFolder()."config.yml", Config::YAML,array("BlockDispnser"=>"1")))->getAll();
                $this->ymal = (new Config($this->getDataFolder()."config.yml", Config::YAML,array("ItemID"=>"1")))->getAll();
		
		$this->ymlBlock = $this->yml["BlockDispnser"];
            $this->getServer ()->getPluginManager ()->registerEvents ( $this, $this );
    }
    public function Touch1b(PlayerInteractEvent $cto){
    $blockDis = $cto->getBlock()->getID();
    $block = $cto->getBlock();
    if($cto->getPlayer()->isOp()){
           
    if($blockDis == $this->ymlBlock){
   
       $cto->getPlayer()->getLevel()->dropItem(new \pocketmine\math\Vector3($block->x, $block->y,$block->z ), Item::get($this->ymal["ItemID"]),2);
    }
            }
    
    }
}
?>
