# get openurban running

include stdlib
#include apache

# php

include php::cli
include php::mod_php5

php::ini { '/etc/php.ini':
  display_errors => 'On',
  memory_limit   => '256M',
}

# class { 'php::mod_php5': }

# class { 'php::mod_php5': inifile => '/etc/httpd/conf/php.ini' }

# apache

class { 'apache':
  mpm_module => 'prefork'
}

apache::vhost { $fqdn :
  priority           => '20',
  port               => '80',
  docroot            => $docroot
  # configure_firewall => false
}

apache::mod { 'rewrite': }
apache::mod { 'php': }

# class { 'apache::mod::php': }

# a2mod { 'rewrite':
#   ensure => present
# }

# mysql

class { 'mysql::server':
  config_hash => {
    root_password => 'openurbanroot',
    bind_address  => '0.0.0.0'
  }
}

class { 'mysql::php': }

mysql::db { 'openurban-mediawiki':
  user     => 'openurban',
  password => 'openurbanuser',
  host     => '10.0.%.%',
  grant    => ['all'],
}

database_user { 'openurban@localhost':
  password_hash => mysql_password('openurbanuser')
} 

database_grant { 'openurban@localhost/openurban-mediawiki':
  privileges => ['all']
}
