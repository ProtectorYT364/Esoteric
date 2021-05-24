<?php

namespace ethaniccc\Esoteric\check\movement\fly;

use ethaniccc\Esoteric\check\Check;
use ethaniccc\Esoteric\data\PlayerData;
use ethaniccc\Esoteric\data\sub\protocol\v428\PlayerAuthInputPacket;
use pocketmine\network\mcpe\protocol\DataPacket;
use function abs;

class FlyB extends Check {

	public function __construct() {
		parent::__construct("Fly", "B", "Checks if two Y movements are too similar to each other.", false);
	}

	public function inbound(DataPacket $packet, PlayerData $data): void {
		if ($packet instanceof PlayerAuthInputPacket && $data->offGroundTicks >= 10 && $data->ticksSinceFlight >= 10) {
			$difference = abs($data->currentMoveDelta->y - $data->lastMoveDelta->y);
			if ($difference <= 4E-5 && $data->currentMoveDelta->y > -3.0 && $data->ticksSinceInCobweb >= 10 && !$data->teleported && $data->ticksSinceInClimbable >= 10 && $data->ticksSinceInLiquid >= 10 && $data->ticksSinceMotion >= 5 && !$data->immobile && $data->inLoadedChunk
			&& !$data->isInVoid) {
				$this->flag($data);
				$this->setback($data);
			}
		}
	}

}