<?php

/**
 * Created by PhpStorm.
 * User: Lorenzo.Senesi
 * Date: 22/08/2017
 * Time: 15:16
 */
class Newsletter
{
    private $id;
    private $email;
    private $nomeCognome;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getNomeCognome()
    {
        return $this->nomeCognome;
    }

    /**
     * @param mixed $nomeCognome
     */
    public function setNomeCognome($nomeCognome)
    {
        $this->nomeCognome = $nomeCognome;
    }


}