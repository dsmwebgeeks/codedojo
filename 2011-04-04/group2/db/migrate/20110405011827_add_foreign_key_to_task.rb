class AddForeignKeyToTask < ActiveRecord::Migration
  def self.up
    add_column :tasks, :user, :integer
  end

  def self.down
    remove_column :tasks, :user
  end
end
