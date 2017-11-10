<?php



/**
 * Мениджър на отчети начислено ДДС при прожда без Фактура
 *
 *
 *
 * @category  bgerp
 * @package   sales
 * @author    Angel Trifonov angel.trifonoff@gmail.com
 * @copyright 2006 - 2017 Experta OOD
 * @license   GPL 3
 * @since     v 0.1
 * @title     Продажби » ДДС при продажба без фактура
 */
class sales_reports_VatOnSalesWidthoutInvoices extends frame2_driver_TableData
{

    /**
     * Кой може да избира драйвъра
     */
    public $canSelectDriver = 'ceo, store, sales, admin, purchase';



    /**
     * Добавя полетата на драйвера към Fieldset
     *
     * @param core_Fieldset $fieldset
     */
    public function addFields(core_Fieldset &$fieldset)
    {

        $fieldset->FLD('periodId', 'key(mvc=acc_Periods,select=title)', 'caption=Период,after=title');

    }

    /**
     * Кои записи ще се показват в таблицата
     *
     * @param stdClass $rec
     * @param stdClass $data
     * @return array
     */


    protected function prepareRecs($rec, &$data = NULL)
    {

        $query = sales_SalesDetails::getQuery();

        $query->EXT('chargeVat', 'sales_Sales', 'externalKey=salesId,externalName=id');
        $query->EXT('makeInvoice', 'sales_Sales', 'externalKey=salesId,externalName=id');
        $query->EXT('state', 'sales_Sales', 'externalKey=salesId,externalName=id');

        $query->where("#state = 'closed'");
        $query->where("#makeInvice = 'closed'");




        bp($query);





    }






    public static function filterQuery(core_Query &$query, $from, $to, $accs = NULL, $itemsAll = NULL, $items1 = NULL, $items2 = NULL, $items3 = NULL, $strict = FALSE)
    {


////        $query->where("#state = 'active'");





    }




    /**
     * Връща фийлдсета на таблицата, която ще се рендира
     *
     * @param stdClass $rec - записа
     * @param boolean $export - таблицата за експорт ли е
     * @return core_FieldSet  - полетата
     */
    protected function getTableFieldSet($rec, $export = FALSE)
    {

    }


    /**
     * Вербализиране на редовете, които ще се показват на текущата страница в отчета
     *
     * @param stdClass $rec - записа
     * @param stdClass $dRec - чистия запис
     * @return stdClass $row - вербалния запис
     */
    protected function detailRecToVerbal($rec, &$dRec)
    {

    }
}
