<?php

	namespace Nemke\ToolsBundle\Traits;
	use Doctrine\ORM\QueryBuilder;

	/**
	 * Doctrine Query builder debug trait
	 *
	 * @author  Nemanja Andrejevic
	 */
	trait QueryBuilderDebug
	{
		/**
		 * Displays debug information for SQL query
		 *
		 * @param QueryBuilder $queryBuilder
		 * @param mixed $data
		 * @return void
		 */
	    public function debugSql($queryBuilder, $data)
	    {
			$sql = $queryBuilder->getSQL();
			$params = $queryBuilder->getParameters();

			foreach ($params as $key => $value)
				$sql = str_replace($key, '"' . $value . '"', $sql);

			dump($sql);
			dump($data->rowCount());
	    }
	}

// END