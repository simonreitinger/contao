<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2017 Leo Feyer
 *
 * @license LGPL-3.0+
 */

namespace Contao;


/**
 * Reads and writes member groups
 *
 * @property integer $id
 * @property integer $tstamp
 * @property string  $name
 * @property boolean $redirect
 * @property integer $jumpTo
 * @property boolean $disable
 * @property string  $start
 * @property string  $stop
 *
 * @method static MemberGroupModel|null findById($id, array $opt=array())
 * @method static MemberGroupModel|null findByPk($id, array $opt=array())
 * @method static MemberGroupModel|null findByIdOrAlias($val, array $opt=array())
 * @method static MemberGroupModel|null findOneBy($col, $val, array $opt=array())
 * @method static MemberGroupModel|null findOneByTstamp($val, array $opt=array())
 * @method static MemberGroupModel|null findOneByName($val, array $opt=array())
 * @method static MemberGroupModel|null findOneByRedirect($val, array $opt=array())
 * @method static MemberGroupModel|null findOneByJumpTo($val, array $opt=array())
 * @method static MemberGroupModel|null findOneByDisable($val, array $opt=array())
 * @method static MemberGroupModel|null findOneByStart($val, array $opt=array())
 * @method static MemberGroupModel|null findOneByStop($val, array $opt=array())
 *
 * @method static Model\Collection|MemberGroupModel[]|MemberGroupModel|null findByTstamp($val, array $opt=array())
 * @method static Model\Collection|MemberGroupModel[]|MemberGroupModel|null findByName($val, array $opt=array())
 * @method static Model\Collection|MemberGroupModel[]|MemberGroupModel|null findByRedirect($val, array $opt=array())
 * @method static Model\Collection|MemberGroupModel[]|MemberGroupModel|null findByJumpTo($val, array $opt=array())
 * @method static Model\Collection|MemberGroupModel[]|MemberGroupModel|null findByDisable($val, array $opt=array())
 * @method static Model\Collection|MemberGroupModel[]|MemberGroupModel|null findByStart($val, array $opt=array())
 * @method static Model\Collection|MemberGroupModel[]|MemberGroupModel|null findByStop($val, array $opt=array())
 * @method static Model\Collection|MemberGroupModel[]|MemberGroupModel|null findMultipleByIds($val, array $opt=array())
 * @method static Model\Collection|MemberGroupModel[]|MemberGroupModel|null findBy($col, $val, array $opt=array())
 * @method static Model\Collection|MemberGroupModel[]|MemberGroupModel|null findAll(array $opt=array())
 *
 * @method static integer countById($id, array $opt=array())
 * @method static integer countByTstamp($val, array $opt=array())
 * @method static integer countByName($val, array $opt=array())
 * @method static integer countByRedirect($val, array $opt=array())
 * @method static integer countByJumpTo($val, array $opt=array())
 * @method static integer countByDisable($val, array $opt=array())
 * @method static integer countByStart($val, array $opt=array())
 * @method static integer countByStop($val, array $opt=array())
 *
 * @author Leo Feyer <https://github.com/leofeyer>
 */
class MemberGroupModel extends \Model
{

	/**
	 * Table name
	 * @var string
	 */
	protected static $strTable = 'tl_member_group';


	/**
	 * Find a published group by its ID
	 *
	 * @param integer $intId      The member group ID
	 * @param array   $arrOptions An optional options array
	 *
	 * @return MemberGroupModel|null The model or null if there is no member group
	 */
	public static function findPublishedById($intId, array $arrOptions=array())
	{
		$t = static::$strTable;
		$arrColumns = array("$t.id=?");

		if (isset($arrOptions['ignoreFePreview']) || !BE_USER_LOGGED_IN)
		{
			$time = \Date::floorToMinute();
			$arrColumns[] = "($t.start='' OR $t.start<='$time') AND ($t.stop='' OR $t.stop>'" . ($time + 60) . "') AND $t.disable=''";
		}

		return static::findOneBy($arrColumns, $intId, $arrOptions);
	}


	/**
	 * Find all active groups
	 *
	 * @param array $arrOptions An optional options array
	 *
	 * @return Model\Collection|MemberGroupModel|null A collection of models or null if there are no member groups
	 */
	public static function findAllActive(array $arrOptions=array())
	{
		$t = static::$strTable;
		$time = \Date::floorToMinute();

		return static::findBy(array("$t.disable='' AND ($t.start='' OR $t.start<='$time') AND ($t.stop='' OR $t.stop>'" . ($time + 60) . "')"), null, $arrOptions);
	}


	/**
	 * Find the first active group with a published jumpTo page
	 *
	 * @param string $arrIds An array of member group IDs
	 *
	 * @return MemberGroupModel|null The model or null if there is no matching member group
	 *
	 * @deprecated Deprecated since Contao 4.0, to be removed in Contao 5.0.
	 *             Use PageModel::findFirstActiveByMemberGroups() instead.
	 */
	public static function findFirstActiveWithJumpToByIds($arrIds)
	{
		@trigger_error('Using MemberGroupModel::findFirstActiveWithJumpToByIds() has been deprecated and will no longer work in Contao 5.0. Use PageModel::findFirstActiveByMemberGroups() instead.', E_USER_DEPRECATED);

		if (!is_array($arrIds) || empty($arrIds))
		{
			return null;
		}

		$time = \Date::floorToMinute();
		$objDatabase = \Database::getInstance();
		$arrIds = array_map('intval', $arrIds);

		$objResult = $objDatabase->prepare("SELECT p.* FROM tl_member_group g LEFT JOIN tl_page p ON g.jumpTo=p.id WHERE g.id IN(" . implode(',', $arrIds) . ") AND g.jumpTo>0 AND g.redirect='1' AND g.disable!='1' AND (g.start='' OR g.start<='$time') AND (g.stop='' OR g.stop>'" . ($time + 60) . "') AND p.published='1' AND (p.start='' OR p.start<='$time') AND (p.stop='' OR p.stop>'" . ($time + 60) . "') ORDER BY " . $objDatabase->findInSet('g.id', $arrIds))
								 ->limit(1)
								 ->execute();

		if ($objResult->numRows < 1)
		{
			return null;
		}

		return new static($objResult);
	}
}
