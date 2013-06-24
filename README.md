# OpenUrban

OpenUrban is a non-profit user generated web map and wiki focused on proposed and current urban development around the world. Its purpose is to help people understand how their cities and communities are changing and support their active participation in that change.

The Lebbeus branch of OpenUrban is a rebuild of the project in Ruby on Rails and Postgis. 


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

1. Install the most recent version of Vagrant by following the [Vagrant installation instructions](http://docs.vagrantup.com/v2/installation/).

2. Install [Berkshelf](http://berkshelf.com/) for managing Chef cookbooks by running the command:

    `vagrant plugin install vagrant-berkshelf`

3. Boot up the Vagrant instance by using the command:

    `vagrant up`
