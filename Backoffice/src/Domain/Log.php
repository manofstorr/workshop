<?php

namespace Backoffice\Domain;

class Log
{

    private $id;

    private $app_source;

    private $title;

    private $message;

    private $date_emission;

    private $date_reception;

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
    public function getAppSource()
    {
        return $this->app_source;
    }

    /**
     * @param mixed $app_source
     */
    public function setAppSource($app_source)
    {
        $this->app_source = $app_source;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getDateEmission()
    {
        return $this->date_emission;
    }

    /**
     * @param mixed $date_emission
     */
    public function setDateEmission($date_emission)
    {
        $this->date_emission = $date_emission;
    }

    /**
     * @return mixed
     */
    public function getDateReception()
    {
        return $this->date_reception;
    }

    /**
     * @param mixed $date_reception
     */
    public function setDateReception($date_reception)
    {
        $this->date_reception = $date_reception;
    }


}