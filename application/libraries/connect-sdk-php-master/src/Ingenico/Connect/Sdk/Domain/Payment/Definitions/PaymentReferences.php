<?php
/*
 * This class was auto-generated from the API references found at
 * https://epayments-api.developer-ingenico.com/s2sapi/v1/
 */
namespace Ingenico\Connect\Sdk\Domain\Payment\Definitions;

use Ingenico\Connect\Sdk\DataObject;
use UnexpectedValueException;

/**
 * @package Ingenico\Connect\Sdk\Domain\Payment\Definitions
 */
class PaymentReferences extends DataObject
{
    /**
     * @var int
     */
    public $merchantOrderId = null;

    /**
     * @var string
     */
    public $merchantReference = null;

    /**
     * @var string
     */
    public $paymentReference = null;

    /**
     * @var string
     */
    public $providerId = null;

    /**
     * @var string
     */
    public $providerReference = null;

    /**
     * @var string
     */
    public $referenceOrigPayment = null;

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject($object)
    {
        parent::fromObject($object);
        if (property_exists($object, 'merchantOrderId')) {
            $this->merchantOrderId = $object->merchantOrderId;
        }
        if (property_exists($object, 'merchantReference')) {
            $this->merchantReference = $object->merchantReference;
        }
        if (property_exists($object, 'paymentReference')) {
            $this->paymentReference = $object->paymentReference;
        }
        if (property_exists($object, 'providerId')) {
            $this->providerId = $object->providerId;
        }
        if (property_exists($object, 'providerReference')) {
            $this->providerReference = $object->providerReference;
        }
        if (property_exists($object, 'referenceOrigPayment')) {
            $this->referenceOrigPayment = $object->referenceOrigPayment;
        }
        return $this;
    }
}
