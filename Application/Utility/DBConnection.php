<?php

namespace Utility;

class DBConnection {

    public function __construct () {
        return new \PDO('mysql:host=' . getenv('DB_HOST'), getenv('DB_USER'), getenv('DB_PASSWORD'), [
            \PDO::MYSQL_ATTR_SSL_CA => getenv('DB_CERTIFICATE_LOCATION')
        ]);
    }

}
