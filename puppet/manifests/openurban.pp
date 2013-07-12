# get openurban running

include stdlib
include apache

class { 'apache::mod::php': }

apache::vhost { $fqdn :
  priority           => '20',
  port               => '80',
  docroot            => $docroot,
  configure_firewall => false
}

a2mod { 'rewrite':
  ensure => present
}

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
