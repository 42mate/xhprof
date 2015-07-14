<?php

$_xhprof = array();

// Change these:
$_xhprof['dbtype'] = 'mysql'; // Only relevant for PDO
$_xhprof['dbhost'] = 'localhost';
$_xhprof['dbuser'] = 'root';
$_xhprof['dbpass'] = 'password';
$_xhprof['dbname'] = 'xhprof';
$_xhprof['servername'] = 'myserver';
$_xhprof['namespace'] = 'myapp';
$_xhprof['url'] = 'http://url/to/xhprof/xhprof_html';

/**
 * MySQL/MySQLi/PDO ONLY
 * Switch to JSON for better performance and support for larger profiler data sets.
 * WARNING: Will break with existing profile data, you will need to TRUNCATE the profile data table.
 */
$_xhprof['serializer'] = 'php';

$ignoreURLs = array();
$ignoreDomains = array();
$exceptionURLs = array();
$exceptionPostURLs = array();
$exceptionPostURLs[] = "login";
$_xhprof['display'] = FALSE;
$_xhprof['doprofile'] = FALSE;

$_xhprof['dot_binary']  = '/usr/bin/dot';
$_xhprof['dot_tempdir'] = '/tmp';
$_xhprof['dot_errfile'] = '/tmp/xh_dot.err';

/**
 * Control IPs allow you to specify which IPs will be permitted to control when profiling is on or off
 * within your application, and view the results via the UI.
 * $controlIPs = false; //Disables access controls completely.
 */
$controlIPs = array();
$controlIPs[] = "127.0.0.1"; // localhost, you'll want to add your own ip here
$controlIPs[] = "::1"; // localhost IP v6

/**
 * ignore builtin functions and call_user_func* during profiling
 * $ignoredFunctions = array('call_user_func', 'call_user_func_array', 'socket_select');
 */
$ignoredFunctions = array();

/**
 * Default weight - can be overridden by an Apache environment variable 'xhprof_weight' for domain-specific values
 */
$weight = 100;
