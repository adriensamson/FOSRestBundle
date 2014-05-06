<?php

namespace FOS\RestBundle\Tests\Fixtures\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class ParamConverterController
{
    /**
     * @ParamConverter("user")
     */
    public function getUserAction($user)
    {
    }

    /**
     * @ParamConverter("user", options={"id"="userId"})
     * @ParamConverter("address", options={"id"="addressId"})
     */
    public function getUserAddressAction($user, $address)
    {
    }
}
