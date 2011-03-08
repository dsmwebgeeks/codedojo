Feature: Maintain todo list
  As a user of the todo list application
  I want to maintain my todo list
  So that I know what I need to do

  Background:
    Given data is set up

  Scenario: View todo list
    When I go to the index page
    Then I should see my todo list
