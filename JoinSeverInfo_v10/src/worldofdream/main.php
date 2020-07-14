<?php

namespace worldofdream;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\Config;
use pocketmine\event\Player\PlayerJoinEvent;


class hikari extends PluginBase implements Listener
{
/** @var config */
private $config;

/** @var weekday */
private $weekday;

public function onEnable(){

   date_default_timezone_set("Asia/Tokyo");


   $this->getLogger()->info("§eServerJoinInfoを正しく読み込みました。");
   $this->getLogger()->info("§a実行test　PocketMine-MP v3.14.0");
   $this->config = new Config($this->getDataFolder() . "info.yml", Config::YAML, array(
  ));

}

public function onJoin(PlayerJoinEvent $event){

     $week = ["日曜日","月曜日","火曜日","水曜日","木曜日","金曜日","土曜日"];
     $week[date("w")];
	 $time = function (){ date(m:j); };
	 $info = $this->config->getall();
	 $player = $event->getPlayer();
	 $player->sendmessage("§aおかえりなさい！");
	 $player->sendmessage("§a今日は".$time."で".$week."です");
	 $player->sendmessage("----§eお知らせ§e----");
	 $player->sendmessage("§a".$info.);


}
}
