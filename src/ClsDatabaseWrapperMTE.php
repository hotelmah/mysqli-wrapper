<?php

namespace MySQLi;

class ClsDataBaseWrapperMTE extends ClsDataBaseWrapperBase
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
