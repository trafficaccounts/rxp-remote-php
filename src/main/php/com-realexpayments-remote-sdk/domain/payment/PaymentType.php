<?php


namespace com\realexpayments\remote\sdk\domain\payment;


use com\realexpayments\remote\sdk\EnumBase;

/**
 * Class PaymentType
 * Enumeration for the Payment type.
 */
class PaymentType extends EnumBase {

	const __default = self::AUTH;
	const AUTH = "auth";
	const AUTH_MOBILE = "auth-mobile";
	const SETTLE = "settle";
	const VOID = "void";
	const REBATE = "rebate";
	const OTB = "otb";
	const CREDIT = "credit";
	const HOLD = "hold";
	const RELEASE = "release";
	const RECEIPT_IN = "receipt-in";
	const PAYMENT_OUT = "payment-out";
	const PAYER_NEW = "payer-new";
	const PAYER_EDIT = "payer-edit";
	const CARD_NEW = "card-new";
	const CARD_UPDATE = "card-update-card";
	const CARD_CANCEL = "card-cancel-card";
	const DCC_RATE_LOOKUP = "dccrate";
	const DCC_AUTH = "auth";
	const RECEIPT_IN_OTB = "receipt-in-otb";
	const REALVAULT_DCCRATE = "realvault-dccrate";

	/**
	 * @var string The payment type String value
	 */
	private $type;


	/**
	 * @param string $type
	 */
	public function __construct( $type ) {
		parent::__construct( $type );
		$this->type = $type;
	}

	/**
	 * Get the string value of the payment type
	 *
	 * @return string
	 */
	public function getType() {
		return $this->type;
	}

}