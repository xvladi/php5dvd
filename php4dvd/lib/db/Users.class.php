<?php
require_once($loc . "lib/Database.class.php");
include_once($loc . "lib/db/User.class.php");

class Users extends Database { 	
	/**
	 * Save this user.
	 * @param User $user
	 */
	public function save($user) {
		$u = $this->database->load("users", $user->id);
		if(!$u)
			$u = $this->database->dispense("users");
		$this->fillObject($u, $user);
		$this->database->store($u);
		return $u->id;
	}

	/**
	 * Remove a user.
	 * @param User $user
	 */
	public function remove($user) {
		$u = $this->database->load("users", $user->id);
		if($u)
			$this->database->trash($u);
	}

	/**
	 * Get all users.
	 * @param string $sort
	 * @return all users from the database
	 */
	public function all($sort = "username") {
		$users = array();
		foreach($this->database->find("users", "1 ORDER BY `" . $sort . "`") as $user) {
			$users[] = $this->create($user);
		}
		return $users;
	}
	
	/**
	 * Create a class from the database item.
	 * @param $dbItem
	 */
	private function create($dbItem) {
		return $this->fillObject(new User(), $dbItem);
	}
	
	/**
	 * Get a user by its id.
	 * @param int $id
	 * @return the user or false when the user was not found
	 */
	public function get($id) {
		return $this->create($this->database->load("users", $id));
	}
	
	/**
	 * Get a user by its username.
	 * @param string $username
	 * @return the user or false when the user was not found
	 */
	public function getByName($username) {
		return $this->create($this->database->findOne('users', 'username = ?', array( $username )));
	}
	
	/**
	 * Get a user by its email address.
	 * @param string $email
	 * @return the user or fals when the user was not found
	 */
	public function getByEmail($email) {
		return $this->create($this->database->findOne('users', 'email = ?', array( $email )));
	}
	
	/**
	 * See if a user with this username already exists.
	 * @param string $username
	 * @param string $email
	 * @return true when the user exists, otherwise false
	 */
	public function existsUser($username, $email = "") {
		// By name
		$u = $this->getByName($username);
		if($u)
			return true;
		
		// By email
		if($email != "") {
			$u = $this->getByEmail($email);
			if($u)
				return true;
		}
		
		// Not found
		return false;
	}
	
	/**
	 * See how many users have this e-mail address currently in the database.
	 * @param string $email
	 * @return the number of users with this e-mail address currently in the database
	 */
	public function usersWithEmail($email) {
		$count = $this->database->getAll('select count(*) from users where email = :email', array(':email' => $email));
		return $count[0]["count(*)"];
	}
}

?>