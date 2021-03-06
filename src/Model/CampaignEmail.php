<?php

/**
 * This model manages Campaign Emails
 *`
 * @package     Nails
 * @subpackage  module-email-drip
 * @category    Model
 * @author      Nails Dev Team
 * @link
 */

namespace Nails\EmailDrip\Model;

use Nails\Common\Model\Base;

class CampaignEmail extends Base
{
    const TABLE               = NAILS_DB_PREFIX . 'email_drip_campaign_email';
    const DEFAULT_SORT_COLUMN = 'order';

    // --------------------------------------------------------------------------

    protected function formatObject(
        &$oObj,
        array $aData = [],
        array $aIntegers = [],
        array $aBools = [],
        array $aFloats = []
    ) {
        parent::formatObject($oObj, $aData, $aIntegers, $aBools, $aFloats);

        $oObj->trigger_delay           = new \stdClass();
        $oObj->trigger_delay->interval = $oObj->trigger_delay_interval;
        $oObj->trigger_delay->unit     = $oObj->trigger_delay_unit;

        unset($oObj->trigger_delay_interval);
        unset($oObj->trigger_delay_unit);
    }
}
