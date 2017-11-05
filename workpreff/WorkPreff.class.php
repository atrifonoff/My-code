<?php

/**
 * WorkPreff
 *
 *
 * @category  bgerp
 * @package   workpreff
 * @author    Angel Trifonov angel.trifonoff@gmail.com
 * @copyright 2006 - 2017 Experta OOD
 * @license   GPL 3
 * @since     v 0.1
 * @title     WorkPreff
 */

class workpreff_WorkPreff extends core_Manager
{


    public $title = "Избор";

    function description()
    {
        $this->FLD('name', 'varchar(255,ci)', 'caption=Предпочитания->Възможности,class=contactData,mandatory,remember=info,silent,export=Csv');
        $this->FLD('type', 'enum(checkbox=Фиксиране, radio=Избор)', 'notNull,caption=Тип на избора,maxRadio=2,after=name');
        $this->FLD('choice', 'text', 'caption=Информация->Предложения за избор,class=contactData,mandatory,remember=info,silent,export=Csv');



    }







}