<?php
/*
 * Copyright (c) 2015 beito
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 * 
*/

namespace beito\FlowerPot;

use pocketmine\block\Block;
use pocketmine\item\Item;

class ItemFlowerPot extends Item{

	public function __construct($meta = 0, $count = 1){
		$this->block = Block::get(MainClass::BLOCK_FLOWER_POT);
		parent::__construct(MainClass::ITEM_FLOWER_POT, 0, $count, "Flower Pot");
	}

	public function getMaxStackSize(){
		return 64;
	}
}