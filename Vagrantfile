Vagrant.configure("2") do |config|
  config.vm.box = "precise64"
  config.vm.box_url = "http://files.vagrantup.com/precise64.box"

  config.ssh.forward_agent = true

  # Use Chef and Berkshelf to manage application provisioning.
  config.berkshelf.enabled = true
  config.vm.provision :chef_solo do |chef|
    chef.add_recipe "postgresql::client"
    chef.add_recipe "postgresql::server"
    chef.add_recipe "postgresql::postgis"
    chef.json = {
      "postgresql" => {
        "version" => "9.1",
        "listen_addresses" => "*",
        "pg_hba" => [
          { "type" => "local", "db" => "all", "user" => "all", "addr" => "",          "method" => "trust" },
          { "type" => "host",  "db" => "all", "user" => "all", "addr" => "0.0.0.0/0", "method" => "md5"  }
        ],
        "users" => [
            {
              "username"  => "openurban",
              "password"  => "dingbat",
              "createdb"  => true,
              "login"     => true
            },
            {
              "username"  => "openurban_su",
              "password"  => "dingbat_su",
              "superuser" => true,
              "createdb"  => true,
              "login"     => true
            }
        ],
        "databases" => [
            {
              "name"     => "openurban_development",
              "owner"    => "openurban",
              "template" => "template0",
              "encoding" => "utf8",
              "locale"   => "en_US.UTF8",
              "postgis"  => true
            },
            {
              "name"     => "openurban_test",
              "owner"    => "openurban",
              "template" => "template0",
              "encoding" => "utf8",
              "locale"   => "en_US.UTF8",
              "postgis"  => true
            },
            {
              "name"     => "openurban_production",
              "owner"    => "openurban",
              "template" => "template0",
              "encoding" => "utf8",
              "locale"   => "en_US.UTF8",
              "postgis"  => true
            }
         ]
      }
    }
  end

  config.vm.network :forwarded_port, guest: 5432, host: 5432 # Postgres
  config.vm.network :forwarded_port, guest: 80,   host: 8080 # Web
end
