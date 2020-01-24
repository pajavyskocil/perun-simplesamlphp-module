<?php

namespace SimpleSAML\Module\perun\Auth\Process;

use SimpleSAML\Auth\ProcessingFilter;
use SimpleSAML\Auth\State;
use SimpleSAML\Module;
use SimpleSAML\Utils\HTTP;

/**
 * Class sspmod_perun_Auth_Process_WarningTestSP
 *
 * Warns user that he/she is accessing to the testing SP
 */
class WarningTestSP extends ProcessingFilter
{

    public function process(&$request)
    {
        if (isset($request['SPMetadata']['test.sp']) && $request['SPMetadata']['test.sp'] === true) {
            $id = State::saveState($request, 'perun:warningTestSP');
            $url = Module::getModuleURL('perun/warning_test_sp_page.php');
            HTTP::redirectTrustedURL($url, ['StateId' => $id]);
        }
    }
}
