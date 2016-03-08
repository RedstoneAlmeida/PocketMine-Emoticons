<?php		
 namespace redstone\art;		
 use pocketmine\plugin\PluginBase;		
 use pocketmine\event\Listener;		
 use pocketmine\event\player\PlayerChatEvent;		
 class Emoji extends PluginBase implements Listener{		
     public function onEnable(){		
         $this->saveDefaultConfig();		
         $this->getServer()->getPluginManager()->registerEvents($this, $this);		
     }		
     public function onChat(PlayerChatEvent $e){		
         if($e->getPlayer()->hasPermission("emoji.use")){		
             foreach ($this->getConfig()->getAll() as $msg => $emoji){		
                 $e->setMessage(str_replace($msg,$emoji,$e->getMessage()));		
             }		
        }		
     }		
 }
