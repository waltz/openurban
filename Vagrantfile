Vagrant.configure("2") do |config|
  config.vm.box = "precise64"
  config.vm.box_url = "http://files.vagrantup.com/precise64.box"

  config.ssh.forward_agent = true

  # Use Chef and Berkshelf to manage application provisioning.
  config.berkshelf.enabled = true
  config.vm.provision :chef_solo do |chef|
    chef.add_recipe "apt"
    chef.add_recipe "postgis2"
    chef.json = {
      "postgresql" => {
        "password" => {
          "postgres" => "dingbat"
        }
      }
    }
  end

  config.vm.network :forwarded_port, guest: 5432, host: 5432 # Postgres
  config.vm.network :forwarded_port, guest: 80, host: 8080 # Web
end
