<?php

namespace Core\Entity\Proxy;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class CoreEntityUserProxy extends \Core\Entity\User implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    private function _load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    
    public function getId()
    {
        $this->_load();
        return parent::getId();
    }

    public function getUsername()
    {
        $this->_load();
        return parent::getUsername();
    }

    public function setUsername($username)
    {
        $this->_load();
        return parent::setUsername($username);
    }

    public function getLogin()
    {
        $this->_load();
        return parent::getLogin();
    }

    public function getEmail()
    {
        $this->_load();
        return parent::getEmail();
    }

    public function setEmail($email)
    {
        $this->_load();
        return parent::setEmail($email);
    }

    public function getScoutname()
    {
        $this->_load();
        return parent::getScoutname();
    }

    public function setScoutname($scoutname)
    {
        $this->_load();
        return parent::setScoutname($scoutname);
    }

    public function getFirstname()
    {
        $this->_load();
        return parent::getFirstname();
    }

    public function setFirstname($firstname)
    {
        $this->_load();
        return parent::setFirstname($firstname);
    }

    public function getSurname()
    {
        $this->_load();
        return parent::getSurname();
    }

    public function setSurname($surname)
    {
        $this->_load();
        return parent::setSurname($surname);
    }

    public function getStreet()
    {
        $this->_load();
        return parent::getStreet();
    }

    public function setStreet($street)
    {
        $this->_load();
        return parent::setStreet($street);
    }

    public function getZipcode()
    {
        $this->_load();
        return parent::getZipcode();
    }

    public function setZipcode($zipcode)
    {
        $this->_load();
        return parent::setZipcode($zipcode);
    }

    public function getCity()
    {
        $this->_load();
        return parent::getCity();
    }

    public function setCity($city)
    {
        $this->_load();
        return parent::setCity($city);
    }

    public function getHomeNr()
    {
        $this->_load();
        return parent::getHomeNr();
    }

    public function setHomeNr($homeNr)
    {
        $this->_load();
        return parent::setHomeNr($homeNr);
    }

    public function getMobilNr()
    {
        $this->_load();
        return parent::getMobilNr();
    }

    public function setMobilNr($mobilNr)
    {
        $this->_load();
        return parent::setMobilNr($mobilNr);
    }

    public function getBirthday()
    {
        $this->_load();
        return parent::getBirthday();
    }

    public function setBirthday($birthday)
    {
        $this->_load();
        return parent::setBirthday($birthday);
    }

    public function getAHV()
    {
        $this->_load();
        return parent::getAHV();
    }

    public function setAHV($ahv)
    {
        $this->_load();
        return parent::setAHV($ahv);
    }

    public function getGender()
    {
        $this->_load();
        return parent::getGender();
    }

    public function setGender($gender)
    {
        $this->_load();
        return parent::setGender($gender);
    }

    public function getJsPersNr()
    {
        $this->_load();
        return parent::getJsPersNr();
    }

    public function setJsPersNr($jsPersNr)
    {
        $this->_load();
        return parent::setJsPersNr($jsPersNr);
    }

    public function getJsEdu()
    {
        $this->_load();
        return parent::getJsEdu();
    }

    public function setJsEdu($jsEdu)
    {
        $this->_load();
        return parent::setJsEdu($jsEdu);
    }

    public function getPbsEdu()
    {
        $this->_load();
        return parent::getPbsEdu();
    }

    public function setPbsEdu($pbsEdu)
    {
        $this->_load();
        return parent::setPbsEdu($pbsEdu);
    }

    public function getRole()
    {
        $this->_load();
        return parent::getRole();
    }

    public function setRole($role)
    {
        $this->_load();
        return parent::setRole($role);
    }

    public function getState()
    {
        $this->_load();
        return parent::getState();
    }

    public function setState($state)
    {
        $this->_load();
        return parent::setState($state);
    }

    public function getImageData()
    {
        $this->_load();
        return parent::getImageData();
    }

    public function setImageData($data)
    {
        $this->_load();
        return parent::setImageData($data);
    }

    public function getImageMime()
    {
        $this->_load();
        return parent::getImageMime();
    }

    public function setImageMime($mime)
    {
        $this->_load();
        return parent::setImageMime($mime);
    }

    public function delImage()
    {
        $this->_load();
        return parent::delImage();
    }

    public function getUsergroups()
    {
        $this->_load();
        return parent::getUsergroups();
    }

    public function getMyCamps()
    {
        $this->_load();
        return parent::getMyCamps();
    }

    public function getDisplayName()
    {
        $this->_load();
        return parent::getDisplayName();
    }

    public function getFullName()
    {
        $this->_load();
        return parent::getFullName();
    }

    public function createNewActivationCode()
    {
        $this->_load();
        return parent::createNewActivationCode();
    }

    public function checkActivationCode($activationCode)
    {
        $this->_load();
        return parent::checkActivationCode($activationCode);
    }

    public function activateUser($activationCode)
    {
        $this->_load();
        return parent::activateUser($activationCode);
    }

    public function resetActivationCode()
    {
        $this->_load();
        return parent::resetActivationCode();
    }

    public function isMale()
    {
        $this->_load();
        return parent::isMale();
    }

    public function isFemale()
    {
        $this->_load();
        return parent::isFemale();
    }

    public function getAcceptedUserCamps()
    {
        $this->_load();
        return parent::getAcceptedUserCamps();
    }

    public function getRelationshipFrom()
    {
        $this->_load();
        return parent::getRelationshipFrom();
    }

    public function getRelationshipTo()
    {
        $this->_load();
        return parent::getRelationshipTo();
    }

    public function sentFriendshipRequestTo($user)
    {
        $this->_load();
        return parent::sentFriendshipRequestTo($user);
    }

    public function receivedFriendshipRequestFrom($user)
    {
        $this->_load();
        return parent::receivedFriendshipRequestFrom($user);
    }

    public function isFriendOf($user)
    {
        $this->_load();
        return parent::isFriendOf($user);
    }

    public function sendFriendshipRequestTo($user)
    {
        $this->_load();
        return parent::sendFriendshipRequestTo($user);
    }

    public function acceptFriendshipRequestFrom($user)
    {
        $this->_load();
        return parent::acceptFriendshipRequestFrom($user);
    }

    public function ignoreFriendshipRequestFrom($user)
    {
        $this->_load();
        return parent::ignoreFriendshipRequestFrom($user);
    }

    public function canIAdd($user)
    {
        $this->_load();
        return parent::canIAdd($user);
    }

    public function divorceFrom($user)
    {
        $this->_load();
        return parent::divorceFrom($user);
    }

    public function getMemberships()
    {
        $this->_load();
        return parent::getMemberships();
    }

    public function sendMembershipRequestTo($group)
    {
        $this->_load();
        return parent::sendMembershipRequestTo($group);
    }

    public function deleteMembershipWith($group)
    {
        $this->_load();
        return parent::deleteMembershipWith($group);
    }

    public function getAcceptedUserGroups()
    {
        $this->_load();
        return parent::getAcceptedUserGroups();
    }

    public function canRequestMembership($group)
    {
        $this->_load();
        return parent::canRequestMembership($group);
    }

    public function isManagerOf($group)
    {
        $this->_load();
        return parent::isManagerOf($group);
    }

    public function isMemberOf($group)
    {
        $this->_load();
        return parent::isMemberOf($group);
    }

    public function hasOpenRequest($group)
    {
        $this->_load();
        return parent::hasOpenRequest($group);
    }

    public function getManagedGroups()
    {
        $this->_load();
        return parent::getManagedGroups();
    }

    public function PrePersist()
    {
        $this->_load();
        return parent::PrePersist();
    }

    public function PreUpdate()
    {
        $this->_load();
        return parent::PreUpdate();
    }

    public function getUpdatedAt()
    {
        $this->_load();
        return parent::getUpdatedAt();
    }

    public function getCreatedAt()
    {
        $this->_load();
        return parent::getCreatedAt();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'createdAt', 'updatedAt', 'id', 'username', 'email', 'activationCode', 'scoutname', 'firstname', 'surname', 'street', 'zipcode', 'city', 'homeNr', 'mobilNr', 'birthday', 'ahv', 'gender', 'jsPersNr', 'jsEdu', 'pbsEdu', 'imageMime', 'imageData', 'state', 'role', 'mycamps', 'login', 'userCamps', 'userGroups', 'relationshipFrom', 'relationshipTo');
    }
}