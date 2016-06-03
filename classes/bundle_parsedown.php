<?php

namespace parsedown{
    
    /* Prevent Direct Access */
    defined('ADAPT_STARTED') or die;
    
    class bundle_parsedown extends \adapt\bundle{
        
        public function __construct($data){
            parent::__construct('parsedown', $data);
        }
        
        public function boot(){
            if (parent::boot()){
                

                
                return true;
            }
            
            return false;
        }
        
    }
    
    
}

?>