<?php

	namespace Nemke\ToolsBundle\Traits;

	/**
	 * Enables json serialization of all variables
	 *
	 * @author  Nemanja Andrejevic
	 */
	trait JsonSerialize
	{
        /**
         * Serializes all variables in a class
         *
         * @return array
         */
	    public function jsonSerialize()
        {
            $json = [];
            foreach ($this as $key => $value)
                $json[$key] = $value;

            return $json;
        }
	}

// END