Vagrant::Config.run do |config|
  config.vm.box = "precise64"
  config.vm.box_url = "http://files.vagrantup.com/precise64.box"
  config.vm.network :hostonly, "10.11.12.13"

  config.vm.forward_port 80,   8080 # http  
  
  config.vm.share_folder "app",
                         "/var/www/openurban",
                         ".",
                         :owner => "www-data",
                         :group => "www-data"

  # Set the Timezone to something useful
  config.vm.provision :shell, :inline => "echo \"Europe/London\" | sudo tee /etc/timezone && dpkg-reconfigure --frontend noninteractive tzdata"

  # Update the server
  config.vm.provision :shell, :inline => "apt-get update --fix-missing"

  # Enable Puppet
  config.vm.provision :puppet do |puppet|
      puppet.facter = {
         "fqdn"     => "openurban.dev",
         "docroot"  => "/var/www/openurban",
         "hostname" => "openurban-www"
      } 
      puppet.module_path    = "puppet/modules"
      puppet.manifests_path = "puppet/manifests"
      puppet.manifest_file  = "openurban.pp"
  end
end
