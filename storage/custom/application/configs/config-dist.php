<?php
// PHP PEAR DB compatible database engine:
// mysql, mysqli, pgsql, odbc and others supported by PHP PEAR DB
$core_config['db']['type'] = 'mysqli';		// database engine
$core_config['db']['host'] = '#DBHOST#';	// database host/server
$core_config['db']['port'] = '#DBPORT#';	// database port
$core_config['db']['user'] = '#DBUSER#';	// database username
$core_config['db']['pass'] = '#DBPASS#';	// database password
$core_config['db']['name'] = '#DBNAME#';	// database name

// alternatively you can pass DSN and connect options
// ref:
// - http://pear.php.net/manual/en/package.database.db.intro-dsn.php
// - http://pear.php.net/manual/en/package.database.db.intro-connect.php
//$core_config['db']['dsn'] = 'mysql://root:password@localhost/playsms';
//$core_config['db']['options'] = $options = array('debug' => 2, 'portability' => DB_PORTABILITY_ALL);

// SMTP configuration
$core_config['smtp']['relm'] = ''; // yes, not realm, it's relm
$core_config['smtp']['user'] = '';
$core_config['smtp']['pass'] = '';
$core_config['smtp']['host'] = 'localhost';
$core_config['smtp']['port'] = '25';
$core_config['smtp']['secure'] = 'no'; // no, tls, ssl, default no


// Do not change anything below this line unless you know what to do
// -----------------------------------------------------------------


// you can turn on or off PHP error reporting, the default it's off
error_reporting(0);
//error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
//error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING & ~E_STRICT);

// log level: 0=disabled, 1=info, 2=warning, 3=debug, 4=verbose
// WARNING: log level 3 and 4 will also save sensitive information such as password for used gateway
$core_config['logstate']	= 3;

// log file
$core_config['logfile']		= 'base.log';

// WARNING: will log almost anything but passwords
$core_config['logaudit']	= true;

// log audit file
$core_config['logauditfile']	= 'audit.log';

// are we using http or https ? the default is using https
$core_config['ishttps']		= true;

// are we using dlrd or not. the default is using dlrd
$core_config['isdlrd']		= true;

// limit the number of DLR processed by dlrd in one time
$core_config['dlrd_limit']	= 1000;

// are we using recvsmsd or not. the default is using recvsmsd
$core_config['isrecvsmsd']	= true;

// limit the number of incoming SMS processed by recvsmsd in one time
$core_config['recvsmsd_limit']	= 1000;

// are we using sendsmsd or not. the default is using sendsmsd
$core_config['issendsmsd']	= true;

// limit the number of queue processed by sendsmsd in one time
$core_config['sendsmsd_queue']	= 10;

// limit the number of chunk per queue
$core_config['sendsmsd_chunk']	= 20;

// chunk size
$core_config['sendsmsd_chunk_size'] = 100;

// webservices require username
$core_config['webservices_username']	= false;
