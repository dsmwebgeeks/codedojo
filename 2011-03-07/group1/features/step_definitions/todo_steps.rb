Then /^I should see my todo list$/ do
  page.should have_content 'Tasks'
  page.should have_content 'Learn Ruby'
end
