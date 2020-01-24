<?php

namespace SimpleSAML\Module\perun;

use SimpleSAML\Error\Exception as SimpleSAMLException;

/**
 * Wrapper of Perun exception returned from RPC.
 *
 * It extends SimpleSAML_Error_Exception because SSP catches it and let user report it.
 *
 * @author Ondrej Velisek <ondrejvelisek@gmail.com>
 */
class Exception extends SimpleSAMLException
{
    private $id;
    private $name;
    // note that field $message is inherited

    /**
     * Perun_Exception constructor.
     * @param string $id
     * @param string $name
     * @param string $message
     */
    public function __construct($id, $name, $message)
    {
        parent::__construct('Perun error: ' . $id . ' - ' . $name . ' - ' . $message);

        $this->id = $id;
        $this->name = $name;
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
