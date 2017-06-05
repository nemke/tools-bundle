<?php

namespace Nemke\ToolsBundle\Traits;

/**
 * Properties trait that allows for property handling for
 * inherited classes
 *
 * @author  Nemanja Andrejevic
 */
trait ClassProperties
{
	protected $properties;

	/**
	 * Getter function
	 *
	 * @param mixed $variableName
	 * @return boolean
	 */
	public function getProperty($variableName)
	{
		if (isset($this->properties[$variableName]))
			return $this->properties[$variableName];

		return FALSE;
	}

	/**
	 * Setter function
	 *
	 * @param mixed $variableName
	 * @param mixed $variableValue
	 * @return boolean
	 */
	public function setProperty($variableName, $variableValue = '')
	{
		if (empty($variableName))
			return FALSE;

		// In case we need to enter multiple values in one call
		if (is_array($variableName))
		{
			foreach ($variableName as $key => $value)
				$this->properties[$key] = $value;
		}
		else
			$this->properties[$variableName] = $variableValue;

		return TRUE;
	}
}

// END