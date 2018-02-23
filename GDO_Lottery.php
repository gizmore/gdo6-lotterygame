<?php
namespace GDO\Lotterygame;

use GDO\Core\GDO;
use GDO\DB\GDT_AutoInc;
use GDO\User\GDT_User;
use GDO\DB\GDT_Token;

final class GDO_Lottery extends GDO
{
	public function gdoColumns()
	{
		return array(
			GDT_AutoInc::make('lottery_id'),
			GDT_User::make('lottery_user'),
			GDT_S
		);
	}
	
}
