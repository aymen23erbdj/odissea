@filter @filter_wiris
Feature: Check MathType integration as a third party lib
In order to check if MathType integration is a third party library
As an admin
I need to Check if MathType integration appears on third party libraries page

  Background:
    Given I log in as "admin"

  @javascript
  Scenario: Check third party libraries
    And I navigate to "Development" in site administration
    And I follow "Third party libraries"
    Then "MathType integration engine" "text" should exist
    And "GPL 3.0+" "text" should exist
    And "integration" "text" should exist