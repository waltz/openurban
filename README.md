# ![OpenUrban Logo](https://raw.github.com/waltz/openurban/master/skins/openurbane/images/OU_LockUp_with_logo.png "OpenUrban")

OpenUrban is a non-profit user generated web map and wiki focused on proposed and current urban development around the world. Its purpose is to help people understand how their cities and communities are changing and support their active participation in that change.

## Development Setup

1. Download the latest version of [Vagrant](http://www.vagrantup.com/).
2. Clone this repository into a nice, cozy place on your computer.
3. Copy the `sample.env` file to `.env` and fill in the blanks.
4. Run the command `vagrant up` inside the repository you just cloned.
5. Browse to `http://localhost:8080` in your favorite browser and see your very own version of OpenUrban!

### Requirements
OpenUrban is built on <a href="http://www.mediawiki.org/wiki/MediaWiki">MediaWiki</a> (1.19.2), <a href="http://semantic-mediawiki.org/">Semantic Mediawiki</a> and <a href="http://www.mediawiki.org/wiki/Semantic_Bundle">related Semantic Mediawiki extensions</a>. The site uses a LAMP stack, currently:
<ul>
<li>PHP	5.3.10-1ubuntu3.6 (apache2handler)<?li>
<li>MySQL	5.5.29-0ubuntu0.12.04.2</li>
</ul>


##Contributing
Any code developed for OpenUrban will be integrated back into the Semantic Mediawiki code base.

You can contribute code in two ways:

<ol>
<li>Making pull requests for the code that resides on Github. This includes the skin and various Semantic Mediawiki extensions.</li>
<li>At the wiki markup level, which is where much of the front end design and development occurs. <br>If you would like to contribute to this part of the project you can either:
<ul>
<li>request administrative priviledges on the wiki by sending an email to reed [at] openurban [dot] com (recommended)</li>
<li>create a local version of OpenUrban and submit code revisions via Github's issue tracker</li>
</ul>
</li>
</ol>

##Contact
If you want to give us a heads up about some part of the code use <a href="https://github.com/waltz/openurban/issues">Github Issues</a>.

You can also tweet at us:
<ul>
<li>CJ Bryan (Dev/Back-end) <a href="https://twitter.com/waltz">https://twitter.com/waltz</a></li>
<li>Reed Duecy-Gibbs (Design/Front-end) <a href="https://twitter.com/rduecyg">https://twitter.com/rduecyg</a></li>
</ul>


##License 
Open source under the GPL license version 2.



