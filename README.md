# OpenUrban

OpenUrban is a non-profit user generated web map and wiki focused on proposed and current urban development around the world. Its purpose is to help people understand how their cities and communities are changing and support their active participation in that change.

The Lebbeus branch of OpenUrban is a rebuild of the project in Ruby on Rails and Postgis. 


## Contribution

If you're interested in contributing you can find us on twitter @waltz  @rduecyg or @open_urban


## Development

We rely on Vagrant, Chef and Berkshelf for managing development environments.

1. Install [VirtualBox](https://www.virtualbox.org/wiki/Downloads). Version 4.2.10 seems to work best as of 6/23/13

2. Install the most recent version of Vagrant by following the [Vagrant installation instructions](http://docs.vagrantup.com/v2/installation/).

3. Install [Berkshelf](http://berkshelf.com/) for managing Chef cookbooks by running the command:

    `$ vagrant plugin install vagrant-berkshelf`

4. Boot up the Vagrant instance by using the command:

    `$ vagrant up`
    
4. Connect to your local development environment.

    `$ vagrant ssh`
    
5. Find the code in the development machine.

    `$ cd openurban`
    
6. Get all of your extra-special Ruby gems installed.

    `$ bundle`
    
7. Spin up the extra-neat GIS features that the database has.

    `$ rake db:gis:setup`
    
9. Run the database migrations to get all the right columns there.

    `$ rake db:migrate`
    
10. Boot up the Rails web server.

    `$ rails server`
    
11. Open up `http://localhost:8080` in your favorite web browser and enjoy!
