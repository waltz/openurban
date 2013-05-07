# load configuration from the .env file.
require "dotenv"
Dotenv.load

# default_run_options[:pty] = true
set :application, "OpenUrban"
set :repository,  "https://github.com/waltz/openurban.git"
set :user, "deploybot"
set :ssh_options, { :forward_agent => true }
set :use_sudo, false
set :scm, :git # You can set :scm explicitly or Capistrano will make an intelligent guess based on known version control directory names
# Or: `accurev`, `bzr`, `cvs`, `darcs`, `git`, `mercurial`, `perforce`, `subversion` or `none`
set :branch, "master"
set :deploy_via, :remote_cache
set :deploy_to, "/var/www/openurban-staging"
role :web, ENV["SERVER_HOST"]                          # Your HTTP server, Apache/etc
role :app, ENV["SERVER_HOST"]                           # This may be the same as your `Web` server
role :db,  ENV["SERVER_HOST"], :primary => true # This is where Rails migrations will run

# if you want to clean up old releases on each deploy uncomment this:
# after "deploy:restart", "deploy:cleanup"

# if you're still using the script/reaper helper you will need
# these http://github.com/rails/irs_process_scripts

# If you are using Passenger mod_rails uncomment this:
# namespace :deploy do
#   task :start do ; end
#   task :stop do ; end
#   task :restart, :roles => :app, :except => { :no_release => true } do
#     run "#{try_sudo} touch #{File.join(current_path,'tmp','restart.txt')}"
#   end
# end

namespace :custom do
  desc "Link the shared images folder in to the app."
  task :link_images, :roles => :app do
    run <<-CMD
      ln -nfs #{shared_path}/images #{release_path}/images
    CMD
  end
  after "deploy:update_code", "custom:link_images"

  desc "chmod the template compilation dir after deploy"
  task :chmod_template_dir, :roles => :app do
    run "chgrp www-data #{deploy_to}/#{current_dir}"
  end
  # after "deploy:update_code", "chmod_template_dir"

  desc 'Generate a config .env file in the shared path'
  task :generate_env, :roles => :app do
    env_file = ""
    env_file += "DB_HOST=localhost\n"
    env_file += "DB_NAME=#{ENV['SERVER_DB_NAME']}\n"
    env_file += "DB_USER=#{ENV["SERVER_DB_USER"]}\n"
    env_file += "DB_PASSWORD=#{ENV["SERVER_DB_PASSWORD"]}"

    # run "mkdir -p #{shared_path}/config"
    put env_file, "#{latest_release}/.env"
    puts "wrote env"
    puts env_file
  end
  after 'deploy:update_code', 'custom:generate_env'
end

# Override default tasks which are not relevant to a non-rails app.
namespace :deploy do
  task :migrate do
    puts "    not doing migrate because not a Rails application."
  end
  task :finalize_update do
    puts "    not doing finalize_update because not a Rails application."
  end
  task :start do
    puts "    not doing start because not a Rails application."
  end
  task :stop do 
    puts "    not doing stop because not a Rails application."
  end
  task :restart do
    puts "    not doing restart because not a Rails application."
  end
end
