<?php
/**
 * Definition of the BaseDelegateType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the BaseDelegateType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_BaseDelegateType {
	/**
	 * Mailbox property
	 * 
	 * @var EWSType_EmailAddressType
	 */
	public $Mailbox;

	/**
	 * Constructor
	 */
	public __construct() {
		$this->schema = array(
			array(
				'name' => 'Mailbox',
				'required' => false,
				'type' => 'EmailAddressType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class BaseDelegateType