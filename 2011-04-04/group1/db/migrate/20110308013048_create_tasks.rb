class CreateTasks < ActiveRecord::Migration
  def self.up
    create_table :tasks do |t|
      t.string :description
      t.boolean :is_completed
      t.datetime :due_date

      t.timestamps
    end
  end

  def self.down
    drop_table :tasks
  end
end
