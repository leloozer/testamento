<?php

namespace SuccessFacileBundle\Services;

class Droitsuccess
{

/*
*
*  Taxecumule0 = Ascendant et descendant direct
*
*  Taxecumule1 = Frere ou soeur
*  
*  Taxecumule2 = Autre 4eme degres max inclus
	
*  Taxecumule3 = Autre  + 4eme degres ou non parents
   
*  Taxecumule4 = Neveu/Niece
   
*/



/* 
*     calcul taxe cumule pour Acendant et descendant direct
*
* @param integer $part
* @return integer
* 
*
*/
	public function Taxecumule0($part)
	{
		$taxecumule = 0;
		$part = $part - 100000;
		if ($part <= 0)
			return (0);
		else
		{
			if ($part <= 8072)
		    {
				$taxecumule = $part * 5 / 100;
				return ($taxecumule); 	
			}
			else
			{
				$part = $part - 8072;
				$taxecumule = 8072 * 5 / 100;
				if ($part <= 4037)
				{
					$taxecumule = $part * 10 / 100 + $taxecumule;
					return ($taxecumule);
				}
				else
				{
					$part = $part - 4037;
					$taxecumule = 4037 * 10 / 100 + $taxecumule;
					if ($part <= 3823)
					{
						$taxecumule = $part * 15 / 100 + $taxecumule;
						return ($taxecumule);
					}
					else
					{
						$part = $part - 3823;
						$taxecumule = 3823 * 15 / 100 + $taxecumule;
						if ($part <= 536392)
						{
							$taxecumule = $part * 20 / 100 + $taxecumule;
							return ($taxecumule);
						}
						else
						{
							$part = $part - 536392;
							$taxecumule = 536392 * 20 / 100 + $taxecumule;
							if ($part <= 350514)
							{
								$taxecumule = $part * 30 / 100 + $taxecumule;
								return ($taxecumule);
							}
							else
							{
								$part = $part - 350514;
								$taxecumule = 350514 * 30 / 100 + $taxecumule;
								if ($part <= 902839)
								{
									$taxecumule = $part * 40 / 100 + $taxecumule;
									return ($taxecumule);
								}
								else
								{
									$part = $part - 902839;
									$taxecumule = 902839 * 40 / 100 + $taxecumule;
									$taxecumule = $part * 45 / 100 + $taxecumule;
									return ($taxecumule);
								}
							}
						}	
					}
				}
			}
		}
		return (-1);
	}


/* 
*     calcul taxe cumule pour Frere et soeur
*
* @param integer $part
* @return integer
* 
*
*/
	public function Taxecumule1($part)
	{
		$taxecumule = 0;
		$part = $part - 15932;
		if ($part <= 0)
			return (0);
		else
		{
			if ($part <= 24430)
			{
				$taxecumule = $part * 35 / 100;
				return ($taxecumule);
			}
			else 
			{
				$part = $part - 24430;
				$taxecumule = 24430 * 35 / 100;
				$taxecumule = $part * 45 / 100 + $taxecumule;
				return ($taxecumule);
			}
		}
		return (-1);	
	}



/* 
*     calcul taxe cumule pour Autre (4eme degres max inclus)
*
* @param integer $part
* @return integer
* 
*
*/

	public function Taxecumule2($part)
	{
		$taxecumule = 0;
		$part = $part - 1594;
		if ($part <= 0)
			return (0);
		else
		{
			$taxecumule = $part * 55 / 100;
			return ($taxecumule);
		}
		return (-1);
	}

/* 
*     calcul taxe cumule pour Autre (+4eme degres ou non parent)
*
* @param integer $part
* @return integer
* 
*
*/

	public function Taxecumule3($part)
	{
		$taxecumule = 0;
		$part = $part - 1594;
		if ($part <= 0)
			return (0);
		else
		{
			$taxecumule = $part * 60 / 100;
			return ($taxecumule);
		}
		return (-1);
	}


/* 
*     calcul taxe cumule pour Neveu/Niece
*
* @param integer $part
* @return integer
* 
*
*/

	public function Taxecumule4($part)
	{
		$taxecumule = 0;
		$part = $part - 7967;
		if ($part <= 0)
			return (0);
		else
		{
			$taxecumule = $part * 55 / 100;
			return ($taxecumule);
		}
		return (-1);
	}
}
?>
