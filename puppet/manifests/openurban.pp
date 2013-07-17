# get openurban running

# apache

class { 'apache':
  mpm_module    => 'prefork',
  default_vhost => false,
}

apache::vhost { $fqdn :
  priority           => '20',
  port               => '80',
  docroot            => $docroot
}

include apache::mod::rewrite
include apache::mod::php

# mysql

class { 'mysql::server':
  config_hash => {
    root_password => 'openurbanroot',
    bind_address  => '0.0.0.0'
  }
}

include 'mysql::php'

mysql::db { 'openurban-mediawiki':
  user     => 'openurban',
  password => 'openurbandevelopment',
  host     => 'localhost',
  grant    => ['all'],
}
