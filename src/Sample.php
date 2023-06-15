<?php

final class Sample
{
    public function run()
    {
        return 5;

        // we never get here
        return 10;
    }

    public function run2()
    {
        $array = [1, 2, 3];
        return implode($array, ',');
    }

    public function run3()
    {
        $result = new PgSql\Result;
       return pg_numrows($result);
    }

    public function run4() : string
    {
        return aaa;
    }
}