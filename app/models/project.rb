# == Schema Information
#
# Table name: projects
#
#  id         :integer          not null, primary key
#  title      :string(255)
#  body       :text
#  created_at :datetime
#  updated_at :datetime
#  geometry   :spatial({:srid=>
#

class Project < ActiveRecord::Base
  attr_accessible :title, :body
  validates_presence_of :title, :body
end
