<?php
namespace GDO\Lotterygame;

use GDO\DB\GDT_String;

final class GDT_LotteryTicket extends GDT_String
{
	public $charset = '0123456789abcdefghijklmnopqrstuvwxyz';
	
	public function __construct()
	{
		$this->min = $this->max = 9;
		$this->pattern = '/['.$this->charset.']{9}/D';
	}
	
	public function validate($value)
	{
		
	}
}
