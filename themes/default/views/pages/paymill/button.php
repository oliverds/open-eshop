<?php defined('SYSPATH') or die('No direct script access.');?>

<a class="btn btn-info btn-large" data-toggle="modal" data-dismiss="modal" 
    href="<?=Route::url('oc-panel',array('directory'=>'user','controller'=>'auth','action'=>'register'))?>#register-modal">
    <?=__('Pay with Credit Card')?>
</a>