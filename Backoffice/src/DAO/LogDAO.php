<?php

namespace Backoffice\DAO;

use Doctrine\DBAL\Connection;
use Backoffice\Domain\Log;

class LogDAO
{
    /**
     * Database connection
     *
     * @var \Doctrine\DBAL\Connection
     */
    private $db;

    /**
     * Constructor
     *
     * @param \Doctrine\DBAL\Connection The database connection object
     */
    public function __construct(Connection $db) {
        $this->db = $db;
    }

    /**
     * Return a list of all logs,
     *
     * @return array A list of all logs.
     */
    public function findAll() {
        $sql = "select * from bo_logs order by id desc";
        $result = $this->db->fetchAll($sql);

        // Convert query result to an array of domain objects
        $logs = array();
        foreach ($result as $row) {
            $logid = $row['id'];
            $logs[$logid] = $this->buildLog($row);
        }
        return $logs;
    }

    private function buildLog(array $row) {
        $log = new Log();
        $log->setId($row['id']);
        $log->setTitle($row['title']);
        $log->setMessage($row['message']);
        return $log;
    }
}
