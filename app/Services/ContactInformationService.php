<?php
/**
 * Created by PhpStorm.
 * User: Bhupendra Sapkota
 * Date: 23/05/23
 * Time: 10:33 AM
 */

namespace App\Services;

use App\ContactInformations;
use App\Services\Service;

class ContactInformationService extends Service
{
    public  function __construct(ContactInformations $contactInformations)
    {
        $this->model = $contactInformations;
    }
}