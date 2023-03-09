<?php

namespace Application\api\services;


use Exception;

class DataService
{
    /**
     * @throws Exception
     */
    static public function getAllUsers()
    {
        $path = "src/storage/users.csv";
        if (file_exists($path)) {
            $file = file_get_contents($path);
            $users = explode(PHP_EOL, $file);
            // array_splice($users,0,1);
            unset($users[0]);
            return $users;
            //die(var_dump($users));
        } else return throw new Exception("File not found");

    }

    /**
     * @throws Exception
     */
    static public function getUser(): array
    {
        $users = self::getAllUsers();
        foreach ($users as $user) {
            $usersExpl[] = explode(";", $user);
        }
        return $usersExpl;
        //die(var_dump($usersExpl));
    }

    /**
     * @throws Exception
     */
   static public function getIds(): array {
        $users = self::getAllUsers();
        foreach($users as $key=>$user) {
            $ids [] = $key;
        }
        //die(var_dump($ids));
        return $ids;
    }
    /**
     * @throws Exception
     */
    static function getUserById(int $id)
    {
        $users = self::getUser();
        $id = $id - 1;
        if (array_key_exists($id,$users)) {
            return $users[$id];
        }
        else return [];
    }

    /**
     * @throws Exception
     */
    static public function getUserFIO(): array
    {
        $user = self::getUser();
        foreach ($user as $value) {
            $userFIO [] = $value[1] . " " . $value[2];

        }
        return $userFIO;
        //die(var_dump($userFIO->));
    }

}