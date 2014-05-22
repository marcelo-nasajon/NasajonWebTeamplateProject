<?php

namespace Nasajon\CalendarioBundle\Provider;

use AerialShip\SamlSPBundle\Bridge\SamlSpInfo;
use AerialShip\SamlSPBundle\Security\Core\User\UserManagerInterface;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Nasajon\CalendarioBundle\Entity\User;

class SamlProvider implements UserManagerInterface
{



    /**
     * @param SamlSpInfo $samlInfo
     * @return UserInterface
     * @throws UsernameNotFoundException if the user is not found
     */
    public function loadUserBySamlInfo(SamlSpInfo $samlInfo) {
	  //throw new UsernameNotFoundException();
	  
	  return new User($samlInfo->getAttributes()['uid']->getFirstValue(),'',array('ROLE_USER'));
	  
    }

    /**
     * @param SamlSpInfo $samlInfo
     * @throws \Symfony\Component\Security\Core\Exception\UsernameNotFoundException if the user could not created
     * @return \Symfony\Component\Security\Core\User\UserInterface
     */
    public function createUserFromSamlInfo(SamlSpInfo $samlInfo) {
        var_dump($samlInfo);
	  die('2');
    }

    /**
     * Loads the user for the given username.
     *
     * This method must throw UsernameNotFoundException if the user is not
     * found.
     *
     * @param string $username The username
     *
     * @return UserInterface
     *
     * @see UsernameNotFoundException
     *
     * @throws UsernameNotFoundException if the user is not found
     *
     */
    public function loadUserByUsername($username) {
        var_dump($username);
	  die('3');
    }


/**
     * Refreshes the user for the account interface.
     *
     * It is up to the implementation to decide if the user data should be
     * totally reloaded (e.g. from the database), or if the UserInterface
     * object can just be merged into some internal array of users / identity
     * map.
     * @param UserInterface $user
     *
     * @return UserInterface
     *
     * @throws UnsupportedUserException if the account is not supported
     */
    public function refreshUser(UserInterface $user) {
	var_dump($user);
        return $user;
    }

    /**
     * Whether this provider supports the given user class
     *
     * @param string $class
     *
     * @return Boolean
     */
    public function supportsClass($class) {
        return $this->userProvider->supportsClass($class);
    }
}
