<?php



/**
 * Клас 'workpreff_WorkPreff'
 *
 * Поддържа системното меню и табове-те на пакета 'Core'
 *
 *
 * @category  bgerp
 * @package   workpreff
 * @author    Milen Georgiev <milen@download.bg>
 * @copyright 2006 - 2012 Experta OOD
 * @license   GPL 3
 * @since     v 0.1
 * @link
 */
class workpreff_Wrapper extends plg_ProtoWrapper
{
    
    
    /**
     * Описание на табовете
     */
    function description()
    {
     
        
        $this->TAB('workpreff_WorkPreff', 'Анализ', 'powerUser');

        
        $this->title = 'Анализи';
    
    }
}