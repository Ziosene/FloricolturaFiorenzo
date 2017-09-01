<?php

/**
 * Created by PhpStorm.
 * User: Lorenzo.Senesi
 * Date: 22/08/2017
 * Time: 15:16
 */
class PlannedMail
{
    private $id;
    private $oggetto;
    private $testo;
    private $sent;

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
    public function getOggetto()
    {
        return $this->oggetto;
    }

    /**
     * @param mixed $oggetto
     */
    public function setOggetto($oggetto)
    {
        $this->oggetto = $oggetto;
    }

    /**
     * @return mixed
     */
    public function getTesto()
    {
        return $this->testo;
    }

    /**
     * @param mixed $testo
     */
    public function setTesto($testo)
    {
        $this->testo = $testo;
    }

    /**
     * @return mixed
     */
    public function getSent()
    {
        return $this->sent;
    }

    /**
     * @param mixed $sent
     */
    public function setSent($sent)
    {
        $this->sent = $sent;
    }

    /**
     * @return mixed
     */

}