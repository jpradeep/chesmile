<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Profile Entity
 *
 * @property int $ID
 * @property int $user_id
 * @property string $Mobile
 * @property string $Address_1
 * @property string $Address_2
 * @property string $City
 * @property string $State
 * @property string $Country
 * @property int $Zipcode
 * @property string $Photo
 * @property \Cake\I18n\Time $Created
 * @property \Cake\I18n\Time $Modified
 *
 * @property \App\Model\Entity\User $user
 */
class Profile extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'ID' => false
    ];
}
