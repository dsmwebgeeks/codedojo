Feature: Sign in via home page

  Scenario: Sign in
    Given I am on the homepage
    When I fill in "Email" with "test"
    And I fill in "Password" with "test"
    And I press "Submit"
    Then I should be on "To Do Page"