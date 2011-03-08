Given /^data is set up$/ do
  Task.create :name => 'Learn Ruby', :description => 'Read the PickAxe book'
  Task.create :name => 'Attend Iowa Ruby Brigade meeting', :description => '3rd Tuesday at Foundry Coworking'
end
