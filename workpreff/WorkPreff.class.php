<?php



/**
 * Избор на данни на Форма за CV
 *
 *
 * @category  bgerp
 * @package   hr
 * @author    Angel Trifonov angel.trifonoff@gmail.com
 * @copyright 2006 - 2017 Experta OOD
 * @license   GPL 3
 * @since     v 0.1
 * @title     Избор на данни на Форма за CV
 */


class workpreff_WorkPreff extends core_Manager
{


    public $title = "Избор";

    public $loadList = 'plg_RowTools2,plg_Sorting';

    function description()
    {
        $this->FLD('name', 'varchar(255,ci)', 'caption=Предпочитания->Възможности,class=contactData,mandatory,remember=info,silent,export=Csv');
        $this->FLD('type', 'enum(checkbox=Фиксиране, radio=Избор)', 'notNull,caption=Тип на избора,maxRadio=2,after=name');
        $this->FLD('choice', 'text', 'caption=Информация->Предложения за избор,class=contactData,mandatory,remember=info,silent,removeAndRefreshForm, export=Csv');




    }


    public function getOptionsForm($arg)
    {
       $query = self::getQuery();

        $recs = array();
        while ($rec = $query->Fetch()){

            $id = $rec->id;
            $recs[$id] = $rec;
        };

        $us = $recs[$arg];

        return $us;
    }


}