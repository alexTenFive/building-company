<?php


class Objects
{
    const OBJECTS_COUNT = 3;

    public static function getObjects()
    {
        $objects = [];

        $db = DB::getConnection();

        $query = "SELECT project_id,
                         client.cname AS cname,
                         ptype,
                         pname,
                         plocation,
                         pstart_date,
                         preal_finish_date,
                         pdescription,
                         image
                  FROM main.project 
                  INNER JOIN main.client AS client ON client.client_id = main.project.client_id";
        $query .= " LIMIT " . self::OBJECTS_COUNT;

        $res = $db->prepare($query);
        $res->execute();

        $i = 0;
        while ($row = $res->fetch()) {
            $objects[$i]['project_id'] = $row['project_id'];
            $objects[$i]['cname'] = $row['cname'];
            $objects[$i]['ptype'] = $row['ptype'];
            $objects[$i]['pname'] = $row['pname'];
            $objects[$i]['plocation'] = $row['plocation'];
            $objects[$i]['pstart_date'] = $row['pstart_date'];
            $objects[$i]['preal_finish_date'] = $row['preal_finish_date'];
            $objects[$i]['pdescription'] = $row['pdescription'];
            $objects[$i]['image'] = $row['image'];

            $i++;
        }

        return $objects;
    }
}