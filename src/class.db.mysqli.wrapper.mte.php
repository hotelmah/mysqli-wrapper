<?php

namespace MySQLi;

require_once('class.db.mysqli.wrapper.base.php');

class ClsDataBaseMySqliMTE extends ClsDataBaseMySQLiBase
{
    public function getTableRecords(string $TempQuery): void
    {
        $this->MySQLiResultSet = $this->MySQLi->query($TempQuery);
    }

    public function deleteUpdateRecord(string $TempQuery): bool
    {
        return $this->MySQLi->real_query($TempQuery);
    }
}
