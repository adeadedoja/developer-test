<?php
namespace App\Interfaces;

interface UserInterface
{
    /**
     * Return all users
     *
     * @return mixed
     */
    public function all();
    
    /**
     * Create a new user
     *
     * @param array $user
     * @return mixed
     */
    public function create(array $user);

    /**
     * Find user by id
     *
     * @param string $id
     * @return mixed
     */
    public function find(string $id);

    /**
     * Delete user with id
     *
     * @param string $id
     * @return mixed
     */
    public function delete(string $id);
}
