<?php

namespace Akhilesh\AdminOrderPaymentMethod\Plugin\Model\Method;

class Available
{
   /**
     *
     * @param \Magento\Payment\Model\Method\AbstractMethod $subject
     * @param $result
     * @return bool
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function afterIsAvailable(\Magento\Payment\Model\Method\AbstractMethod $subject, $result)
    {
        if($subject->getCode() == 'checkmo' || $subject->getCode() == 'banktransfer') {
            return true;
        }
        return $result;
    }
}