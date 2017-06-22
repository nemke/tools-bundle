<?php

	namespace Nemke\ToolsBundle\Traits;

	/**
	 * Enables json serialization of all variables
	 *
	 * @author  Nemanja Andrejevic
	 */
	trait JsonSerialize
	{
	    private $exportNull = false;

        /**
         * Serializes all variables in a class
         *
         * @return array
         */
	    public function jsonSerialize()
        {
            $json = [];
            foreach ($this as $key => $value)
            {
                if (!$this->exportNull && is_null($value))
                    continue;

                $json[$key] = $value;
            }

            return $json;
        }
	}

// END