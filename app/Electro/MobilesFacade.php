<?php 

namespace App\Electro;

  

use Illuminate\Support\Facades\Facade;

  

class MobilesFacade extends Facade{

    protected static function getFacadeAccessor() { return 'mobiles'; }

}

?>
