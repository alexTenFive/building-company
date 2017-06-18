<?php


class Objects
{
    const OBJECTS_COUNT = 12;

    public static function getObjects($count = self::OBJECTS_COUNT, $page = 1)
    {
        $count = intval($count);

        $objects = [];

        $offset = $count * ($page - 1);
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
        $query .= " LIMIT " . $count . " OFFSET " . $offset;

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

    public static function getTotalObjects()
    {
        $total = 0;

        $db = DB::getConnection();

        $query = "SELECT COUNT(*) AS count FROM main.project";

        $res = $db->prepare($query);
        $res->execute();
        $row = $res->fetch();
        $total = $row['count'];

        return $total;
    }
}