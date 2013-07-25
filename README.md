# OpenUrban

OpenUrban is a non-profit user generated web map and wiki focused on proposed and current urban development around the world. Its purpose is to help people understand how their cities and communities are changing and support their active participation in that change.

The site uses <a href="http://semantic-mediawiki.org/">Semantic Mediawiki</a> and <a href="http://www.mediawiki.org/wiki/Semantic_Bundle">related extensions</a>. Any code developed for OpenUrban is integrated back into the Semantic Mediawiki code base.


## Contribution

Because OpenUrban is a wiki people can contribute code in two ways:

1) Making pull requests for the code that resides on Github. This includes the skin and various Semantic Mediawiki extensions.

2) At the wiki markup level. This is where much of the front end design and development occurs. If you would like to contribute to this part of the project you can either:
<ul>
<li>request administrative priviledges on the wiki by sending an email to reed [at] openurban [dot] com (recommended)</li>
<li>create a local version of OpenUrban and submit code revisions via Github's issue tracker (not recommended)</li>
</ul>

*the best system for modifiying code at the wiki markup level is still being worked out...


## Development

We rely on Vagrant, Chef and Berkshelf for managing development environments.

1. Follow the [Vagrant installation instructions](http://docs.vagrantup.com/v2/installation/).

2. Install [Berkshelf](http://berkshelf.com/) for managing Chef cookbooks.

    `$ vagrant plugin install vagrant-berkshelf`

3. Boot up the Vagrant instance.

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
