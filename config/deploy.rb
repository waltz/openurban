# load configuration from the .env file.
require "dotenv"
Dotenv.load

# enable multiple stage support
set :stages, %w(production staging)
set :default_stage, "staging"
require 'capistrano/ext/multistage'

set(:server_host) { ENV[stage.to_s.upcase + "_HOST"] }

# default_run_options[:pty] = true
set :application, "OpenUrban"
set :repository,  "https://github.com/waltz/openurban.git"
set :user, "deploybot"
set :ssh_options, { :forward_agent => true }
set :use_sudo, false
set :scm, :git
set :branch, "master"
set :deploy_via, :remote_cache
role (:web)                       { server_host }
role (:app)                       { server_host }
role (:db) { [server_host, {:primary => true}] }

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
    dir = "#{release_path}/extensions/Widgets/compiled_templates"
    puts "permissions for #{dir}"
    run "chgrp www-data #{dir}"
  end
  after "deploy:update_code", "custom:chmod_template_dir"

  desc 'Write a config .env file in the shared path'
  task :write_env, :roles => :app do
    config_stage = stage.upcase.to_s
    env_file = <<foo
DB_HOST=#{ENV[config_stage + "_DB_HOST"]}
DB_NAME=#{ENV[config_stage + "_DB_NAME"]}
DB_USER=#{ENV[config_stage + "_DB_USER"]}
DB_PASSWORD=#{ENV[config_stage + "_DB_PASSWORD"]}
foo

    # run "mkdir -p #{shared_path}/config"
    put env_file, "#{latest_release}/.env"
    puts "Wrote new environment settings."
    puts env_file
  end
  after 'deploy:update_code', 'custom:write_env'
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
