<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\NikonCustom;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class MovieSubSelectorAssignment extends AbstractTag
{

    protected $Id = '48.2';

    protected $Name = 'MovieSubSelectorAssignment';

    protected $FullName = 'NikonCustom::SettingsD4';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Movie Sub Selector Assignment';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'None',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Index Marking',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'AE/AF Lock',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'AE Lock Only',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'AE Lock (hold)',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'AF Lock Only',
        ),
        6 => array(
            'Id' => 6,
            'Label' => 'View Photo Shooting Info',
        ),
    );

}
