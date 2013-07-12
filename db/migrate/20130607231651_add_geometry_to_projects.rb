class AddGeometryToProjects < ActiveRecord::Migration
  def change
    change_table :projects do |p|
      p.multi_polygon :geometry, :geographic => true
      p.index         :geometry, :spatial => true
    end
  end
end
